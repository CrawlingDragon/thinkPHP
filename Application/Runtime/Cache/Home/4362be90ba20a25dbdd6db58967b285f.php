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
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/NZPersonal/Js/setGoods.js"></script>
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/Common/Js/laydate/laydate.js"></script>
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
						<dd><a href="">子账号设置</a></dd>
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
						<h3>认证客户</h3>
						<!-- 右边内容输入框，按钮 -->
						<form action="" method="" class="approveClientele-box">
							<div>
								<label for="">所在区域：</label>
								<div class="selectBox">
									<select name="" id="">
										<option value="">浙江省</option>
										<option value="">上海市</option>
									</select>
								</div>
								<div class="selectBox">
									<select name="" id="">
										<option value="">浙江省</option>
										<option value="">上海市</option>
									</select>
								</div>
								<div class="selectBox">
									<select name="" id="">
										<option value="">浙江省</option>
										<option value="">上海市</option>
									</select>
								</div>
								<label for="" class="approveClientele-label">客户级别：</label>
								<div class="selectBox">
									<select name="" id="">
										<option value="">浙江省</option>
										<option value="">上海市</option>
									</select>
								</div>
								<span class="green approveClientele-change">编辑</span>
								<label for="">当前状态：</label>
								<div class="selectBox">
									<select name="" id="">
										<option value="">新申请</option>
										<option value="">后申请</option>
									</select>
								</div>
							</div>
							<div>
								<label for="">申请时间：</label>
								<input type="text" name="" id="time1" class="laydate-icon">
								<span>-</span>
								<input type="text" name="" id="time2" class="laydate-icon">
								<input type="button" value="搜索" class="approveClientele-btn">
							</div>
						</form>	
						<!-- 认证客户开始 -->
						<div class="approveClientele-content">
							<ul class="ul1" style="position: relative;">
								<li class="active">新申请<span>(2)</span></li>
								<li>审核中<span>(47)</span></li>
								<li>审核通过<span>(316)</span></li>
								<li>审核拒绝<span>(1)</span></li>
								<li>终止<span>(9)</span></li>
							</ul>
							<div id="showbox">
								<div class="show">
									<table>    <!-- 新申请 -->
										<tr style="border:1px solid #e5e5e5;">
											<th style="width: 115px;">申请时间</th>
											<th style="width: 164px;">申请人</th>
											<th style="width: 130px;">会员号</th>
											<th style="width: 174px;">所在地区</th>
											<th style="width: 150px;">客户级别</th>
											<th style="width: 128px;">操作</th>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>未指定</td>
											<td class="recovery">我去审核</td>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>未指定</td>
											<td class="recovery">我去审核</td>
										</tr>
									</table>
								</div>
								<div class="hide">
									<table>   <!-- 审核中 -->
										<tr style="border:1px solid #e5e5e5;">
											<th style="width: 115px;">申请时间</th>
											<th style="width: 164px;">申请人</th>
											<th style="width: 130px;">会员号</th>
											<th style="width: 174px;">所在地区</th>
											<th style="width: 150px;">客户级别</th>
											<th style="width: 128px;">操作</th>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>未指定</td>
											<td class="recovery" onclick="checks()">审核</td>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>未指定</td>
											<td class="recovery" onclick="checks()">审核</td>
										</tr>
									</table>
								</div>
								<div class="hide">  <!-- 审核通过 -->
									<table>
										<tr style="border:1px solid #e5e5e5;">
											<th style="width: 115px;">申请时间</th>
											<th style="width: 164px;">申请人</th>
											<th style="width: 130px;">会员号</th>
											<th style="width: 174px;">所在地区</th>
											<th style="width: 150px;">客户级别</th>
											<th style="width: 128px;">操作</th>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商5<a href="/home/FarmMallPersonal/sellerLevelSet.html" class="green ml">设置</a></td>
											<td><span class="orange cur f14">终止</span><span class="fb green ml cur f14" onclick="setGoods()">设置商品</span></td>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商<a href="/home/FarmMallPersonal/sellerLevelSet.html" class="green ml">设置</a></td>
											<td><span class="orange cur f14">终止</span><span class="fb green ml cur f14">设置商品</span></td>
										</tr>
									</table>
								</div>
								<div class="hide">   <!-- 审核拒绝 -->
									<table>
										<tr style="border:1px solid #e5e5e5;">
											<th style="width: 115px;">申请时间</th>
											<th style="width: 164px;">申请人</th>
											<th style="width: 130px;">会员号</th>
											<th style="width: 174px;">所在地区</th>
											<th style="width: 150px;">客户级别</th>
											<th style="width: 128px;"></th>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商</td>
											<td></td>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商</td>
											<td></td>
										</tr>
									</table>
								</div>
								<div class="hide">   <!-- 终止 -->
									<table>
										<tr style="border:1px solid #e5e5e5;">
											<th style="width: 115px;">申请时间</th>
											<th style="width: 164px;">申请人</th>
											<th style="width: 130px;">会员号</th>
											<th style="width: 174px;">所在地区</th>
											<th style="width: 150px;">客户级别</th>
											<th style="width: 128px;">操作</th>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商6</td>
											<td class="recovery">恢复</td>
										</tr>
										<tr>
											<td>2015-06-04</td>
											<td>王世聪</td>
											<td>11111111222233442</td>
											<td>浙江省杭州市萧山区</td>
											<td>零售商</td>
											<td class="recovery">恢复</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
						<!-- 认证客户结束 -->
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
									<input type="button" value="确定" onclick="">
								</p>
							</dd>
						</dl>
					</div><!-- 分页结束 -->
				</div>
			</div><!-- 右边内容开始end -->
		</div>
	<div class="layer_checks" style="display: none;"> <!-- 审核内容的弹出内容 -->
		<h5 class="lch5 fn">指定客户级别和确定审核结果</h5>
		<div class="lcList clear">
			<p>指定客户级别：</p>
			<dl class="select">    <!-- 模拟下拉菜单 -->
				<dt>
					<span class="txt01 txt">请选择</span>
					<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/dropDown.png" alt="" class="ml">    <!-- 下拉箭头 -->
				</dt>
				<dd style="display: none;">
					<ul>
						<li>a客户a客户a客户</li>
						<li>厂家</li>
						<li>B客户</li>
					</ul>
				</dd>
			</dl>
			<a href="/home/FarmMallPersonal/sellerLevelSet.html" class="green ml f12">编辑</a>
		</div>
		<div class="lcList clear">
			<p>审核结果：</p>
			<dl class="select">    <!-- 模拟下拉菜单 -->
				<dt>
					<span class="txt02 txt">请选择</span>
					<img src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/dropDown.png" alt="" class="ml">    <!-- 下拉箭头 -->
				</dt>
				<dd style="display: none;">
					<ul>
						<li>通过</li>
						<li>拒绝</li>
					</ul>
				</dd>
			</dl>
		</div>
		<div class="clear">
			<div class="lcSure">确认</div>
			<div class="lcCancel">取消</div>
		</div>
	</div><!-- 审核内容的弹出内容 -->
	</section> 
	<div class="ATset" style="display: none;"> <!-- 审核通过之设置商品 -->
		<div class="smallTitle">选择限制购买的商品</div>
		<table border="1">
			<tr>
				<th>申请时间</th><th>申请人</th><th>会员号</th><th>所在区域</th><th>客户级别</th>
			</tr>
			<tr>
				<td>2015-06-04</td>
				<td>王世聪</td>
				<td>12015051216928</td>
				<td>浙江省杭州市萧山区</td>
				<td>零售商</td>
			</tr>
		</table>
			<form action="" class="forms">
				<div class="clear">
					<label for="">商品编码：</label>
					<input type="text" name="" id="">
					<label for="">商品名称：</label>
					<input type="text" name="" id="">
					<label for="">厂家名称：</label>
					<input type="text" name="" id="">
				</div>
				<div class="clear ATads">
					<label for="" class="f12 c6">选择区域：</label>
					<select name="" id="">
						<option value="">浙江省</option>
					</select>
					<select name="" id="">
						<option value="">杭州市</option>
					</select>
					<select name="" id="">
						<option value="">萧山区</option>
					</select>
					<input type="submit" value="搜索" class="sub">
				</div>
			</form>
			<div class="ATall">
				<div class="checkBox">
					<input type="checkbox" name="" id="checkAll">
					<label for="" class="checkBtn"></label>
				</div>
				<label for="">全部选中</label>
			</div>
			<ul class="ATcont">
					<li class="on">
						<div class="checkBox"  >
							<input type="checkbox" name="" id="" class="companyCheck">
							<label for="" class="checkBtn"></label>
						</div>
						<span>华昌化工有限公司</span>
						<dl style="display: block">
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>优美达-ZNZX151</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>康朴 多元微肥-ZNZX1011</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
						</dl>
					</li>
					<li>
						<div class="checkBox" >
							<input type="checkbox" name="" id="" class="companyCheck">
							<label for="" class="checkBtn"></label>
						</div>
						<span>华昌化工有限公司</span>
						<dl>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>优美达-ZNZX151</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>康朴 多元微肥-ZNZX1011</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
						</dl>
					</li>
					<li>
						<div class="checkBox" >
							<input type="checkbox" name="" id="" class="companyCheck">
							<label for="" class="checkBtn"></label>
						</div>
						<span>华昌化工有限公司</span>
						<dl>
							<dd>
								<div class="checkBox">
									<input type="checkbox" name="" id="" class="">
									<label for="" class="checkBtn"></label>
								</div>
								<span>优美达-ZNZX151</span>
							</dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>康朴 多元微肥-ZNZX1011</span></dd>
							<dd><div class="checkBox">
					<input type="checkbox" name="" id="" class="">
					<label for="" class="checkBtn"></label>
				</div><span>嘉施利50%14-06-30大量元素水溶肥-ZNZX1217</span></dd>
						</dl>
					</li>
				</ul>
		<div class="ATbtn clear">
			<div class="ATSure">保存</div>
			<div class="ATCancel">取消</div>
		</div>
	</div><!-- 审核通过之设置商品结束 -->
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
	// 商品详情页选择生产商上下拉菜单
    $('.select').each(function(){
    	var s = $(this);
    	var z = parseInt(s.css("z-index"));
    	var dt = s.find("dt");
    	var dd = s.find("dd");
    	var imgs = s.find("img");
    	var _show = function(){
    		dd.slideDown(200);
    		console.log(1);
    		dt.addClass('cur');
    		s.css("z-index",z+1);
    		imgs.attr("src","<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/dropDown.png")
    	}
    	var _hide = function(){
    		console.log(2);
    		dd.slideUp(200);
    		dt.removeClass("cur");
    		s.css("z-index",z);
    		imgs.attr("src","<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Image/dropDown.png")
    	}
    	dt.click(function(){
    		dd.is(":hidden")?_show():_hide();
    	})
    	dd.find("li").click(function(){
    		dt.find('.txt').html($(this).html());
    		_hide();	
    	})
    })
</script>
</body>
</html>