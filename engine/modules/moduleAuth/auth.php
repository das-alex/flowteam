<?php
require 'msg.php';

$template->assign('title','Auth Page');
$template->assign('auth_enable',true);

$username = $_POST['username'];
$password = $_POST['password'];
$auth_message = 'auth_msg';

if (isset($_POST['submit'])){
	if(!check_chars($username)){
		$template->assign($auth_message, $msg_array[1]);
	}

	if(!check_length($username)){
		$template->assign($auth_message, $msg_array[1]);
	}

	if(!check_length($password)){
		$template->assign($auth_message, $msg_array[1]);
	}

	if(empty($username)){
		$template->assign($auth_message, $msg_array[0]);
	}

	if(empty($password)){
		$template->assign($auth_message, $msg_array[0]);
	}

	$data = $mysql->selectFetch("SELECT * FROM `HWK_Users` WHERE `user_name`='".mysql_real_escape_string($username)."' LIMIT 1");

	if($data['user_password'] == md5(md5($password))){
		$hash = md5(generateCode(10));
		$mysql->update("UPDATE HWK_Users SET user_hash='".$hash."' WHERE user_id='".$data['user_id']."'");

		setcookie("id", $data['user_id'], time()+60*60*24*30);
		setcookie("hash", $hash, time()+60*60*24*30);

		header("Location: index.php"); exit();
	}else{
		$template->assign($auth_message, $msg_array[3]);
	}
	$template->assign('auth_msg_state', true);
}
?>
