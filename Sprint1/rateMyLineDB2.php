<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Submitted Line</title>
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
				
									<!-- CONTENT -->
					<h3>Rate My Line post</h3>
					<p>Thanks for posting! </p>
					<table>
					<?php
					
					$post = $_POST['textArea'];
					$userName = $_POST['userName'];

					echo "<tr><td>Name</td><td>$userName</td></tr>\n";
					
					echo "<tr><td>Post</td><td>$post</td></tr>\n";
					
					?>
					
					
					
					</table>
					<!-- END CONTENT -->
<?php
    include('dbconnect.php');

					
    $query = "INSERT INTO posts (username, post) VALUES ( '";
    $query = $query . $userName . "','" . $post . "')";
					
	$result = mysqli_query($db, $query)
    or die("Error Querying Database");
    
    
    ?>
					
					
					
					</form>
					<!-- END CONTENT -->
					
				</div>
				
				<?php
				    include('SIDEnFOOTER.html');
				?>
				   


			</div>
		</div>
	</div>
</div>
</body>
</html>
