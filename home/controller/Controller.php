<?php
class Controller extends Smarty{
	public function __call($funName,$ages){
		die(get_class($this)."控制器类不存在{$funName}");
	}
	function __construct(){
		parent::__construct();
		$this->template_dir=VIEW;
		$this->compile_dir=RUNTIME.'complite/';
		$this->cache_dir=RUNTIME.'cache/';
		$this->left_delimiter='<{';
		$this->right_delimiter='}>';
		$this->setchartype();
	}
	protected function setchartype(){
		header("Content-type:text/html;charset=utf-8");
	}
	protected function nowlocation($url){
		if ($url=='') {
			die('无法正常跳转，未指定跳转地址');
		}else{
			header("location:{$url}");
			exit;
		}
	}
	protected function tripslocation($mess,$url){
		if ($url=='') {
			die('无法正常跳转，未指定跳转地址');
		}else{
			echo("<script>alert('".$mess."');location.href='".$url."'</script>");
			exit;
		}
	}
}





?>