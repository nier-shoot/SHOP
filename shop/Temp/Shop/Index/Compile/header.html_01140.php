<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<link type="image/x-icon" href="http://127.0.0.1/SHOP/Static/style/img/header/favicon.ico" rel="icon">
	<link type="image/x-icon" href="http://127.0.0.1/SHOP/Static/style/img/header/favicon.ico" rel="bookmark">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/SHOP/Static/style/css/header/header.css"/>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/SHOP/Static/style/css/foot/footer.css"/>
	<script type="text/javascript" src="http://127.0.0.1/SHOP/Static/style/js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="http://127.0.0.1/SHOP/Static/style/js/index.js"></script>
	<title>NOP时尚品牌官方商城，网购男装，货到付款</title>
</head>
<body>
	<div id="header_wrap">
		<div class="header">
			<span class="logo">
				<a href="">NOP</a>
			</span>
			<span class="topmenu">
				<div id="">
					<ul>
					<li class='login'>
						<a href="javascript:void(0)">快捷登录</a>
					</li>
					<li class='register'>
						<a href="javascript:void(0)">注册</a>
					</li>
					<li>//</li>
					<li class='car'>
						<a href="">
						购物车商品(<span style="color:red;"> 0 </span>),  合计
						<span style="color:red;"> 0 </span>元， 去结账	
						</a>
						<ul> </ul>
					</li>
					<li>
						<a class='zhzx' href="">账户中心</a>
						<ul style="display:none">
							<li>
								<a target="_self" href="">我的订单</a>
							</li> 
							<li>
								<a target="_self" href="">我的收藏</a>
							</li> 
							<li>
								<a target="_self" href="">个人信息</a>
							</li> 
							<li>
								<a target="_self" href="">修改密码</a>
							</li> 
						</ul>
					</li>
					</ul>
				</div>
			</span>
			<span class="search">
				<form id="frmKey" class="SearchBar" method="post" action="">
					<input id="skey" class="kw" type="text" name="name[]" value="SEARCH" onclick="OnEnter(this)" onblur="OnExit(this)">
					<input id="button" class="send" type="button" onclick="search();" onfocus="this.blur();" name="button">
				</form>
			</span>

			<!-- 头部导航开始 -->

			<div class="nav_box"> 
				<ul id="topnav"> 
					<li class="un_f">
						<a title="首页" href="/">首页</a></li>  
					<li cate="c143" class="un_f">
						<a title="特惠区" href="">特惠区</a></li>  
					<li cate="c151" class="un_f">
						<a title="秒杀区" href="">秒杀区</a></li>  
					<li cate="c139" class="un_f">
						<a title="羽绒服" href="">羽绒服</a>  </li>  
					<li cate="c21" class="un_f">
						<a title="棉服" href="">棉服</a>  </li>  
					<li cate="c19" class="un_f">
						<a title="外套" href="">外套</a>  </li>  
					<li cate="c29" class="un_f">
						<a title="针织衫" href="">针织衫</a>  </li>  
					<li cate="c147" class="un_f">
						<a title="冬季必备" href="">冬季必备</a></li>
					<li cate="c123" class="un_f">
						<a title="衬衫" href="">衬衫</a>  </li>  
					<li cate="c23" class="un_f">
						<a title="卫衣帽衫" href="">卫衣帽衫</a>  </li>  
					<li cate="c25" class="un_f">
						<a title="休闲裤" href="">休闲裤</a>  </li>  
					<li cate="c27" class="un_f">
						<a title="牛仔裤" href="">牛仔裤</a>  </li>  
					<li cate="c17" class="un_f">
						<a title="T恤" href="">T恤</a>  </li>  
					<li class="c33">
						<a title="鞋包配饰" href="">鞋包配饰</a>  
						<span class="sub" style="opacity: 0.95;"> 
							<span> 
								<ul>  
									<li>
										<a title="围巾" href="">围巾</a>
									</li>  
									<li>
										<a title="包" href="">包</a></li>  
									<li>
										<a title="钱包" href="">钱包</a>
									</li>  
									<li>
										<a title="皮带" href="">皮带</a>
									</li>  
									<li>
										<a title="饰品" href="">饰品</a>
									</li>  
									<li><a title="眼镜" href="">眼镜</a>
									</li>  
									<li>
										<a title="礼物" href="">礼物</a>
									</li>  
									<li>
										<a title="收纳" href="">收纳</a>
									</li>  
									<li>
										<a title="帽子" href="">帽子</a>
									</li>  
									<li>
										<a title="手套" href="">手套</a>
									</li>  
								</ul> 
							</span>
						</span>  
					</li>  
					<li class="c33">
						<a title="全部商品" href="">全部商品</a>  
						<span class="sub" style="opacity: 0.95;"> 
							<span> 
								<ul>  
									<li>
										<a title="羽绒服" href="">羽绒服</a>
									</li>  
									<li>
										<a title="大衣风衣" href="">大衣风衣</a>
									</li>  
									<li>
										<a title="外套" href="">外套</a>
									</li>  
									<li>
										<a title="针织衫" href="">针织衫</a>
									</li>  
									<li>
										<a title="衬衫" href="">衬衫</a>
									</li>  
									<li>
										<a title="西服" href="">西服</a>
									</li>  
									<li>
										<a title="长裤" href="">长裤</a>
									</li>  
									<li>
										<a title="牛仔裤" href="">牛仔裤</a>
									</li>  
									<li>
										<a title="卫衣帽衫" href="">卫衣帽衫</a>
									</li>  
									<li>
										<a title="短裤" href="">短裤</a>
									</li>  
									<li>
										<a title="T恤" href="">T恤</a>
									</li>  
									<li>
										<a title="鞋靴" href="">鞋靴</a>
									</li>  
									<li>
										<a title="包" href="">包</a>
									</li>  
									<li><a title="配饰" href="">配饰</a>
									</li>  
								</ul> 
							</span>
						</span>  
					</li>  
				<li cate="t13" class="un_f">
					<a style="color:#b00;text-decoration:none" title="Final Sale" href="">Sale</a>
				</li> 
			 </ul> 
			</div>
			<!-- 登陆 -->
			<div class='mask' style="width: 100%; height: 100%; display: none; background: none repeat scroll 0% 0% rgb(68, 68, 68); visibility: visible; opacity: 0.7; position: fixed; left: 0px; top: 0px; z-index: 290;"></div>

			<div id="dialog1" class="dialog mini-passport-dialog" style="width: 522px; height: auto; visibility: visible; opacity: 1; position: fixed; top: -162px; left: 413px; display: none;z-index:400">

				<div id="pop_dailog"> 
					<div class="close">X</div> <h1>会员登录</h1> 
					<div class="content">
						<form class="submitform" action="http://www.nop.cn/passport-verify.html" method="post">  
							<input type="hidden" value="1" name="from_minipassport"> 
							<ul> 
								<li>EMAIL<br> 
									<input type="text" value="yin_zengfeng@163.com" tabindex="1" id="in_login" required="true" name="login" class="x-input inputstyle" autocomplete="off"> 
								</li> 
								<li>密码<br>
									<input type="password" tabindex="2" id="in_passwd" required="true" name="passwd" class="x-input inputstyle" autocomplete="off">
								</li> 
								<li>
									<input type="checkbox" style="width:auto;float:left;margin:0 5px 0 0;padding:0;height:20px" value="on" id="showpass" name="showpass"> <span>显示密码</span>
									<input type="button" class="btn" tabindex="4" act="loginform" value="登录">
									<input type="button" class="fp" value="忘记密码？" id="resetpwd" name="resetpwd">
								</li> 
								<li><span id="msg_error"></span>
								</li> <h1>快捷登录<br></h1> 
								<li>
									<a onclick="toLogin('http://www.nop.cn/api/sina/index.php');" href="javascript:;"><span title="新浪微博登录" style="color:#666;text-decoration:none;margin-right:5px"><img src="http://127.0.0.1/SHOP/Static/style/img/header/sina.png"></span></a> 
									<a onclick="toLogin('http://www.nop.cn/api/qq/index.php');" href="javascript:;"><span title="腾讯QQ登录" style="color:#666;text-decoration:none;margin-right:5px"><img src="http://127.0.0.1/SHOP/Static/style/img/header/qq.png"></span>
									</a> 
									<a onclick="toLogin('http://www.nop.cn/api/alipay/index.php');" href="javascript:;"><span title="支付宝登录" style="color:#666;text-decoration:none;"><img src="http://127.0.0.1/SHOP/Static/style/img/header/alipay.png"></span>
									</a>
								</li> 
							</ul> 
						</form>
					</div> 
				</div> 
			</div>


			<div class="dialog mini-passport-dialog" id="dialog1" style="width: 522px; height: auto; visibility: visible; opacity: 1; position: fixed; top: -153px; left: 413px;z-index:400;display:none;"> 
				<div id="pop_dailog"> 
					<div class="close">X</div> 
					<h1>会员注册</h1> 
					<div class="content">
						<form class="submitform" name='register' action="http://www.nop.cn/passport-create.html" method="post">  
							<input type="hidden" value="1" name="from_minipassport"> 
							<input type="hidden" value="agree" name="license"> 
							<ul> 
								<li step="one">用户名(您的邮箱)<br> 
									<input type="text" value="" maxlength="50" id="uname" required="true" vtype="required" name="uname" class="x-input inputstyle" autocomplete="off"> 
								</li> 
								<li step="one">
									<span id="err_uname"></span>
									<input type="button" onclick="inputCheck('uname');" class="btn" value="下一步" id="nextstep" name="nextstep">
								</li> 
								<li step="two" style="display: none;">用户名<br>
									<span id="unametip"></span>
								</li> 
								<li step="two" style="display: none;">密码 (6到16位数字或字母)<br>
									<input type="password" maxlength="16" required="true" vtype="required" id="in_passwd" name="passwd" class="x-input inputstyle" autocomplete="off">
								</li> 
								<li step="two" style="display: none;">
									<span id="msg_error"></span>
								</li> 
								<li step="two" style="display: none;">
									<label for="showpass"><input type="checkbox" style="width:auto;float:left;margin:0 5px 0 0;padding:0;height:20px" value="on" id="showpass" name="showpass"> 
									<span>显示密码</span>
									</label> 
									<input type="button" class="btn" value="完成注册并登录" act="signupform">
								</li> 
							</ul> 
						</form> 
					</div> 
				</div> 
			</div>
			<!-- 导航结束 -->
		</div>

	</div>