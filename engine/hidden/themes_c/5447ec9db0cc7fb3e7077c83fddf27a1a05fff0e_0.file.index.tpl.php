<?php
/* Smarty version 3.1.29, created on 2016-03-05 12:04:35
  from "/home/u368304003/public_html/themes/todo/index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dacb538cf684_55972844',
  'file_dependency' =>
  array (
    '5447ec9db0cc7fb3e7077c83fddf27a1a05fff0e' =>
    array (
      0 => '/home/u368304003/public_html/themes/todo/index.tpl',
      1 => 1457179460,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
    'file:contacts.tpl' => 1,
    'file:messages.tpl' => 1,
    'file:projects.tpl' => 1,
    'file:discussions.tpl' => 1,
    'file:news.tpl' => 1,
    'file:error.tpl' => 1,
  ),
),false)) {
function content_56dacb538cf684_55972844 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="/themes/todo/css/style.css">
	<link rel="stylesheet" href="/themes/todo/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,700,900,300italic,400italic&subset=latin,cyrillic,cyrillic-ext' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<div class="left">
			<div class="logo">
				<img src="/themes/todo/img/logo.png" alt="лого">
			</div>
			<div class="menu_icon">
				<ul>
                    <a href="/index.php">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableIndex']->value == true) {?>class="active"<?php }?>><i class="fa fa-home"></i></li>
                    </a>
					<a href="/index.php?page=contacts">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableContacts']->value == true) {?>class="active"<?php }?>><i class="fa fa-user"></i></li>
                    </a>
					<a href="/index.php?page=messages">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableMessages']->value == true) {?>class="active"<?php }?>><i class="fa fa-envelope"></i></li>
                    </a>
					<a href="/index.php?page=projects">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableProjects']->value == true) {?>class="active"<?php }?>><i class="fa fa-file-text-o"></i></li>
                    </a>
                    <a href="/index.php?page=discussions">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableDiscussions']->value == true) {?>class="active"<?php }?>><i class="fa fa-commenting"></i></li>
                    </a>
					<a href="/index.php?page=news">
                        <li <?php if ($_smarty_tpl->tpl_vars['enableNews']->value == true) {?>class="active"<?php }?>><i class="fa fa-newspaper-o"></i></li>
                    </a>
				</ul>
			</div>
		</div>
		<div class="right">
			<div class="right_header">

			</div>
			<div class="info">
                <!--
                    Условие, при котором будет появляться список контактов.
                    index.php?page=contacts
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableContacts']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:contacts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <!--
                    Условие, при котором будет появляться список сообщений.
                    index.php?page=messages
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableMessages']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <!--
                    Условие, при котором будет появляться список проектов.
                    index.php?page=projects
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableProjects']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:projects.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <!--
                    Условие, при котором будет появляться список обсуждений.
                    index.php?page=discussions
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableDiscussions']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:discussions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <!--
                    Условие, при котором будет появляться список проектов.
                    index.php?page=news
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableNews']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:news.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
                <!--
                    Условие, при котором будет появляться ошибка.
                    index.php?page=[Неверный Адрес]
                -->
				<?php if ($_smarty_tpl->tpl_vars['enableError']->value == true) {?>
                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                <?php }?>
			</div>
		</div>
	</div>
    <?php echo '<script'; ?>
 src="/themes/todo/js/slider.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
