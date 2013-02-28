<?php
include "dbconnect.php";
session_start();

if (isset ($_SESSION['loggedin']))
{
	session_destroy();
	die ('Logged out.<br /><a href="rateMyLineDBindex.php">Click here to go to the home page</a>');
}

if (isset ($_POST))
{
	if (@$_POST['login'] == 'login')
	{
		$name = $_POST['username'];
		
		// password in db is stored as sha1 hash
		$password = sha1 ($_POST['password']);

		$query = "SELECT * FROM users WHERE username = '$name'";
		$result = mysqli_query($db, $query) or die("Error Querying Database");
		
		if ($row = mysqli_fetch_array($result))
		{
			if ($row['password'] == $password)
			{
				$_SESSION['loggedin'] = true;
				header ('Location: rateMyLineDBindex.php');
				exit;
			}
			else
			{
				$error[] = 'wrong password';
			}
		}
		else
		{
			$error[] = 'that user does not exist';
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alien Abductions</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.php');
   
?>


<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
<?php if (isset ($error)) foreach ($error as $e) echo '<div class="error">' . $e . '</div>'; ?>
        <h3>Login</h3>
          <form method="post" action="rateMyLineDBlogin.php">
    <p>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" size="40" /></p>

    <p><input type="submit" value="login" name="login" /></p>
  </form>
  
  <p><a href="createAccount.php">Create Account</p>

			</div>
		</div>
	</div>
<?php include('SIDEnFOOTER.html'); ?>
</div>
</body>
</html>
