<?php
define('ENGINE_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/');
define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT']);
define('SMARTY_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/libs/smarty/');

require SMARTY_DIR . 'Smarty.class.php';
require ENGINE_DIR . 'modules/functions.php';
require ENGINE_DIR . 'classes/mysqli.class.php';
require ENGINE_DIR . 'config.php';

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

switch ($page){
	case '':
		#Main news module file
		$template->assign('title', $config->homepageTitle . ' - ' . $config->homepageDesc);
		$template->assign('enableIndex',true);
		break;
	case 'auth':
		#Auth module file
		include ENGINE_DIR . 'modules/moduleAuth/auth.php';
		break;
	case 'reg':
		#Registration module file
		include ENGINE_DIR . 'modules/moduleRegistration/reg.php';
		break;
	case 'logout':
		#Logout module file
		include ENGINE_DIR . 'modules/moduleAuth/logout.php';
		break;
	case 'profile':
		#Profile module file
		include ENGINE_DIR . 'modules/moduleContact/contact.php';
		break;
    case 'projects':
		#Profile module file
		include ENGINE_DIR . 'modules/moduleProject/project.php';
		break;
    case 'discussions':
		#Profile module file
        include ENGINE_DIR . 'modules/moduleDiscussion/discussion.php';
		break;
    case 'messages':
		#Profile module file
		include ENGINE_DIR . 'modules/moduleMessage/message.php';
		break;
    case 'contacts':
		#Profile module file
		include ENGINE_DIR . 'modules/moduleContact/contact.php';
		break;
    case 'news':
        #News File
        include ENGINE_DIR . 'modules/moduleNews/news.php';
        break;
	default:
		#Errors module file
		include ENGINE_DIR . 'modules/moduleError/error.php';
		break;
}

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])){
	$userdata = $database->fetchAssoc($connectHost, "SELECT * FROM HWK_Users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
	if(($userdata['user_hash'] == $_COOKIE['hash']) or ($userdata['user_id'] == $_COOKIE['id'])){
		$template->assign('auth_state',true);
		$template->assign('user_name',$userdata['user_name']);
		$template->assign('user_id',$userdata['user_id']);
	}
}

$template->assign('TEMPLATE', ROOT_DIR . '/themes/' . $config->theme);

$template->display('index.tpl');
$database->closeHost($connectHost);
?>
