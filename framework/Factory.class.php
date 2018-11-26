<?php 
    //定义工厂类，创建其他类型的对象的。
    class Factory{
        //专门用来创建某个类唯一实例
        public static function M($className,$args=''){
            static $instance_list = array();
            if (!isset($instance_list[$className])) {
                $instance_list[$className] = new $className($args);
            }
            return $instance_list[$className];
        }
    }// 工厂类结束


 function myAutoLoad1($className){
        //方式1：定义自动加载的映射关系列表  全局型
        $autoList = array(
                'Model'=>FW.'Model.class.php',
                'UserModel'=>MODEL.'UserModel.class.php',
                'DB'=>FW.'db.class.php',
                'MySQLDB'=>FW.'mysqldb.class.php',
                'Usercontroller'=>CONTROLLER.'Usercontroller.php',
                'MemberModel'=>MODEL.'MemberModel.class.php',
                'Membercontroller'=>CONTROLLER.'Membercontroller.php',
                'Controller'=>CONTROLLER.'Controller.php',
                'AppController'=>CONTROLLER.'AppController.php',
                'Page'=>FW.'page.class.php',
                'VCode'=>FW.'vcode.class.php',
                'Smarty'=>FW.'libs/Smarty.class.php',
                'Indexcontroller'=>CONTROLLER.'Indexcontroller.php'
            );
        if (isset($autoList[$className])) {
            require $autoList[$className];
            return; 
        }        
    }
    //还可以这样写(如果这样写，把上面array中的MODEL和CONT删除)
    // if (substr($classname, -10)=='controller') {
    //    require CONTROLLER.$classname.'.class.php';
    //    return;
    // }
    //  if (substr($classname, -5)=='Model') {
    //    require Model.$classname.'.class.php';
    //    return;
    // }
    spl_autoload_register('myAutoLoad1');

 ?>