<?php 
    include "db.class.php";
    /**
    * 封装了mysql数据库的所有操作
    */
    class MySQLDB extends DB
    {
        private static $instance;
        private $error;
        protected function initParam($arr){
            //用户、密码、数据库名必须由用户指定
            if (!isset($arr[user])) {
                die("必须提供连接mysql服务器的用户名");
            } else if(!isset($arr[password])) {
                die("必须提供连接mysql服务器的用户密码");
            }else if(!isset($arr[dbName])) {
                die("必须提供具体的数据库");
            }
            $this->host = isset($arr[host])?$arr[host]:'localhost';
            $this->port = isset($arr[port])?$arr[port]:'3306';
            $this->user = $arr[user];
            $this->password = $arr[password];
            $this->dbName = $arr[dbName];
            $this->charset = isset($arr[charset])?$arr[charset]:'utf8';
        }
        //建立连接
        protected  function getConn(){
            $conn = mysql_connect($this->host.":".$this->port,$this->user,$this ->password);
            /*echo mysql_error();*/
            if (!$conn) {
                die('连接mysql服务器失败，请检查服务器地址'.$this->host.":".$this->port."，用户名{$this->user},密码{$this->password}是否正确。");                
            } else {
                $this->conn = $conn;
            }
        }  
        //选择数据库
        protected  function selectDB(){
            $result = mysql_select_db($this->dbName,$this->conn);
            if (!$result) {
                die("数据出错，请检查配置文件的数据配置项，是否存在此数据库{$this->dbName}".mysql_error());
            } 
        }  
        protected  function setCharset(){
            mysql_query("set names {$this->charset}",$this->conn);
        }
        //查询产生结果集，以二维数组的形式返回.select
        public  function query($sql){
            $result = mysql_query($sql,$this->conn);
            if (!$result) {
                $this->error = mysql_error();
                return false;
            } else {
                $rsArr = array();
                while ($row = mysql_fetch_assoc($result)) {
                    $rsArr[]=$row;
                }
                return $rsArr;
            }
            
        }  
        //处理一个能够影响数据的SQL，不返回查询结果集insert/update/delete
        //如果执行成功返回的是受影响的行数int;失败返回false
        public  function exec($sql){
            $result = mysql_query($sql,$this->conn);
            if ($result===true) {
                return mysql_affected_rows();  //可能是0
            } else {
                $this->error = mysql_error();
                return false;
            }           

        }   
        private function __construct($arr)
        {
            $this->initParam($arr);
            $this->getConn();
            $this->selectDB();
            $this->setCharset();
        }
        public function getError(){
            return $this->error;
        }
        public static function getInstance($config){
            if (!isset(static::$instance)) {
                static::$instance=new MySQLDB($config);
            }
            return static::$instance;

        }
        private function __clone(){}
    }

 ?>