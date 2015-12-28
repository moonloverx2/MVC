<?php
require_once 'libs/smarty/Smarty.class.php';
$smarty = new Smarty();
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->template_dir = "tpl";
$smarty->compile_dir = "tpl_c";
$smarty->cache_dir = "dir";
$smarty->assign("title","title测试");
$smarty->display("tpl/Index.tpl");
?>