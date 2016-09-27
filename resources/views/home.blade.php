@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">News Feed</div>

                <div class="panel-body">
					@include('feed')
                    
                    <ul>
                    @foreach ($users as $user)
                        <li><a href="/users/{{ $user->id }}">{{ $user->name }}</a></li>
                    @endforeach
                    </ul>
                    <ul>
                    @foreach ($posts as $post)
                        <li>
                            <h3>{{ $post->title }}</h3>
                            <p>{{ $post->content }}</p>
                            <p>Posted by: {{ $post->user_id }}</p>
                            <a href="/edit/{{ $post->id }}" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{ $post->id }}" class="btn btn-danger">Delete</a>
                        </li>
                    @endforeach
					</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
