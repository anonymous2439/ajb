
@extends('layouts.app')
@section('head')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="shortcut icon" href="images/cb.jpg" />
	<title>Login</title>
@endsection
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<h2 style="margin-bottom: 30px;">AJB Administrator</h2>
				<form action="/checklogin" method="POST" id="Login">
					@csrf
					<div>
						<label for="username">Username</label>
						<input class="form-control" type="text" id="username" name="username" required>
					</div>
					<div style="margin-top: 15px;">
						<label for="password">Password</label>
						<input class="form-control" type="password" id="password" name="password" required>
					</div>
					<center><input style="margin-top: 15px;" class="btn btn-primary" type="submit" value="Login" /></center>
				</form>
			</div>
		</div>
	</div>

@endsection