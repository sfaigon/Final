<?php include('server.php') ?>
<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
<div>  
	<!-- This div will be for centering-->
	<div> <!-- this will be for the header-->
		<h2> Login</h2>
	</div>

	<form action="login.php" method="POST">
		<p> Username : <input type="text" name="username" required></p>
		<p> Password : <input type="text" name="password" required></p>
		<input type="submit" id="login" value="Register">
	</form>
	
</div>
</body>



</html>