<?php
	require 'msg.php';

	$template->assign('title','Registration Page');
	$template->assign('reg_enable',true);

	$username = $_POST['username'];
	$password = $_POST['password'];

	if (isset($_POST['submit'])){

		if(!check_chars($username)){
			$template->assign('reg_msg',$msg_array[0]);
			$errors_counter++;
		}

		if(!check_length($username)){
			$template->assign('reg_msg',$msg_array[1]);
			$errors_counter++;
		}

		if(!check_length($password)){
			$template->assign('reg_msg',$msg_array[1]);
			$errors_counter++;
		}

		if(empty($username)){
			$template->assign('reg_msg',$msg_array[1]);
			$errors_counter++;
		}

		if(empty($password)){
			$template->assign('reg_msg',$msg_array[4]);
			$errors_counter++;
		}

		if($mysql->select("SELECT * FROM `HWK_Users` WHERE `user_name`='".mysql_real_escape_string($username)."'")){
			$template->assign('reg_msg',$msg_array[2]);
			$errors_counter++;
		}
		if($errors_counter == 0){
			$template->assign('reg_msg',$msg_array[5]);
			$mysql->insert("INSERT INTO `HWK_Users` SET  `user_group`='2', `user_date`='".date("Y-m-d")."', `user_name`='".$username."', `user_password`='".md5(md5($password))."'");
		}
			$template->assign('reg_msg_state',true);

	}
?>
