<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $posts = Post::all();
        return view('home', ['users' => $users, 'posts' => $posts]);
    }



    public function newPost(Request $request) 
    {
        $post = new Post();

        $post->fill($request->all());

        $post->user_id = Auth::user()->id;

        $post->save();

        return redirect('/');
    }

    // public function viewPosts() {

    //     $posts = Post::all();
    //     return view('home', ['posts' => $posts]);
    // }

    public function edit($id) {
        $post = Post::find($id);

        return view('editPost', ['post' => $post]);
    }

    public function editPost(Request $request, $id) 
    {
        $post = Post::find($id);

        $post->fill($request->all());

        $post->save();

        return redirect('/');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);

        $post->delete();

        return redirect('/');
    }
}
