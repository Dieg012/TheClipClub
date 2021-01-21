<?php

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


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
Route::post('/restoreAccount', 'App\Http\Controllers\UserController@restoreAccount')->name('restoreAccount');
Route::get('/registerAccountNotFound', 'App\Http\Controllers\UserController@createRegister')->name('restoreAccount');
