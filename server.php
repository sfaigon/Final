<?php

session_start();
//initilize var
	$servername = "localhost";
	$username = "anguyen123";
	//username = password = dbname
	$password = "anguyen123";
	$dbname = "anguyen123";

	$errors = array();
// connect to db

$db = new mysqli($servername, $username, $password, $dbname); or die("could not connect to db");

// register user

$usern = mysqli_real_escape_string($db, $_POST["username"]);
$pass = mysqli_real_escape_string($db, $_POST["password"]);

// form validation

if(empty($usern)){array_push($errors, "username is required")};
if(empty($pass)){array_push($errors, "password is required")};

// check db for existing

$user_check_query = "SELECT * FROM users WHERE username = '$usern' LIMIT 1 ";

$results = mysqli_query($db, $user_check_query);
$user= mysqli_fetch_assoc($results);

if($user){
	if ($user['username']=== $usern) {
		array_push($errors, "username already exist");
	}
}

//register the user if okay

if(count($errors) == 0 ){
	$query = "INSERT INTO users (username,password) VALUES ('$usern','$pass')";
	mysqli_query($db,$query);
	$_SESSION['username'] = $usern;
	$_SESSION['success'] = "You are now logged in";

	header('location: index.php');
}
$db->close();
?>
