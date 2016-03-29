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
	<!-–[if lt IE 8]>
	<script type="text/javascript" src="/Public/mall/js/IE8.js"></script>
	<![endif]–->
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
			<h3>会员登录</h3>
			<form action="" method="">
				<div class="item">
					<span>登录名：</span>
					<input type="text" name="userNameLogin" id="userNameLogin" value="" placeholder="用户名/邮箱/手机号" class="input310 require" />
				</div>
				<div class="item">
					<span>登录密码：</span>
					<input type="password" name="userPwd" id="userPwd" value="" placeholder="密码" class="input310 require" />
				</div>
				<div class="item">
					<span>验证码：</span>
					<input type="text" name="verify" id="verify" value="" class="input150 require" />
					<img style="cursor:pointer;float:left;" title="刷新验证码" id="randimg" src="/Public/mall/images/demo.jpg">
					<em>换一张</em>
				</div>
				<div class="item">
					<span></span>
					<input type="submit" name="subBtn" id="subBtn" value="登录" class="subBtn" />
				</div>
				<div class="item">
					<span></span>
					<label class="logTip lf">您已经同意<a href="###" target="_blank">用户使用条款</a></label>
					<a class="logTip fr" href="###" target="_blank">忘记密码？</a>
				</div>
			</form>
		</div>
		<div class="rtSide fr">
			<p class="logTip" style="text-align:right;">我还没有帐号，现在马上<a href="regist.html" target="_blank">注册</a></p>
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