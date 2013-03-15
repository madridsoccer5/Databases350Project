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
  include 'core/init.php';
?>
<div id="wrap">
	<div class="pagewrapper">
		<div class="innerpagewrapper">
			<div class="page">
				<div class="content">
				
					<!-- CONTENT -->
					<h3>Worst Lines</h3>
					<p>As voted by users!</p>
					
					
					<table>		
<?php
	include('dbconnect.php');
	$query = "SELECT username,likes,dislikes,id, post FROM posts ORDER BY dislikes DESC";
    $result = mysqli_query($db, $query)
                         or die("Error Querying Database");
    $list = 1;
    while($row = mysqli_fetch_array($result)) {
  		$userName = $row['username'];
  		$likes = $row['likes'];
  		$post = $row['post'];
		$post_id = $row['id'];
		$dislikes = $row['dislikes'];
		
  		echo '<br><br>';
  		echo "$list $userName <br>";
  		
  		echo "\"$post\" <br>";
  		echo '<a class="like" href="#" onclick="like_add(',$post_id, ');">Like</a> <span id = "post_',$post_id,'_likes"">',$likes,'</span> like this</li><a class="dislike" href="#" onclick="dislike_add(',$post_id, ');">Dislike</a> <span id = "post_',$post_id,'_dislikes"">',$dislikes,'</span> dislike this</p></li>';
  	 
		$list = $list + 1;
  }                 
   
   
                         
                         
    mysqli_close($db);

?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/like.js"></script>
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
