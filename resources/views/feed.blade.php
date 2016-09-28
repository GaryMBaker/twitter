{{-- {{ $users }} --}}


{{-- @foreach($users as $user):
    <p>welcome user this has been run 10 amount of times</p>

    {{ $user }}


@endforeach
 --}}



<form action="/createPost" method="POST">

	{{ csrf_field() }}
	<label for="title">Your Title:</label>
	<input type="text" name="title" class="form-control">
	<br />
	<label for="content">Content:</label>
	<input type="text" name="content" class="form-control">
	<br />
	<input type="submit" value="Make Post!" class="btn btn-primary">

</form>