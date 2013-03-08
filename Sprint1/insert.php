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
			$error[] = 'That username is already taken';
			/*if ($row['password'] == $password)
			{
				$_SESSION['loggedin'] = true;
				header ('Location: rateMyLineDBindex.php');
				exit;
			}
			else
			{
				$error[] = 'wrong password';
			}*/
		}
		else
		{			
			echo "in else";
			$insert = "INSERT INTO users(username, password) VALUES ('$name', '$password')";
			msqli_query($db, $insert) or  die ("Error inserting into database");
			
		}
	}
}
?>