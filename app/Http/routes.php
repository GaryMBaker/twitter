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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function() {
	$users = DB::table('users')->get();
	return view('register', ['users' => $users]);
});

Route::post('/register', function(Request $request) {
	// $newUser = DB::table('users')->insert([
	// 	'name' => $_POST['username'],
	// 	'password' => bcrypt($_POST['password']),
	// 	'email' => $_POST['email']
	// ]);

	$user = new App\User();

	$user->fill($request->all());

	$user->password = bcrypt($request->password);

	$user->save();

	return redirect('/login');

});

Route::get('/login', function() {
	return view('login');
});

Route::post('/login', "AuthController@handleLogin");

