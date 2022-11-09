<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<h1>
		Login
	</h1>

	<form method="post" action="{{ url('login') }}">

		@csrf
		<label>
			Email
		</label>
		<input type="email" name="email">
        <br>
		<br>
		<label>
			Password
		</label>
		<input type="password" name="password">
		<br>
		<br>
		<button>
			ACCEDER
		</button>
	</form>

</body>
</html>
