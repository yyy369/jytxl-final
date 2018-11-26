<?php
class AppController extends Controller{
	function __construct(){
		parent::__construct();
		$this->checkAuthority();
	}
	private function checkAuthority(){
		$noCheckList = array(
			'IndexController'=>array('sysInfo')
			);
		if (isset($noCheckList[CUR_C])&&in_array(CUR_A,($noCheckList[CUR_C]))) {
			return;
		}
		if (!isset($_SESSION['user2'])) {
			$this->nowlocation('index.php?c=User&a=login');
			return;
		}
	}
}





?>