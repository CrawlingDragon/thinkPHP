<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/CommonPersonalCenter/JCI/css/vipSet.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/common.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/footer.js"></script>
		<script type="text/javascript" src="/Public/mall/common/js/Validation.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/laydate/laydate.js"></script>
	<!--[if IE 8.0]><link href="/Public/mall/wuhelong/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/Public/mall/wuhelong/IE8.js" type="text/javascript"></script>
	<![endif]-->
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
						<li class="name">Hi,ceshiyi<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/headLoginNameUp.png">
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
						<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/lufei.jpg" alt="">
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
			<div class="rightBar cyWrap"><!-- 右边内容 -->
				<div class="cyTitle">请填写真实的资料！</div>
				<form action="" class="cyForm">
					<div class="list">
						<label for="">公司名称:</label>
						<input type="text" name="" id="" onblur="comName(this)" onkeyup="comName(this)">
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="">营业执照注册号:</label>
						<input type="text" name="" id="" onblur="bisLicense(this)" onkeyup="bisLicense(this)">
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="" class="photo">营业执照副本照片:</label>
						<div class="upBox">
							<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/delete.png" alt="" class="img1">
							<img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/search.png" alt="" class="img2">
							<div class="upCont">+</div>
							<span>单张图片最大不能超过1M，图片格式仅限：jpg, gif, png, jpeg</span>
						</div>
					</div>
					<div class="list">
						<label for="" class="range">经营范围:</label>
						<textarea placeholder="请用简短文字描述经营范围" cols="40" rows="" onblur="bisScope(this)" onkeyup="bisScope(this)"></textarea>
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="">注册资本:</label>
						<input type="text" name="" id="" onkeyup="capital(this)" onblur="capital(this)">
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="">注册地址:</label>
						<input type="text" name="" id="" onkeyup="loginAds(this)" onblur="loginAds(this)">
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="">法人代表:</label>
						<input type="text" name="" id="" onblur="corporate(this)" onkeyup="corporate(this)">
						<p class="errorMsg"></p>
					</div>
					<div class="list">
						<label for="">成立时间:</label>
						<input type="text" name="" id="time1">
						<p class="errorMsg"></p>
					</div>
					<input type="submit" value="提交" class="biSub" id="sub">
				</form>
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
			<div style="height: 236px;margin-top: 20px;"><!-- 底部轮播 -->
				<div class="Div1">
				    <!-- <b class="Div1_prev Div1_prev1" ><img src="images/lizi_img011.jpg" title="上一页" /></b>
				    <b class="Div1_next Div1_next1" ><img src="images/lizi_img012.jpg"  title="下一页"/></b> -->
				    <div class="Div1_main">
				    	<div>
				        	<span class="Div1_main_span1">
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>     
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥击</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>  
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>         
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				        <div>
				        	<span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				            <span>
				            	<a href="javascript:void(0)" class="Div1_main_a1"><img src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/footerGoodsImg.png" /></a>      
				                <a href="javascript:void(0)" class="Div1_main_a2">道尔纯硫酸钾复合肥</a>
				            </span>
				        </div>
				    </div>
				    <div class="smallNav">
				    	<div class="list1 navs active"></div>
				    	<div class="list2 navs"></div>
				    	<div class="list3 navs"></div>
				    	<div class="list4 navs"></div>
				    	<div class="list5 navs"></div>
				    </div>
				</div>
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
<script type="text/javascript">

		// 日历1
		laydate({
		   elem: '#time1',  
		});
		$('#sub').click(function(){
			$('input[type=text]').trigger('blur');
			// var len = $('.errorMsg').length;
			var txt = $('.errorMsg').text();
			if($('.errorMsg').text()!==''){
				return false;
			}else if($('#time1').val()==''){
				$('#time1').focus();
				alert('请输入成立时间');
				return false;
			}else{
				return true;

			}
		})
</script>
</body>
</html>