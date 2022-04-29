<?php include('server.php') ?>
<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Registration</title>
</head>
<body>

<div>  
	<!-- This div will be for centering-->
	<div> <!-- this will be for the header-->
		<h2> Register</h2>
	</div>

	<form action="registration.php" method="POST">
		<?php include('errors.php') ?>
		<p> Username : <input type="text" name="username" required></p>
		<p> Password : <input type="text" name="password" required></p>
		<input type="submit" id="registeruser" value="Register">
	</form>
	<p> Already a User?   <a href="login.php">Login </a></p>
</div>


</body>
</html>