<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/loginRegister.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/js/loginRegiter.js"></script>
	

	<!--[if IE]> 
	<script> 
	(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="/Public/mall/js/IE8.js"></script>
	<![endif]-->
	<script type="text/javascript"> 
	var countdown=60; 
	function settime(obj) { 
	    if (countdown == 0) { 
	        obj.removeAttribute("disabled");
	        obj.removeAttribute("style");    
	        obj.value="重新获取验证码"; 
	        countdown = 60; 
	        return;
	    } else { 
	        obj.style.cursor = "auto";
	        obj.style.backgroundColor = "#e5e5e5";
	        obj.setAttribute("disabled", true); 
	        obj.value="(" + countdown + ")秒倒计时"; 
	        countdown--; 
	    } 
	setTimeout(function() { 
	    settime(obj) }
	    ,1000) 
	}
	</script>


</head>
<body>
	<header>
	<div class="main-header">
		<section>
			<div class="logo fl"></div>
			<div class="li-link fr">
				<a href="###">农资商城</a>&emsp;|&emsp;
				<a href="###">网上庄稼医院</a>&emsp;|&emsp;
				<a href="###">中农在线</a>
			</div>
		</section>
	</div>	
</header>


	<section class="mainWrap">
		<div class="lfSide fl">
			<h3>注册会员</h3>
			<form action="" method="">
				<div class="item">
					<span>手机：</span>
					<input type="text" name="userName" id="userName" value="" placeholder="可用于登录和找回密码" class="input310 require" />
				</div>
				<div class="item">
					<span>验证码：</span>
					<input type="text" name="smsValue" id="smsValue" value="" placeholder="验证码" class="input150 require" />
					<input type="button" name="" id="smsValueGet" value="获取短信验证" class="input150" />
				</div>
				<div class="item">
					<span>登录密码：</span>
					<input type="password" name="userPwd" id="userPwd" value="" placeholder="由6-20位字母、数字、特殊符号的任意二种以上组合" class="input310 require" />
				</div>
				<div class="item">
					<span>确认密码：</span>
					<input type="password" name="userPwd2" id="userPwd2" value="" placeholder="密码" class="input310 require" />
				</div>
				
				<div class="item">
					<span style="height:14px;"></span>
					<input type="checkbox" class="fl readMe" checked="checked" name="readMe" />
					<label class="logTip fl">  阅读并接受<a href="###" target="_blank">《用户使用协议》</a></label>
				</div>
				<div class="item">
					<span></span>
					<input type="submit" name="subBtn" id="subBtn" value="注册" class="subBtn" />
				</div>
				
			</form>
		</div>
		<div class="rtSide fr">
			<p class="logTip" style="text-align:right;">已经有帐号，现在马上<a href="login.html" target="_blank">登录</a></p>
			<div class="two-code"></div>
		</div>
	</section>

	<footer>
	<div class="footerImg">
		<ul>
			<li>政府护航  购物无忧</li>
			<li style="background-position:-22px -141px;">随时随地  想问就问</li>
			<li style="background-position:-22px -214px;">全程跟踪  放心农资</li>
			<li style="background-position:-22px -289px;">省内热线 <em>96318</em></li>
		</ul>
	</div>
	<p>© &nbsp;2015 &nbsp;中农在线&nbsp; 版权所有，&nbsp;并保留所有权利</p>
	<p>增值电信业务经营许可证:浙B2-20150086</p>
</footer>
</body>
</html>