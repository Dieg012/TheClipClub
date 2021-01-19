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
        $user->forceDelete();        
        return back();
    }
}
