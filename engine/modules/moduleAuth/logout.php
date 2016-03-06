<?php
$userdata = $database->fetchAssoc($connectHost, "SELECT * FROM HWK_Users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
if(($userdata['user_hash'] == $_COOKIE['hash']) or ($userdata['user_id'] == $_COOKIE['id'])){
	setcookie("id", $data['user_id'], time()-3600);
	setcookie("hash", $hash, time()-3600);
	header("Location: index.php"); exit();
}
?>
