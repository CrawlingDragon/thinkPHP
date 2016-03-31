window.onload = function(){
	var osTop = document.documentElement.scrollTop || document.body.scrollTop ;//距离显示器顶端的距离
	var clientHeight = document.documentElement.clientHeight;//获取页面可视区的高度 
	var myBar = document.getElementById('leftbar');
	window.onscroll =function(){
		var osTop = document.documentElement.scrollTop || document.body.scrollTop;
		console.log(osTop);
		if(osTop<=800){
			$('#leftbar').hide();
		}
		else if(osTop >= 800 && osTop<1119){
			$('#leftbar').show();
			$("#a1").find(".z1").hide();
			$("#a1").find(".z2").show().css("border","");
			$("#a1").siblings().find(".z2").hide();
			$("#a1").siblings().find(".z1").show();
			$("#a1").prev().find(".z1").css("border-bottom","none");
		}else if(osTop >= 1200 && osTop<1799){
			$('#leftbar').show();
			$("#a2").find(".z1").hide();
			$("#a2").find(".z2").show().css("border","");
			$("#a2").siblings().find(".z2").hide();
			$("#a2").siblings().find(".z1").show();
			$("#a2").prev().find(".z1").css("border-bottom","none");
		}else if(osTop >=1800 && osTop<2200){
			$('#leftbar').show();
			$("#a3").find(".z1").hide();
			$("#a3").find(".z2").show().css("border","");
			$("#a3").siblings().find(".z2").hide();
			$("#a3").siblings().find(".z1").show();
			$("#a3").prev().find(".z1").css("border-bottom","none");
		}else if(osTop >=2201 && osTop<2699){
			$('#leftbar').show();
			$("#a4").find(".z1").hide();
			$("#a4").find(".z2").show().css("border","");
			$("#a4").siblings().find(".z2").hide();
			$("#a4").siblings().find(".z1").show();
			$("#a4").prev().find(".z1").css("border-bottom","none");
		}else if(osTop >=2700 && osTop<3216){
			$('#leftbar').show();
			$("#a5").find(".z1").hide();
			$("#a5").find(".z2").show().css("border","");
			$("#a5").siblings().find(".z2").hide();
			$("#a5").siblings().find(".z1").show();
			$("#a5").prev().find(".z1").css("border-bottom","none");
		}else if(osTop >=3216){
			
			$("#a5").find(".z1").hide();
			$("#a5").find(".z2").show().css("border","");
			$("#a5").siblings().find(".z2").hide();
			$("#a5").siblings().find(".z1").show();
			$("#a5").prev().find(".z1").css("border-bottom","none");
			$('#leftbar').hide();
		}
	}
}