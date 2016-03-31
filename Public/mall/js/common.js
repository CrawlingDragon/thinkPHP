$(document).ready(function(){

		// 顶部消息的显示效果
		$('.message-title').hover(function(){
			$('.messageBox').show();
			$('.header-left').css({"background":"#fff","border":"1px solid #e5e5e5","border-bottom":"none","border-top":"none"});
			$(this).addClass('active');
		},function(){
			$('.messageBox').hide();
			$('.header-left').css({"background":"#f5f8fa","border":"none"});
			$(this).removeClass('active');
		})
		$('.messageBox').hover(function(){
			$(this).show();
			$('.message-title').addClass("active");
			$('.header-left').css({"border":"1px solid #e5e5e5","border-bottom":"none","border-top":"none","background":"#fff"});
			console.log("aa");
		},function(){
			$(this).hide();
			$('.header-left').css({"background":"#f5f8fa","border":"none"});
			$('.message-title').removeClass("active");
		});

		//账户显示
		$('.list1').hover(function(){
			$(this).find('.list1-cont').show();
			$(this).addClass('active');
			$(this).find('.list-title').addClass('active');
		},function(){
			$(this).find('.list1-cont').hide();
			$(this).find('.list-title').removeClass('active');
			$(this).removeClass('active');
		})
		//我的订单
		$('.list2').hover(function(){
			$(this).find('.list1-cont').show();
			$(this).addClass('active');
			$(this).find('.list-title').addClass('active');
		},function(){
			$(this).find('.list1-cont').hide();
			$(this).find('.list-title').removeClass('active');
			$(this).removeClass('active');
		})

		//收藏夹
		$('.list3').hover(function(){
			$(this).find('.list1-cont').show();
			$(this).addClass('active');
			$(this).find('.list-title').addClass('active');
		},function(){
			$(this).find('.list1-cont').hide();
			$(this).find('.list-title').removeClass('active');
			$(this).removeClass('active');
		})
		//卖家中心
		$('.list4').hover(function(){
			$(this).find('.list1-cont').show();
			$(this).addClass('active');
			$(this).find('.list-title').addClass('active');
		},function(){
			$(this).find('.list1-cont').hide();
			$(this).find('.list-title').removeClass('active');
			$(this).removeClass('active');
		})
		//搜索框的下拉菜单显示
        $('.search-list').hover(function(){
        	$(this).find('ul').addClass('active');
        },function(){
        	$(this).find('ul').removeClass('active')
        })
		//搜索框的下拉菜单点击选择
        $('.serachBar li').click(function(){
        	var thisTxt = $(this).text();
        	var activeTxt = $(this).parent().find('.selected').html(thisTxt);
        	$(this).parent().removeClass('active');
        })


        //区域商铺显示
		 $(".areaShops .shopTitle").click(function(){
			  $(".areaShops .shopContent").fadeToggle(500);
		});



	})



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
	//改价功能
	$('.changeNum').click(function(){
		var txt = $(this).parent().find('.goodsNum-txt').text(); 
		$(this).hide();               		 				//改价按钮本身消失
		$(this).parent().find('.goodsNum-txt').hide();		//文字加个消失
		$(this).next().show();				 				//确定，取消按钮出现 
		$(this).prev().show();								//输入框出现
		$(this).prev().focus();				 				//输入框获取焦点
		$(this).prev().val(txt);							//输入框获取文字的内容
	});
	// 改价的确定功能
	$('.goodsNum-btn .left').click(function(){
		var v = $(this).parent().parent().find('.goodsNum-input'); 
		var txt1 = $(this).parent().parent().find('.goodsNum-txt');
		var txt2 = $(this).parent().parent().find('.goodsNum-txt2');
		var val = v.val();               							//输入框的值
		$(this).parent().hide();									//确定 取消按钮消失
		$(this).parent().parent().find('.goodsNum-input').hide();   //输入框消失
		$(this).parent().prev().show();								//改价按钮显示
		txt1.show();												//文字出现
		txt1.css("text-decoration","line-through");					//原来价格增加中滑线
		txt2.text(val);												//把输入框的内容替换到文字内

	});
	// 改价的取消功能
	$('.goodsNum-btn .right').click(function(){
		$(this).parent().hide();									//确定 取消按钮消失
		$(this).parent().parent().find('.goodsNum-input').hide();   //输入框消失
		$(this).parent().prev().show();								//改价按钮显示
		$(this).parent().parent().find('.goodsNum-txt').show();		//文字出现
	})

})