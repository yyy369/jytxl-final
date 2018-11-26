<?php
session_start();
class Membercontroller extends AppController{
	function memList(){
		 $uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $total=$user->total();
		 $page = new Page($total,4);
		 $page1= $page->fpage(0,1,2,3);
		 $page2= $page->fpage(4,5,6,7);
         $rslimit = $user->selectLimit($page->limit);
         $this->assign('page1',$page1);
         $this->assign('page2',$page2);
         $this->assign('rslimit',$rslimit);
		 $this->display('index_v.html');
	}
	function detail(){
		 $uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $rs=$user->findById($_GET['id']);
		 $this->assign('rs',$rs);
		 $this->display('detail_v.html');
	}
	function update(){
		 $uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $one=$user->findById($_GET['id']);
		 $this->assign('one',$one);
		 $this->display('update_v.html');

	}
	function update1(){
				 $uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $result=$user->update();
		 if ($result) {
		 	$this->tripslocation('修改成功','index.php?c=Member&a=memList');
		 }
	}
	function del(){
		$uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $result=$user->del($_GET['id']);
		 if ($result) {
		 	$this->tripslocation('删除成功','index.php?c=Member&a=memList');
		 }
	}
	function insert(){
		$this->display('add_v.html');
	}
	function insert1(){
		$uid= $_SESSION['user2']['id'];
		 $user=Factory::M('MemberModel',$uid);
		 $result=$user->insert();
		 if ($result) {
		 	$this->tripslocation('新建联系人成功','index.php?c=Member&a=memList');
		 }else{
		 	$this->tripslocation('新建联系人失败,联系人或已存在','index.php?c=Member&a=insert');
		 }
	}
}


?>