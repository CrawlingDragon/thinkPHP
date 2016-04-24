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
	<script type="text/javascript" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/js/layer/layer.js"></script>
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
						<dt>交易管理</dt>
						<dd><a href="" class="active">已卖出的商品</a></dd>
						<dd><a href="">评价管理</a></dd>
					</dl>
					<dl>
						<dt>商品管理</dt>
						<dd><a href="">发布商品</a></dd>
						<dd><a href="">出售中的商品</a></dd>
						<dd><a href="">仓库中的商品</a></dd>
						<dd><a href="">商品分类管理</a></dd>
					</dl>
					<dl>
						<dt>商铺管理</dt>
						<dd><a href="">查看我的商铺</a></dd>
						<dd><a href="">商铺设置</a></dd>
						<dd><a href="">掌柜推荐</a></dd>
						<dd><a href="">运费模板</a></dd>
						<dd><a href="">子账号设置</a></dd>
					</dl>
					<dl>
						<dt>进货渠道</dt>
						<dd><a href="">我代理的</a></dd>
						<dd><a href="">代理我的</a></dd>
					</dl>
					<dl>
						<dt>客户管理</dt>
						<dd><a href="">认证客户</a></dd>
						<dd><a href="">级别设置</a></dd>
					</dl>
					<dl style="margin-bottom: 0px">
						<dt>授信管理</dt>
						<dd><a href="">授信关系</a></dd>
						<dd><a href="">额度调整</a></dd>
						<dd><a href="">使用记录</a></dd>
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
					<div class="rightCont"> <!-- 右边的正文内容 -->
						<h3>已卖出的商品</h3>
						<form action="">
							<div class="searchTitle">
								<label>交易状态:</label>
								<select class="select1">
									<option value="全部订单">全部订单</option>
									<option value="未付款订单">未付款订单</option>
									<option value="已付款订单">已付款订单</option>
								</select>
								<label>评价状态:</label>
								<select class="select1">
									<option value="全部">全部</option>
									<option value="未付款">未付款</option>
									<option value="已评价">已评价</option>
								</select>
								<div class="times">
									<span>下单时间:</span>
									<span><input type="text" class="laydate-icon" id="time1"></span>
									<span>-</span>
									<span><input type="text" class="laydate-icon" id="time2"></span>
								</div>
							</div>
							<div class="searchBox">
							<input type="text" name="" id=""  value="输入商品名称或者订单号进行搜索" placeholder="输入商品名称或者订单号进行搜索">
							<input type="button" value="搜索">
							</div>
							<div class="batch">
								<input type="checkbox" name="" id="" class="allCheck"><label>全选</label>
								<input type="button" value="批量发货">
							</div>
							<div class="tableBox">
								<dl class="tr1 clear">
									<dd style="width: 248px;">商品</dd>
									<dd style="width: 118px;">单价/数量</dd>
									<dd style="width: 82px;">总价</dd>
									<dd style="width: 90px;">运费</dd>
									<dd style="width: 120px;">实际收款</dd>
									<dd style="width: 122px;">交易状态</dd>
									<dd style="width: 146px;text-align: left;text-indent: 34px;">交易操作</dd>
								</dl>
								<table class="listBox"><!-- 一个订单开始 -->
									<tr style="width: 900px;height: 30px;"><!-- 订单标题 -->
										<th colspan="5">
											<a href="" class="listBox-title">
												<input type="checkbox" name="" id="">
												<span>1407241453498101</span>
												<span>2015-05-28 14:53:48 </span>
												<span>买家：王思聪</span>	
											</a>
											<div class="delet" onclick="del()"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/delete.png" alt=""></div><!-- 删除图片 -->
										</th>
										
									</tr>
									<tr style="border-bottom: 1px solid #e4f7d4;">
										<td class="listCont listCont1" >
											<div class="goodsInfo"><!-- 商品信息Start -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div class="goodsImg"><a href=""><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/farmMallIndexGoods.png" alt=""></a></div>
													<div class="goodsName">
														<p><a href="">克无踪克无踪克无踪克无踪克无踪克无踪克无踪克无踪</a></p>
														<span>规格:250ml</span>
													</div>
													<div class="price">
														<p>800.00</p>
														<p>x10</p>
													</div>
													<div class="goodsNum"><!-- 改价总价 -->
														<p class="goodsNum-txt">1000.00</p>
														<input onkeyup="if(this.value==this.value2)return;if(this.value.search(/^\d*(?:\.\d{0,2})?$/)==-1)this.value=(this.value2)?this.value2:'';else this.value2=this.value;" class="goodsNum-input">
														<div class="changeNum">改价</div>
														<div class="goodsNum-btn hide clear"><span class="left">确定</span><span class="right">取消</span></div>
													</div><!-- 改价总价end -->
													<div class="shipment goodsNum"><!-- 改价运费 -->
														<p class="goodsNum-txt">10</p>
														<input onkeyup="if(this.value==this.value2)return;if(this.value.search(/^\d*(?:\.\d{0,2})?$/)==-1)this.value=(this.value2)?this.value2:'';else this.value2=this.value;" class="goodsNum-input">
														<div class="changeNum">改价</div>
														<div class="goodsNum-btn hide clear">
															<span class="left">确定</span>
															<span class="right">取消</span>
														</div>
													</div><!-- 改价运费end -->
												</div><!-- 单个商品的信息end -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div><a href=""><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/farmMallIndexGoods.png" alt=""></a></div>
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
														<input type="text" name="" id="" value="" class="goodsNum-input" >
														<div class="changeNum">改价</div>
														<div class="goodsNum-btn hide clear"><span class="left">确定</span><span class="right">取消</span></div>
													</div>

													<div class="shipment goodsNum">
														<p class="goodsNum-txt">10</p>
														<input type="text" name="" id="" class="goodsNum-input">
														<div class="changeNum">改价</div>
														<div class="goodsNum-btn hide clear">
															<span class="left">确定</span>
															<span class="right">取消</span>
														</div>
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
													<p><a href="" class="green">查看详情</a></p>
													<p>查看详情</p>
												</div>
											</div>
										</td><!-- 交易状态结束 -->
										<td class="listCont" style="width: 132px;">
											<div class="operate">
												<input type="button" value="立即发货" class="sendGoods" onclick="ship()">
												<input type="button" value="评价">
												<input type="button" value="修改价格" class="modify">
												<input type="button" value="关闭订单" class="closeOrder">
											</div>
										</td>
										<td class="listCont" style="width: 16px;">
											<div class="printImg">
												<a href="打印机.html"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/print.png" alt=""></a>
											</div>
										</td>
									</tr>
								</table><!-- 一个订单END -->
								<table class="listBox"><!-- 一个订单开始 -->
									<tr style="width: 900px;height: 30px;"><!-- 订单标题 -->
										<th colspan="5" class="active">
											<a href="" class="listBox-title">
												<input type="checkbox" name="" id="">
												<span>1407241453498101</span>
												<span>2015-05-28 14:53:48 </span>
												<span>买家：王思聪</span>	
											</a>
											<div class="delet"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/delete.png" alt=""></div><!-- 删除图片 -->
										</th>
										
									</tr>
									<tr style="border-bottom: 1px solid #e4f7d4;">
										<td class="listCont listCont1" >
											<div class="goodsInfo"><!-- 商品信息Start -->
												<div class="goods1"> <!-- 单个商品的信息start -->
													<div><a href=""><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/farmMallIndexGoods.png" alt=""></a></div>
													<div class="goodsName">
														<p><a href="">克无踪</a></p>
														<span>规格:250ml</span>
													</div>
													<div class="price">800.00</div>
													<div class="goodsNum">20</div>
													<div class="shipment">
														<p>10</p>
														<div class="changePrice">改价</div>
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
													<p><a href="" class="green">查看详情</a></p>
													<p>查看详情</p>
												</div>
											</div>
										</td><!-- 交易状态结束 -->
										<td class="listCont" style="width: 132px;">
											<div class="operate">
												<input type="button" value="立即发货" class="sendGoods">
												<input type="button" value="评价">
												<input type="button" value="修改价格" class="modify">
												<input type="button" value="关闭订单" class="closeOrder">
											</div>
										</td>
										<td class="listCont" style="width: 16px;">
											<div class="printImg">
												<a href="打印机.html"><img src="/Public/Mall/PersonalCenter/FarmMallPersonal/JIC/Image/print.png" alt=""></a>
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
	</script>
</body>
</html>