<?php

class config{
	#Host name of your DB
	var $hostname = 'mysql.hostinger.ru';
	#Username of your DB
	var $username = 'u368304003_root';
	#Password of your DB
	var $password = '123456';
	#DB name
	var $db = 'u368304003_hwk';
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
