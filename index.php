<?php 
session_start();

if(isset($_SESSION['username'])){
	$_SESSION['msg'] = "You must log in first to view this page";
	header("location : login.php");	

}
if (isset($_GET['logout'])){

	session_destroy();
	unset($_SESSION['username']);
	header("location : login.php");

}

?>

<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>HomePage</title>
</head>
<body>
		<h1>HOMEPAGE</h1>

</body>
</html>