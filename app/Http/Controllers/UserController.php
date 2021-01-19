<?php

namespace App\Http\Controllers;
use App\Models;
use App\Models\User;
use Illuminate\Auth\Middleware\Authorize;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\Contracts\RegisterResponse;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class UserController extends Controller
{
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
}
