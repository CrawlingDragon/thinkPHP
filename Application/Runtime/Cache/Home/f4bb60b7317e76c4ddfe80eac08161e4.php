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
					<div class="bj">
						
					</div>
				</div><!-- 头像end -->
				<div class="lb-nav"><!-- 左边导航 -->
					<dl>
						<dt>交易管理</dt>
						<dd><a href="sellerSelledGoods.html" class="active">已卖出的商品</a></dd>
						<dd><a href="sellerEvaluationManagement.html">评价管理</a></dd>
					</dl>
					<dl>
						<dt>商品管理</dt>
						<dd><a href="sellerPost.html">发布商品</a></dd>
						<dd><a href="sellerSellingGoods.html">出售中的商品</a></dd>
						<dd><a href="sellerWarehouse.html">仓库中的商品</a></dd>
						<dd><a href="sellerClassifcation.html">商品分类管理</a></dd>
					</dl>
					<dl>
						<dt>商铺管理</dt>
						<dd><a href="/home/Store/index.html">查看我的商铺</a></dd>
						<dd><a href="sellerShopSet.html">商铺设置</a></dd>
						<dd><a href="sellerShopkeeper.html">掌柜推荐</a></dd>
						<dd><a href="sellerShipMent.html">运费模板</a></dd>
						<!-- <dd><a href="">子账号设置</a></dd> -->
					</dl>
					<dl>
						<dt>进货渠道</dt>
						<dd><a href="sellerMeAgented.html">我代理的</a></dd>
						<dd><a href="sellerAgencyMe.html">代理我的</a></dd>
					</dl>
					<dl>
						<dt>客户管理</dt>
						<dd><a href="sellerClient.html">认证客户</a></dd>
						<dd><a href="sellerLevelSet.html">级别设置</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dt>授信管理</dt>
						<dd><a href="sellerCreditNexus.html">授信关系</a></dd>
						<dd><a href="sellerCreditAdjustment.html">额度调整</a></dd>
						<dd><a href="sellerUseHistroy.html">使用记录</a></dd>
					</dl>
				</div><!-- 左边导航end -->
			</div><!-- 左边导航公共结束 -->
			<div class="rightBar"><!-- 右边内容开始 -->
				<div class="rightPart"> <!-- 右边主体内容 -->
					<div class="titles clear">
						<h3>Hi! 我是卖家</h3>
						<a href="">进入买家中心></a>
					</div>
					<div class="rightCont"> <!-- 右边的正文内容开始 -->
						<h3 style="margin-bottom: 35px;">出售中的商品</h3>
						<!-- 右边内容输入框，按钮 -->
						<form action="" method="" class="goods-selling">
							<div class="goods-selling-btntop">
								<label for="">商品名称：</label><input type="text" placeholder="输入商品名称">
								<label for="">商品编码：</label><input type="text" placeholder="输入商品编码">
								<label for="">商品分类：</label>
								<div class="selectBox">
									<select>
										<option value="">全部</option>
										<option value="">农药</option>
										<option value="">杀虫剂</option>
									</select>
								</div>
							</div>
							<div class="goods-selling-btnmid">	
								<label for="" class="goods-selling-source">来源：</label>
								<div class="selectBox">
									<select>
										<option value="">全部</option>
										<option value="">农药</option>
										<option value="">杀虫剂</option>
									</select>
								</div>
								<input type="button" value="搜索" style="margin-left: 45px;">
							</div> 
							<div class="goods-selling-btnbom">
								<input type="checkbox" name="" id="checkAll">
								<label for="">全选</label>
								<input type="button" value="批量下架" style="margin-right: 0;">
								<input type="button" value="批量推荐"><div class="selling-price-btn cur" id="showPrice">显示价格</span></div>
							</div>
							<!-- 商品列表table开始 -->
							<table class="goods-selling-table">
								<tr style="border:1px solid #e2e5e5">
									<th style="width: 153px;">商品图片</th>
									<th style="width: 210px;">商品名称</th>
									<th style="width: 120px;">编号</th>
									<th style="width: 135px;">来源</th>
									<th style="width: 160px;">上架时间</th>
									<th style="width: 170px;">操作</th>
								</tr>
								<!-- 第一个商品展示列表 -->
								<tr>
									<td class="td1" ><!-- rowspan="2" -->
										<input type="checkbox" name="" id="">
										<a href="#" class="selling-imgs">
											<img src="/Public/mall/personalCenter/FarmMallPersonal/JIC/Image/farmMallIndexGoods.png" alt="">
										</a>
									</td>
									<td class="td2">
										<a href="#">道儿纯硫酸复合肥葡萄专用多功能棚膜果蔬钙肥</a>
										<span>已推荐</span>
									</td>
									<td>ZNZX85</td>
									<td>代理</td>
									<td>2015-05-26<i>14:48</i></td>
									<td class="td6">
										<a href="/home/FarmMallPersonal/sellerPost.html" class="orange">编辑商品</a>
										<a href="" class="orange">下架商品</a>
										<a href="javascript:;" class="orange cancel">掌柜推荐</a>
									</td>
								</tr>
								<tr class="infotr" id="infotr1" >
									<td colspan="6" class="infotd">
										<div class="infoWrap">
											<ul class="ul1 clear">
												<li>规格</li><li>重量/kg</li><li>库存</li><li>起定量</li><li>代理价/元</li><li>vip/元</li><li>大户/元</li><li>零售商/元</li><li>零售商/元零售商/元零售商/元零售商/元零售商/元</li><li>零售商/元</li><li>零售商/元</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li><li>4.00</li><li>4.00</li><li>4.00</li>
											</ul>
										</div>
									</td>
								</tr>
								<!-- 第二个商品展示列表 -->
								<tr>
									<td class="td1" ><!-- rowspan="2" -->
										<input type="checkbox" name="" id="">
										<a href="#" class="selling-imgs">
											<img src="/Public/mall/personalCenter/FarmMallPersonal/JIC/Image/farmMallIndexGoods.png" alt="">
										</a>
									</td>
									<td class="td2">
										<a href="#">道儿纯硫酸复合肥葡萄专用多功能棚膜果蔬钙肥</a>
										<span>已推荐</span>
									</td>
									<td>ZNZX85</td>
									<td>代理</td>
									<td>2015-05-26<i>14:48</i></td>
									<td class="td6">
										<a href="/home/FarmMallPersonal/sellerPost.html" class="orange">编辑商品</a>
										<a href="#" class="orange">下架商品</a>
										<a href="javascript:;" class="green cancel">取消推荐</a>
									</td>
								</tr>
								<tr class="infotr" id="infotr2">
									<!-- <td></td> -->
									<td colspan="6" class="infotd">
										<div class="infoWrap">
											<ul class="ul1 clear">
												<li>规格</li><li>重量/kg</li><li>库存</li><li>起定量</li><li>代理价/元</li><li>vip/元</li><li>大户/元</li><li>零售商/元</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
											<ul class="ul2 clear">
												<li>40kg/包</li><li>40</li><li>1</li><li>1000</li><li>1.00</li><li>2.00</li><li>3.00</li><li>4.00</li>
											</ul>
										</div>
									</td>
								</tr>
							</table>
							<!-- 商品列表table结束 -->
						</form>	
					</div><!-- 右边的正文内容结束 -->
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
	$(function(){
		$('#checkAll').click(function(){   //复选框效果
			if($(this).prop("checked")){
				$('.goods-selling-table input[type=checkbox]').each(function(){
					$(this).prop("checked",true);
				})
			}else{
				$('.goods-selling-table input[type=checkbox]').each(function(){
					$(this).prop("checked",false);
				})
			}
		})
		$('.cancel').click(function(){
			var cont = $(this).text();
			var gfather = $(this).parent().parent();
			var txt = gfather.find(".td2 span");
			if(cont == "掌柜推荐"){
				$(this).addClass("green").removeClass("orange");
				txt.text("已推荐");
				$(this).text("取消推荐");
			}else if(cont == "取消推荐"){
				$(this).addClass("orange").removeClass("green");
				txt.text(" ");
				$(this).text("掌柜推荐");;
			}

		})
		//显示价格按钮
		$('.infotr').css('display','none');
		$('#showPrice').click(function(){
			if($(this).text() == "显示价格"){
				$(this).text("隐藏价格");
				$(this).removeClass('cur');
				$('.td1').css("border-right","1px solid #e5e5e5");
				$('.td1').attr('rowspan','2');
				$('.infotr').css('display',"");

				//显示价格栏目标题的li长度
				var liWidth = $('#infotr1 ul li').width();
				var liLength = $('#infotr1 .ul1 li').length;
				var w = 0;
				$('#infotr1 .ul1 li').each(function(){
					w += parseInt($(this).width());
					return w;
				})
				S = parseInt(liLength*10+100) + w;
				$('.infoWrap ul').css("width",S);
			}else{
				$(this).text("显示价格");
				$(this).addClass('cur');
				$('.td1').css("border-right","none");
				$('.infotr').css('display','none');
				$('.td1').removeAttr('rowspan');
				console.log($('#infotr1 ul li').width());
			}
		})

		// 显示价格用于布局函数
		
		$('.infoWrap').scroll(function(){
			var top = $(this).scrollTop();
			$(this).find('.ul1').css("top",top);
		})
		
	})
</script>
</body>
</html>