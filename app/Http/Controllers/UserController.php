<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use App\Models;
use Illuminate\Auth\Middleware\Authorize;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\VerifyEmailViewResponse;

class UserController extends Controller

{
    public function myProjects(){
        $user = Auth::user();
        $projectList = $user->projects;
        return view('myProjects')->with('projects', $projectList);
    }

    public function deleteUser($userId){
        $user = User::find($userId);
        $user->projects()->delete();
        $user->forceDelete();
    }
    protected $guard;
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

        return view('profile')->with(compact('user', 'followers', 'followeds'));
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

    public function restoreAccount(Request $request) {
        $user = \App\Models\User::withTrashed()->where('email', $request->email)->first();
        $dbEmail = $user->email;
        if($dbEmail = $request->email) {
            $user->sendEmailVerificationNotification();
            $user->email_verified_at = null;
            $user->restore();

            return $user->hasVerifiedEmail()
                ? redirect()->intended(config('fortify.home'))
                : app(VerifyEmailViewResponse::class);
        }
    }
}
