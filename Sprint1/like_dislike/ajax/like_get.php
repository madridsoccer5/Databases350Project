<?php
include '../core/init.php';

if(isset($_POST['id'], $_SESSION['id']) && article_exists($_POST['id'])) {
	echo like_count($_POST['id']);
}
?>