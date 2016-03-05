<?php
$template->assign('title','News Page');
$template->assign('enableNews',true);
$template->assign('arrayNews', $mysql->getRow('SELECT * FROM `HWK_News` ORDER BY id DESC'));
?>
