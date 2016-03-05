<?php
/* Smarty version 3.1.29, created on 2016-03-05 12:04:47
  from "/home/u368304003/public_html/themes/todo/news.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56dacb5f1fdc88_07927124',
  'file_dependency' =>
  array (
    '19e165c56526c6beae9c99cb03ae32a9b5af2154' =>
    array (
      0 => '/home/u368304003/public_html/themes/todo/news.tpl',
      1 => 1457179460,
      2 => 'file',
    ),
  ),
  'includes' =>
  array (
  ),
),false)) {
function content_56dacb5f1fdc88_07927124 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['arrayNews']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_0_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$__foreach_item_0_saved_key = isset($_smarty_tpl->tpl_vars['key']) ? $_smarty_tpl->tpl_vars['key'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$__foreach_item_0_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
<div class="panel">
    <div class="panel-head"><?php echo $_smarty_tpl->tpl_vars['item']->value['news_title'];?>
&nbsp;<a href="/index.php?page=news&news=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">#<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</a></div>
    <div class="panel-content">
    <?php echo $_smarty_tpl->tpl_vars['item']->value['news_content'];?>

    </div>
</div>
<?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_local_item;
}
if ($__foreach_item_0_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_0_saved_item;
}
if ($__foreach_item_0_saved_key) {
$_smarty_tpl->tpl_vars['key'] = $__foreach_item_0_saved_key;
}
}
}
