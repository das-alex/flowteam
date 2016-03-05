<?php
/* Smarty version 3.1.29, created on 2016-03-05 19:11:48
  from "D:\Web\OpenServer\domains\localhost\themes\todo\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56db0544033b52_59776510',
  'file_dependency' =>
  array (
    '233bdccd663647f61c7ffc4a2006586daeb05ecb' =>
    array (
      0 => 'D:\\Web\\OpenServer\\domains\\localhost\\themes\\todo\\index.tpl',
      1 => 1457194149,
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
function content_56db0544033b52_59776510 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<link rel="stylesheet" href="themes/todo/css/style.css">
	<link rel="stylesheet" href="themes/todo/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="flex_container">
		<header>
			<div class="header_wrapper">
				<div class="header_left_side">
					<img src="themes/todo/img/logo.png" width="22" height="39" alt="лого">
				</div>
				<div class="header_middle">
					<nav>
						<ul>
							<a href="/index.php"><li <?php if ($_smarty_tpl->tpl_vars['enableIndex']->value == true) {?>class="active"<?php }?>><i class="fa fa-home"></i>Главная</li></a>
                            <a href="/index.php?page=contacts">
                                <li <?php if ($_smarty_tpl->tpl_vars['enableContacts']->value == true) {?>class="active"<?php }?>><i class="fa fa-user"></i>Контакты</li>
                            </a>
                            <a href="/index.php?page=messages">
                                <li <?php if ($_smarty_tpl->tpl_vars['enableMessages']->value == true) {?>class="active"<?php }?>><i class="fa fa-envelope"></i>Сообщения</li>
                            </a>
                            <a href="/index.php?page=projects">
                                <li <?php if ($_smarty_tpl->tpl_vars['enableProjects']->value == true) {?>class="active"<?php }?>><i class="fa fa-file-text-o"></i>Проекты</li>
                            </a>
                            <a href="/index.php?page=discussions">
                                <li <?php if ($_smarty_tpl->tpl_vars['enableDiscussions']->value == true) {?>class="active"<?php }?>><i class="fa fa-commenting"></i>Чат</li>
                            </a>
                            <a href="/index.php?page=news">
                                <li <?php if ($_smarty_tpl->tpl_vars['enableNews']->value == true) {?>class="active"<?php }?>><i class="fa fa-newspaper-o"></i>Новости</li>
                            </a>
						</ul>
					</nav>
				</div>
				<div class="header_right_side">

				</div>

			</div>
		</header>
		<main>
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
		</main>
	</div>
</body>
</html>
<?php }
}
