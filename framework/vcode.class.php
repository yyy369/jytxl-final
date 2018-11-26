<?php 
    /**
    * 验证码类，生成图形计算型验证码
    * 
    */
    class VCode 
    {
        //两个随机数,一个运算符，一个运算结果。
        private $num1=0;
        private $num2=0;
        private $operator = "+-*"; //可能进行+、-、*运算
        private $result=0;
        
        /**
         * [构造函数，初始化两个随机数，运算符]
         * @param [int] $min [随机数的最小值]
         * @param [int] $max [随机数的最大值]
         */
        function __construct($min,$max)
        {
            $this->num1 = rand($min,$max);
            $this->num2 = rand($min,$max);
            $i = rand(0,2);
            $this->operator = $this->operator[$i];

            //计算结果
            switch ($i) {
                case 0:
                    $this->result = $this->num1+$this->num2;
                    break;
                case 1:
                    $this->result = $this->num1-$this->num2;
                    break;
                case 2:
                    $this->result = $this->num1*$this->num2;
                    break;
            }
        }
        //打印指定长度、宽度的验证码图片
        /**
         * [getValidate 往文件中打印图片验证码]
         * @param  [int] $w [图片宽度]
         * @param  [int] $h [图片高度]
         * @return [void]    [无返回值]
         */
        function getValidate($w=100,$h=30){
            //创建一个图片
            $img = imagecreate($w,$h);
         
            //在图片上指定一些颜色，为了后面使用
            $pxcolor = imagecolorallocate($img,255,255,255);
            $bgcolor = imagecolorallocate($img,rand(0,200),rand(0,200),rand(0,200));
            $red = imagecolorallocate($img, 255, 0, 0);
            $white = imagecolorallocate($img, 255, 255, 255);
            $green = imagecolorallocate($img, 0, 255, 0);
            $blue = imagecolorallocate($img, 0, 0, 255);
            //用随机背景色填充图片。
            imagefilledrectangle($img, 0, 0, $w, $h, $bgcolor); 
         
            //随机打印80个像素点
            for($i = 0;$i < 80;$i++){
                imagesetpixel($img, rand(0,$w), rand(0,$h), $pxcolor);
            }
            
            //将num1  operator  num2 = ?  写入到图片上
            imagestring($img, 5, 5, rand(1,10), $this->num1, $red);
            imagestring($img,5,30,rand(1,10),$this->operator, $white);
            imagestring($img,5,45,rand(1,10),$this->num2, $green);
            imagestring($img,5,65,rand(1,10),"=", $blue);
            imagestring($img,5,80,rand(1,10),"?", $red);
            //输出文档格式为图片。
            header("Content-type:image/png");
            imagepng($img);
            //销毁
            imagedestroy($img);            
        }
        /**
         * [getResult 取得验证码结果]
         * @return [int] [运算结果]
         */
        function getResult(){
            return $this->result;
        }
    }
?>