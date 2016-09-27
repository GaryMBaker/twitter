<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::post('/createPost', 'HomeController@newPost');

Route::get('/viewPosts', 'HomeController@viewPosts');

Route::get('/edit/{id}', 'HomeController@edit');

Route::post('editPost/{id}', 'HomeController@editPost');
Route::get('delete/{id}', 'HomeController@deletePost');
