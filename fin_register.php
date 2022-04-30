<!DOCTYPE html>
<html lang="en">

<head>
    <title>SaleEstate Register</title>
    <link href="fin_style.css" rel="stylesheet">
</head>

<body>
    <form action="fin_index.php" method="post">
        <table width="400" height="350" border="0" align="center" cellpadding="20" cellspacing="1" class="Table">
            <tr>
                <td colspan="2" align="left">
					<img src="fin_logo.png" width="400" height="180">
					<h2>Register</h2>
                </td>
            </tr>
            <tr>
                <td><input name="Username" type="text" class="Input" placeholder="Username" size="30"></td>
            </tr>
            <tr>
                
                <td><input name="Password" type="password" class="Input" placeholder="Password" size="30"></td>
            </tr>
            <tr>
             
                <td><input name="Submit" type="submit" value="Sign Up" class="Button3"></td>
            </tr>
            <tr>
              
                <td>Already have an account? <a href="fin_login.php">Login here!</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
