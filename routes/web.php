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
Route::get('/', 'BlogsController@index');
Route::get('/index', 'CommentsController@index');
Route::resource('blogs', 'BlogsController');
Route::resource('comments', 'CommentsController');
Route::post('blogs/{blog}', 'CommentsController@store');
Route::post('blogs/{blog}/show', 'CommentsController@show');
Route::get('blogs/{blog}/comments', 'CommentsController@show');
//Route::get('comments', 'CommentsController@showAllComments');