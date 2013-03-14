<?php
include '../core/init.php';
if (isset($_POST['id']) && article_exists($_POST['id'])) {
	$id = $_POST['id'];
	/*if(previously_liked($id) === true){
		echo 'You liked this already!';
	}else{*/
		add_like($id);
		echo 'success';
	//}
}
?>