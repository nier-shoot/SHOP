<?php
//测试控制器类
class LoginControl extends Control{
    public function login(){
      header("Content-type:text/html;charset=utf-8");
       //print_const() ;
      if(session("aid")){  
        go('Index/index');    
        }
        if(IS_POST){
       	$username=$_POST['username'];
       	$db= M("admin");
        $field = $db->where('admin="'.$username.'"')->find();
        $_SESSION['aid']=$field['aid'];
        $_SESSION['username']=$field['admin'];
        
       	go('Index/index');    
        }else{
        $this->display();
    }
    }
    public function ajax_login(){
    	if(!IS_AJAX) exit;
    	$username=$_POST['username'];
    	$password=md5($_POST['password']);
    	$passwd=M('admin')->where('admin="'.$username.'"')->getField('password');
    	echo $passwd==$password?1:0;
    	exit;
    }
        //验证码
    public function code()
    {
        $code = new Code();
        $code->show();
    }

    public function verifyCode(){
    	echo session('code') == strtoupper($_POST['verifyCode']) ? 1 : 0;
    	exit;//一定要加
    }
    public function out(){
        session(NULL);
        $this->success('退出成功','login');
    }
}
?>