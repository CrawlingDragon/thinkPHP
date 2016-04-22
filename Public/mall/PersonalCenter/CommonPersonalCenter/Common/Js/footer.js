$(function(){	
	
	$(".Div1_main div span").mouseover(function(){
		$(this).addClass("Div1_main_span1").siblings("span").removeClass("Div1_main_span1");
	}).mouseout(function(){
		$(this).removeClass("Div1_main_span1").siblings("span");
	})
	
	
	var 
		 index = 0 ;
		Swidth = 1190 ;
		 timer = null ;
		   len = $(".Div1_title span a").length ; 
		
		function NextPage()
		{	
			if(index>4)
			{
				index = 0 ;
			}
			$(".Div1_title span a").removeClass("Div1_title_a1").eq(index).addClass("Div1_title_a1");
			$(".Div1_main").stop(true, false).animate({left: -index*Swidth+"px"},600);
			$(".navs").eq(index).addClass('active').siblings().removeClass('active');	
		}
		
		function PrevPage()
		{	
			if(index<0)
			{
				index = 4 ;
			}
			$(".Div1_title span a").removeClass("Div1_title_a1").eq(index).addClass("Div1_title_a1");
			$(".navs").eq(index).addClass('active').siblings().removeClass('active');
			$(".Div1_main").stop(true, false).animate({left: -index*Swidth+"px"},600)		
		}
		
		$(".Div1_title span a").each(function(a){
            $(this).mouseover(function(){
				index = a ;
				NextPage();
				alert("aa");
			});
        });
		//下一页
		$(".Div1_next img").click(function(){
			 index++ ;
			 NextPage();
		});
		//上一页
		$(".Div1_prev img").click(function(){
			 index-- ;
			 PrevPage();
		});
		//自动滚动
		var timer = setInterval(function(){
				index++ ;
				NextPage();
			},4000);
			
		$(".Div1_next img , .Div1_main , .Div1_prev img , .Div1_title span").mouseover(function(){
			clearInterval(timer);
		});
		$(".Div1_next img , .Div1_main , .Div1_prev img , .Div1_title span").mouseleave(function(){
			timer = setInterval(function(){
				index++ ;
				NextPage();
			},4000);	
		});
		$(".list1").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -0+"px"},600);
			$(this).addClass('active').siblings().removeClass('active');
		});
		$(".list2").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -1190+"px"},600)
			$(this).addClass('active').siblings().removeClass('active');
		})
		$(".list3").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -2380+"px"},600)
			$(this).addClass('active').siblings().removeClass('active');
		})
		$(".list4").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -3570+"px"},600)
			$(this).addClass('active').siblings().removeClass('active');
		})
		$(".list5").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -4760+"px"},600)
			$(this).addClass('active').siblings().removeClass('active');
		})
			
})
