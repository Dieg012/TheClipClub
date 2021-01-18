<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use App\Http\Controllers\ProjectController;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        return back();
    }
}
