window.onload = function(){
	var gotop = document.getElementById('gotop');
	var timer = null;
	var mTop = true;
	var avail = window.screen.availHeight; //屏幕可工作区域高度
	
	// window.onmousewheel = function(){ //滚动事件
	// 	if(!mTop){  //!mTop,!表示取反
	// 		console.log("aa");
	// 		clearInterval(timer);
	// 	}else{
	// 		mTop = false;
	// 	}
	// }

	gotop.onclick = function(){
		var timer = setInterval(function(){
			var iTop = document.documentElement.scrollTop || document.body.scrollTop; //IE兼容性获取屏幕距离顶部的距离
			var iSpeed = Math.floor(-iTop/6);//Math向下取舍小数点，/6是为了速度从快到慢，都是不同的值
			document.documentElement.scrollTop = document.body.scrollTop = iTop + iSpeed; //为了后面判断scrollTop小于0，采取负数
			mTop = true;
			if(iTop == 0){
				clearInterval(timer);
			}
		},30)
	}
	// 获取gotop距离浏览器顶部的距离
	window.onscroll = function(){
		var iTop = document.documentElement.scrollTop || document.body.scrollTop; //IE兼容性获取屏幕距离顶部的距离
		if(iTop >= avail){
			gotop.style.display = "block";
		}else{
			gotop.style.display = "none";
		}
	}
	console.log(avail);

}