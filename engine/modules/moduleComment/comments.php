<?php

$news_id = get_str_check($_GET['news']);
$data = $mysql->getRow('SELECT `comment_text`,`user_name` FROM `HWK_Comments` WHERE `news_id`=' . $news_id);

if ($data){
	$template->assign('comments_state',true);
	$template->assign('comments',$data);
}

if (isset($_POST['submit'])){
	$comment = $_POST['comment'];

	if(!check_chars($comment)){
		$template->assign('commentMsg',$msg_array[0]);
		$errorCount++;
	}

	if(!check_length($comment)){
		$template->assign('commentMsg',$msg_array[1]);
		$errorCount++;
	}

	if ($errorCount == 0)
	{
		$username = $mysql->selectFetch("SELECT user_name FROM `HWK_Users` WHERE `user_id` = '".intval($_COOKIE['id'])."' LIMIT 1");
		$mysql->insert("INSERT INTO `HWK_Comments` SET  `news_id`='".$news_id."', `user_id`='".intval($_COOKIE['id'])."', `user_name`='".$username['user_name']."', `comment_text`='".$comment."'");
		$mysql->update("UPDATE HWK_News SET  news_comments=news_comments+1 WHERE `id`=".$news_id."");
		header("Location: index.php?page=news&news=".$news_id); exit();
	}else{
		$template->assign('commentMsg',$msg_array[3]);
	}
}
?>
