$(function(){
			
        	$('form :input').blur(function(){
	             var $parent = $(this).parent();
	             $parent.find(".formtips").remove();
	             $(this).removeAttr("style");
	             //登录名验证
	             if($(this).is('#userNameLogin')){
	             	if (this.value=="") {
	             		var errorMsg = '请输入用户名';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	}
	             }
	             //注册登录名验证
	             if($(this).is('#userName')){
	             	var telReg= /^1[3|4|5|8|9]\d{9}$/; //手机号码
	             	if (this.value=="" || (!telReg.test(this.value))) {
	             		var errorMsg = '请输入格式正确的用户名';
	             		$parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	             		$(this).css("border","1px solid #ff6600");
	             	}
	             }
	           
	             //密码验证
	             if( $(this).is('#userPwd') ){
	             	var pwdCode = /^(?![\d]+$)(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/;
	                if( this.value=="" ){
	                      var errorMsg = '请输入密码';
	                      $parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                } else if (!pwdCode.test(this.value)) {
	                      var errorMsg = '密码由6-20位字母、数字、特殊符号的任意二种以上组合';
	                      $parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	             }

	             //对比两次密码是否一致
	             if( $(this).is('#userPwd2') ){
	             	var pwdCode = /^(?![\d]+$)(?![a-zA-Z]+$)(?![^\da-zA-Z]+$).{6,20}$/;
	                if( this.value=="" ){
	                      var errorMsg = '请输入密码';
	                      $parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                } else if (this.value !== $('#userPwd').val()) {
	                      var errorMsg = '确认密码和登录密码不一致';
	                      $parent.append('<p class="formtips onError">'+ errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	             }


	             //手机验证码验证
	             if( $(this).is('#smsValue') ){
	                if( this.value=="" ){
	                      var errorMsg = '请输入验证码！';
	                      $parent.append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	             }

	             

	             //电脑验证码
	             if( $(this).is('#verify') ){
	                if( this.value=="" ){
	                      var errorMsg = '请输入验证码！';
	                      $parent.append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $(this).css("border","1px solid #ff6600");
	                }
	             }
        
	        }).keyup(function(){
	           $(this).triggerHandler("blur");
	        });//end blur

	       
	        //点击获取短信验证
	        $('#smsValueGet').click(function(){
	        	$("#userName").parent().find(".formtips").remove();
	        	$("#userName").removeAttr("style");
	        	if(!/^1[3|4|5|8|9]\d{9}$/.test($("#userName").val())) {
	                      var errorMsg = '请输入正确的手机号！';
	                      $("#userName").parent().append('<p class="formtips onError">'+errorMsg+'</p>');
	                      $("#userName").css("border","1px solid #ff6600");
	                      return;
	                }

	            //点击获取验证码之后显示"60秒倒计时"
	            settime(this);
	        });

	        //是否同意《用户协议》
	         $('.readMe').click(function(){
	         	$(".readMe").parent().find(".formtips , br").remove();
                if ($(".readMe").is(':checked')) {
                	$(".readMe").parent().find(".formtips , br").remove();
                }else{
                	$(".readMe").parent().append('<br><p class="formtips onError">'+'请接受《用户协议》'+'</p>');
                }
            });
	        
	        //提交，最终验证。
	         $('.subBtn').click(function(){
	                $("form :input.require").trigger('blur');//点击btn之后再次检测一遍form的内容
	                //是否同意《用户协议》
	                 $('.readMe').trigger('click');
	                // if (!$(".readMe").is(':checked')) {
	                // 	$(".readMe").parent().append('<br><p class="formtips onError">'+'请接受《用户协议》'+'</p>');
	                // }
	        
	                var numError = $('form .onError').length;
	                if(numError){
	                    return false;
	                }
	                
	         });


		});