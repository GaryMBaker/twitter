<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>
	<div class="form-container">
		<h1>Register To Twitter:</h1>
		<form action="/register" method="POST">

			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="text" name="username" class="form-control" placeholder="Username">
			<input type="password" name="password" class="form-control" placeholder="Password">
			<input type="email" name="email" class="form-control" placeholder="Email">
			<input type="submit" value="Register" class="btn btn-primary">
		</form>
	</div>


	@foreach($users as $user)
		{{ $user->name }}
	@endforeach


	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>