<?php

namespace App\Http\Controllers;
use App\Http\Controllers\TagController;
use App\Models\Project;
use App\Models\Tag;
use App\Http\Requests\ProjectValidation;
use App\Models\User;
use Illuminate\Http\Request;
use Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use PhpParser\ErrorHandler\Collecting;

class ProjectController extends Controller
{
    public function createProjectView(){
        return view('createProject');
    }

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
            'coordinates' => $request->get('coordinates'),
        ]);
        $this->saveTags($request, $user);
        return redirect('/profile');
    }

    public function deleteProject($id){
        //$projectTags = Project::find($id)->tags;
        //Project::find($id)->tags()->detach();
        //DELTE TAGS ONLY IF THERE IS NO OTHER PROJECT WITH IT
        //$this->deleteTags($projectTags);
        Project::find($id)->delete();
        return back();
    }

    public function apiDeleteProject($id){
        //$projectTags = Project::find($id)->tags;
        //Project::find($id)->tags()->detach();
        //DELTE TAGS ONLY IF THERE IS NO OTHER PROJECT WITH IT
        //$this->deleteTags($projectTags);*/
        Project::find($id)->delete();
    }

    public function myProjects($id){
        $projects = Project::with('tags','user')->get();
        foreach($projects as $project) {
            if($project->user->id != $id) {
                $projects->forget($project->id);
            }
        }
        return new JsonResponse($projects,201);
    }

    public function allProjects(){
        $allProjects = Project::all();
        return view('myProjects', ['projects' => $allProjects]);
    }

    public function categories() {
        $categories = [
            $category = trans('messages.category'),
            $tags = trans('messages.tag'),
            $artists = trans('messages.needArtists'),
            $dire = trans('messages.directors'),
            $actor = trans('messages.actor'),
            $tech = trans('messages.technitians'),
            $prod = trans('messages.producers'),
            $writ = trans('messages.writers'),
            $description = trans('messages.description'),
        ];
        return response()->json($categories, 201);
    }

    /*
    *********************
    * AUXILIARY METHODS *
    *********************
    */
    /* public function deleteTags($projectTags){
        foreach($projectTags as $tag){
            $tag->delete();
        }
    } */
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
    /* public function tagExists($tags){
        //GET EXISTING TAGS
        $existingTags = Array();
        foreach ($tags as $tag){
            $t = Tag::where('tag', $tag)->get();
            array_push($existingTags, $t);
        }
        //CHECK IF THE NEW TAG ALREADY EXISTS
        foreach ($tags as $tag){
            if(in_array($tag, $existingTags)){
                return true;
            }
        }
        return false;
    } */

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
