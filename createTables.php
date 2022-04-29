<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>Create Table</title>
</head>

<body>

<?php
	$servername = "localhost";
	$username = "anguyen123";
	//username = password = dbname
	$password = "anguyen123";
	$dbname = "anguyen123";

	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
	}

	$sql =	"CREATE TABLE users  (id INT(6) unsigned auto_increment primary key, username VARCHAR(30) not null, password varchar(30) not null)";
	if ($conn->query($sql) === TRUE) {
	} else {
	//table already exists
		echo "Error creating table: " . $conn->error;
	}

?>

</body>

</html>