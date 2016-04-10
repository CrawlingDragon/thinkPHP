<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="/Public/mall/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/css/common.css" type="text/css">
	<link rel="stylesheet" href="/Public/mall/css/index.css" type="text/css">
	<script type="text/javascript" src="/Public/mall/js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="/Public/mall/js/common.js"></script>
	<script type="text/javascript" src="/Public/mall/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="/Public/mall/js/scroll.js"></script>
	<script type="text/javascript" src="/Public/mall/js/gotop.js"></script>
	<!--[if IE 8.0]><link href="/Public/mall/css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
	<!--[if lt IE 8]>
	<script src="/Public/mall/IE8.js" type="text/javascript"></script>
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
<a href="/home/goods/goodslist.html">列表页</a><a href="/home/goods/goodsdetail.html">详情页</a>
	<header><!-- 头部开始 -->
		<article class="headerTop clear">
			<section class="header-left"> <!-- 头部左边 未读消息 -->
				<a href="/home/goods/goodslist.html" class="message-title">
					<div>
						<img src="/Public/mall/images/messageImg3.png" alt="">未读消息<span class="fb messageNum">10</span>
						<span class="downImg"></span>
					</div>
				</a>
					<ul class="messageBox hide">
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<li>
								<div>2015-05-05<i>10:53:48</i></div>
								<div><a href="消息.html" class="c6">发货啦！您购买的 <span class="green">梧宁®—梧宁梧宁梧宁梧宁梧宁</span></a></div>
							</li>
							<a href="消息.html" class="messageSet">设置</a>
							<a href="消息.html" class="messageAll">查看全部</a>
					</ul>
			</section>
			<section class="header-right"> <!-- 头部右边导航 -->
				<ul>
					<li style="display: none;">
						<a href="#" class="orange">登陆</a>
					</li>
					<li style="display: none;">
						<a href="#">注册</a>
					</li>
					<li class="list1">
						<a href="打印机.html" class="list-title">Hi,cehiyi</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="账户管理-我的财富.html">帐号管理</a></li>
							<li><a href="">退出登录</a></li>
						</ul>
					</li>
					<li class="list2">
						<a href="买家用户中心.html" class="list-title">我的订单</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="买家中心-已买到的商品.html">已买到的商品</a></li>
						</ul>
					</li>
					<li class="list3">
						<a href="#" class="list-title">收藏夹</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="买家中心-我的收藏-我收藏的商品.html">收藏的商品</a></li>
							<li><a href="买家中心-我的收藏-我收藏的商铺.html">商场的商铺</a></li>
						</ul>
					</li>
					<li class="list4">
						<a href="卖家中心.html" class="list-title">卖家中心</a>
						<ul class="list1-cont" style="display: none;">
							<li><a href="交易管理-已卖出的商品.html">卖出的商品</a></li>
							<li><a href="商品管理-出售中的商品.html">出售中的商品</a></li>
							<li><a href="客户管理-认证客户.html">认证客户</a></li>
							<li><a href="授信管理-授信关系.html">关系管理</a></li>
						</ul>
					</li>
					<li>
						<a href="#">帮助中心</a>
					</li>
					<li style="margin:0">
						<a href="javascript:void(0);" onclick="AddFavorite('百度','http://www.baidu.com')">收藏本站</a>
					</li>
					<li style="padding:0;margin-right: 0;">
						<p>服务热线：0571-87661678</p>
					</li>
				</ul>
			</section>
		</article>
		<div class="hr2"></div>
		<article class="headerBottom clear">
			<section class="headerBottom-box">
			<section class="logo"> <!-- 中农在线Logo -->
				<img src="/Public/mall/images/logo.png" alt="">
			</section>
			<section class="searchBox">   <!-- 搜索框 -->
				<form action="" method="">
					<div class="search-list">
						<ul class="serachBar">
							<div class="selected">商品</div>
							<li>商品</li>
							<li>厂家</li>
						</ul>
					</div>
					<input type="text" name="" id="" placeholder="输入关键字">  
					<input type="submit" name="" id="" value="搜索">
				</form>
				<div class="searchList">   <!-- 默认搜索商品 -->
					<ul>
						<li><a href="#">雅苒</a></li>
						<li><a href="#">诺普丰</a></li>
						<li><a href="#">怀农特</a></li>
						<li><a href="#">沃家福</a></li>
						<li><a href="#">康宽</a></li>
						<li><a href="#">福帅得</a></li>
					</ul>
				</div>
				<div class="goodsCar">   <!-- 购物车按钮 -->
					<a href="#">
						<img src="/Public/mall/images/car.png" alt="">
						<p>购物车<span>0</span></p>
					</a>
				</div>
			</section>
			</section>
		</article>
		<div class="bannarBox-bj clear"><!-- 公司导航栏开始 -->
			<article class="bannarBox  sellerNav">
				<div class="bannarLeft"> <!-- 所有商品分类开始 -->
					<div class="title">
						<img src="/Public/mall/images/bannartitle.png" alt="所有商品分类">
						<span class="fb">所有商品分类</span>
					</div>
				</div><!-- 所有商品分类结束 -->
				<!-- 中间导航开始 -->
				<div class="bannarMiddle">
					<ul id="box2">
						<li><a href="#">网上庄稼医院</a></li>
						<li><a href="#">试验示范</a></li>
						<li><a href="#">农技培训 </a></li>
						<li><a href="#">病虫害图库</a></li>
					</ul>
				</div><!-- 中间导航结束 -->
				<div class="areaShops fastNav"> <!-- 区域商铺开始 -->
						<div class="shopTitle">
							快速导航
						</div>
						<div class="fastNav-cont"><!-- 隐藏盒子 -->
							<div class="loginedWrap" ><!-- 已经登录的状态 -->
								<div class="logined-title">HI! 您好，<span class="fb f12">王思聪</span></div>
								<div class="logined-cont">
									<ul id="login-btn">
										<li class="active">我加入的商铺</li>
										<li>查找别的商铺</li>
									</ul>
									<div id="showBox">
										<div class="showCont"> <!-- 内容1开始 -->
											<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<div class="searchWrap">
												<input type="text" name="" id="" class="txt" placeholder="直接输入要查找的公司">
												<input type="button" value="查找" class="btn">
											</div>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a>
													</dd>
													</dl>
											<div class="changeBtn clear">
												<p style="text-align: right;"><a href=""><span><i class="fb">&lt;</i></span>上一页</a></p>
												<p style="float: right;"><a href=""><span>下一页</span><i class="fb">&gt;</i></a></p>
											</div>
										</div><!-- 内容1结束 -->
										<div class="showCont hide"><!-- 内容2开始 -->
											<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<div class="searchWrap">
												<input type="text" name="" id="" class="txt" placeholder="直接输入要查找的公司">
												<input type="button" value="查找" class="btn">
											</div>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a></dd>
													</dl>
											<div class="changeBtn clear">
												<p style="text-align: right;"><a href=""><span><i class="fb">&lt;</i></span>上一页</a></p>
												<p style="float: right;"><a href=""><span>下一页</span><i class="fb">&gt;</i></a></p>
											</div><!-- 内容2结束 -->
										</div>
									</div>
								</div>
							</div><!-- 已经登录的状态end -->
							<div class="bfloginWrap" style="display: none;"><!-- 未登录的状态 -->
								<div class="bflogin-title">
									<p>HI! 您好，请先登录/注册</p>
									<div class="go" style="margin-left: 20px"><a href="">登录</a></div>
									<div class="go"><a href="">注册</a></div>
									<div class="go"><a href="">申请开店</a></div>
								</div>
								<div class="shoppes">
									<img src="/Public/mall/images/shoppes.png" alt="">
									<span>名铺推荐</span>
								</div>
								<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd>
														<a href=""><p>建德市新安植保有限责任公司</p>
															<span>
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
																<img src="/Public/mall/images/start2.png" alt="">
															</span>
														</a>
													</dd>
													</dl>
									<div class="other">
										<img src="/Public/mall/images/changeone.png" alt=""><span>换一组</span>
									</div>
							</div><!-- 未登录的状态end -->
							<div class="notapply hide"><!-- 未申请店铺的 -->
								<div class="notapply-title">
									<p>HI! 您好，<span class="fb f12">宁波金泰惠多利农资有限公司</span></p>
									<a href="">申请开店</a>
								</div>
								<form action="">
												<select id="aa">
													<option value="">北京省</option>
													<option value="">浙江省</option>
												</select>
												<select>
													<option value="">杭州市</option>
													<option value="">上海市</option>
												</select>
												<select>
													<option value="">滨江</option>
													<option value="">萧山</option>
												</select>
											</form>
											<div class="searchWrap">
												<input type="text" name="" id="" class="txt" placeholder="直接输入要查找的公司">
												<input type="button" value="查找" class="btn">
											</div>
											<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>嘉兴市金泰农资有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">		
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt=""></span></a></dd>
															<dd><a href=""><p>浙江惠多利农资连锁有限公司</p>
																<span>
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																	<img src="/Public/mall/images/start2.png" alt="">
																</span>
															</a></dd>
													<dd><a href=""><p>建德市新安植保有限责任公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															</span></a></dd>
													</dl>
									<div class="other">
										<img src="/Public/mall/images/changeone.png" alt=""><span>换一组</span>
									</div>
							</div><!-- 未申请店铺的end -->
							<div class="apply hide"><!-- 已经申请店铺的end -->
								<div class="apply-title">HI! 您好，<span class="fb f12">宁波金泰惠多利农资连锁公司</span></div>
								<div class="order-active">
									<div class="list">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
									<div class="list">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
									<div class="list list2">
										<a href="">
											<p>待发货</p>
											<h5>5</h5>
										</a>
									</div>
								</div>
								<div class="goodsList clear "><!-- 出售中的商品 -->
									<div class="list1">
										<a href="">
											<img src="/Public/mall/images/indexlist1.png" alt="">
											<p>出售中的商品</p>
										</a>
									</div>
									<div class="list1" style="border-right: none;">
										<a href="">
											<img src="/Public/mall/images/indexlist2.png" alt="">
											<p>仓库中的商品</p>
										</a>
									</div>
									<div class="list1">
										<a href="">
											<img src="/Public/mall/images/indexlist3.png" alt="">
											<p>我的客户</p>
										</a>
									</div>
									<div class="list1" style="border-right: none;">
										<a href="">
											<img src="/Public/mall/images/indexlist4.png" alt="">
											<p>新申请客户</p>
										</a>
									</div>
								</div><!-- 出售中的商品 -->
								<div class="shoppes">
									<img src="/Public/mall/images/shoppes.png" alt="">
									<span>名铺推荐</span>
								</div>
								<dl>
												<dd>
													<a href="">
														<p>宁波金泰惠多利农资连锁公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span>
													</a>
												</dd>
												<dd><a href=""><p>苍南县永丰农业生产资料有限公司</p>
													<span>
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
														<img src="/Public/mall/images/start2.png" alt="">
													</span></a></dd>
												<dd>
													<a href=""><p>杭州萧山农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a>
													</dd>
													<dd><a href=""><p>杭州市农业生产资料有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
													<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>
														<dd><a href=""><p>浙北惠多利农资销售有限公司</p>
														<span>
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
															<img src="/Public/mall/images/start2.png" alt="">
														</span></a></dd>												
													</dl>
								<div class="other">
										<img src="/Public/mall/images/changeone.png" alt="" ><span>换一组</span>
								</div>
							</div><!-- 已经申请店铺的end -->
						</div><!-- 隐藏盒子end -->
				</div><!-- 区域商铺结束 -->
			</article><!-- 公司导航栏结束 -->
		</div>
	</header><!-- 头部结束 -->
	<section class="container" ><!-- 主体内容开始 -->
		<div class="sellerHr"><!-- 产品栏导航 -->
			<div class="goodsNav">
				<ul class="ul1 clear">
					<li class="ac1">农药药剂
						<ul class="ul2"><!-- 列表2 -->
							<li><a href="">复合肥</a></li>
							<li><a href="">氮肥</a></li>
							<li><a href="">磷肥</a></li>
							<li><a href="">钾肥</a></li>
							<li><a href="">复混肥</a></li>
							<li><a href="">生物肥</a></li>
							<li><a href="">控释肥</a></li>
							<li><a href="">有机肥</a></li>
							<li><a href="">水溶肥</a></li>
							<li><a href="">微量元素肥</a></li>
						</ul><!-- 列表2end -->
					</li><span class="ul1-rightBorder">|</span>
					<li>化肥肥料
						<ul class="ul2"><!-- 列表2 -->
							<li><a href="">复合肥</a></li>
							<li><a href="">氮肥</a></li>
							<li><a href="">磷肥</a></li>
							<li><a href="">钾肥</a></li>
							<li><a href="">复混肥</a></li>
							<li><a href="">生物肥</a></li>
							<li><a href="">控释肥</a></li>
							<li><a href="">有机肥</a></li>
							<li><a href="">水溶肥</a></li>
							<li><a href="">微量元素肥</a></li>
						</ul><!-- 列表2end -->
					</li><span class="ul1-rightBorder">|</span>
					<li>农膜
						<ul class="ul2"><!-- 列表2 -->
							<li><a href="">复合肥</a></li>
							<li><a href="">氮肥</a></li>
							<li><a href="">磷肥</a></li>
							<li><a href="">钾肥</a></li>
							<li><a href="">复混肥</a></li>
							<li><a href="">生物肥</a></li>
							<li><a href="">控释肥</a></li>
							<li><a href="">有机肥</a></li>
							<li><a href="">水溶肥</a></li>
							<li><a href="">微量元素肥</a></li>
						</ul><!-- 列表2end -->
					</li><span class="ul1-rightBorder">|</span>
					<li>植物种子</li><span class="ul1-rightBorder">|</span>
					<li>农技工具</li>
				</ul>
			</div>
		</div><!-- 产品栏导航END -->
		<div class="adWrap">
			<div class="adCont">
				<article class="carousel"><!-- 轮播图开始 -->
					<div id="owl-demo" class="owl-carousel">
						<a class="item"><img src="/Public/mall/images/bigbannar1.png" alt=""></a>
						<a class="item"><img src="/Public/mall/images/bigbannar2.png" alt=""></a>
						<a class="item"><img src="/Public/mall/images/bigbannar3.png" alt=""></a>
						<a class="item"><img src="/Public/mall/images/bigbannar1.png" alt=""></a>
						<a class="item" href=""><img src="/Public/mall/images/bigbannar2.png" alt=""></a>
					</div>
				</article><!-- 轮播图结束 -->
				<div class="adBottom clear">
					<div class="adBm-cont">
						<img src="/Public/mall/images/adbm.png" alt="">
						<div class="adBm-text">杀菌剂丙环唑</div>
					</div>
					<div class="adBm-cont">
						<img src="/Public/mall/images/adbm.png" alt="">
						<div class="adBm-text">氟虫腈＋三唑磷</div>
					</div>
					<div class="adBm-cont">
						<img src="/Public/mall/images/adbm.png" alt="">
						<div class="adBm-text">杀菌剂丙环唑</div>
					</div>
				</div>
			</div>
		</div>
		<article class="boxMain" id="pesticideBox"><!-- 农药药剂开始 -->
			<div class="title clear">
				<h3>1F.农药药剂<small>打造绿色农资第一品牌</small></h3>
				<p><a href="#">查看更多></a></p>
			</div>
			<section class="clear">
				<div class="left">
					<div class="brand">
						<p>品牌</p>
						<p>推荐</p>
					</div>
					<div class="pic pic1">
						<div id="owl-demo1" class="owl-carousel">
						<div class="item">
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
						</div>
						<div class="item">
							<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
						</div>
						<div class="item">
							<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
						</div>
						<div class="item">
						  	<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar5.png" alt=""></a>
						</div>
						<div class="item" href="">
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
						</div>
					</div>
					</div>
				</div>
				<div class="midden">
					<a href="" class="img1"><img src="/Public/mall/images/goods1.png" alt=""></a>
					<a href="" class="img2"><img src="/Public/mall/images/goods1.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="clear">
						<li class="active">
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</article><!-- 农药药剂结束 -->
		<article id="fertilizerBox" class="boxMain"><!-- 化肥肥料开始 -->
			<div class="title clear">
				<h3>2F.化肥肥料<small>打造绿色农资第一品牌</small></h3>
				<p><a href="#">查看更多></a></p>
			</div>
			<section class="clear">
				<div class="left">
					<div class="brand">
						<p>品牌</p>
						<p>推荐</p>
					</div>
					<div class="pic pic2">
						<div id="owl-demo2" class="owl-carousel">
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
							  	<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar5.png" alt=""></a>
							</div>
							<div class="item" href="">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="midden">
					<a href="" class="img3"><img src="/Public/mall/images/goods3.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="clear">
						<li class="active">
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</article><!-- 化肥肥料结束 -->
		<article id="agriculturalBox" class="boxMain"> <!-- 农膜开始 -->
			<div class="title clear">
				<h3>3F.农膜<small>打造绿色农资第一品牌</small></h3>
				<p><a href="#">查看更多></a></p>
			</div>
			<section class="clear">
				<div class="left" style="height:312px;">
					<div class="brand">
						<p>品牌</p>
						<p>推荐</p>
					</div>
					<div class="pic pic3" style="height:178px;">
						<div id="owl-demo3" class="owl-carousel">
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							</div>
							<div class="item">
							  	<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
							</div>
							<div class="item" href="">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="agriculturalRight">
					<ul>
						<li><a href="">
								<img src="/Public/mall/images/goods4.png" alt="">
								<div>
									<h5>高效转光农膜</h5>
									<p>白粉病蔓枯病叶霉病</p>
								</div>
							</a>
						</li>
						<li><a href="">
								<img src="/Public/mall/images/goods4.png" alt="">
								<div>
									<h5>高效转光农膜</h5>
									<p>白粉病蔓枯病叶霉病</p>
								</div>
							</a>
						</li>
						<li><a href="">
								<img src="/Public/mall/images/goods4.png" alt="">
								<div>
									<h5>高效转光农膜</h5>
									<p>白粉病蔓枯病叶霉病</p>
								</div>
							</a>
						</li>
						<li><a href="">
								<img src="/Public/mall/images/goods4.png" alt="">
								<div>
									<h5>高效转光农膜</h5>
									<p>白粉病蔓枯病叶霉病</p>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</article><!-- 农膜结束 -->
		<article id="plantBox" class="boxMain"><!-- 植物种子开始 -->
			<div class="title clear">
				<h3>4F.植物种子<small>打造绿色农资第一品牌</small></h3>
				<p><a href="#">查看更多></a></p>
			</div>
			<section class="clear">
				<div class="left">
					<div class="brand">
						<p>品牌</p>
						<p>推荐</p>
					</div>
					<div class="pic pic4">
						<div id="owl-demo4" class="owl-carousel">
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
							  	<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar5.png" alt=""></a>
							</div>
							<div class="item" href="">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="midden">
					<a href="" class="img1"><img src="/Public/mall/images/goods1.png" alt=""></a>
					<a href="" class="img2"><img src="/Public/mall/images/goods1.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="clear">
						<li class="active">
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</article><!-- 植物种子结束 -->
		<article id="toolsBox" class="boxMain"> <!-- 农技农具开始 -->
			<div class="title clear">
				<h3>5F.农技工具<small>打造绿色农资第一品牌</small></h3>
				<p><a href="#">查看更多></a></p>
			</div>
			<section class="clear">
				<div class="left">
					<div class="brand">
						<p>品牌</p>
						<p>推荐</p>
					</div>
					<div class="pic pic5">
						<div id="owl-demo5" class="owl-carousel">
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
								<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
							<div class="item">
							  	<a href=""><img src="/Public/mall/images/smallbannar2.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar3.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar4.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar5.png" alt=""></a>
							</div>
							<div class="item" href="">
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
								<a href=""><img src="/Public/mall/images/smallbannar1.png" alt=""></a>
							</div>
						</div>
					</div>
				</div>
				<div class="midden">
					<a href="" class="img3"><img src="/Public/mall/images/goods3.png" alt=""></a>
				</div>
				<div class="right">
					<ul class="clear">
						<li class="active">
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
						<li>
							<a href="#">
								<h5>杀菌剂丙环唑</h5>
								<p>白粉病蔓枯病叶霉病</p>
								<div class="imgs"><img src="/Public/mall/images/goods2.png" alt=""></div>
							</a>
						</li>
					</ul>
				</div>
			</section>
		</article><!-- 农技农具结束 -->
		<div id="leftbar">
			<ul>
				<li id="a1">
					<a href="#pesticideBox"> <!-- 1F -->
						<div class="z1" style="display: none">
							<p>1F</p>
							<img src="/Public/mall/images/bannar11.png" alt="">
						</div>
						<div class="z2" style="display: block;">
							<p>农药</p>
							<p>药剂</p>
						</div>
					</a>
				</li>
				<li id="a2">
					<a href="#fertilizerBox"> <!-- 2F -->
						<div class="z1" >
							<p>2F</p>
							<img src="/Public/mall/images/bannar22.png" alt="">
						</div>
						<div class="z2" >
							<p>化肥</p>
							<p>肥料</p>
						</div>
					</a>
				</li>
				<li id="a3">
					<a href="#agriculturalBox"> <!-- 3F -->
						<div class="z1">
							<p>3F</p>
							<img src="/Public/mall/images/bannar33.png" alt="">
						</div>
						<div class="z2">
							<p style="padding-top:21px;">农膜</p>
						</div>
					</a>
				</li>
				<li id="a4">
					<a href="#plantBox"> <!-- 4f -->
						<div class="z1">
							<p>4F</p>
							<img src="/Public/mall/images/bannar44.png" alt="">
						</div>
						<div class="z2">
							<p>植物</p>
							<p>种子</p>
						</div>
					</a>
				</li>
				<li id="a5"> 
					<a href="#toolsBox" >  <!-- 5F  -->
						<div class="z1" style="border-bottom: none">
							<p>5F</p>
							<img src="/Public/mall/images/bannar55.png" alt="">
						</div>
						<div class="z2" style="height: 95%;">
							<p>农技</p>
							<p>工具</p>
						</div>
					</a>
				</li>
			</ul>
		</div>
		</div>
	</section><!-- 主体内容结束 -->
	<footer><!-- 脚部开始 -->
		<ul class="clear indexTop">
			<li>
				<div></div>
				<span>政府护航<em>购物无忧</em></span>
			</li>
			<li>
				<div></div>
				<span>随时随地<em>想问就问</em></span>
			</li>
			<li>
				<div></div>
				<span>全程跟踪<em>放心农资</em></span>
			</li>
			<li>
				<div></div>
				<span>省内热线<em class="green fb f25 num">96318</em></span>
			</li>
		</ul>

		<section class="footBox clear ">
			<dl>
				<dt>购物指南</dt>
				<dd>购物流程</dd>
				<dd>会员介绍</dd>
				<dd>常见问题</dd>
				<dd>联系客服</dd>
			</dl>
			<dl>
				<dt>平台保障</dt>
				<dd>购物流程</dd>
				<dd>会员介绍</dd>
				<dd>常见问题</dd>
				<dd>联系客服</dd>
			</dl>
			<dl>
				<dt>支付方式</dt>
				<dd>网银支付</dd>
				<dd>授信支付</dd>
				<dd>医保支付</dd>
				<dd>邮局汇款</dd>
				<dd>公司转账</dd>
			</dl>
			<dl>
				<dt>商家服务</dt>
				<dd>上门技术指导</dd>
				<dd>电话技术指导</dd>
				<dd>送货上门</dd>
				<dd>商家入驻</dd>
				<dd>商家中心</dd>
				<dd>运营服务</dd>
			</dl>
			<dl>
				<dt>手机商城</dt>
				<dd>
					<img src="/Public/mall/images/twocode.png" alt="">
				</dd>
				<dd>扫一扫，随手购物</dd>
			</dl>
			<div class="hr3"></div>
			<dl style="text-align: center;">
				<dd>平台简介</dd>
				<dd>帮主中心</dd>
				<dd>招商入驻</dd>
				<dd>网站合作</dd>
				<dd>法律申明</dd>
				<dd>联系我们</dd>
				<dd>举报中心</dd>
			</dl>
			<dl>
				<dt>友情链接:</dt>
				<dd><a href="">浙江省供销社</a></dd>
				<dd><a href="">浙江农资集团</a></dd>
				<dd><a href="">惠多利(中国)</a></dd>
				<dd><a href="">浙江金泰</a></dd>
				<dd><a href="">浙江爱普</a></dd>
				<dd><a href="">浙江植保在线</a></dd>
				<dd><a href="">中农在线</a></dd>
			</dl>
			</section>
			<section class="footnote clear">
				<p>© &nbsp;2015 &nbsp;网上农资商城&nbsp; 版权所有，&nbsp;并保留所有权利</p>
				<p>增值电信业务经营许可证:浙B2-20150086</p>
			</section> 
	</footer><!-- 脚部结束 -->
	<div id="gotop" style="position: fixed;left: 50%;background: #333;color: #fff;bottom: 50px;border:1px solid green;margin-left: 600px;cursor: pointer;display: none;">回到<p>顶部</p></div>
	<script type="text/javascript">
		 // $('#box1 li').click(function(){
   // 			 $(this).addClass('active').siblings().removeClass('active');
   //  		$('#showBox>div:eq('+$(this).index()+')').show().siblings().hide(); 
  	// 	  })
		 $(document).ready(function(){
			 $('#login-btn li').click(function(){  //已登录的我加入的商品的卡片切换
			 	$(this).addClass('active').siblings().removeClass('active');
			 	$('#showBox .showCont:eq('+$(this).index()+')').show().siblings().hide();
			 })

			 // 换一组的动画效果
			 $('.other').click(function(){
			 	// $(this).find('img').css("border","1px solid red");
			 	$(this).find('img').addClass('ans'); //开始旋转
			 	//$(this).find('img').removeClass('ans');//停止旋转
			 })	


		 })
	</script>
	<script type="text/javascript">
	$(function(){
	$('#owl-demo').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//大轮播
	$('#owl-demo1').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//1F轮播
	$('#owl-demo2').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//2F轮播
	$('#owl-demo3').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//3F轮播
	$('#owl-demo4').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//4F轮播
	$('#owl-demo5').owlCarousel({
		items: 1,
		navigation: true,
		navigationText: ["",""],
		autoPlay: true
	});//5F轮播

		$(".shopTitle").off("click");//移除快速导航事件

	})
	</script>
	<script type="text/javascript">
	// 左边导航
		$("#leftbar").find("li").click(function(){
			$(this).find(".z1").hide();
			$(this).find(".z2").show().css("border","");
			$(this).siblings().find(".z2").hide();
			$(this).siblings().find(".z1").show();
			$(this).prev().find(".z1").css("border-bottom","none");
		});

	</script>

	<script type="text/javascript">
		$(document).ready(function(){

		})
	</script>
</body>
</html>