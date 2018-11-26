<?php 
header("Content-type: text/html; charset=utf-8");
session_start();
define('FW', './framework/');
define('APP', './home/');//多个应用程序应用的变量，可以将APP作为路径变量，方便以后程序变更
define('MODEL', './home/model/');
define('CONTROLLER', './home/controller/');
define('VIEW', './home/view/');
define('RES', './home/view/resource/');
define('RUNTIME','./runtime/home/');
include FW."Factory.class.php";
$resultclass='Indexcontroller';
$resultaction='sysInfo';
$nowname='';
$nowclass='';
if (isset($_GET['c'])&&$_GET['c']!='') {
	$nowname=$_GET['c'];
	$nowclass=$nowname.'controller';
}else{
	$nowname=$resultname;
	$nowclass=$resultclass;
}
$nowaction='';
if (isset($_GET['a'])&&$_GET['a']!='') {
	$nowaction=$_GET['a'];
}else{
	$nowaction=$resultaction;
}
if (!is_file(CONTROLLER.$nowclass.'.php')) {
	echo CONTROLLER.$nowclass.'.php';
	echo("<script>alert('您访问的控制器不存在');location.href='index.php?c=User&a=login';</script>");
}
define('CUR_C',$currentControllerClass);
define('CUR_A',$currentAction);
$user_c=new $nowclass();
$user_c->$nowaction();



?>