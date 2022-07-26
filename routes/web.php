<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\PostsController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/post',PostsController::class)->middleware('auth');
Route::resource('/comment',CommentsController::class)->middleware('auth');
Route::get('/comment/{id}/add',function($id){
    return view('addcomment',compact('id'));
})->middleware('auth');



// Route::get('/auth/facebook', [FacebookSocialiteController::class, 'redirectToFB']);
// Route::get('/callback/facebook', [FacebookSocialiteController::class, 'handleCallback']);
