;(function($){
	$.fn.extend({
		dropDownWrap:function(){
			this.click(function(e){
				var ul = $("#dropdown ul"); 
				if(ul.css("display")=="none"){ 
					ul.slideDown("fast"); 
				}else{ 
					ul.slideUp("fast"); 
				} 
				e.stopPropagation();
				$(document).one("click", function(){
			        ul.hide();
			    });
			});
		},
		dropDownList:function(){
			this.click(function(){
				var val = $(this).text();
				var dataVal = $(this).attr("data-value");
				$("#dropdown p").html(val);
				$("#dropdown p").addClass("drpP");
				$("#dropdown ul").hide();
				console.log("中文值是："+val);
				console.log("数字值是："+dataVal);
			});
		}
	});
})(jQuery);




