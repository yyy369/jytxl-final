<?php
class MemberModel extends Model{
	private $uid;
	private $error;
		function __construct($uid){
			parent::__construct();
			$this->uid=$uid;
		}
	function memList(){
		$sql="select * from member where uid = {$this->uid}";
		$result=$this->dao->query($sql);
        if ($result===false) {
        	die('代码出现错误'.$this->dao->getError());
        }else{
        	return $result;
        }
	}
	function selectLimit($limit){
 $sql = "select * from member where uid = {$this->uid} {$limit}";
 $rs=$this->dao->query($sql);
            if (!$rs) {
                return false;
            } else {
                return $rs;
            }            
	}
	function total(){
		 $rs = mysql_query("select * from member where uid = $this->uid");
            $total = mysql_num_rows($rs);
            return $total;
	}
	function insert($arr=null){
		if($arr==null){
        $arr=$_POST;
		}
		if($arr['name']==null || $arr['telephone']==null){
			$this->error="缺少必填项，没有Name和Telephone";
			return false;
		}
		$rs=mysql_query("insert into member values(NULL,'{$arr[name]}','{$arr[telephone]}','{$arr[address]}','{$arr[Email]}','{$arr[QQ]}',{$this->uid})");
		if ( $rs && mysql_affected_rows()==1) {
			return true;
		}else{
			$this->error="该联系人已经存在";
			return false;
		}
	}
	function findById($id){
      $rs=mysql_query("select * from member where uid=$this->uid and id={$id}");
      if($one=mysql_fetch_assoc($rs)){
         return $one;
      }else{
      	$this->error="您访问的联系人ID不存在";
      	return false;
      }
     
	}
	function update($arr=null){
      if($arr==null){
      	$arr=$_POST;
      }
      if($arr['telephone']==''){
      	$this->error="电话不能为空";
      	return false;
      }
      $rs=mysql_query("update member set telephone='{$arr['telephone']}',address='{$arr['address']}',Email='{$arr['Email']}',QQ='{$arr['QQ']}' where id={$arr['id']}") or die(mysql_error());
      if(!$rs){
      	$this->error="修改联系人失败";
      	return false;
      }
      return true;
      
	}
		function del($id){
     if(!$this->findById($id)){
         $this->error="您删除的联系人不存在";
         return false;
     }else{
     	$rs=mysql_query("delete from member where id={$id} and uid={$this->uid}");
     }
     if($rs && mysql_affected_rows()==1){
        return true;
     }else{
     	$this->error="删除失败";
     	return false;
     }
	}

}



?>