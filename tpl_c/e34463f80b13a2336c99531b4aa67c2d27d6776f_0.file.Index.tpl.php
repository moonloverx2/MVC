<?php
/* Smarty version 3.1.29, created on 2016-01-20 13:08:11
  from "D:\LNMP\nginx\nginx-1.6.2\html\MVC\tpl\Index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_569f163b600e63_16843686',
  'file_dependency' => 
  array (
    'e34463f80b13a2336c99531b4aa67c2d27d6776f' => 
    array (
      0 => 'D:\\LNMP\\nginx\\nginx-1.6.2\\html\\MVC\\tpl\\Index.tpl',
      1 => 1453266489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_569f163b600e63_16843686 ($_smarty_tpl) {
echo nl2br($_smarty_tpl->tpl_vars['title']->value);?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['title'];?>

<?php echo $_smarty_tpl->tpl_vars['arr']->value['content'];
}
}
