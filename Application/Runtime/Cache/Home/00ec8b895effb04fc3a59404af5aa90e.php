<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中农在线</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Css/common.css" type="text/css">
	<link rel="stylesheet" href="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Css/seller.css" type="text/css">
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/jquery.1.11.3.min.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/common.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/footer.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/layer/layer.js"></script>
	<!--[if IE 8.0]><link href="<?php echo (C("STYLE_URL")); ?>/Common/Css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
	<!--[if IE]> 
	<script type="text/javascript"> 
		(function(){if(!/*@cc_on!@*/0)return;var e = "header,footer,nav,article,section".split(','),i=e.length;while(i--){document.createElement(e[i])}})() 
	</script> 
	<![endif]-->
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
				<div class="rightPart "> <!-- 右边主体内容 -->
					<div class="titles clear">
					<h3>Hi! 我是买家</h3>
					<a href="" style="display: none;">进入卖家中心></a>	<!-- 一半买家状态 -->
					<a href="" class="shopOpen">申请开店</a> <!-- 申请开店的状态 -->
				</div>
					<!-- 右边的正文内容开始 -->
					<div class="rightCont creditAdjustment" style="min-height: 114px;"> 
						<h3>授信申请</h3>
						<form action="" method="" class="cm-form">
							<div style="padding-top: 15px;">
								<label for="">商铺名称：</label>
								<input type="text" name="" id="" placeholder="填写申请人名字">
								<label for="">会员号：</label>
								<input type="text" name="" id="" placeholder="输入会员号">
								<label for="">授信状态：</label>
								<div class="selectBox">
									<select name="" id="">
										<option value="">全部</option>
										<option value="">新申请</option>
										<option value="">审核通过</option>
									</select>
								</div>
							</div>
							<div>
								<label for="">授信额度：</label>
								<input type="text" name="" id="" style="width: 100px;margin:0;">
								<span style="vertical-align: middle;margin:0 -5px;margin: 0\0;">-</span>
								<input type="text" name="" id="" style="width: 100px;">
								<label for="">会员性质：</label>
								<div class="selectBox">
									<select name="" id="">
										<option value="">厂家</option>
										<option value="">合作社</option>
									</select>
								</div>
								<input type="button" value="搜索" style="margin-left: 40px;">
							</div>
						</form>
						<div class="creditRelations">
							<div class="box1">
								<ul class="clear">
									<li>新申请(2)</li>
									<li>审核中(47)</li>
									<li class="active">审核通过(316)</li>
									<li>拒绝(1)</li>
									<li>终止(9)</li>
								</ul>
							</div>
							<div class="showBox">
								<div class="showCont hide">
									<!-- 新申请 -->
									<div class="newReview">
										<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 104px;">申请时间</th>
													<th style="width: 218px;">商铺名称</th>
													<th style="width: 114px;">会员号 </th>
													<th style="width: 62px;">类型</th>
													<th style="width: 112px;">总额</th>
													<th style="width: 98px;">余额</th>
													<th style="width: 116px;">需还款金额</th>
													<th style="width: 120px;"></th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td><i class="go">等待审核</i></td>
												</tr>
											</table>
										</div>
									<!-- 新申请结束 -->
								</div>
								<div class="showCont hide">
									<!-- 审核中 -->
									<div class="underReview">
										<table>
											<tr style="border:1px solid #e5e5e5;">
												<th style="width: 104px;">申请时间</th>
												<th style="width: 218px;">商铺名称</th>
												<th style="width: 114px;">会员号 </th>
												<th style="width: 62px;">类型</th>
												<th style="width: 112px;">总额</th>
												<th style="width: 98px;">余额</th>
												<th style="width: 116px;">需还款金额</th>
												<th style="width: 120px;"></th>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>四川美丰化工股份有限公司</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="fb">20000.00</td>
												<td class="fb">10000.00</td>
												<td><i class="orange fb">20000.00</i></td>
												<td><i class="go">等待审核</i></td>
											</tr>
											<tr>
												<td>2015-06-09</td>
												<td>四川美丰化工股份有限公司</td>
												<td>12015052517311</td>
												<td>厂家</td>
												<td class="fb">20000.00</td>
												<td class="fb">10000.00</td>
												<td><i class="orange fb">20000.00</i></td>
												<td><i class="go">等待审核</i></td>
											</tr>
										</table>	
									</div>
									<!-- 审核中结束 -->
								</div>
								<div class="showCont show">
									<!-- 审核通过 -->
										<div class="passed">
											<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 104px;">申请时间</th>
													<th style="width: 218px;">商铺名称</th>
													<th style="width: 114px;">会员号 </th>
													<th style="width: 62px;">类型</th>
													<th style="width: 112px;">总额</th>
													<th style="width: 98px;">余额</th>
													<th style="width: 116px;">需还款金额</th>
													<th style="width: 120px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td><span onclick="quotaQuota()" class="orange">调整额度</span><span class="orange">还款</span></td>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td><span class="orange">调整额度</span><span class="orange">还款</span></td>
												</tr>
											</table>
										</div>
									<!-- 审核通过结束 -->
								</div>
								<div class="showCont hide">
									<!-- 拒绝 -->
										<div class="denys">
											<table>
												<tr style="border:1px solid #e5e5e5;">
													<th style="width: 104px;">申请时间</th>
													<th style="width: 218px;">商铺名称</th>
													<th style="width: 114px;">会员号 </th>
													<th style="width: 62px;">类型</th>
													<th style="width: 112px;">总额</th>
													<th style="width: 98px;">余额</th>
													<th style="width: 116px;">需还款金额</th>
													<th style="width: 120px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td class="orange fb">20000.00</td>
													<td class="fb"><i class="f14 orange">重新申请</i></td>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td class="fb"><i class="f14 orange">重新申请</i></td>
												</tr>
											</table>
										</div>
									<!-- 拒绝结束 -->
								</div>
								<div class="showCont hide">
									<!-- 终止列表 -->
									<div class="terminationList">
										<table>
											<tr style="border:1px solid #e5e5e5;">
													<th style="width: 104px;">申请时间</th>
													<th style="width: 218px;">商铺名称</th>
													<th style="width: 114px;">会员号 </th>
													<th style="width: 62px;">类型</th>
													<th style="width: 112px;">总额</th>
													<th style="width: 98px;">余额</th>
													<th style="width: 116px;">需还款金额</th>
													<th style="width: 120px;">操作</th>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td class="fb"><i class="f14 orange">恢复</i></td>
												</tr>
												<tr>
													<td>2015-06-09</td>
													<td>四川美丰化工股份有限公司</td>
													<td>12015052517311</td>
													<td>厂家</td>
													<td class="fb">20000.00</td>
													<td class="fb">10000.00</td>
													<td><i class="orange fb">20000.00</i></td>
													<td class="fb"><i class="f14 orange">恢复</i></td>
												</tr>
										</table>
									</div>
									<!-- 终止列表结束 -->
								</div>
							</div>
						</div>
					</div>
					<!-- 右边的正文内容结束 -->
					<div class="pageBox"> <!-- 分页开始 -->
						<dl>
							<dd><a href=""><</a></dd>
							<dd ><a href="">1</a></dd>
							<dd class="active"><a href="">2</a></dd>
							<dd><a href="">3</a></dd>
							<dd><a href="">4</a></dd>
							<dd><a href="">5</a></dd>
							<dd><a href="">6</a></dd>
							<dd>...</dd>
							<dd><a href="">33</a></dd>
							<dd><a href="">34</a></dd>
							<dd><a href="">></a></dd>
							<dd class="pageBtn">
								<p>到第
									<input type="text" name="" id="" value="15">页
									<input type="button" value="确定">
								</p>
							</dd>
						</dl>
					</div><!-- 分页结束 -->
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

$('.box1 ul li').click(function(){
	$(this).addClass('active').siblings().removeClass('active');
	$('.showBox .showCont:eq('+$(this).index()+')').show().siblings().hide();
})

</script>
</body>
</html>