<?php
include "dbconnect.php";

if (isset ($_POST))
{

	if (@$_POST['register'] == 'register')
	{
	
		$name = $_POST['username'];
		
		// password in db is stored as sha1 hash
		$password =  sha1 ($_POST['password']);

		$query = "SELECT username FROM users WHERE username = '$name'";
		$result = mysqli_query($db, $query) or die("Error Querying Database");
		if (mysqli_num_rows($result) == 0)
		{
			$insert = "INSERT INTO users(username, password) VALUES ('$name', '$password')";
			mysqli_query($db, $insert) or  die ("Error inserting into database");
			
		}
		else 
		{			
			$error[] = 'That username is already taken';
		}
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rate My Line</title>
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
        <h3>Register</h3>
          <form method="post" action="createAccount.php">
    <p>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" size="40" /></p>

    <p><input type="submit" value="register" name="register" /></p>
  </form>
  

			</div>
		</div>
	</div>
<?php include('SIDEnFOOTER.html'); ?>
</div>
</body>
</html>

