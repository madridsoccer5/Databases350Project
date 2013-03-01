<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Rate My Line</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body>

<?php
  include("header.php");
?>
<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Top Lines</h3>
					<p>As voted by users!</p>
					
					
					<table>		
<?php
	include('dbconnect.php');
	$query = "SELECT username, date, title, post FROM posts ORDER BY likes DESC";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    $list = 1;                     
    while($row = mysqli_fetch_array($result)) {
  		$userName = $row['username'];
  		$date = $row['date'];
  		$post = $row['post'];
		$title = $row['title'];
		
		
  		echo '<br><br>';
  		echo "$list $userName <br>";
  		echo "\"$post\" <br>";
  		echo '<a class="like" href="#">Like </a>   <a class="dislike" href="#"> Dislike</a> ';
		$list = $list + 1;
  }                 
   
   
                         
                         
    mysqli_close($db);

?>
</table>
					
								
					<!-- END CONTENT -->
					
				</div>
				
				
<?php
  include("SIDEnFOOTER.html");
  
  ?>


			</div>
		</div>
	</div>
</div>
</body>
</html>
