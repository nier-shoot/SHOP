<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<link rel="stylesheet" type="text/css" href="http://127.0.0.1/SHOP/Static/style/css/content/contentmain.css"/>
<!-- 头部结束 -->
	<!-- 轮播开始 -->

	<div id="maincontent"> 
		<div id="content">
		<div id="widgets" class="border3 "> 

			<div class="element pict">
				<a target="_blank" href=""> 
					<span>SHOP NOW →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/bcf_banner.jpg">
				</a> 
			</div>

			

			<div class="element pict" >
				<a target="_blank" href=""> 
					<span>SHOP NOW →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/th_banner.jpg">
				</a> 
			</div>

			<div class="element pict"> 
				<a style="float:left" title="Black  classic forever" target="_blank" href="">
				  	<p style="position:absolute;top:50px;left:25px;color:#fff;text-align:left" class="p1">Black  classic forever<br>
				    I think black is a classic color.<br>
				    It will stay in fashion forever 
				    <strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →
				    </strong>
					</p>
			  		<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/black_winterwear.jpg">	
				</a> 
				<a style="float:right;margin-bottom:12px" title="经典简约棉服" target="_blank" href="">
			  		<p style="position:absolute;left:25px;top:50px;color:#fff;text-align:left" class="p2">经典简约棉服<br>
			    	<strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →</strong>
					</p> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_2_20131212.jpg">
				</a> 
				<a style="float:right" title="毛绒里复古条绒衬衫外套" target="_blank" href="">
					<span>HOT ITEM →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_4_20131212.jpg">
				</a> 
				<a style="float:right;margin-right:12px" title="时尚拼皮棒球衫夹克外套" target="_blank" href="">
					<span>HOT ITEM →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_3_20131212.jpg">
				</a> 
				<a style="float:left;margin-top:12px" title="羊毛质感温暖相随" target="_blank" href="">
			  		<p style="position:absolute;left:25px;bottom:25px;color:#333;text-align:left" class="p3">
			  			羊毛质感温暖相随<br>
			   			 <strong style="border-top:1px solid #333;border-bottom:1px solid #333;float:left">SHOP NOW →</strong>
			 		</p>  
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_5_20131212.jpg"></a> 
				<a style="float:right;margin-top:12px" title="这个季节 我们更需要靛蓝色基因" target="_blank" href="">
			  		<p style="position:absolute;left:25px;bottom:25px;color:#fff;text-align:left" class="p3">这个季节 我们更需要靛蓝色基因<br>
			    	<strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →</strong>
			    	</p>
			  
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_6_20131212.jpg">
				</a> 
			</div>


			<div class="element pict">
				<a target="_blank" href=""> 
					<span>SHOP NOW →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/bcf_banner.jpg">
				</a> 
			</div>

			<div class="element pict" >
				<a target="_blank" href=""> 
					<span>SHOP NOW →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/th_banner.jpg">
				</a> 
			</div>

			<div class="element pict"> 
				<a style="float:left" title="Black  classic forever" target="_blank" href="">
				  	<p style="position:absolute;top:50px;left:25px;color:#fff;text-align:left" class="p1">Black  classic forever<br>
				    I think black is a classic color.<br>
				    It will stay in fashion forever 
				    <strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →
				    </strong>
					</p>
			  		<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/black_winterwear.jpg">	
				</a> 
				<a style="float:right;margin-bottom:12px" title="经典简约棉服" target="_blank" href="">
			  		<p style="position:absolute;left:25px;top:50px;color:#fff;text-align:left" class="p2">经典简约棉服<br>
			    	<strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →</strong>
					</p> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_2_20131212.jpg">
				</a> 
				<a style="float:right" title="毛绒里复古条绒衬衫外套" target="_blank" href="">
					<span>HOT ITEM →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_4_20131212.jpg">
				</a> 
				<a style="float:right;margin-right:12px" title="时尚拼皮棒球衫夹克外套" target="_blank" href="">
					<span>HOT ITEM →</span> 
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_3_20131212.jpg">
				</a> 
				<a style="float:left;margin-top:12px" title="羊毛质感温暖相随" target="_blank" href="">
			  		<p style="position:absolute;left:25px;bottom:25px;color:#333;text-align:left" class="p3">
			  			羊毛质感温暖相随<br>
			   			 <strong style="border-top:1px solid #333;border-bottom:1px solid #333;float:left">SHOP NOW →</strong>
			 		</p>  
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_5_20131212.jpg"></a> 
				<a style="float:right;margin-top:12px" title="这个季节 我们更需要靛蓝色基因" target="_blank" href="">
			  		<p style="position:absolute;left:25px;bottom:25px;color:#fff;text-align:left" class="p3">这个季节 我们更需要靛蓝色基因<br>
			    	<strong style="border-top:1px solid #fff;border-bottom:1px solid #fff;float:left">SHOP NOW →</strong>
			    	</p>
			  
					<img src="http://127.0.0.1/SHOP/Static/style/img/lunboimg/focus_6_20131212.jpg">
				</a> 
			</div>



			</div>

			 <div class="element navi left" style="display: block; left: -990px;">

	  						<span class="arrow_left"></span>
			</div>
			<div class="element navi right" style="display: block; left: 990px;">
				<span class="arrow_right">
				</span>
			</div>
		</div>
	</div>
	  		<!-- 阴影部分 -->
	
	
<!-- 轮播结束 -->

<!--热点区域-->
	<div class="banner_wrap"> 
		<div id="widgets_397" class="border3 "> 
			<div class="b_box">  
				<ul>  
					<a target="_blank" href="">
						<img src="http://127.0.0.1/SHOP/Static/style/img/content/upto75.jpg">
					</a> 
					<li>
						<a target="_blank" href=""> 
							<h2>特惠专区</h2> 
							<span>订单内特惠区商品金额达到满减条件的<br>按满300减80 满500减150计算 </span>
						</a>
					</li>  
				</ul>  
				<ul>  
					<a target="_blank" href="">
						<img src="http://127.0.0.1/SHOP/Static/style/img/content/upto80.jpg">
					</a> 
					<li>
						<a target="_blank" href=""> 
							<h2>断码秒杀专区(随时更新)</h2> 
							<span>绝对低价，绝对超值<br>不参与满减活动，非质量问题不予退换 </span>
						</a>
					</li>  
				</ul>  
				<ul class="box_last">  
					<img src="http://127.0.0.1/SHOP/Static/style/img/content/freeshipping.jpg"> 
					<li> 
						<h2>全场购物满199免运费</h2> 
						<span>On all orders over rmb 199<br>FreeShipping </span>
					</li>  
				</ul>  
			</div>
		</div>  
	</div>
<!-- 热点区域结束 -->


	<!--  -->

	<div id="grid_wrap"> 
		<div class="grid"> 
			<div id="widgets_579" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2257.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>时尚提花毛领呢子绗缝棉服 深蓝色</strong></a></li> <li><span class="price_postion"> <span class="price">￥499.00</span></span> </li> 
				</ul> 
			</div>  
			<div id="widgets_745" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/1515.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>文艺气质翻领针织衫 米白色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥169.00</span><span class="ex_price">￥349.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_517" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2149.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>粗犷麻布包 卡其色</strong></a></li> 
					<li><span class="price_postion"> <span class="price">￥179.00</span><span class="ex_price">￥249.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_537" class="border3 "> 
				<ol class="ln"> <p> <a target="_blank" href=""><span>SEE MORE...</span> <img src="http://127.0.0.1/SHOP/Static/style/img/content/dm_20130808.jpg"><strong>断码特价</strong> 2.5折起  最后数件 恕不退换</a></p> 
				</ol> 
			</div> 
			<div id="widgets_605" class="border3 "> 
				<div class="boxgrid caption"> 
					<a target="_blank" href=""> <img src="http://127.0.0.1/SHOP/Static/style/img/content/nopstyle.jpg"><div class="cover boxcaption" style="right: 230px; "> <h3> NopStyle</h3> <p>  由 Nop Team 为您带来的精彩原创和推荐内容 </p> <p> SEE MORE...</p> </div> 
					</a> 
				</div> 
			</div> 
			<div id="widgets_363" class="border3 "> 
				<ol> <h3>NOP CLUB</h3> <input type="text" class="email" value="请输入常用邮件地址" onclick="OnEnter(this)" onblur="OnExit(this)" id="skey_email" name="textfield"> <input type="button" class="send" id="btn_email" name="button"> 
				</ol>
			</div> 
			<div id="widgets_657" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/1881.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>黑色撞钉牛皮皮带 黑色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥170.00</span><span class="ex_price">￥189.00</span></span> 
					</li> 
				</ul> 
			</div>  
		</div> 

		<div class="grid"> 
			<div id="widgets_751" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2369.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>仿麂皮绒可拆连帽轻便长款风衣 深蓝色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥299.00</span><span class="ex_price">￥499.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_753" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2387.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>经典开襟撞色拼接全棉毛衣 深花灰</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥199.00</span><span class="ex_price">￥349.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_755" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2331.jpg"> </a>
					</li>
					<li><a target="_blank" href=""><strong>复古毛线辫花毛线帽 藏蓝色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥69.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_647" class="border3 "> 
				<ol class="ln"> <p> <a target="_blank" href=""><span>SEE MORE...</span> <img src="http://127.0.0.1/SHOP/Static/style/img/content/guokr_20131108.jpg"><strong>果壳卫衣</strong> GREAT UNION OF KNOWLEDGE REPOSITORY</a></p> 
				</ol> 
			</div>  
		</div> 

		<div class="grid">  
			<div id="widgets_757" class="border3 ">
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2249.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>复古毛绒翻领贴袋呢子外套 蓝白格</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥369.00</span><span class="ex_price">￥429.00</span></span> 
					</li> 
				</ul>   
			</div> 
			<div id="widgets_759" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2381.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>经典圆领特殊针法全棉毛衣 深花灰</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥199.00</span><span class="ex_price">￥299.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_383" class="border3 "> 
				<ol>  
					<li><a target="_blank" href="">夹克外套</a>
					</li>  
					<li><a target="_blank" href="">大衣风衣</a>
					</li>  
					<li><a target="_blank" href="">羽绒棉服</a>
					</li>  
					<li><a target="_blank" href="">皮衣</a></li>  
					<li><a target="_blank" href="">卫衣</a></li>  
					<li><a target="_blank" href="">衬衫</a>
					</li>  
					<li><a target="_blank" href="">牛仔裤</a>
					</li>  
					<li><a target="_blank" href="">针织衫</a>
					</li>  
					<li><a target="_blank" href="">鞋包配饰</a>
					</li>  
				</ol> 
			</div> 
			<div id="widgets_645" class="border3 "> 
				<ol class="ln"> <p> <a target="_blank" href=""><span>SEE MORE...</span> <img src="http://127.0.0.1/SHOP/Static/style/img/content/2013fw_lookbook_wf.jpg"><strong>NOP lookbook 2013/fw</strong>view / download</a></p> 
				</ol> 
			</div> 
			<div id="widgets_535" class="border3 "> 
				<ol class="ln"> <p> <a target="_blank" href=""><span>SEE MORE...</span> <img src="http://127.0.0.1/SHOP/Static/style/img/content/fj_20131028.jpg"><strong>反季特惠</strong>3折起  优质经典 超值特惠</a></p> 
				</ol> 
			</div> 
			<div id="widgets_663" class="border3 "> 
				<div class="boxgrid caption"> 
					<a target="_blank" href=""> 
						<img src="http://127.0.0.1/SHOP/Static/style/img/content/nopstyle_20131118.jpg">
					<div class="cover boxcaption" style="right: 230px;"> <h3> 冬天很冷，还好有你</h3> <p> 演员孙艺洲身着NOP与宠物拍大片<br>与宠物一起玩闹的孙艺洲少了吕小布身上的不靠谱，没有了欧皓辰的冷峻，更比杜卫平多了一些爱心与顽皮。</p> <p> SEE MORE...</p> 
					</div> </a> 
				</div> 
			</div>  
		</div> 

		<div class="grid grid_last">  
			<div id="widgets_763" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2377.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>毛呢拼接羽绒袖长款大衣式羽绒服 深蓝色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥499.00</span><span class="ex_price">￥999.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_765" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2385.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>圆领色织几何花纹全棉毛衣 浅灰色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥299.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_769" class="border3 "> 
				<ol class="ln"> <p> <a target="_blank" href=""><span>SEE MORE...</span> <img src="http://127.0.0.1/SHOP/Static/style/img/content/st.jpg"><strong>手套</strong>兼具防寒性与精致造型的手套</a></p> 
				</ol> 
			</div> 
			<div id="widgets_635" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2341.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>简约百搭彩色毛线帽 啡色</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥59.00</span></span> 
					</li> 
				</ul> 
			</div> 
			<div id="widgets_461" class="border3 ">  
				<ul> 
					<li><a target="_blank" href=""> <span class="shopnow">SHOP NOW →</span><img src="http://127.0.0.1/SHOP/Static/style/img/content/2145.jpg"> </a>
					</li> 
					<li><a target="_blank" href=""><strong>水洗牛皮纸包 牛皮纸色小号</strong></a>
					</li> 
					<li><span class="price_postion"> <span class="price">￥99.00</span><span class="ex_price">￥149.00</span></span> 
					</li> 
				</ul> 
			</div>  
		</div> 
	</div>



	<!--  -->


	<!-- 尾部开始 -->
<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><div id="footer_wrap"> 
		<div class="footer"> 
			<ul> 
				<li>客户服务热线（免长途费）<br> 400-009-1616</li> 
				<li>工作时间<br> 周一至周六 9:00-18:00</li> 
				<li>联系我们<br> <a href="">info@nopshop.com</a></li> 
			</ul> 
			<ul> 
				<li><a target="_self" href="">品牌介绍</a></li> 
				<li><a target="_self" href="">加入我们</a></li> 
				<li><a target="_self" href="">咨询评论</a></li> 
				<li><a target="_self" href="">专题回顾</a></li> 
				<li><a target="_self" href="">隐私声明</a></li> 
				<li><a target="_self" href="">网站地图</a></li> 
				<li><a target="_self" href="">友情链接</a></li> 
			</ul> 
			<ul> 
				<li><a target="_self" href="">新手指南</a>
				</li> 
				<li><a target="_self" href="">尺码对照</a>
				</li> 
				<li><a target="_self" href="">支付方式</a></li> 
				<li><a target="_self" href="">银行支付说明</a></li> 
				<li><a target="_self" href="">配送方式</a></li> 
				<li><a target="_self" href="">售后服务</a></li> 
				<li><a target="_self" href="">会员计划</a></li> 
				<li><a target="_self" href="">优惠券使用说明</a></li> 
			</ul> 
			<ul> 
				<li><a target="_blank" href="">NopStyle</a></li> 
				<li><a target="_blank" href="">NOP官方微博</a></li> 
				<li><a target="_blank" href="">NOP豆瓣小站</a></li> 
				<li>NOP微信帐号</li> 
				<li><img src="http://127.0.0.1/SHOP/Static/style/img/footer/nop_wx_qr.jpg"></li> 
			</ul> 
			<ul> 
				<li>&copy;2013 NOP Fashion Limited</li> 
				<li>北京吾诺普科技有限公司</li> 
				<li>京ICP备11018296号</li> 
				<li>京公网安备110105007135</li> 
	
			</ul> 
		</div> 
	</div>
	











































































































</body>
</html>