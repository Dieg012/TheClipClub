<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;


use Illuminate\Support\Facades\Auth;

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

Route::view('/chat', 'chat')->middleware(['auth:sanctum']);


Route::middleware(['auth:sanctum'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
//PROJECTS
Route::get('allProjects', [ProjectController::class, 'allProjects'])->name('allProjects');
Route::get('myProjects',[UserController::class, 'myProjects'])->name('myProjects');
Route::view('create', 'createProject')->name('create');
Route::post('createProject/{userId}', [ProjectController::class, 'createProject'])->name('createProject');
Route::delete('deleteProject/{projectId}', [ProjectController::class, 'deleteProject'])->name('delete_project');
Route::delete('deleteUser/{userId}', [UserController::class, 'deleteUser'])->name('delete_user');

Route::get('random', [UserController::class, 'getRandomProjects'])->name('random');

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
Route::get('/profile', 'App\Http\Controllers\UserController@createProfile')->name('profile');
Route::get('/followers', 'App\Http\Controllers\UserController@createFollowers')->name('followers');
Route::get('/followeds', 'App\Http\Controllers\UserController@createFolloweds')->name('followeds');
Route::post('/follow/{id}', 'App\Http\Controllers\UserController@followUser');
Route::post('/unfollow/{id}', 'App\Http\Controllers\UserController@unfollowUser');
Route::post('/registerTest', 'App\Http\Controllers\UserController@createUser')->name('registerTest');

Route::post('/storageTest', 'App\Http\Controllers\UserController@save')->name('storageTest');
