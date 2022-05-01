<?php
session_start();

$servername = "localhost";
$username = "aagbe1";
$password = "aagbe1";
$dbname = "aagbe1";

//database connection
$db = new mysqli($servername,$username,$password,$dbname);

//check connection
if ($db->connect_error) {
     die("Connection failed: " . $db->connect_error);
} 

//create buyer/seller ids
$sql = "CREATE TABLE buyer_ids (b_id INT(6) unsigned auto_increment primary key, 
                                b_username VARCHAR(30) not null, 
							    b_password VARCHAR(30) not null)";
								
$sql = "CREATE TABLE seller_ids (s_id INT(6) unsigned auto_increment primary key, 
                                 s_username VARCHAR(30) not null, 
							     s_password VARCHAR(30) not null)";							
					
$db->close();
?>
