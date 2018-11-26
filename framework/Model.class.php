<?php
include "mysqldb.class.php";
class Model{
   	protected $dao;
   	private $config = array(
            'host'=>'localhost',
        'port'=>'3306',
        'user'=>'root',
        'password'=>'',
        'dbName'=>'jytxl',
            'charset'=>'utf8'
    );
 function __construct(){
    $this->initDao();
    }
    private function initDao(){
    	$this->dao=MYSQLDB::getInstance($this->config);
    }
}




?>