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
function ship(){  //立即发货按钮弹出
	layer.open({
		    type: 1,
		    title:false,
		    skin: 'layer-sendBox', //样式类名
		    closeBtn: 0, //不显示关闭按钮
		    shift: 0,
		    area: ['480px', '220px'],
		    shadeClose: false, //开启遮罩关闭
		    content: '<div class="sendCont"><p class="sendTitle">买家已付款，请指定业务员后再确认是否发货</p><div class="sendAds pupopItem"><lebal class=popupText180>指定业务员：</lebal><div id="dropdown" style="width:170px;position:fixed;"> <p class="drpP" style="width:160px;background-position-x: 150px;">王思聪</p> <ul style="width:170px;"> <li data-value="1">王世聪</li>  <li data-value="2">王思聪</li> <li data-value="3">王思聪</li> <li data-value="4">王思聪</li> <li data-value="5">王思聪</li> </ul> </div></div><p class="sendBtns margin40"><lebal class=popupText180>买家已付款，确认发货：</lebal><input type="button" value="确认" class="sendBtn1"><input type="button" value="取消" class="sendBtn2"></p></div>',
		    success:function(){
		    	$(".sendBtn2").click(function(){ //取消按钮
		    		layer.closeAll('page');
		    	});
		    	$(".sendBtn1").click(function(){ //确定按钮
		    		layer.closeAll('page');
		    		alert("编辑成功！");
		    	});
		    }
		})
		   }

	