<?php
class Usercontroller extends Controller{
    function login(){
    	if (isset($_POST['name'])&&isset($_POST['pwd'])) {
            $user=Factory::M('UserModel');
            $result=$user->login($_POST['name'],$_POST['pwd']);
            if ($result) {
            	session_start();
            	$_SESSION['user2']=$result;
            	$this->tripslocation('登陆成功','index.php?c=Member&a=memList');
            }else{
            	$this->tripslocation('登陆失败','index.php?c=User&a=login');

    	}
    }else{
            $this->display('login_v.html');
        }
}
    	function reg(){
    		if (isset($_POST['name'])&&isset($_POST['name'])) {
                $user= Factory::M('UserModel');
                $rs=$user->check($_POST['name']);
                if (!$rs) {
                	$this->tripslocation('该用户名已经存在，请重新注册','index.php?c=User&a=reg');
                	return;
                }else{
                	$user1=Factory::M('UserModel');
                	$result=$user1->reg($_POST['name'],$_POST['pwd']);
                	if ($result) {
                	$this->tripslocation('注册成功','index.php?c=User&a=login');
                	}else{
                	$this->tripslocation('注册失败','index.php?c=User&a=reg');
                	}
                }
    		}else{
    			$this->display('reg_v.html');
    		}
    	}
    function logout(){
    	session_start();
    	$_SESSION=array();
    	session_destroy();
        $this->nowlocation('index.php?c=User&a=login');
    }
    function vodeimg(){
        $vcode= new VCode(1,10);
        $_SESSION['vcode']=$vcode->getResult();
        $vcode->getValidate();
    }




}






?>