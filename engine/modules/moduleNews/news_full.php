<?php

$news_full = get_str_check($_GET['news']);
$row = $mysql->getRow('SELECT `news_title`, `news_content`, `news_comments` FROM `HWK_News` WHERE `id`=' . $news_full);

if (isset($news_full)){
	$template->assign('news_full_bool',true);
    $template->assign('news_full',$row);
    $template->assign('title',$row[0][0]);
    $template->assign('news_id',$news_full);
}

include ENGINE_DIR . 'modules/moduleComment/comments.php';

?>
