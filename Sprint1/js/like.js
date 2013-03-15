function like_add(id) {
	$.post('ajax/like_add.php', {id:id}, function(data) {
		if(data == 'success') {
			like_get(id);
		}else{
			alert(data);
		}
		
	});
}

function like_get(id) {
	$.post('ajax/like_get.php',{id:id}, function(data) {
		$('#post_'+id+'_likes').text(data);
	});
}

function dislike_add(id) {
	$.post('ajax/dislike_add.php', {id:id}, function(data) {
		if(data == 'success') {
			like_get(id);
		}else{
			alert(data);
		}
		
	});
}