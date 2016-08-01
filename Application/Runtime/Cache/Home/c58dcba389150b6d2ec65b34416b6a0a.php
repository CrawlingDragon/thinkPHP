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
	<script type="text/javascript" src="<?php echo (C("STYLE_URL")); ?>/PersonalCenter/Common/Js/birthday.js"></script>

    <!-- 图片上传 -->
    <script type="text/javascript" src="/Public/uploadify/jquery.uploadify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/uploadify/uploadify.css">
    <!-- 图片上传结束 -->
	<!--[if IE 8.0]><link href="<?php echo (C("STYLE_URL")); ?>/Common/Css/ie8.css" rel="stylesheet" type="text/css" /><![endif]-->
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
			<article class="category-article">
				<!-- 当前位置开始 -->
				<div class="current">
					<span>当前位置:</span>
					<a href="">首页</a>
					<span>&gt;</span>
					<a href="">卖家中心</a>
					<span>&gt;</span>
					<a href="">发布商品</a>
				</div>
				<!-- 当前位置结束 -->
				<!-- 选择商城商品类目开始 -->
				<h3 class="release">选择商城商品类目</h3>
				<div class="categoryGoods-box">
					<div class="categoryGoods-left">
						<div class="list1">农药</div>
						<div class="list1">肥料</div>
						<div class="list1">农膜</div>
						<div class="list1">种子</div>
						<div class="list1">其他</div>
						<div class="list1">其他</div>
						<div class="list1">其他</div>
						<div class="list1">其他</div>
					</div>
					<div class="categoryGoods-right">
						<div class="list1">农药1</div>
						<div class="list1">肥料1</div>
						<div class="list1">农膜22</div>
						<div class="list1">种子22</div>
						<div class="list1">其他22</div>
						<div class="list1">农药22</div>
						<div class="list1">肥料22</div>
						<div class="list1">农膜22</div>
						<div class="list1">种子22</div>
						<div class="list1">其他22</div>
						<div class="list1">农药22</div>
						<div class="list1">肥料22</div>
						<div class="list1">农膜22</div>
						<div class="list1">种子22</div>
					</div>
					<p>类目：肥料-杀虫剂</p>
				</div>
				<!-- 选择商城商品类目结束 -->
				<!-- 商品属性开始 -->
				<h3 class="release">商品属性</h3>
				<div class="issueGoods-box">
					<form action="" method="">
						<div><label for="">商品名称:</label><input type="text" name="" id="" placeholder="商品标题名称长度至少8个字符，最长30个汉子"></div>
						<div><label for="">自定义商品编码:</label><input type="text" name="" id="" placeholder="输入数字必须为0~9之间的数字" class="in2"></div>
						<div><label for="">登记证号:</label><input type="text" name="" id="" placeholder="输入数字必须为0~9之间的数字" class="in2"></div>
						<div>
							<label for="">登记证书有效期时间:</label>
							<span class="selectBox">
								<select name="" id="selYear01">
									<option value="">年</option>
								</select>
							</span>
							<span class="selectBox" id="">
								<select name="" id="selMonth01">
									<option value="">月</option>
								</select>
							</span>
							<span class="selectBox">
								<select name="" id="selDay01">
									<option value="">日</option>
								</select>
							</span>
							<span style="margin-right: 10px;color: #666;font-size: 14px;vertical-align: middle;">至</span>
							<span class="selectBox">
								<select name="" id="selYear02">
									<option value="">年</option>
								</select>
							</span>
							<span class="selectBox">
								<select name="" id="selMonth02">
									<option value="">月</option>
								</select>
							</span>
							<span class="selectBox">
								<select name="" id="selDay02">
									<option value="">日</option>
								</select>
							</span>
						</div>
						<div><label for="">通用名称:</label><input type="text" name="" id="" placeholder="通用名称长度至少1个字符，最长30个汉字"></div>
						<div>
							<label for="">产品形态:</label>
							<span class="selectBox">
								<select name="" id="" class="se2">
									<option value="">颗粒剂</option>
									<option value="">13</option>
								</select>
							</span>
						</div>
						<div><label for="">生态标准:</label><input type="text" name="" id="" placeholder="通用名称长度至少1个字符，最长30个汉字"></div>
						<div><label for="">生产许可证:</label><input type="text" name="" id="" placeholder="输入数字必须为0~9之间的数字" class="in2"></div>
						<div><label for="">有效成份及含量:</label><input type="text" name="" id="" placeholder="输入数字必须为0~9之间的数字"></div>
						<div><label for="">生产企业:</label><input type="text" name="" id="" placeholder="输入数字必须为0~9之间的数字"></div>
						<div class="resPic">
							<label for="" >登记照片:</label>
							<span class="photosbox" >
								<span class="photos">
									<p class="resPic-title">选择文件</p>
									<p class="resPic-title">尺寸800*800</p>
									<div id="file_upload"></div>
									<img src="" alt="" id="upload_org_code_img">
								</span>
								<h5>文件格式JPG、JPEG、PNG文件大小2M以内，建议尺寸800px*800px</h5>
							</span>
						</div>
						<div>
							<label for="" >计量单位:</label>
							<span class="selectBox">
								<select name="" id="" class="se2">
									<option value="">件</option>
									<option value="">13件</option>
								</select>
							</span>
						</div>
						<div><label for="">商品卖点介绍:</label><textarea placeholder="剪短的商品卖点介绍，请不要超过300字节"></textarea></div>
						<div>
							<label for="">在店铺中的分类:</label>
							<span class="selectBox">
								<select name="" id="">
									<option value="">肥料</option>
									<option value="">大粪</option>
								</select>
							</span>
						</div>
					</form>
				</div>
				<!-- 商品属性结束 -->
				<!-- 商品内容结束 -->
				<h3 class="release">商品内容</h3>
				<div class="issueGoods-content">
					<table id="issueGoods-table">
						<tr>
							<th style="width:90px;">排序</th>
							<th style="width: 175px">规格</th>
							<th style="width: 175px">重量(kg)</th>
							<th style="width: 175px">库存数量</th>
							<th style="width: 175px">起订量</th>
							<th style="width: 175px">零售价(元)</th>
							<th style="width: 175px">代理价(元)</th>
						</tr>
						<tr>
							<td>1</td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
						</tr>
						<tr>
							<td>2</td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
							<td><input type="text" name="" id=""></td>
						</tr>
					</table>
					<!-- 添加按钮 -->
					<div class="issueGoods-contentBottom">
							<img src="/Public/mall/PersonalCenter/FarmMallPersonal/JIC/Image/issueGoodsAdd.png" alt=""><span>继续添加规格</span>
					</div>
					<!-- 商品图片 -->
					<div class="issueGoods-img">
						<h4>商品图片：</h4>
						<div class="issueGoods-imgRight">
							<span class="photos">
								<p>选择文件</p>
								<p>尺寸800*800</p>
								<div id="goodsPic-btn01"></div>
								<img src="about:blank" alt="" id="goodsPic01">
							</span>
							<span class="photos">
								<p>选择文件</p>
								<p>尺寸800*800</p>
								<div id="goodsPic-btn02"></div>
								<img src="about:blank" alt="" id="goodsPic02">
							</span>
							<span class="photos">
								<p>选择文件</p>
								<p>尺寸800*800</p>
								<div id="goodsPic-btn03"></div>
								<img src="about:blank" alt="" id="goodsPic03">
							</span>
							<span class="photos">
								<p>选择文件</p>
								<p>尺寸800*800</p>
								<div id="goodsPic-btn04"></div>
								<img src="about:blank" alt="" id="goodsPic04">
							</span>
							<span class="photos">
								<p>选择文件</p>
								<p>尺寸800*800</p>
								<div id="goodsPic-btn05"></div>
								<img src="about:blank" alt="" id="goodsPic05">
							</span>
							<h5>文件格式JPG、JPEG、PNG文件大小2M以内，建议尺寸800px*800px</h5>
						</div>
					</div>
					<!-- 商品详情 -->
					<div class="issueGoods-detail">
						<h4>商品详情:</h4>
						<div class="issueGoods-detailRight">
							<script id="container" name="content" type="text/plain" style="width:882px;height:372px;">
        						<!-- 输入板内容 -->
    						</script>
						</div>
					</div>
					<!-- 运费模版设置 -->
					<div class="issueGoods-label">
						<label for="">运费模板:</label>
						<span class="selectBox">
							<select name="" id="">
								<option value="">免运费</option>
								<option value="">运费5元</option>
							</select>
						</span>
						<a href="" class="f12 green">编辑运费模板</a>
					</div>
					<!-- 商品状态 -->
					<div class="issueGoods-label">
						<label for="">商品状态:</label>
						<input type="radio" name="gActive1" id=""><span>立即发布</span>
						<input type="radio" name="gActive1" id="" style="margin-left: 50px;"><span>放入仓库</span>
					</div>
					<!-- 红包设置 -->
					<div class="issueGoods-label">
						<label for="">红包设置:</label>
						<input type="radio" name="gActive2" id=""><span>赠送</span>
						<input type="radio" name="gActive2" id="" style="margin-left: 50px;"><span>不赠送</span>
					</div>
					<!-- 红包比例 -->
					<div class="issueGoods-label">
						<label for="">红包比例:</label>
						<span class="selectBox">
							<select name="" id="">
								<option value="">100%</option>
								<option value="">99%</option>
							</select>
						</span>
					</div>
				</div>
				<!-- 商品内容结束 -->
				<button class="issueBtn">好了，马上发布商品</button>
			</article>
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

		// iframe层的高度等于左边类目的高度
		var leftHeight = $(".categoryGoods-left").attr("height");
		leftHeight = $(".categoryGoods-right").attr("height");

		//继续添加规格
		var num = 2;
		$('.issueGoods-contentBottom').on('click',function(){
			num++;
			$('#issueGoods-table').append('<tr><td>'+num+'</td><td><input type="text" name="" id=""></td><td><input type="text" name="" id=""></td><td><input type="text" name="" id=""></td><td><input type="text" name="" id=""></td><td><input type="text" name="" id=""></td><td><input type="text" name="" id=""></td></tr>');
		});
		$.ms_DatePicker({     //登记证书有效时间
	            YearSelector: "#selYear01",
	            MonthSelector: "#selMonth01",
	            DaySelector: "#selDay01"
	    });
		$.ms_DatePicker();
		$.ms_DatePicker({
	            YearSelector: "#selYear02",
	            MonthSelector: "#selMonth02",
	            DaySelector: "#selDay02"
	    });
		$.ms_DatePicker();
	})
	</script>
	<!-- 编辑器源码文件 -->
	<script type="text/javascript"  charset="utf-8" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Js/UEditor/utf8-php/ueditor.config.js"></script>
	<!-- <script type="text/javascript" charset="utf-8" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Js/UED/lang/zh-cn.js"></script> -->
	<script type="text/javascript"  charset="utf-8" src="/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Js/UEditor/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
	<script type="text/javascript"> 
	 	var ue = UE.getEditor('container');                     //实例化编辑器 
	 	function isFocus(e){
	        alert(UE.getEditor('editor').isFocus());
	        UE.dom.domUtils.preventDefault(e)
	    }
	    function setblur(e){
	        UE.getEditor('editor').blur();
	        UE.dom.domUtils.preventDefault(e)
	    }

	</script>
<script type="text/javascript">
	    $(function() {
	        $('#file_upload').uploadify({                  //登记照片
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#upload_org_code_img").attr("src",data);
                        $("#upload_org_code_img").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });


	        $('#goodsPic-btn01').uploadify({                  //商品图片照片01
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#goodsPic01").attr("src",data);
                        $("#goodsPic01").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });



	        $('#goodsPic-btn02').uploadify({                  //商品图片照片02
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#goodsPic02").attr("src",data);
                        $("#goodsPic02").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });



	        $('#goodsPic-btn03').uploadify({                  //商品图片照片03
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#goodsPic03").attr("src",data);
                        $("#goodsPic03").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });



	        $('#goodsPic-btn04').uploadify({                  //商品图片照片04
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#goodsPic04").attr("src",data);
                        $("#goodsPic04").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });


	        $('#goodsPic-btn05').uploadify({                  //商品图片照片05
	            'swf'      : '/Public/uploadify/uploadify.swf',    //指定上传控件的主体文件
	            'uploader' : '/Public/uploadify/uploadify.php',   //指定服务器端上传处理文件
	            //其他配置项
	            'buttonClass' : 'upBtn',
	            'buttonText' : '上传图片',
	            'width' : 130,
	            'height' : 130,
	          	'cancelImg' : '/Public/uploadify/uploadify-cancel.png',
	          	'fileTypeExts' : '*.jpg;*.jpge;*.gif;*.png',
   				'fileSizeLimit' : '2MB',
	            'onUploadSuccess' : function(file, data, response) {
			            $('#' + file.id).find('.data').html('');
                        $("#upload_org_code_name").val(data);
                        $("#goodsPic05").attr("src",data);
                        $("#goodsPic05").show();
			        },
			     //加上此句会重写onSelectError方法【需要重写的事件】
			    'overrideEvents': ['onSelectError', 'onDialogClose'],
                //返回一个错误，选择文件的时候触发
                'onSelectError':function(file, errorCode, errorMsg){
                    switch(errorCode) {
                        case -110:
                            alert("文件 ["+file.name+"] 大小超出系统限制的" + jQuery('#upload_org_code').uploadify('settings', 'fileSizeLimit') + "大小！");
                            break;
                        case -120:
                            alert("文件 ["+file.name+"] 大小异常！");
                            break;
                        case -130:
                            alert("文件 ["+file.name+"] 类型不正确！");
                            break;
                    }
                },
	        });
	    });
	</script>
</body>
</html>