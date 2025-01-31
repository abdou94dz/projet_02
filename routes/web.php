<?php

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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('categories','\App\Http\Controllers\CategoryController');
Route::get('/posts/trashed','\App\Http\Controllers\PostController@trashedPosts')->name('posts.trashed');
Route::get('/posts-restore/{post}','\App\Http\Controllers\PostController@restore')->name('posts.restore');
Route::resource('posts','\App\Http\Controllers\PostController');
