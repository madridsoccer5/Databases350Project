<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Great Lines</title>
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
					<h3>Great Pickup Lines!</h3>
					
<table>		
<tr>All current post are being displayed!</tr>
<?php
	include('dbconnect.php');
	$query = "SELECT username, date, post FROM posts ORDER BY date";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    while($row = mysqli_fetch_array($result)) {
  		$userName = $row['username'];
  		$date = $row['date'];
  		$post = $row['post'];
		
  		echo "<tr><td>User</td><td>$userName</td></tr>\n";
		echo "<tr><td>Date</td><td>$date</td></tr>\n";
		echo "<tr><td>Post</td><td>$post</td></tr>\n";
		echo '<tr><td><a class="like" href="#">Like</a> <a class="dislike" href="#">Dislike</a> </td><td>like this and dislike this</td></tr>';
		
  }                 
   
   
                         
                         
    mysqli_close($db);

?>
</table>


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
