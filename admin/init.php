<?php

define('ENGINE_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/');
define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT']);
define('ADMIN_DIR',$_SERVER['DOCUMENT_ROOT'] . '/admin/');
define('SMARTY_DIR',$_SERVER['DOCUMENT_ROOT'] . '/engine/libs/smarty/');

require SMARTY_DIR . 'Smarty.class.php';
require ENGINE_DIR . 'modules/functions.php';
require ENGINE_DIR . 'classes/mysql.class.php';
require ENGINE_DIR . 'config.php';

$config = new config();
$template = new Smarty();
$mysql = new mysql();

$link = $mysql->setHost($config->hostname, $config->username, $config->password);
$mysql->setBase($config->db);

$template->template_dir = ADMIN_DIR . '/themes/' . 'default' . '/';
$template->compile_dir = ADMIN_DIR . '/engine//hidden/themes_c/';
$template->config_dir = ADMIN_DIR . '/engine/hidden/config/';
$template->cache_dir = ADMIN_DIR . '/engine/hidden/cache/';
$template->caching = $config->cache_value;
$template->cache_lifetime = $config->cache_lifetime_value;

$template->assign('TEMPLATE', ADMIN_DIR . '/themes/' . $config->adminTheme);

$template->display('index.tpl');
$mysql->close($link);

?>
