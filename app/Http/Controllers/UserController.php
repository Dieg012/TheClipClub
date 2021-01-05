<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request){
        Validator::make($request, [
            'name' => ['required', 'string', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:25', 'unique:users'],
            'phone' => ['required', 'integer', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:9', 'unique:users'],
            'role1' => ['string'],
            'role2' => ['string'],
            'role3' => ['string'],
            'role4' => ['string'],
            'img' => ['image'],
            'bio' => ['string', 'max:255'],
            'password' => ['string', 'max:255'],
            'password' => Password::passwordRules()
        ])->validate();

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'role1' => $request['role1'],
            'role2' => $request['role2'],
            'role3' => $request['role3'],
            'role4' => $request['role4'],
            'img' => $request['img'],
            'bio' => $request['bio'],
            'password' => Hash::make($request['password'])
        ]);
        return view('dashboard');
    }
}
