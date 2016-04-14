<html>
	<head>
	<link rel="stylesheet" href="css/general.css">
	<link rel="stylesheet" href="css/input.css">
	<link rel="stylesheet" href="css/label.css">
	<link rel="stylesheet" href="css/header.css">
	<title> Login </title>
	</head>
	<body>

		<div id = "container">
			<div id = "login">
				<div class = "signin">
				<div class = "header-bold"> Login: </div>
				<form>
					<label for = "username" class = "label-italic">Username: </label>
					<input type = "text" name = "uname" id = "username" class = "input-small" required><p>
					<label for = "password" class = "label-italic">Password: </label>
					<input type = "password" name = "pword" id = "password" class = "input-small" required><p>
					<a href = "#" class = "fp"> Forgot Password? </a>
					<p>
					<input type = "submit" name = "login" value = "Login" class = "input-button">
				</form>
				</div>
				<div class = "register">
				<div class = "header-bold"> Register: </div>
				<form>
					<label for = "username2" class = "label-italic">Username: </label>
					<input type = "text" name = "uname" id = "username2" class = "input-small" required><p>
					<label for = "password2" class = "label-italic">Password: </label>
					<input type = "password" name = "pword" id = "password2" class = "input-small" required><p>
					<label for = "email" class = "label-italic">Email: </label>
					<input type = "email" name = "email" id = "email" class = "input-small" required><p>
					<input type = "submit" name = "register" value = "Register" class = "input-button">
				</form>
				</div>
			</div>
		</div>

	</body>
</html>