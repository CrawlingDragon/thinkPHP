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
	<script type="text/javascript">
		$(function(){
			
        	$('form :input').blur(function(){
	             var $parent = $(this).parent();
	             $parent.find(".formtips").remove();
	             $(this).removeAttr("style");
	             //手机验证
	             if($(this).is('#phoneNumber')){
	             	var telReg= /^1[3|4|5|8|9]\d{9}$/; //手机号码
	             	if (this.value=="" || (!telReg.test(this.value))) {
	             		var errorMsg = '请输入格式正确的手机号';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	}
	             }
	  


	             //手机验证码验证
	             if( $(this).is('#smsValue') ){
	                if( this.value=="" ){
	                      var errorMsg = '请输入验证码！';
	                      $parent.append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	             }

	        }).keyup(function(){
	           $(this).triggerHandler("blur");
	        });//end blur

			//点击获取短信验证
	        $('#smsValueGet').click(function(){
	        	$("#userName").parent().find(".formtips").remove();
	        	$("#userName").removeAttr("style");
	        	if(!/^1[3|4|5|8|9]\d{9}$/.test($("#userName").val())) {
	                      var errorMsg = '请输入正确的手机号！';
	                      $("#userName").parent().append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $("#userName").css("border","1px solid #ff6600");
	                      return;
	                }

	            //点击获取验证码之后显示"60秒倒计时"
	            settime(this);
	        });	   
	        
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
		<img src="/Public/mall/images/appeal-pwd3.png" class="pwd-path">
		<div class="main-form">
			<form action="" method="">
				<div class="item">
					<span>填写新手机号码：</span>
					<input type="text" name="phoneNumber" id="phoneNumber" value="" placeholder="请输入您的新手机号码" class="input250 require"  />
				</div>
				<div class="item">
					<span>验证码：</span>
					<input type="text" name="smsValue" id="smsValue" value="" placeholder="验证码" class="input120 require" />
					<input type="button" name="" id="smsValueGet" value="获取短信验证" class="input120" />
				</div>
				<div class="item">
					<span> </span>
					<a href="appeal4.html" class="form-btn">提交</a>
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