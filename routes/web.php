<?php

use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PusherController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\UserController;
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


Route::get('/', function () {return view('welcome');});
Route::get('/login', function () {return view('login');});
Route::get('/register', function () {return view('register');});


Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

Route::post('/webhook', [PusherController::class, 'webhook']);

Route::middleware('auth')->group(function() {
    Route::get('profile', [UserController::class, 'getProfile']);
    Route::get('logout', [UserController::class, 'logout']);

    Route::get('email', [\App\Http\Controllers\Controller::class, 'getMail']);
    Route::post('email', [\App\Http\Controllers\Controller::class, 'sendMail']);

    Route::prefix('users')->group(function () {
        Route::get('/{userid}',[UserController::class, 'publicProfile']);
    });
});

Route::prefix('/rooms')->group(function () {
    Route::get('/', function () {return view('rooms');});
    Route::middleware('auth')->group(function () {
        Route::get('/{id}', [RoomsController::class, 'show_room']);
        Route::post('/{id}', [AjaxController::class, 'sendMsg']);
    });


});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google',[\App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback',[\App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

Route::get('auth/facebook',[\App\Http\Controllers\Auth\FacebookController::class, 'redirectToFacebook']);
Route::get('auth/facebook/callback',[\App\Http\Controllers\Auth\FacebookController::class, 'handleFacebookCallback']);
