<?php
/* Smarty version 3.1.30, created on 2018-11-23 09:19:16
  from "C:\wamp\www\11.8\step5\home\view\login_v.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bf7c614c0c537_26114109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bdbe1f77352b96bf9ae779c296d9b5609a363cca' => 
    array (
      0 => 'C:\\wamp\\www\\11.8\\step5\\home\\view\\login_v.html',
      1 => 1542940637,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf7c614c0c537_26114109 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>请您登录</title>
</head>
<body background="<?php echo @constant('RES');?>
images/1538202641.png">
    <form action="index.php?c=User&a=login" method="post" name="form1">
        用户名：<input type="text" name="name" id="name"><br>
        密码：<input type="password" name="pwd" id="pwd"><br>
        <input type="submit" value="登录"  onclick="return check()">
        <p>没有账号，去<a href="index.php?c=User&a=reg">注册</a></p>
    </form>
</body>
</html>
<?php echo '<script'; ?>
>
function check(){
    var error='';
    if (form1.name.value=='') {
        error +='用户名不能为空\n';
    }
    if (form1.pwd.value=='') {
        error +='密码不能为空\n';
    }
    if (error!='') {
        alert(error);
        return false;
    }
    return true;
    
}
<?php echo '</script'; ?>
><?php }
}
