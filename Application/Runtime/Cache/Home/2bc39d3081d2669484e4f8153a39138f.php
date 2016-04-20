<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/CommonPersonalCenter/Common/css/bscommon.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/CommonPersonalCenter/Common/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/CommonPersonalCenter/JCI/css/vipSet.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/CommonPersonalCenter/Common/js/common.js"></script>
	<!--[if IE 8.0]><link href="/Public/mall/wuhelong/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/Public/mall/wuhelong/IE8.js" type="text/javascript"></script>
	<![endif]-->
	<script type="text/javascript"> //判断ie8以下浏览器
		var flag = true; 
		var ua = navigator.userAgent.toLowerCase(); 
		if(navigator.userAgent.indexOf("MSIE")>0)  
		{   
		    if(navigator.userAgent.indexOf("MSIE 6.0")>0){   
		    	window.location.href="http:tip.html";
		    }   
		    if(navigator.userAgent.indexOf("MSIE 7.0")>0){  
		   	 	window.location.href="http:tip.html";
		    }   
		    if(navigator.userAgent.indexOf("MSIE 8.0")>0){  
		  		//alert("ie8");  
		    }   
		    if(navigator.userAgent.indexOf("MSIE 9.0")>0){  
		   		//alert("ie9");  
		    }   
		}else{  
			flag = false;  
			
			}   
		if(!flag){  

		}  

	</script>

</head>
<body>
	<div class="header"><!-- 头部开始 -->
		<div class="header-wrap">
			<div class="header-top"><!-- 头部上面部分 -->
				<div class="left">
					<img src="/Public/mall/wuhelong/images/bslogo.png" alt=""><!-- logo -->
				</div>
				<div class="right"><!-- 右边内容 -->
					<ul class="ul1 clear"><!-- 帮助中心 -->
						<li style="cursor: default;">服务热线：0571-87661678</li>
						<li onclick="AddFavorite('中农在线','http://www.baidu.com')">收藏本站</li>
						<li><a href="" class="f12 cf">帮助中心</a></li>
						<li class="name">Hi,ceshiyi<img src="/Public/mall/CommonPersonalCenter/Common/Image/headLoginNameUp.png">
							<div class="nameCont">
								<a href="">退出登录</a>
								<a href="">帐号管理</a>
							</div>
						</li>
						<li>请登录</li>
					</ul>
					<ul class="ul2 clear"><!-- 商城链接 -->
						<li><a href="">中农在线</a></li>
						<li><a href="">网上庄稼医院</a><span>|</span></li>
						<li><a href="">农资商城</a><span>|</span></li>	
					</ul>
				</div>
			</div>
		</div><!-- 头部上面部分end -->
		<div class="header-nav"><!-- 头部导航部分 -->
			<div class="navCont">
				<a href="" class="active"><span>首页</span></a>
				<a href="" class="active1"><span class="active2">会员设置</span></a>
				<a href="" class="active"><span>农资商城管理</span></a>
				<a href="" class="active"><span>网上庄稼医院管理</span></a>
			</div>
		</div><!-- 头部上面部分end -->
	</div><!-- 头部开始end -->
	<section class="containar"><!-- 主体内容开始 -->
		<div class="containarWrap clear">
			<div class="leftBar"><!-- 左边导航公共部分 -->
				<div class="lb-head"><!-- 头像 -->
					<div class="lb-head-bj">
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/lufei.jpg" alt="">
						<a href="" class="membrane">编辑资料</a><!-- 阴影 -->
					</div>
				</div><!-- 头像end -->
				<div class="lb-nav"><!-- 左边导航 -->
					<dl>
						<dt>个人信息设置</dt>
						<dd><a href="" class="active">基本信息</a></dd>
						<dd><a href="">公司信息</a></dd>
						<dd><a href="">头像设置</a></dd>
					</dl>
					<dl>
						<dt>账户绑定</dt>
						<dd><a href="">邮箱绑定</a></dd>
						<dd><a href="">手机号码绑定</a></dd>
					</dl>
					<dl>
						<dt>账户安全</dt>
						<dd><a href="">安全中心</a></dd>
						<dd><a href="">登录密码</a></dd>
						<dd><a href="">支付密码</a></dd>
						<dd><a href="">实名账户</a></dd>
						<dd><a href="">安全保护问题</a></dd>
						<dd><a href="">银行卡管理</a></dd>
					</dl>
					<dl>
						<dt>帐户设置(管理员)</dt>
						<dd><a href="">已有账户</a></dd>
						<dd><a href="">添加账户</a></dd>
					</dl>
					<dl>
						<dt>消息设置</dt>
						<dd><a href="">消息设置</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dt>界面设置</dt>
						<dd><a href="">自定义菜单</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar"><!-- 右边内容 -->
				<div class="smallTitle">安全中心</div>
				<div class="safeLv">
					安全级别:
					<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeLv1.png" alt="" style="display: none;">
					<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeLv2.png" alt="">
					<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeLv3.png" alt="" style="display: none;">
					<span>中级</span>
					<i>建议您启动全部安全设置，以保障账户及资金安全</i>
				</div>
				<ul class="safeBox">
					<li>
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeRight.png" alt="" class="right"><!-- 正确时的图片 -->
						<!-- <img src="/Public/mall/CommonPersonalCenter/Common/Image/safeWarn.png" alt="" class="warn">警告时的图片 -->
						<!--<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeError.png" alt="" class="error">错误时的图片 --> 
						<h5>登录密码</h5>
						<span>密码强度为:<i>中</i></span>
						<a href="" class="change">修改</a>
					</li>
					<li>
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeWarn.png" alt="" class="warn">
						<h5>邮箱验证</h5>
						<span>已添加的邮箱：28***4@163.com</span>
						<a href="" class="now">马上验证</a>
						<a href="" class="change">修改</a>
					</li>
					<li>
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeWarn.png" alt="" class="warn">
						<h5>绑定手机</h5>
						<span>已添加的手机：158****47</span>
						<a href="" class="now">立即绑定</a>
						<a href="" class="change">修改</a>
					</li>
					<li>
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeError.png" alt="" class="error">
						<h5>支付密码</h5>
						<span>密码强度为:<i>强</i></span>
						<a href="" class="change">修改</a>
					</li>
					<li>
						<img src="/Public/mall/CommonPersonalCenter/Common/Image/safeError.png" alt="" class="error">
						<h5>安全问题</h5>
						<span>设置完成后，找回密码时可通过回答问题迅速找回</span>
						<a href="" class="btn">立即设置</a>
					</li>
				</ul>
			</div><!-- 右边内容end -->
		</div>
	</section>	<!-- 主体内容end -->
	<div class="footer"><!-- 公共底部 -->
		<div class="footerWrap">
			<dl class="clear">
				<dt>猜你喜欢</dt>
				<dd><a href="" class="more">更多</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">钾肥 </a></dd>
				<dd><a href="">钙肥</a></dd>
				<dd><a href="">棉花种子</a></dd>
				<dd><a href="">大豆种子 </a></dd>
				<dd><a href="">花生种子</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href="">磷肥</a></dd>
				<dd><a href=""> 棉花种子 </a></dd>
				<dd><a href="">大豆种子</a></dd>
				<dd><a href="">花生种子</a></dd>
			</dl>
			<div style="height: 236px;border:1px solid pink;margin-top: 20px;"><!-- 底部轮播 -->
				
			</div><!-- 底部轮播end -->
		</div>
	</div><!-- 公共底部结束 -->
	<div class="footNav">
		<ul class="clear">
			<li><a href="">公司简介</a><span>|</span></li>
			<li><a href="">帮助中心</a><span>|</span></li>
			<li><a href="">招商入驻</a><span>|</span></li>
			<li><a href="">网站合作</a><span>|</span></li>
			<li><a href="">法律申明</a><span>|</span></li>
			<li><a href="">联系我们</a><span>|</span></li>
			<li><a href="">举报中心</a></li>
		</ul>
		<p>© 2015 中农在线 版权所有，并保留所有权利增值电信业务经营许可证:浙B2-20150086</p>
	</div>
</body>
</html>