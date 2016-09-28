@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">News Feed</div>

                <div class="panel-body">
					@include('feed')
                    

                    
                    <h3>Here are your posts!</h3>
                    <ul>
                    {{-- @foreach ($posts as $post) --}}
                        <li>
                            <h3>{{ $posts->title }}</h3>
                            <p>{{ $posts->content }}</p>
                            <p>Posted by: {{ $posts->user_id }}</p>
                            <a href="/edit/{{ $posts->id }}" class="btn btn-warning">Edit</a>
                            <a href="/delete/{{ $posts->id }}" class="btn btn-danger">Delete</a>
                        </li>
                    {{-- @endforeach --}}
					</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
