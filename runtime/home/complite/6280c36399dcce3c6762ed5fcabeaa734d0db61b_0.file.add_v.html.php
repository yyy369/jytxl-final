<?php
/* Smarty version 3.1.30, created on 2018-11-23 02:38:01
  from "C:\wamp\www\11.8\step5\home\view\add_v.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf768090c1000_87501651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6280c36399dcce3c6762ed5fcabeaa734d0db61b' => 
    array (
      0 => 'C:\\wamp\\www\\11.8\\step5\\home\\view\\add_v.html',
      1 => 1542940611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf768090c1000_87501651 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>新增联系人</title>
<link href="<?php echo @constant('RES');?>
css/basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RES');?>
css/detail.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RES');?>
css/update.css" rel="stylesheet" type="text/css" />
</head>

<body background="<?php echo @constant('RES');?>
images/1538202641.png">
<div id="content">
<h2 class="center">新建联系人信息</h2>
<form name="form1" method="POST" id="form1" action="index.php?c=Member&a=insert1">
<ul>
	<li>姓名：
	  <input name="name" type="text" id="name" />
	  [必填]	</li>
    <li>电话：
      <input name="telephone" type="text" id="telephone" />
    [必填]	</li>
    <li>地址：
      <input name="address" type="text" id="address" />
    </li>
    <li>Email：
      <input name="Email" type="text" id="Email" />
    </li>
    <li>QQ：
      <input name="QQ" type="text" id="QQ" />
    </li>
</ul>

<p class="right"><input name="" type="submit"  class="button" value="新增" />
  <input class="button"  type="reset" name="button" id="button" value="重写" />
  <a href="index.php?c=Member&a=memList" style="color:#000;text-decoration:none;">取消</a></p>
</form>
</div>
</body>
</html><?php }
}
