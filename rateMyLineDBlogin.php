<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Alien Abductions</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.html');
   
?>


<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				<?
	 include "dbconnect.php";
  	   if (isset($_POST['username'])){
  	     $name = $_POST['username'];
         $password = $_POST['password'];

         $query = "select * from users WHERE username = '$name' AND password = '$password'";
         $result = mysqli_query($db, $query)
         or die("Error Querying Database");
         if ($row = mysqli_fetch_array($result))
         {
   		#echo $query;

       }
       }
       
				
									</table>
					<!-- END CONTENT -->
<?php
    include('dbconnect.php');
    $date = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
					
    $query = "INSERT INTO post (username, date, title, post) VALUES ( '$username', '$date', '$title',  '$post');";
    $result = mysqli_query($db, $query)
    or die("Error Querying Database");
				
				    ?>	
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   
          <?
           php
        if (isset($_POST['username'])) {
        echo "<h2>Incorrect Username/Password</h2>";
        }
        ?>
        
        <h1>Login</h1>
          <form method="post" action="login.php">
    <p>
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" size="40" </p>
    <p>
    <label for="password">Password:</label>
    <input type="password" id="password" name="pw" size="40" /></p>

    <p><input type="submit" value="login" name="submit" /></p>
  </form>
  
  <p><a href="createAccount.php">Create Account</p>
				
								   ?>

			</div>
		</div>
	</div>
</div>
</body>
</html>
