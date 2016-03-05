<?php

$user_id = get_str_check($_GET['user']);
$userdata = $mysql->selectFetch("SELECT * FROM HWK_Users WHERE user_id = '".$user_id."'");

if (isset($user_id)){
	$template->assign('title', $userdata['user_name'] . ' Profile');
	$template->assign('profile_enable', true);
	$template->assign('user_name_byid', $userdata['user_name']);
	$template->assign('user_date', $userdata['user_date']);

	switch ($userdata['user_group']){
		case 1:
			$template->assign('user_group', $config->groups[$userdata['user_group']]);
			break;
		case 2:
			$template->assign('user_group', $config->groups[$userdata['user_group']]);
			break;
		default:
			$template->assign('user_group', $config->groups[$userdata['user_group']]);
			break;
	}
	$count = $mysql->getCount("SELECT COUNT(`user_name`) FROM `HWK_Comments` WHERE `user_id`='".$user_id."'");
	$template->assign('count',$count[0]);
}

?>
