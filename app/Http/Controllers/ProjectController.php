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
            'coordinates' => $request->get('coordinates'),
        ]);
        $this->saveTags($request, $user);
        return redirect('myProjects');
    }

    public function deleteProject($id){
        $projectTags = Project::find($id)->tags;
        Project::find($id)->tags()->detach();
        //DELTE TAGS ONLY IF THERE IS NO OTHER PROJECT WITH IT
        //$this->deleteTags($projectTags);
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

    public function divideCoordinates($coordinates){
        //Clear string from white spaces
        $coordinates = $coordinates = preg_replace('/\s+/', '', $coordinates);
        //Divide #tags
        $coordinates = explode(',', $tags);
        //array_shift($tags);
        dd($coordinates);
        return $coordinates;
    }

    public function saveTags($request, $user){
        $tags = $this->separateTags($request);
        //CHECK IF TAGS ALREADY EXISTS IF NOT CREATE THEM
        $nonExistingTags = $this->tagExists($tags);
        if(!empty($nonExistingTags)){
            $this->createTag($nonExistingTags);
        }
        //Get las created last project -> attach tag to the project
        $projectList = $user->projects()->get();
        $lastProject = $projectList->reverse()->first();
        for($i=0;$i < count($tags);$i++){
            $lastProject->tags()->attach($tags[$i]);
        }
    }

    public function tagExists($tags){
        $existingTags = Array();
        $nonExistingTags = Array();
        if(!empty(Tag::all())){
            $allTags = Tag::all();
            foreach ($allTags as $existingTag){
                array_push($existingTags, $existingTag->tag);
            }
            foreach ($tags as $tag){
                if(!in_array($tag, $existingTags)){
                    array_push($nonExistingTags, $tag);
                }
            }
        }
        return $nonExistingTags;
    }

    public function createTag($tags){
        foreach($tags as $tag){
            Tag::create([
                'tag' => $tag,
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
