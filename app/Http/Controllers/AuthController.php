<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class AuthController extends Controller
{
    public function handleLogin (Request $request) {
    	// $users = DB::table('users')->where('name', $_POST['username'] && 'password', $_POST['password']);


    	// if($users) {

    	// 	foreach($users as $user) {
    	// 		{{ $user->name }}
    	// 		{{ $user->password }}
    	// 	}


    	// 	echo "You have sucessfully logged in!<br />";
    	// 	echo $_POST['username'] . "<br />";
    	// 	echo $_POST['password'];

    	// }

    	if(Auth::attempt($request->only('name', 'password'))) {
    		// user logged in
    		echo "logged in";
    	} else {

    		echo "not logged in";
    		// user failed to log in
    	}

    }
}

