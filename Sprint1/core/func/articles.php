<?php
function get_articles() {
	$posts = array();
	
$query = mysql_query("SELECT id, post, likes,dislikes FROM posts");	
	while(($row = mysql_fetch_assoc($query)) !== false){
		$posts[] = $row;
	}
	return $posts;
}
?>	