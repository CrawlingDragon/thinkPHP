<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/vipdate.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>

	<!--[if IE]> 
	<script> 
	(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript" src="/Public/mall/js/IE8.js"></script>
	<![endif]-->
	<script type="text/javascript">
		$(function(){
			
        	$('form :input').blur(function(){
	             var $parent = $(this).parent();
	             $parent.find(".formtips").remove();
	             $(this).removeAttr("style");
	             //登录名验证
	             if($(this).is('#userName')){
	             	var telReg= /^1[3|4|5|8|9]\d{9}$/; //手机号码
	             	if (this.value=="" || (!telReg.test(this.value))) {
	             		var errorMsg = '请输入格式正确的用户名';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	}
	             }
	           

	             //电脑验证码
	             if( $(this).is("#verify") ){
	                if( this.value=="" ){
	                	$(".tip").prev(".onError2").addClass("onError");
	                 	$(".tip").prev(".onError2").text("请输入验证码！");
	                    $(this).css("border","1px solid #ff6600");
	                }else{
	                	$(".tip").prev(".onError2").text("");
	                	$(".tip").prev(".onError2").removeClass("onError");
	                }
	             }

	             
        
	        }).keyup(function(){
	           $(this).triggerHandler("blur");
	        });//end blur

	       
	        
	        //提交，最终验证。
	         $('.form-btn').click(function(){
	                $("form :input.require").trigger('blur');//点击btn之后再次检测一遍form的内容
	        
	                var numError = $('form .onError').length;
	                if(numError){
	                    return false;
	                }

	         });


		});
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



	<section class="main-wrap">
		<h3>申诉</h3>
		<img src="/Public/mall/images/appeal-pwd1.png" class="pwd-path">
		<div class="main-form">
			<form action="" method="">
				<div class="item">
					<span>登录名：</span>
					<input type="text" name="userName" id="userName" value="" placeholder="请输入您的登录名" class="input250 require"  />
				</div>
				<div class="item">
					<span>验证码：</span>
					<input type="text" name="verify" id="verify" value="" placeholder="验证码" class="input120 require" />
					<img style="cursor:pointer;float:left;" title="刷新验证码" id="randimg" src="/Public/mall/images/demo.jpg">
					<label>换一张</label>
					<p class="onError2"></p>
					<p style="font-size:12px;color:#999;padding:10px 0 0 443px;clear:left;" class="tip">请输入右图中的字符（不区分大小写）</p>
				</div>
				<div class="item">
					<span> </span>
					<a href="appeal2.html" class="form-btn">我要申诉</a>
				</div>


			</form>
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