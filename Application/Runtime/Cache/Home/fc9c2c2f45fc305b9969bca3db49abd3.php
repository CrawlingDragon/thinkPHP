<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/PersonalCenter/FarmMallPersonal/JIC/css/seller.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/common.js"></script>
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/footer.js"></script>
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
				<div class="lb-nav buyer-lb-nav"><!-- 左边导航 -->
					<dl>
						<dd><a href="">已买到的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="goods/cart.html">我的购物车</a></dd>
					</dl>
					<dl>
						<dd><a href="">收藏的商铺</a></dd>
						<dd><a href="">收藏的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="">我加入的商铺</a></dd>
					</dl>
					<dl>
						<dd><a href="">授信申请</a></dd>
						<dd><a href="">授信额度调整</a></dd>
						<dd><a href="">授信使用记录</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dd><a href="">我的评价</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar"><!-- 右边内容开始 -->
				<div class="rightPart"> <!-- 右边主体内容 -->
					<div class="myPlace"> <!-- 所在位置开始 -->
						<span>当前位置:</span>
						<a href="">首页</a>
						<span>&gt;</span>
						<a href="">卖家中心</a>
						<span>&gt;</span>
						<a href="">已卖出的商品</a>
					</div> <!-- 所在位置结束 -->
					<div class="right"> <!-- 右边评价部分 -->
						<div class="myEvaluate"> <!-- 我的评价部分开始 -->
							<h4>我的评价</h4>
							<h5>我的好评率:<span>100.00%</span></h5>
							<table border="1">
								<tr>
									<th></th>
									<th>最近一周</th>
									<th>最近1个月</th>
									<th>最近2个月</th>
									<th>最近6个月</th>
									<th>6个月前</th>
								</tr>
								<tr style="color: #ff6600;">
									<td>好评<img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
									<td>0</td>
									<td>4</td>
									<td>16</td>
									<td>29</td>
									<td>558</td>
								</tr>
								<tr style="color: #589325;">
									<td>中评<img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation2.png" alt=""></td>
									<td>0</td>
									<td>4</td>
									<td>16</td>
									<td>29</td>
									<td>558</td>
								</tr>
								<tr>
									<td>差评<img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation3.png" alt=""></td>
									<td>0</td>
									<td>4</td>
									<td>16</td>
									<td>29</td>
									<td>558</td>
								</tr>
							</table>
						</div><!-- 我的评价部分结束 -->
						<div class="evaluateShow"> <!-- 来自卖家买家的评价开始 -->
							<div class="navButton">
								<span class="active">来自卖家的评论</span>
								<span>给卖家的评论</span>
							</div>
							<div class="showBox">
								<div class="showBox1">
									<table cellPadding="0" cellSpacing="0" border-spacing="0">
										<tr>
											<th>评价时间</th>
											<th>评价</th>
											<th>评价内容</th>
											<th>评价人</th>
											<th>商品信息</th>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物</a></td>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物</a></td>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物</a></td>
										</tr>
									</table>
								</div>
								<div class="showBox2" style="display: none">
									<table cellPadding="0" cellSpacing="0" border-spacing="0">
										<tr>
											<th>评价时间</th>
											<th>评价</th>
											<th>评价内容</th>
											<th>评价人</th>
											<th>商品信息</th>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了2。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物2</a></td>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了2。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物2</a></td>
										</tr>
										<tr>
											<td>2015-06-11&nbsp11:22：45</td>
											<td><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/evaluation1.png" alt=""></td>
											<td>对症下药，东西很好，使用方法也很简单，一般农户都能直接用上了2。
											</td>
											<td>商家：宁****泰</td>
											<td><a href="#">燕化传奇 甲硫 吡唑酯 杀菌剂梧宁®—四霉素后产物2</a></td>
										</tr>
									</table>
								</div>
							</div>
						</div><!-- 来自卖家买家的评价结束 -->
					</div><!-- 右边评价结束 -->
				</div>
			</div><!-- 右边内容开始end -->
		</div>
	</section>
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
	$(function(){
		//来自卖家和卖家的评价的卡片切换
		$(".navButton>span").click(function(){
			$(this).addClass("active").siblings().removeClass("active");
			$('.showBox>div:eq('+$(this).index()+')').show().siblings().hide();
		})
	})
</script>
</body>
</html>