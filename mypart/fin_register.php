<?php session_start();
include("fin_server.php");

$username = isset($_POST['Username']) ? $_POST['Username'] : '';
$password = isset($_POST['Password']) ? $_POST['Password'] : '';

function findUser($username)
{
    $result = null;
    foreach ($users as $user)
    {
        if ($user->username === $username)
        {
            $result = $user;
        }
    }
    return $result;
}

$user = findUser($username);

// if user does not exist and we have a valid username and password signs up
if (!$user && $username && $password)
{
    $user = new User($username, $password);
function addUser($user)
{
    if (findUser($user->username) == null)
    {
        array_push($users, $user);    
    }
}
    addUser($user);
    $_SESSION['Username'] = $user->username;
    header("location:fin_index.php");
    exit;
}
else if (isset($_POST['Username']) && isset($_POST['Password']))
{
    $msg="<span>Error Creating User</span>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SaleEstate Register</title>
    <link href="fin_style.css" rel="stylesheet">
</head>

<body>
    <form action="fin_buyerhome.php" method="post">
        <table width="400" height="350" border="0" align="center" cellpadding="20" cellspacing="1" class="Table">
            <tr>
                <td colspan="2" align="left">
					<img src="fin_logo.png" width="400" height="180">
			                <h2>Register</h2>
                </td>
            </tr>
            <tr>
                <td><input name="Username" type="text" placeholder="Username" size="30"></td>
            </tr>
            <tr>
                
                <td><input name="Password" type="password" placeholder="Password" size="30"></td>
            </tr>
            <tr>
             
                <td><input name="Submit" type="submit" value="Sign Up"></td>
            </tr>
            <tr>
              
                <td>Already have an account? <a href="fin_login.php">Login here!</a></td>
            </tr>
        </table>
    </form>
</body>

</html>
