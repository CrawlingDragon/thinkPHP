//收藏夹功能
function AddFavorite(title,url){
	try{
	   window.external.addFavorite(url,title);
	 }
	catch(e){
	 try{
	    window.sidebar.addPanel(title,url,"");
	  }
	 catch(e){
	   alert("抱歉，您所使用的浏览器无法完成此操作。\n\n请使用快捷键Ctrl+D进行添加！");
	   }
	 }
}
$(document).ready(function(){
	//头部登录名效果
	$(".ul1 .name").hover(function(){
		$(this).find('.nameCont').show();
		$(this).find('img').attr("src","/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/headLoginNameDown.png");
	},function(){
		$(this).find('.nameCont').hide();
		$(this).find('img').attr("src","/Public/mall/PersonalCenter/CommonPersonalCenter/Common/Image/headLoginNameUp.png");
	})


	//左边栏头像显示
	$('.lb-head-bj').hover(function(){
		$('.membrane').animate({top:"0px"},200);
	},function(){
		$('.membrane').animate({top:"97px"},200);
	});

})

//确认收货按钮弹出
function confirmReceipt(test,fn){
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-delet', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['490px', '150px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="confirmReceiptCont popupCommom"><p>'+test+'</p><p style="margin:40px 0 40px 83px;"><label>确认收货：</label><input type="button" value="确认" class="deletBtn1"><input type="button" value="取消" class="deletBtn2"></p></div>',
	    success:function(layero, index){
	    	$(".deletBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    		
	    	});
	    	$(".deletBtn1").click(function(){ //确定按钮
	    		layer.closeAll('page');
	    		alert("删除成功！")
	    		fn();
	    	});
	    }
	});
};


//取消订单按钮弹出
function cancelOrder(){
	_this = $(this).parent();
	_prev = _this.prev();
	//alert(_prev.html);
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-delet', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['490px', '220px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="CancelorderCont popupCommom"><p style="margin: 10px 0 30px 20px;">取消订单后，将不能恢复，请确认订单取消原因</p><div class="sendAds pupopItem" style="margin-left:84px;"><lebal>请选择原因：</lebal><div id="dropdown" style="width:170px;position:fixed;"> <p class="drpP" style="width:160px;background-position-x: 150px;">取消订单的原因1</p> <ul style="width:170px;"> <li data-value="1">取消订单的原因2</li>  <li data-value="2">取消订单的原因3</li> <li data-value="3">取消订单的原因4</li> <li data-value="4">取消订单的原因5</li></ul> </div></div><p style="margin:40px 0 40px 14px;"><input type="button" value="确认" class="closeBtn1" id="CancelBtn1"><input type="button" value="取消" class="closeBtn2"></p></div>',
	    success:function(layero, index){
	    	$(".closeBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    	});
	    	$(".closeBtn1").click(function(){ //确定按钮
	    		alert(_this.html());
	    		_prev.html("<p>交易关闭</p>");
	    		layer.closeAll('page');
	    		alert("订单取消成功！")
	    	});
	    }
	});
	$("#dropdown p").dropDownWrap();
	$("#dropdown ul li").dropDownList();
};
	


//删除订单按钮弹出
function deletOrder(){
	var id = $(this).parent('h4').find('a span').html();
	var _this = $(this).parent().parent();
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-delet', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['490px', '150px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="deletCont popupCommom"><p>交易完成，可删除无效订单，将不会产生任何影响</p><p><label>确认删除此订单：</label><input type="button" value="确认" class="deletBtn1"><input type="button" value="取消" class="deletBtn2"></p></div>',
	    success:function(layero, index){
	    	$(".deletBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    	});
	    	$(".deletBtn1").click(function(){ //确定按钮
	    		_this.remove();
	    		layer.closeAll('page');
	    		alert("删除成功！")
	    	});
	    }
	});
};


//立即发货按钮弹出
function sendGoods(){
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-sendBox', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['480px', '220px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="sendCont popupCommom"><p>买家已付款，请指定业务员后再确认是否发货</p><div class="sendAds pupopItem" style="margin-top:30px;"><lebal>指定业务员：</lebal><div id="dropdown" style="width:170px;position:fixed;"> <p class="drpP" style="width:160px;background-position-x: 150px;">王思聪</p> <ul style="width:170px;"> <li data-value="1">王世聪</li>  <li data-value="2">王思聪</li> <li data-value="3">王思聪</li> <li data-value="4">王思聪</li> <li data-value="5">王思聪</li> </ul> </div></div><p class="sendBtns margin40"><lebal>买家已付款，确认发货：</lebal><input type="button" value="确认" class="sendBtn1"><input type="button" value="取消" class="sendBtn2"></p></div>',
	    success:function(){
	    	$(".sendBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    	});
	    	$(".sendBtn1").click(function(){ //确定按钮
	    		layer.closeAll('page');
	    		alert("编辑成功！");
	    	});
	    }
	});
	$("#dropdown p").dropDownWrap();
	$("#dropdown ul li").dropDownList();
};


//修改价格按钮弹出
function changePrice(){
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-modify', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['490px', '355px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="modifyCont popupCommom"><p>修改订单号为 10012015060153824 的价格</p><p style="margin:30px 0 0 94px;" class="pupopItem">订单总金额：30000.00元</p><p style="margin:15px 0 0 80px;" class="pupopItem"><lebal>修改产品价格：</lebal><input type="text" name="" value="">&nbsp元</p><p style="margin:15px 0 0 80px;" class="pupopItem"><lebal>修改运费价格：</lebal><input type="text" name="" id="" />&nbsp元</p><p style="margin:15px 0 0 52px;" class="pupopItem">修改后订单总金额： 50000.00元</p><p style="padding: 40px 0 40px 178px;"><input type="button" value="确认" class="modifyBtn1"><input type="button" value="取消" class="modifyBtn2"></p></div>',
	    success:function(){
	    	$(".modifyBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    	});
	    	$(".modifyBtn1").click(function(){ //确定按钮
	    		
	    		layer.closeAll('page');
	    		alert("修改成功！");
	    	});
	    }
	});
};


//关闭订单按钮弹出
function closeOrder(){
	_this = $(this).parent();
	_prev = _this.prev();
	layer.open({
	    type: 1,
	    title:false,
	    skin: 'layer-delet', //样式类名
	    closeBtn: 0, //不显示关闭按钮
	    shift: 0,
	    area: ['490px', '150px'],
	    shadeClose: false, //开启遮罩关闭
	    content: '<div class="closeOrderCont popupCommom"><p>买家还未付款，确认关闭订单，此订单将失效</p><p style="margin:40px 0 40px 83px;"><label>确认关闭此订单：</label><input type="button" value="确认" class="closeBtn1"><input type="button" value="取消" class="closeBtn2"></p></div>',
	    success:function(layero, index){
	    	$(".closeBtn2").click(function(){ //取消按钮
	    		layer.closeAll('page');
	    	});
	    	$(".closeBtn1").click(function(){ //确定按钮
	    		_this.hide();
	    		_prev.html("<p>交易关闭</p>")
	    		layer.closeAll('page');
	    		alert("订单关闭成功！")
	    	});
	    }
	});
};



	