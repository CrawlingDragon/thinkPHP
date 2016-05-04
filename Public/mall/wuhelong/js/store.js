$(function(){

	$(document).ready(function(){
	    $(".store-nav a").each(function(){
	        $this = $(this);
	        if($this[0].href==String(window.location)){
	            $this.addClass("curnav");
	        }
	    });
	});

	$(".dropDownWrap").hover(function(e){
		var intro = $(".store-intro"); 
		intro.stop().slideDown("fast");
		intro.mouseover(function(){});
		e.stopPropagation();
		$(document).one("click", function(){
	        intro.hide();
	    });
	},function(){
		var intro = $(".store-intro"); 
		intro.stop().slideUp("fast"); 
	});


    $(function(){   
        //缩略图对应大图
        $('.smallImg').hover(function(){
            $(this).parent().parent().parent().parent().parent('.goodsList-wrap').find('.jqzoom img').attr("src",$(this).attr("src"));
            $(this).parent().parent().parent().parent().parent('.goodsList-wrap').find('.jqzoom img').attr("jqimg",$(this).attr("bimg"));
        });
        
        //图片下方公司出现
        $('.spec-preview').hover(function(){
            $(this).find('.spec-bottom').toggle();
        })

        //缩略图的边框变化
        $('.spec-scroll .items li').hover(function(){
            $(this).addClass('active').siblings().removeClass('active');
        })
    });
    /*收藏商品*/
    function addCollect(product_id){
        alert(product_id)
    }


});
