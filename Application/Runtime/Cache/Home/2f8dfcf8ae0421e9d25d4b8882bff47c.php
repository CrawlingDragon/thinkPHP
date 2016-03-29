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
	<style type="text/css">
		/*.item .formtips{display: inline-block;width: auto;}*/
	</style>

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

		//手机验证 form
        $('.tel-form :input').blur(function(){
			var $parent = $(this).parent();
            $parent.find(".formtips").remove();
            $(this).removeAttr("style");
            //手机号
            if ($(this).is('#phoneNumber')) {
            	var telReg= /^1[3|4|5|8|9]\d{9}$/;
            	if (this.value=="" ||(!telReg.test(this.value))) {
                	var errorMsg = '请输入正确的手机号';
              		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
              		$(this).css("border","1px solid #ff6600");
                }
            }
            //验证码
            if( $(this).is('#smsValue') ){
                if( this.value=="" ){
                    var errorMsg = '请输入验证码！';
                    $parent.append('<p class="formtips onError">'+errorMsg+'</p>');
                    $(this).css("border","1px solid #ff6600");
                }
            }
		}).keyup(function(){
           $(this).triggerHandler("blur");
        });

		//手机验证 提交  验证手机号
        $('.form-btn-tel').click(function(){
            $(".tel-form :input.require").trigger('blur');//点击btn之后再次检测一遍form的内容
            var numError = $('form .onError').length;
            if(numError){
                return false;
            }
        });
        

        //邮箱 form
        $('.email-form :input').blur(function(){
			var $parent = $(this).parent();
            $parent.find(".formtips").remove();
            $(this).removeAttr("style");
            //验证邮件
            if( $(this).is('#email') ){
                if( this.value=="" || ( this.value!="" && !/.+@.+\.[a-zA-Z]{2,4}$/.test(this.value) ) ){
                    var errorMsg = '请输入正确的E-Mail地址';
                    $parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
                    $(this).css("border","1px solid #ff6600");
                }
            }
		}).keyup(function(){
           $(this).triggerHandler("blur");
        });
        //提交  验证邮箱
        $('.form-btn-email').click(function(){
        	$(".email-form :input.require").trigger('blur');
        	var numError = $('form .onError').length;
            if(numError){
                return false;
            }else if (true) {
        		window.location = "membeiShip-emailSuccess.html";
        	} else{
        		window.location = "membeiShip-emailFail.html";
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
		<h3>会员验证</h3>
		<div class="main-form">
			<div class="item">
				<span>请选择验证身份方式：</span>
				<div class="dropDownList">
					<select name="" id="" onChange="javascript:optionCheck(this.value)" class="input250">
			            <option value="1">手机</option>
			            <option value="2">邮箱</option>
			        </select>
			        
				</div>
			</div>
			<!-- 手机验证 -->
			<form action="" method="" class="tel-form">
				<div id="tel-check" style="display:block;"> 
					<div class="item">
					<span>登录名：</span>
					<strong>wsc123456</strong>
					</div>
					<div class="item">
						<span>手机号码：</span>
						<input type="text" name="phoneNumber" id="phoneNumber" value="" class="input250 require" />
					</div>
					<div class="item">
						<span>请填写手机验证码：</span>
						<input type="text" name="" value="" id="smsValue" class="input120 require " />
						<input type="button" name="" id="smsValueGet" value="发送手机验证码" class="send-sms" onclick="settime(this);">
					</div>
					<div class="item">
						<span> </span>
						<a href="improvePersonalData.html" class="form-btn form-btn-tel">下一步</a>
					</div>
				</div>
			</form>
			
			<!-- 邮箱验证 -->
			<form action="" method="" class="email-form">
				<div id="email-check" style="display:none;"> 
					<div class="item">
					<span>登录名：</span>
					<strong>wsc123456</strong>
					</div>
					<div class="item">
						<span>邮箱地址：</span>
						<input type="text" name="email" id="email" value="" class="input250 require" />
					</div>
					<div class="item">
						<span> </span>
						<a href="javascript:void(0);" class="form-btn form-btn-email send">发送验证邮件</a>
					</div>
				</div>
			</form>
			
		</div>
	</section>
	<script language="javascript">
		function optionCheck(cvalue){
			if(cvalue == "1"){
				document.getElementById("email-check").style.display="none";
				document.getElementById("tel-check").style.display="block";
			}else if(cvalue == "2"){
				document.getElementById("email-check").style.display="block";
				document.getElementById("tel-check").style.display="none";
			}
		}
	</script>

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