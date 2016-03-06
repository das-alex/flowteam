<?php
$template->assign('title','News Page');
$template->assign('enableNews',true);
$template->assign('arrayNews', $database->fetchRow($connectHost,'SELECT * FROM `HWK_News` ORDER BY id DESC'));
?>
