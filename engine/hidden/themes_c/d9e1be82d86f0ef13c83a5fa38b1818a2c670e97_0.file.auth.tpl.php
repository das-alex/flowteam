<?php
/* Smarty version 3.1.29, created on 2016-03-06 21:49:23
  from "D:\Web\OpenServer\domains\localhost\themes\todo\auth.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dc7bb300bf44_00979480',
  'file_dependency' =>
  array (
    'd9e1be82d86f0ef13c83a5fa38b1818a2c670e97' =>
    array (
      0 => 'D:\\Web\\OpenServer\\domains\\localhost\\themes\\todo\\auth.tpl',
      1 => 1457289659,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_56dc7bb300bf44_00979480 ($_smarty_tpl) {
?>
<div class="panel">
    <div class="panel-head">
        Форма входа
    </div>
    <div class="panel-content">
        <?php if ('msgState' == true) {?>
            <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

        <?php }?>
        <form method="POST" action="index.php?page=auth">
            <input class="input" type="text" name="username">
            <input class="input" type="password" name="password">
            <input class="button color" type="submit" name="submit">
        </form>
        <a href="/index.php?page=reg">Регистрация</a>
    </div>
</div>
<?php }
}
