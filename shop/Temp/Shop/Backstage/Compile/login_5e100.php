<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<title>NIER-后台登陆</title>
<!--[if lt IE 9]>
<script>
(function(){
    var tags = ['header','footer','figure','figcaption','details','summary','hgroup','nav','aside','article','section','mark','abbr','meter','output','progress','time','video','audio','canvas','dialog'];
    for(var i=tags.length - 1;i>-1;i--){ document.createElement(tags[i]);}
})();
</script>
<![endif]-->
<!-- <link rel="shortcut icon" href="http://static.tieba.baidu.com/tb/favicon.ico"> -->
<link rel="stylesheet" href="http://127.0.0.1/SHOP/shop/App/Shop/Backstage/Tpl/Login/style/admin.css">
<script type='text/javascript' src='http://127.0.0.1/SHOP/hdphp/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<script type="text/javascript" src='http://127.0.0.1/SHOP/shop/App/Shop/Backstage/Tpl/Login/style/js.js'></script>
<script type="text/javascript">
     APP='http://127.0.0.1/SHOP/index.php/Backstage';//加引号！！
    function CodeChange(){
            $('#CodeChange').attr("src","http://127.0.0.1/SHOP/index.php/Backstage/Login/code/"+Math.random());
    }
</script>
</head>
<body>
    <div class="wrap1">
        <div class="wrap2">
        <div class="bg_container"></div>

<!--bd 开始-->
<div id="bd">
    <!--login_content 开始-->
    <div class="login_content">
       
        <div class="login_anchor"></div>
        <div class="login_form_wrapper">
            <!--登录框 开始-->
            <div id="passport-login-pop" class="tang-pass-pop-login-noimg tang-pass-pop-login-merge tang-pass-pop-login-color-blue tang-pass-pop-login">
                <div class="tang-foreground" style="width: 393px;">
                <div class="tang-title tang-title-dragable">            
                    <span style="width: 357px;">
                        登录
                    </span>
                </div>
        <div class="tang-body">
            <div class="tang-content">
                <div id="passport-login-pop-dialog">
                    <div class="clearfix">
                        <div class="pass-login-pop-content">
                            <div class="pass-login-pop-form">
                                <div id="login_form" class="tang-pass-login">
                                    <form name="login_form" action="<?php echo U('Login/login');?>" class="pass-form" method="POST" autocomplete="off">
                                        <p id="" class="pass-generalErrorWrapper">
                                            <span id="login-msg" class="pass-generalError pass-generalError-error"></span>
                                        </p>

                                        <p id="" class="pass-form-item pass-form-item-userName" style="display:block">
                                            <label for="TANGRAM__PSP_4__emall" id="TANGRAM__PSP_4__userNameLabel" class="pass-label pass-label-userName">手机/邮箱/用户名</label>
                                            <input placeholder="用户名" id="TANGRAM__PSP_4__emall" name="username" class="pass-text-input pass-text-input-userName" autocomplete="off" type="text">
                                          
                                        </p>
                                        <p id="" class="pass-form-item pass-form-item-password" style="display:block">
                                            <label for="TANGRAM__PSP_4__password" id="TANGRAM__PSP_4__passwordLabel" class="pass-label pass-label-password">密码</label>
                                            <input placeholder="密码" id="TANGRAM__PSP_4__password" name="password" class="pass-text-input pass-text-input-password" type="password">
                                        </p>
                                        <p id="" class="pass-form-item pass-form-item-verifyCode">
                                            <label for="TANGRAM__PSP_4__verifyCode" id="TANGRAM__PSP_4__verifyCodeLabel" class="pass-label pass-label-verifyCode">验证码</label>
                                            <input placeholder="验证码" id="TANGRAM__PSP_4__verifyCode" name="verifyCode" class="pass-text-input pass-text-input-verifyCode" maxlength="6" type="text">
                                        
                                            <span class="pass-verifyCodeImgParent"><img id="CodeChange" onclick="this.src='http://127.0.0.1/SHOP/index.php/Backstage/Login/code/'+Math.random()" class="pass-verifyCode" src="<?php echo U('code');?>" ></span>
                                            <a href="javascript:CodeChange()"  class="pass-change-verifyCode">换一张</a>
                                            
                                        </p>

                                        <p id="TANGRAM__PSP_4__submitWrapper" class="pass-form-item pass-form-item-submit"><input id="TANGRAM__PSP_4__submit" value="登录" class="pass-button pass-button-submit" type="submit">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tang-footer" style="display: none;">
            <div>
            </div>
        </div>
    </div>
</div>
        
            <!--登录框 结束-->
        </div>
        <div style="position: static;" class="login_footer">            
            &#169;2014 Baidu<a href="http://static.tieba.baidu.com/tb/eula.html" target="_blank">贴吧协议</a>
            <span>|</span>
            <a href="http://tieba.baidu.com/tb/system.html" target="_blank">吧主制度</a>
            <span>|</span>
            <a href="http://tieba.baidu.com/f?ie=utf-8&amp;kw=%E6%84%8F%E8%A7%81%E5%8F%8D%E9%A6%88%E5%90%A7" target="_blank">意见反馈</a>
            <span>|</span>
            <a href="http://tieba.baidu.com/tb/zt/declare/" target="_blank">网络谣言警示</a>
        </div>
    </div>
    <!--login_content 结束-->    
</div>



</div>
</div>



</body></html>