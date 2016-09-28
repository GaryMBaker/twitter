@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">News Feed</div>

                <div class="panel-body">
                    @include('feed')

                    <hr />

                    <h3>Here is my list of registered users</h3>
                    <ul>
                    @foreach ($users as $user)
                        <li>Follow <a href="/follow/{{ $user->id }}">{{ $user->name }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
