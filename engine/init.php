<?php
define('ENGINE_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/');
define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT']);
define('SMARTY_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/libs/smarty/');

require SMARTY_DIR . 'Smarty.class.php';
require ENGINE_DIR . 'modules/functions.php';
require ENGINE_DIR . 'classes/mysqli.class.php';
require ENGINE_DIR . 'config.php';
require ENGINE_DIR . 'langs/ru/ruMessages.php';

$config = new config();
$template = new Smarty();
$database = new database();

$connectHost = $database->setHost($config->hostname, $config->username, $config->password, $config->db);

$page = get_str_check($_GET['page']);

$template->template_dir = ROOT_DIR . '/themes/' . $config->theme . '/';
$template->compile_dir = ENGINE_DIR . '/hidden/themes_c/';
$template->config_dir = ENGINE_DIR . '/hidden/config/';
$template->cache_dir = ENGINE_DIR . '/hidden/cache/';
$template->caching = $config->cacheValue;
$template->cache_lifetime = $config->cacheLifetime;

include ('engine.php');

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	$userdata = $database->fetchAssoc($connectHost, "SELECT * FROM HWK_Users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
	if(($userdata['user_hash'] == $_COOKIE['hash']) or ($userdata['user_id'] == $_COOKIE['id'])){
		$template->assign('isLogin',true);
		$template->assign('userName',$userdata['user_name']);
		$template->assign('userId',$userdata['user_id']);
	}else{
        $template->assign('isLogin', false);
    }
}

$template->assign('TEMPLATE', ROOT_DIR . '/themes/' . $config->theme);
$template->display('index.tpl');
$database->closeHost($connectHost);
?>
