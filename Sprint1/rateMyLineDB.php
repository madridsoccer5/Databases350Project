<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Submit A Line</title>
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
				
					<!-- CONTENT -->
					<h3>Submit a Line</h3>
					<p>Welcome to our line post section. Feel free to post any pickup line!</p>
					
					<form method = "post" action = "rateMyLineDB2.php">
					<table>
					<tr><td>Username</td><td><input type="text" id="userName" name="userName" /></td></tr>
					<tr><td>Date</td><td><input type="number" name="month" min="1" max="12" step="1" value="1" size="3"/>
					<input type="number" name="day" min="1" max="31" step="1" value="1" size="3"/>
					<input type="number" name="year" min="2009" max="2014" step="1" value="2011" size="4"/></td></tr>
					<tr><td>Title</td><td><input type="text" id="title" name="title" /></td></tr>
 					<textarea name="textArea" cols="70" rows="5" id="post" name="post"></textarea>
					<tr><td>&nbsp;</td><td><input type="submit" value="Submit Post" /></td></tr>
					</table>
					
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
