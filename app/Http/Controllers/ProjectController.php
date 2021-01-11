<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function createProject(Request $request){
        Project::create([
            'name' => $request->get('name'),
            'description' => $request->get('description')
        ]);
        $projectList = Project::all();
        return redirect('myProjects');
    }

    public function deleteProject($id){
        Project::find($id)->delete();
        return redirect('myProjects');
    }

    public function myProjects(){
        $projectList = Project::all();
        return view('myProjects', ['projects' => $projectList]);
    }
}
