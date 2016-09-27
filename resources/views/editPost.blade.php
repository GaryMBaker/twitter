<form action="/editPost/{{$post->id}}" method="POST">

	{{ csrf_field() }}
	

	<label for="title">Your Title:</label>
	<input type="text" name="title" class="form-control" value="{{$post->title}}">
	<br />
	<label for="content">Content:</label>
	<input type="text" name="content" class="form-control" value="{{$post->content}}">
	<input type="submit" value="Make Post!" class="btn btn-primary">

</form>