<?php
session_start();

$servername = "localhost";
$username = "aagbe1";
$password = "aagbe1";
$dbname = "aagbe1";

//connect to existing database
$db=mysqli_connect($servername,$username,$password,$dbname);

//define user-inputted username/password
$id=$_POST['b_id'];
$Username=$_POST['Username'];
$Password=$_POST['Password'];

//retrieves user/pass
$sql = "INSERT INTO buyer_ids (id,Username,Password) VALUES ('$b_id','$Username','$Password')";

$db->close();
?>
