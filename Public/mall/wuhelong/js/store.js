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

});
