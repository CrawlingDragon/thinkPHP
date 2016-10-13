<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Css/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/buyerIndex.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/seller.css" type="text/css">
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/common.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/footer.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/dropDownExtend.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/laydate/laydate.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/layer/layer.js"></script>
	<!--[if IE 8.0]><link href="<?php echo (C("STYLE_URL")); ?>/Common/Css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
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
					<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/bslogo.png" alt=""><!-- logo -->
				</div>
				<div class="right"><!-- 右边内容 -->
					<ul class="ul1 clear"><!-- 帮助中心 -->
						<li style="cursor: default;">服务热线：0571-87661693</li>
						<li onclick="AddFavorite('中农在线','http://www.baidu.com')">收藏本站</li>
						<li><a href="/home/CommonPersonal/help.html" class="f12 cf">帮助中心</a></li>
						<li class="name">Hi,ceshiyi<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/headLoginNameUp.png">
							<div class="nameCont">
								<a href="">退出登录</a>
								<a href="">帐号管理</a>
							</div>
						</li>
						<li>请登录</li>
					</ul>
					<ul class="ul2 clear"><!-- 商城链接 -->
						<li><a href="http://www.114nz.com" target="_blank">中农在线</a></li>
						<li><a href="http://wen.114nz.com" target="_blank">网上庄稼医院</a><span>|</span></li>
						<li><a href="http://mall.114nz.com" target="_blank">农资商城</a><span>|</span></li>	
					</ul>
				</div>
			</div>
		</div><!-- 头部上面部分end -->
		<div class="header-nav"><!-- 头部导航部分 -->
			<div class="navCont">
				<a href="/home/CommonPersonal/index.html" class="active1"><span class="active2">首页</span></a>
				<a href="/home/CommonPersonal/BasicInfo.html" class="active"><span>会员设置</span></a>
				<a href="/home/FarmMallPersonal/buyerIndex.html" class="active"><span>农资商城管理</span></a>
				<a href="/home/FarmMallPersonal/sellerIndex.html" class="active"><span>网上庄稼医院管理</span></a>
			</div>
		</div><!-- 头部上面部分end -->
	</div><!-- 头部开始end -->
	<section class="containar"><!-- 主体内容开始 -->
		<div class="containarWrap clear">
			<div class="leftBar"><!-- 左边导航公共部分 -->
				<div class="lb-head"><!-- 头像 -->
					<div class="lb-head-bj">
						<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/lufei.jpg" alt="">
						<a href="" class="membrane">编辑资料</a><!-- 阴影 -->
					</div>
				</div><!-- 头像end -->
				<div class="lb-nav buyer-lb-nav"><!-- 左边导航 -->
					<dl>
						<dd><a href="buyerBuyedGoods.html">已买到的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="/home/goods/cart.html">我的购物车</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerCollectStore.html">收藏的商铺</a></dd>
						<dd><a href="buyerCollectGoods.html">收藏的商品</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerJoinShop.html">我加入的商铺</a></dd>
					</dl>
					<dl>
						<dd><a href="buyerCredit.html">授信申请</a></dd>
						<dd><a href="buyerCreditChange.html">授信额度调整</a></dd>
						<dd><a href="buyerCreditHistory.html">授信使用记录</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dd><a href="buyerEvaluation.html">我的评价</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar"><!-- 右边内容开始 -->
				<div class="rightPart"> <!-- 右边主体内容 -->
					<div class="titles clear">
					<h3>Hi! 我是买家</h3>
					<a href="" style="display: none;">进入卖家中心></a>	<!-- 一半买家状态 -->
					<a href="" class="shopOpen">申请开店</a> <!-- 申请开店的状态 -->
				</div>
					<div class="rightCont"> <!-- 右边的正文内容 -->
						<h3>已买到的商品</h3>
						<form action="" style="padding-left: 20px;padding-top: 15px">
							<div class="searchTitle" style="width: auto;padding-left: 15px;">
								<label>交易状态:</label>
								<div class="selectBox select1">
									<select style="width: 100px;">
										<option value="全部订单">全部订单</option>
										<option value="未付款订单">未付款订单</option>
										<option value="已付款订单">已付款订单</option>
									</select>
								</div>
								<label>评价状态:</label>
								<div class="selectBox select1">
									<select style="width: 100px;">
										<option value="全部">全部</option>
										<option value="未付款">未付款</option>
										<option value="已评价">已评价</option>
									</select>
								</div>
								<div class="times" style="vertical-align: middle;">
									<span>下单时间:</span>
									<span><input type="text" class="laydate-icon" id="time1" style="width: 120px;"></span>
									<span style="vertical-align: middle;position: relative;top: 2px;">-</span>
									<span><input type="text" class="laydate-icon" id="time2" style="width: 120px;"></span>
								</div>
							</div>
							<div class="searchBox" style="padding-left: 15px;">
							<input type="text" name="" id="" placeholder="输入商品名称或者订单号进行搜索" style="margin-right: 0px;">
							<input type="button" value="搜索">
							</div>
							<div class="batch" style="margin-left: 10px;">
								<input type="checkbox" name="" id="" class="allCheck"><label>全选</label>
								<input type="button" value="合并付款">
							</div>
							<div class="tableBox">
								<dl class="tr1 clear">
									<dd style="width: 248px;text-indent: 71px;">商品</dd>
									<dd style="width: 118px;">单价/数量</dd>
									<dd style="width: 82px;">总价</dd>
									<dd style="width: 90px;">运费</dd>
									<dd style="width: 120px;">实际收款</dd>
									<dd style="width: 122px;">交易状态</dd>
									<dd style="width: 146px;text-align: left;text-indent: 34px;">交易操作</dd>
								</dl>
								<table class="listBox"><!-- 一个订单开始 -->
									<tr style="width: 940px;height: 30px;"><!-- 订单标题 -->
										<th colspan="5">
											<a href="" class="listBox-title">
												<input type="checkbox" name="checkName" id="">
												<span>订单号：1407241453498101</span>
												<span>2015-05-28 14:53:48 </span>
												<span>买家：王思聪</span>	
											</a>
											<div class="delet" onclick="deletOrder()"><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/delete.png" alt=""></div><!-- 删除图片 -->
											<div class="printImg">
												<a href="/home/FarmMallPersonal/printer.html"><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/print.png" alt=""></a>
											</div>
										</th>
										
									</tr>
									<tr class="tr-border">
										<td class="listCont listCont1" >
											<div class="goodsInfo"><!-- 商品信息Start -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div class="goodsImg"><a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/farmMallIndexGoods.png" alt=""></a></div>
													<div class="goodsName">
														<p><a href="">克无踪克无踪克无踪克无踪克无踪克无踪克无踪克无踪</a></p>
														<span>规格:250ml</span>
													</div>
													<div class="price">
														<p>800.00</p>
														<p>x10</p>
													</div>
													<div class="goodsNum">
														<p class="goodsNum-txt">1000.00</p>
													</div>
													<div class="shipment goodsNum">
														<p class="goodsNum-txt">10</p>
													</div>
												</div><!-- 单个商品的信息end -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div><a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/farmMallIndexGoods.png" alt=""></a></div>
													<div class="goodsName">
														<p><a href="">克无踪</a></p>
														<span>规格:250ml</span>
													</div>
													<div class="price">
														<p>800.00</p>
														<p>x10</p>
													</div>
													<div class="goodsNum">
														<p class="goodsNum-txt">1000.00</p>
													</div>
													<div class="shipment goodsNum">
														<p class="goodsNum-txt">10</p>
													</div>
												</div><!-- 单个商品的信息end -->
											</div><!-- 商品信息end -->
										</td>
										<td class="listCont listCont2" style="width: 110px;"><!-- 实际收款开始 -->
											<div class="freight">
												<div class="freightBox">
													<p>1100.00</p>
													<p>(含运费:0.00)</p>
												</div>
											</div>
										</td><!-- 实际收款结束 -->
										<td class="listCont listCont3" style="width: 110px;"><!-- 交易状态开始 -->
											<div class="orderStatus">
												<div class="orderStatusBox">
													<p>交易成功</p>
													<p>担保交易</p>
													<p>余额支付</p>
													<p>双方已评</p>
													<p><a href="/home/Goods/orderDetail.html" class="green">查看详情</a></p>
													<p>查看详情</p>
												</div>
											</div>
										</td><!-- 交易状态结束 -->
										<td class="listCont" style="width: 132px;">
											<div class="operate">
												<a href="/home/FarmMallPersonal/buyerGoEvaluate.html" class="op-evaluation">评价</a>
												<a href="支付页" class="modify">立即支付</a>
												<input type="button" value="关闭订单" class="closeOrder" onclick="closeOrder()">
											</div>
										</td>
									</tr>
								</table><!-- 一个订单END -->
								<table class="listBox doneOrder"><!-- 一个订单开始 -->
									<tr style="width: 900px;height: 30px;"><!-- 订单标题 -->
										<th colspan="5" class="active">
											<a href="" class="listBox-title">
												<input type="checkbox" name="checkName" id="">
												<span>订单号：1407241453498101</span>
												<span>2015-05-28 14:53:48 </span>
												<span>买家：王思聪</span>	
											</a>
											<div class="delet" onclick="deletOrder()"><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/delete.png" alt=""></div><!-- 删除图片 -->
											<div class="printImg">
												<a href="/home/FarmMallPersonal/printer.html"><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/print.png" alt=""></a>
											</div>
										</th>
										
									</tr>
									<tr class="tr-border">
										<td class="listCont listCont1" >
											<div class="goodsInfo"><!-- 商品信息Start -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div><a href=""><img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Image/farmMallIndexGoods.png" alt=""></a></div>
													<div class="goodsName">
														<p><a href="">克无踪</a></p>
														<span>规格:250ml</span>
													</div>
													<div class="price">800.00</div>
													<div class="goodsNum">20</div>
													<div class="shipment">
														<p>10</p>
													</div>
												</div><!-- 单个商
												品的信息end -->
											</div><!-- 商品信息end -->
										</td>
										<td class="listCont listCont2" style="width: 110px;"><!-- 实际收款开始 -->
											<div class="freight">
												<div class="freightBox">
													<p>1100.00</p>
													<p>(含运费:0.00)</p>
												</div>
											</div>
										</td><!-- 实际收款结束 -->
										<td class="listCont listCont3" style="width: 110px;"><!-- 交易状态开始 -->
											<div class="orderStatus">
												<div class="orderStatusBox">
													<p>交易成功</p>
													<p>担保交易</p>
													<p>余额支付</p>
													<p>双方已评</p>
													<p><a href="/home/Goods/orderDetail.html" class="green">查看详情</a></p>
													<p>查看详情</p>
												</div>
											</div>
										</td><!-- 交易状态结束 -->
										<td class="listCont" style="width: 132px;">
											<div class="operate">
												<a href="/home/FarmMallPersonal/buyerGoEvaluate.html" class="op-evaluation">评价</a>
												<a href="支付页" class="modify">立即支付</a>
												<!-- <input type="button" value="修改价格" class="modify"> -->
												<input type="button" value="关闭订单" class="closeOrder">
											</div>
										</td>
									</tr>
								</table><!-- 一个订单END -->
							</div>
						</form>
					</div>
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
		// 日历1
		laydate({
		   elem: '#time1',  
		});

		// 日历2
		laydate({
		   elem: '#time2',
		});
		//批量管理效果
$(document).ready(function(){
//全选按钮
$('.allCheck').click(function(){
	if($(this).prop("checked")){
		$('.listBox-title input[type=checkbox]').each(function(){
			$(this).prop("checked",true);
			$(this).parent().addClass('on-check');//添加选择的打勾效果
		})
	}else{
		$('.listBox-title input[type=checkbox]').each(function(){
			$(this).prop("checked",false);
			$(this).parent().removeClass('on-check');//去除选中的打勾效果
		})
	}
});
//商品单个复选框
$('.listBox-title input[type=checkbox]').click(function(){
		if ($(this).prop("checked")) {
			$(this).parent().addClass('on-check');		//添加选择的打勾效果
		}else{
			$('.allCheck').prop("checked",false);
			$(this).parent().removeClass('on-check'); //去除选中的打勾效果
		};
		var checkedNum = $("input:checkbox[name='checkName']:checked").length; //复选狂选中的个数
		var checkboxNum = $("input:checkbox[name='checkName']").length;       //复选框的个数
		console.log(checkedNum);
		console.log(checkboxNum);
		if (checkedNum == checkboxNum) {          //选中个数等于复选框个数
			$('.allCheck').prop("checked",true);  //全选框变成选中状态
		}
	})
})
</script>
</body>
</html>