<?php

function get_str_check($request){
    $request = trim($request);
    $request = stripslashes($request);
    $request = htmlspecialchars($request);
    return $request;
}

function get_num_check($request){
    $request = is_numeric($request);
    return $request;
}

function logout(){
	session_destroy();
}

function generateCode($length=6) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
	$clen = strlen($chars) - 1;
	while (strlen($code) < $length) {
		$code .= $chars[mt_rand(0,$clen)];
	}
	return $code;
}

function session_save($username, $password){
	session_start();

	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
}

function check_chars($string){
	if(!preg_match("/^[a-zA-Z0-9]+$/",$string)) return false;
	else return true;
}

function check_length($string){
	if ((strlen($string) < 3) or (strlen($string) > 16)) return false;
	else return true;
}

?>
