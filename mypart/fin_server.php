<?php
session_start();

$servername = "localhost";
$username = "aagbe1";
$password = "aagbe1";
$dbname = "aagbe1";

//database connection
&db = new mysqli($servername,$username,$password,$dbname);

//check connection
if ($db->connect_error) {
     die("Connection failed: " . $db->connect_error);
} 

//register user
$usern = mysqli_real_escape_string($db, $_POST["Username"]);
$pass = mysqli_real_escape_string($db, $_POST["Password"]);

//form validate
if(empty($usern)){
	array_push($errors, "username is required")
};
if(empty($pass)){
	array_push($errors, "password is required")
};

//check database for existing
$user_check_query = "SELECT * FROM users WHERE Username = '$usern' LIMIT 1 ";
$results = mysqli_query($db,$user_check_query);
$results = $db->query($user_check_query);
$user= mysqli_fetch_assoc($results);

if($user){
	if ($user['Username']=== $usern) {
		array_push($errors, "username already exist");
	}
}

//register user if OK
if(count($errors) == 0 ){
	$query = "INSERT INTO users (username,password) VALUES ('$usern','$pass')";
	mysqli_query($db,$query);
	$_SESSION['Username'] = $usern;
	$_SESSION['success'] = "You are now logged in";

	header('location: fin_index.php');
}

$db->close();
?>
