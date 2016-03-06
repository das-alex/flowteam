<?php
	require 'msg.php';

	$template->assign('title','Registration Page');
	$template->assign('enableReg',true);

	$username = $_POST['username'];
	$password = $_POST['password'];

    $regMessage = 'errorMsg';

	if (isset($_POST['submit'])){

		if(!check_chars($username)){
			$template->assign($regMessage, $msg_array[0]);
			$errors_counter++;
		}

		if(!check_length($username)){
			$template->assign($regMessage, $msg_array[1]);
			$errors_counter++;
		}

		if(!check_length($password)){
			$template->assign($regMessage, $msg_array[1]);
			$errors_counter++;
		}

		if(empty($username)){
			$template->assign($regMessage, $msg_array[1]);
			$errors_counter++;
		}

		if(empty($password)){
			$template->assign($regMessage, $msg_array[4]);
			$errors_counter++;
		}

		if($database->queryNum($connectHost, "SELECT * FROM `HWK_Users` WHERE `user_name`='".$database->stringEscape($connectHost, $username)."'")){
			$template->assign($regMessage, $msg_array[2]);
			$errors_counter++;
		}
		if($errors_counter == 0){
			$template->assign($regMessage,$msg_array[5]);
			$database->queryExecute($connectHost, "INSERT INTO `HWK_Users` SET  `user_group`='2', `user_date`='".date("Y-m-d")."', `user_name`='".$username."', `user_password`='".md5(md5($password))."'");
		}
			$template->assign('msgState',true);

	}
?>
