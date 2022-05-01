<!doctype html>

<html>

<head lang="en">
	<meta charset="UTF-8">
	<title>View Homes</title>
	<link rel="stylesheet" href="fin_style3.css">
</head>
<body>
    <div class="center">
      <img src="fin_logo.png" class="center" >  
    </div>
    <div class="center">
    	<?php 
    	$servername = "localhost";
			$username = "anguyen123";
			//username = password = dbname
			$password = "anguyen123";
			$dbname = "anguyen123";

			$conn = new mysqli($servername, $username, $password, $dbname);

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$id= htmlspecialchars($_REQUEST['id']);
			}

			$sql = mysqli_query($conn,"DELETE FROM houses WHERE id = $id");
			if ($conn->query($sql) === TRUE) {
			    echo "<h1> House Listing has been deleted</h1>";
			} else {
			    echo "<h1> Error: House Listing not deleted</h1>";
			  }
    	?>
    	<h3><a href="fin_sellerhome.php">Back to Homepage</h3>
    </div>

  </body>
  </html>