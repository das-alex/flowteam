<?php
/* Smarty version 3.1.29, created on 2016-03-06 19:35:01
  from "D:\Web\OpenServer\domains\localhost\themes\todo\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc5c35ce8a46_68058745',
  'file_dependency' =>
  array (
    '73bf99d910db3f4b269de93113fa6e9e2be4c0c1' =>
    array (
      0 => 'D:\\Web\\OpenServer\\domains\\localhost\\themes\\todo\\login.tpl',
      1 => 1457282098,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_56dc5c35ce8a46_68058745 ($_smarty_tpl) {
?>
<div class="panel">
    <div class="panel-head">
        Форма входа
    </div>
    <div class="panel-content">
        <form method="POST" action="index.php?page=auth">
            <input class="input" type="text" name="username">
            <input class="input" type="password" name="password">
            <input class="button color" type="submit" name="submit">
        </form>
    </div>
</div><?php }
}
