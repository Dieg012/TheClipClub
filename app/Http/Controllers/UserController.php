<?php

namespace App\Http\Controllers;
use App\Models;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function CreateUser(Request $request){
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => $request->get('password'),
            'role1' => $request->get('role1'), 
            'role2' => $request->get('role2'), 
            'role3' => $request->get('role3'), 
            'role4' => $request->get('role4')
        ]);
    }
}
