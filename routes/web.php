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

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}', 'TasksController@show');

Route::get('about', function() {
    return view('about');
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/post/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');

Route::post('/post/{post}/comment', 'CommentsController@store');
