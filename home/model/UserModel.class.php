<?php
header("Content-type: text/html; charset=utf-8");
class UserModel extends Model {
    public function login($name,$pwd){
    	$pwd=md5($pwd);
    	  $sql="select name,id from user where name='{$name}' and pwd='{$pwd}'";
    	  $arr=$this->dao->query($sql);
    	 if (empty($arr)) {
    	 	return false;
    	 }else{
    	 	return $arr[0];
    	 }
    	}
    public function check($name){
        $sql="select name from user where name='{$name}'";
    	$arr=$this->dao->query($sql);
        if (empty($arr)) {
        	return ture;
        }else{
        	return false;
        }
    }

   function reg($name,$pwd){
    	$pwd=md5($pwd); 
    		$rs="insert into user values(NULL,'{$name}','{$pwd}')";
    		$result=$this->dao->exec($rs);
    		if ($result) {
    			return ture;
    		}else{
    			return false;
    		}
    	}
    function logout(){
    	session_start();
    	$_SESSION= array();
        session_destroy();
    }	
    }





?>