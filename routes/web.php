<?php

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

Route::resource('post','PostController');
Route::resource('author','AuthorController');
Route::resource('comment','CommentController');
// Route::resource('editPost/{id}', 'PostController@edit{id}');
//action('UserController@show', [$id]);