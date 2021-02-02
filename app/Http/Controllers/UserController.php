<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\User;
use App\Models\Project;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;

class UserController extends Controller {

    public function myProjects(){
        $user = Auth::user();
        $projectList = $user->projects;
        return view('myProjects')->with('projects', $projectList);
    }
    //Falta redirigir a una view y pasar la info
    public function getRandomProjects(){
        $randProjects = Array();
        $randosmIndexes = Array();
        $projects = Project::latest();
        dd($projects);
        for($i=0;$i<2;$i++){
            $a = rand(0, count($projects)-1);
            if(!in_array($a, $randosmIndexes)){
                array_push($randProjects, $projects[$a]);
                array_push($randosmIndexes, $a);
            }
        }
        return $randProjects;
        //return view('blabla', [$randProjects, 'randProjects']);
    }

    public function deleteUser($userId){
        $user = User::find($userId);
        $user->projects()->delete();
        $user->delete();
        return back();
    }
    //protected $guard;
    /*public function createUser(Request $request) {

        event(new Registered($user = $creator->create($request->all())));

        $this->guard->login($user);

        return app(RegisterResponse::class);
        //return view('dashboard');
    }*/

    public function createProfile() {
        $user = Auth::user();
        $followers = $user->followers;
        $followeds = $user->followeds;
        $projects = \App\Models\Project::where('user_id', $user->id)->get();

        return view('profile')->with(compact('user', 'followers', 'followeds', 'projects'));
    }

    public function createFollowers() {
        $user = Auth::user();
        $followers = $user->followers;
        $followeds = $user->followeds;
        return view('followers')->with(compact('user', 'followers', 'followeds'));
    }

    public function createFolloweds() {
        $user = Auth::user();
        $followers = $user->followers;
        $followeds = $user->followeds;
        return view('followeds')->with(compact('user', 'followers', 'followeds'));
    }

    public function followUser($id) {
        $user = \App\Models\User::findOrFail($id);
        $user->followers()->attach(Auth::user()->id);
        return back();
    }

    public function unfollowUser($id) {
        $user = \App\Models\User::findOrFail($id);
        $user->followers()->detach(Auth::user()->id);
        return back();
    }

    public function createRegister($message) {
        return view('auth.register')->with(compact('message'));
    }

    public function restoreAccount(Request $request) {
        $user = \App\Models\User::onlyTrashed()->where('email', $request->email)->first();
        if($user !== null) {
            $user->email_verified_at = null;
            $user->restore();
            $user->sendEmailVerificationNotification();
            return redirect('/login');
        }
        return view('restoreAccount');
    }

    public function showUsers($name = null) {
        if($name != null) {
            $users = User::where('name', 'LIKE', '%'.$name.'%')->get();
            return view('users')->with(compact('users'));
        } else {
            $users = User::all();
            return view('users')->with(compact('users'));
        }
    }

    public function showManageUsers($name = null) {
        if($name != null) {
            $users = User::withTrashed()->where('name', 'LIKE', '%'.$name.'%')->get();
            return view('userManagement')->with(compact('users'));
        } else {
            $users = User::withTrashed()->get();
            return view('userManagement')->with(compact('users'));
        }
    }

    public function restoreUser($userId) {
        $user = User::withTrashed()->find($userId);
        $user->restore();
        return redirect('/manageUsers');
    }
}
