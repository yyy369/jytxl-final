<?php
class Indexcontroller extends AppController
{
	function index(){
		// if (!isset($_SESSION['user2'])) {
		// 	header('location:index.php?c=User&a=login');

		// }else{
		// 	header('location:index.php?c=Member&a=memList');
		// }
		$this->nowlocation('index.php?c=Member&a=memList');
	}
		public function sysInfo()
		{
			require VIEW.'sysInfo_v.html';
		}
}




?>