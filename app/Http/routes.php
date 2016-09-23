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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function() {
	$users = DB::table('users')->get();
	return view('register', ['users' => $users]);
});

Route::post('/register', function() {
	$newUser = DB::table('users')->insert([
		'name' => $_POST['username'],
		'password' => $_POST['password'],
		'email' => $_POST['email']
	]);

	return redirect('/login');

});

Route::get('/login', function() {
	return view('login');
});

Route::post('/login', function() {
	


	$users = DB::table('users')->where('name', $_POST['username'] && 'password', $_POST['password']);


	if($users) {

		foreach($users as $user) {
			{{ $user->name }}
			{{ $user->password }}
		}


		echo "You have sucessfully logged in!<br />";
		echo $_POST['username'] . "<br />";
		echo $_POST['password'];

	}

});

