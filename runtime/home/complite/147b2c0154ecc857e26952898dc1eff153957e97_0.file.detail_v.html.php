<?php
/* Smarty version 3.1.30, created on 2018-11-23 02:37:54
  from "C:\wamp\www\11.8\step5\home\view\detail_v.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf7680229e780_97641087',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '147b2c0154ecc857e26952898dc1eff153957e97' => 
    array (
      0 => 'C:\\wamp\\www\\11.8\\step5\\home\\view\\detail_v.html',
      1 => 1542940574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7680229e780_97641087 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系人信息页</title>
<link href="<?php echo @constant('RES');?>
css/basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RES');?>
css/detail.css" rel="stylesheet" type="text/css" />
</head>

<body background="<?php echo @constant('RES');?>
images/1538202641.png">
<div id="content">
<h2 class="center">联系人信息</h2>
<ul>
	<li>姓名：<?php echo $_smarty_tpl->tpl_vars['rs']->value['name'];?>
</li>
    <li>电话：<?php echo $_smarty_tpl->tpl_vars['rs']->value['telephone'];?>
</li>
    <li>地址：<?php echo $_smarty_tpl->tpl_vars['rs']->value['address'];?>
</li>
    <li>Email：<?php echo $_smarty_tpl->tpl_vars['rs']->value['Email'];?>
</li>
    <li>QQ：<?php echo $_smarty_tpl->tpl_vars['rs']->value['QQ'];?>
</li>
</ul>
<p class="right"><a href="index.php?c=Member&a=update&id=<?php echo $_GET['id'];?>
">修改</a> <a href="index.php?c=Member&a=del&id=<?php echo $_GET['id'];?>
" onclick="return confirm('确认删除么？')">删除</a> <a href="index.php?c=Member&a=memList" onclick="history.back()">返回</a></p>
</div>
</body>
</html><?php }
}
