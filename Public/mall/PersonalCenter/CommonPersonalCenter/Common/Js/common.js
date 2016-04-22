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
	})
})