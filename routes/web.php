<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\UserController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/profile');
})->name('dashboard');


Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
            return view('welcome');
        });
     Route::get('lang/{lang}', function ($lang) {
            session(['lang' => $lang]);
            App::setLocale($lang);
            return \Redirect::back();
        })->where([
            'lang' => 'en|es'
        ]);
    });
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', 'App\Http\Controllers\UserController@createProfile')->name('profile');
Route::middleware(['auth:sanctum', 'verified'])->get('/followers', 'App\Http\Controllers\UserController@createFollowers')->name('followers');
Route::middleware(['auth:sanctum', 'verified'])->get('/followeds', 'App\Http\Controllers\UserController@createFolloweds')->name('followeds');
Route::middleware(['auth:sanctum', 'verified'])->post('/follow/{id}', 'App\Http\Controllers\UserController@followUser');
Route::middleware(['auth:sanctum', 'verified'])->post('/unfollow/{id}', 'App\Http\Controllers\UserController@unfollowUser');
Route::post('/restoreAccount', 'App\Http\Controllers\UserController@restoreAccount')->name('restoreAccount');
Route::get('/registerAccountNotFound', 'App\Http\Controllers\UserController@createRegister')->name('restoreAccount');
Route::post('/register', 'App\Http\Controllers\RegisterController@store')->name('register');
Route::middleware(['auth:sanctum', 'verified'])->get('/allProjects','App\Http\Controllers\ProjectController@allProjects')->name('showAllProjects');
Route::middleware(['auth:sanctum', 'verified'])->get('/createProject','App\Http\Controllers\ProjectController@createProjectView')->name('showCreateProject');
Route::middleware(['auth:sanctum', 'verified'])->post('/createProject/{userId}', 'App\Http\Controllers\ProjectController@createProject')->name('createProject');
Route::middleware(['auth:sanctum', 'verified'])->delete('deleteProject/{projectId}', [ProjectController::class, 'deleteProject'])->name('delete_project');
Route::middleware(['auth:sanctum', 'verified'])->delete('deleteUser/{userId}', [UserController::class, 'deleteUser'])->name('delete_user');
Route::middleware(['auth:sanctum', 'verified'])->post('/restoreUser/{userId}', [UserController::class, 'restoreUser'])->name('delete_user');
Route::middleware(['auth:sanctum', 'verified'])->get('/users/{name?}', 'App\Http\Controllers\UserController@showUsers')->name('exploreUsers');
Route::middleware(['auth:sanctum', 'verified'])->get('/manageUsers/{name?}', 'App\Http\Controllers\UserController@showManageUsers')->name('manageUsers');

Route::get('/makeAdmin', function () {
    DB::table('users')->where('email', 'theclipclubcompany@gmail.com')->update(['isAdmin' => true]);
});
