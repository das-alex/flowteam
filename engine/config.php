<?php

class config{
	#Host name of your DB
	var $hostname = 'localhost';
	#Username of your DB
	var $username = 'root';
	#Password of your DB
	var $password = '';
	#DB name
	var $db = 'HWK';
	#Smarty Settings
	var $cacheValue = false;
	var $cacheLifetime = 120;
	#Other Settings
	var $projectName = "HWK";
	var $homepageTitle = "Home Page";
	var $homepageDesc = "HWK Engine";
	var $theme = "todo";
	var $adminTheme = "default";

	#Groups
	var $groups = array(
			1 => "Администратор",
			2 => "Пользователь",
			3 => "Неизвестный пользователь",
	);
}

?>
