<?php
//测试控制器类
class IndexControl extends AuthControl{
    public function index(){
        header("Content-type:text/html;charset=utf-8");
        //echo $_SESSION['username'];
   	    	$this->display();
    }

    public function welcome(){
      	echo 1;
        //echo $_SESSION['username'];
    }
}
?>