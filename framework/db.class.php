<?php 
    /**
    * 数据库操作类的抽象父类，定义了一套规范。
    * 所有具体的数据库系统操作类需要继承它
    */
    abstract class DB{
        protected $conn;
        protected $host;
        protected $port;
        protected $user;
        protected $password;
        protected $dbName;
        protected $charset;

        protected abstract function initParam($arr);
        protected abstract function getConn();  //连接
        protected abstract function selectDB();  //选择数据库
        protected abstract function setCharset();

        protected abstract function query($sql);  //查询产生结果：select
        protected abstract function exec($sql);   //处理一个能够影响数据的SQL，不返回结果集。insert/update/delete        
    }
 ?>