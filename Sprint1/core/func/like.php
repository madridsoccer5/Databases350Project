<?php
function article_exists($id) {
	$id = (int)$id;
	return (mysql_result(mysql_query("SELECT COUNT(id) FROM posts WHERE id = $id"),0) == 0) ? false : true;
}

function previously_liked($id){
	$id = (int)$id;
	return (mysql_result(mysql_query("SELECT COUNT(like_id) FROM likes WHERE user_id = ".$_SESSION['username']." AND id = $id"),0) == 0) ? false : true;
}

function like_count($id){
	$id = (int)$id;
	return (int)mysql_result(mysql_query("SELECT likes FROM posts WHERE id = $id"),0,'likes');
}

function add_like($id){
	$id = (int)$id;
	$user_id = $_POST['user_id'];
	mysql_query("UPDATE posts SET likes = likes + 1 WHERE id = $id");
	mysql_query("INSERT INTO likes (user_id, post_id) VALUES ('$user_id', '$id')");
}

function add_dislike($id){
	$id = (int)$id;
	$user_id = $_POST['user_id'];
	mysql_query("UPDATE posts SET dislikes = dislikes + 1 WHERE id = $id");
	mysql_query("INSERT INTO dislikes (user_id, post_id) VALUES ('$user_id', '$id')");
}
?>