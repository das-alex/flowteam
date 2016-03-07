<?php
/* Smarty version 3.1.29, created on 2016-03-07 15:51:44
  from "D:\Web\OpenServer\domains\localhost\themes\todo\registration.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dd7960655188_75444112',
  'file_dependency' =>
  array (
    'c8c124e0716e4fe62113ec04036f636d1fba41ba' =>
    array (
      0 => 'D:\\Web\\OpenServer\\domains\\localhost\\themes\\todo\\registration.tpl',
      1 => 1457290187,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_56dd7960655188_75444112 ($_smarty_tpl) {
?>
<div class="panel">
    <div class="panel-head">
        Форма регистрации
    </div>
    <div class="panel-content">
        <?php if ('msgState' == true) {?>
            <?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

        <?php }?>
        <form method="POST" action="index.php?page=reg">
            <input class="input" type="text" name="username">
            <input class="input" type="password" name="password">
            <input class="button color" type="submit" name="submit">
        </form>
    </div>
</div>
<?php }
}
