$(function(){

	$(document).ready(function(){
	    $(".store-nav a").each(function(){
	        $this = $(this);
	        if($this[0].href==String(window.location)){
	            $this.addClass("curnav");
	        }
	    });
	});

	$(".drop-down").click(function(){
		$(".store-intro").toggle();
	});
});
