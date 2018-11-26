<?php
/* Smarty version 3.1.30, created on 2018-11-23 02:37:54
  from "C:\wamp\www\11.8\step5\home\view\index_v.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf76802aa70c9_12833039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ccee679f132a57a2b744e502a2da2a87b51a48e' => 
    array (
      0 => 'C:\\wamp\\www\\11.8\\step5\\home\\view\\index_v.html',
      1 => 1542940631,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf76802aa70c9_12833039 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>简易通讯录</title>
<link href="<?php echo @constant('RES');?>
css/basic.css" rel="stylesheet" type="text/css" />
<link href="<?php echo @constant('RES');?>
css/index.css" rel="stylesheet" type="text/css" />
</head>

<body background="<?php echo @constant('RES');?>
images/1538202641.png">
<div id="content">
<h2 class="center"><?php echo $_SESSION['user2']['name'];?>
简易通讯录</h2>
<a href="index.php?c=User&a=logout">注销</a>
<p class="center">总共有 个联系人，当前显示-个联系人</p>
<?php if ($_smarty_tpl->tpl_vars['rslimit']->value == 'false') {?>
	<p>暂无任何联系人</p>
<?php } else { ?>
	
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rslimit']->value, 'one');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['one']->value) {
?> 
    
 
<table class="one" width="90%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2">用户名：<?php echo $_smarty_tpl->tpl_vars['one']->value['name'];?>
</td>
  </tr>
  <tr>
    <td width="71%">电话：<?php echo $_smarty_tpl->tpl_vars['one']->value['telephone'];?>
</td>
    <td width="29%" align="center"><a href="index.php?c=Member&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['one']->value['id'];?>
">查看详情</a></td>
  </tr>
</table>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<p class="center yema"> <?php echo $_smarty_tpl->tpl_vars['page2']->value;?>
</p>
<?php }?>
<p class="center"><a href="index.php?c=Member&a=insert" id="xinjian">+新建联系人</a></p>
</div>
</body>
</html><?php }
}
