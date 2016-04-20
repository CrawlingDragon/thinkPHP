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
			if(index>2)
			{
				index = 0 ;
			}
			$(".Div1_title span a").removeClass("Div1_title_a1").eq(index).addClass("Div1_title_a1");
			$(".Div1_main").stop(true, false).animate({left: -index*Swidth+"px"},600);
			$(".aa").eq(index).css("color","red").siblings().css("color","green");	
		}
		
		function PrevPage()
		{	
			if(index<0)
			{
				index = 2 ;
			}
			$(".Div1_title span a").removeClass("Div1_title_a1").eq(index).addClass("Div1_title_a1");
			$(".aa").eq(index).css("color","red").siblings().css("color","green");
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
		$(".1").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -0+"px"},600);
			$(this).css("color","red").siblings().css("color","green");
		});
		$(".2").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -1190+"px"},600)
			$(this).css("color","red").siblings().css("color","green");
		})
		$(".3").click(function(){
			$(".Div1_main").stop(true, false).animate({left: -2380+"px"},600)
			$(this).css("color","red").siblings().css("color","green");
		})
		if(index=10){
			console.log("bb");
		}else if(index=3){
			console.log("cc");
		}
		// $(".4").click(function(){
		// 	$(".Div1_main").stop(true, false).animate({left: -1190+"px"},600)
		// 	console.log()
		// })
			
			
})
