<?php
/* Smarty version 3.1.30, created on 2018-11-23 01:37:20
  from "C:\wamp\www\11.8\step5\home\view\update_v.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf759d0935eb3_32174030',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8ed6878c103fbb135935cbfa08acd1124e41658' => 
    array (
      0 => 'C:\\wamp\\www\\11.8\\step5\\home\\view\\update_v.html',
      1 => 1542937011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf759d0935eb3_32174030 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改联系人</title>
<link href="<?php echo '<?=';?>RES<?php echo '?>';?>css/basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo '<?=';?>RES<?php echo '?>';?>css/detail.css" rel="stylesheet" type="text/css" />
<link href="<?php echo '<?=';?>RES<?php echo '?>';?>css/update.css" rel="stylesheet" type="text/css" />
</head>

<body background="<?php echo '<?=';?>RES<?php echo '?>';?>images/1538202641.png">
<div id="content">
<h2 class="center">修改联系人信息</h2>
<form name="form1" method="POST" id="form1" action="index.php?c=Member&a=update1">
<ul>
	<li>姓名：
	  <input name="name" type="text" id="name" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
" disabled="disabled"/>
	  [必填]
	  <input name="id" type="hidden" id="id" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
"/>
	</li>
    <li>电话：
      <input name="telephone" type="text" id="telephone" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['telephone'];?>
" />
    [必填]	</li>
    <li>地址：
      <input name="address" type="text" id="address" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['address'];?>
"/>
    </li>
    <li>Email：
      <input name="Email" type="text" id="Email" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['Email'];?>
"/>
    </li>
    <li>QQ：
      <input name="QQ" type="text" id="QQ" value="<?php echo $_smarty_tpl->tpl_vars['one']->value['QQ'];?>
"/>
    </li>
</ul>

<p class="right"><input name="" type="submit"  class="button" value="保存" />
  <input class="button"  type="reset" name="button" id="button" value="重写" />
  <a href="index.php" style="color:#000;text-decoration:none;">取消</a>
</p>
</form>
</div>
</body>
</html><?php }
}
