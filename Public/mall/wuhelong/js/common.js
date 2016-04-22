$(document).ready(function(){

		// 顶部消息的显示效果
		$('.message-title').hover(function(){
			$('.messageBox').show();
			$(this).css("background","#fff");
			$(this).parent().addClass('active');
			$('.downImg').addClass('ac');
		},function(){
			$('.messageBox').hide();
			$(this).css("background","#f5f8fa");
			$(this).parent().removeClass('active');
			$('.downImg').removeClass('ac');
		})
		$('.messageBox').hover(function(){
			$(this).show();
			$('.message-title').css("background","#fff");
			$('.header-left').addClass('active');
			$('.downImg').addClass('ac');
		},function(){
			$(this).hide();
			$('.header-left').removeClass('active');
			$('.message-title').css("background","#f5f8fa");
			$('.downImg').removeClass('ac');
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
		//  $(".areaShops .shopTitle").click(function(){
		// 	  $(".areaShops .shopContent").fadeToggle(500);
		// });



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

// 页面底部换一批导航点击效果
		$('.ul-nav li').click(function(){
			$(this).addClass('active').siblings().removeClass('active');
		}).hover(function(){
			$(this).trigger("click");
		});

//快速导航显示
    $(".shopTitle").on('click',function(){
      var a = $('.fastNav-cont');
      if(a.css("display")!="none"){
        $(".shopTitle").find('img').attr('src',"/Public/mall/wuhelong/images/moreup2.png");
        a.hide();
      }else{
        a.show();
        $(".shopTitle").find('img').attr('src',"/Public/mall/wuhelong/images/moredown2.png");
      }
    });

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
    		imgs.attr("src","/Public/mall/images/moredown.png")
    	}
    	var _hide = function(){
    		console.log(2);
    		dd.slideUp(200);
    		dt.removeClass("cur");
    		s.css("z-index",z);
    		imgs.attr("src","/Public/mall/images/moreup.png")
    	}
    	dt.click(function(){
    		dd.is(":hidden")?_show():_hide();
    	})
    	dd.find("a").click(function(){
    		dt.find('.txt').html($(this).html());
    		_hide();	
    	})
    })





    // 商品详情页选择生产商上下拉菜单

})
 function numLess(){   //商品详情页减
      var num = document.getElementById('nums').value;
      var numLess = parseInt(num)-1;
      if(num>1){
        document.getElementById('nums').value = numLess;
      }else{
         document.getElementById('nums').value = 1;
      }
}
function numAdd(){
	var num = document.getElementById('nums').value;
	var numAdd = parseInt(num)+1;
	document.getElementById('nums').value = numAdd;
	if (num>0) {
		document.getElementById('nums').value = numAdd;
	}else{
		document.getElementById('nums').value =1;
	}
}
function tipRight(msg){  //正确的提示框
             _this = $(this);
            layer.open({
                    type: 1,
                    title:false,
                    skin: 'layer-modify', //样式类名
                    closeBtn: 0, //不显示关闭按钮
                    shift: 0,
                    area: ['489px', '165px'],
                    shadeClose: false, //开启遮罩关闭
                    content: '<div class="proxyBox"><h4><img src="/Public/mall/wuhelong/images/right.png" alt="">'+msg+'</h4><div class="proxybtn">确认</div></div>',
                    success:function(){
                        $(".modifyBtn2").click(function(){ //取消按钮
                            layer.closeAll('page');
                        });
                        $(".proxybtn").click(function(){ //确定按钮
                            
                            layer.closeAll('page');
                        });
                    }
                });
        }

        function tipError(msg){
            
            layer.open({
                    type: 1,
                    title:false,
                    skin: 'layer-modify', //样式类名
                    closeBtn: 0, //不显示关闭按钮
                    shift: 0,
                    area: ['489px', '165px'],
                    shadeClose: false, //开启遮罩关闭
                    content: '<div class="proxyBox"><h4><img src="/Public/mall/wuhelong/images/error.png" alt="">'+msg+'</h4><div class="proxybtn">确认</div></div>',
                    success:function(){
                        $(".modifyBtn2").click(function(){ //取消按钮
                            layer.closeAll('page');
                        });
                        $(".proxybtn").click(function(){ //确定按钮
                            
                            layer.closeAll('page');
                        });
                    }
            });//修改价格按钮弹出end
        }