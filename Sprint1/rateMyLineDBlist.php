
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Great Lines</title>
<link rel="stylesheet" href="styles.css" type="text/css" />


</head>
<body>
<?php
   include('header.php');
   include 'core/init.php';
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
<p></p>
<?php
	include('dbconnect.php');
	$posts = get_articles();
	if (count($posts) == 0){
		echo 'Sorry, no posts';
	}else{
		echo '<ul>';
		foreach ($posts as $article){
			echo '<li><p>', $article['post'], '</p><p><a class="like" href="#" onclick="like_add(',$article['id'], ');">Like</a> <span id = "post_',$article['id'],'_likes"">',$article['likes'],'</span> like this</p></li>';
		}
		echo '</ul>';
	}
	mysqli_close($db);
	?>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/like.js"></script>


		
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
