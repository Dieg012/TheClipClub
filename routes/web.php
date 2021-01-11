<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/chat', 'chat')->middleware(['auth:sanctum', 'verified']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//PROJECTS
Route::get('myProjects',[ProjectController::class, 'myProjects']);
//Create
Route::view('create', 'createProject');
Route::post('createProject', [ProjectController::class, 'createProject']);

Route::delete('delete/{id}', [ProjectController::class, 'deleteProject'])->name('delete_project');


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
            return view('welcome');
        });
     Route::get('lang/{lang}', function ($lang) {
            session(['lang' => $lang]);
            return \Redirect::back();
        })->where([
            'lang' => 'en|es'
        ]);
    
    });