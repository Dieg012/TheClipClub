<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TagController;
use App\Models\Project;
use App\Models\Tag;
use App\Http\Requests\ProjectValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Collection;

class ProjectController extends Controller
{
    public function createProject(ProjectValidation $request, $userId){
        $user = User::find($userId);
        $user->projects()->create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'category' => $request->get('category'),
            'director' => $request->get('director'),
            'actor' => $request->get('actor'),
            'technitian' => $request->get('technitian'),
            'producer' => $request->get('producer'),
            'screenwriter' => $request->get('screenwriter'),
            'img' => $request->get('img'),
        ]);
        $this->saveTags($request, $user);
        return redirect('myProjects');
    }

    public function deleteProject($id){
        $projectTags = Project::find($id)->tags;
        Project::find($id)->tags()->detach();
        $this->deleteTags($projectTags);
        Project::find($id)->delete();
        return back();
    }

    public function allProjects(){
        $allProjects = Project::all();
        return view('myProjects', ['projects' => $allProjects]);
    }
    /*
    *********************
    * AUXILIARY METHODS *
    *********************
    */
    public function deleteTags($projectTags){
        foreach($projectTags as $tag){
            $tag->delete();
        }
    }
    public function saveTags($request, $user){
        $tags = $this->separateTags($request);
        $this->createTag($tags);
        $projectList = $user->projects()->get();
        $lastProject = $projectList->reverse()->first();
        for($i=0;$i < count($tags);$i++){
            $lastProject->tags()->attach($tags[$i]);
        }
    }

    public function createTag($tags){
        for($i=0;$i< count($tags);$i++){
            Tag::create([
                'tag' => $tags[$i],
            ]);
        }
    }

    public function separateTags($array){
        //Clear string from white spaces
        $tags = $array->tags = preg_replace('/\s+/', '', $array->tags);
        //Divide #tags
        $tags = explode('#', $tags);
        array_shift($tags);
        return $tags;
    }
}
