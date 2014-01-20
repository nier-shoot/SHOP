var validate={
	username:false,
	password:false,
	verifyCode:false
}

$(function(){
	$('input[name=username],input[name=password],input[name=verifyCode]').focus(function(){
		$('#login-msg').html('');

	});

	var login=$('form[name=login_form]');
	login.submit(function(){
		if(validate.username&& validate.password&& validate.verifyCode){
			return true;
		}
		//$('input[name=verifyCode]').trigger('blur');
		$('input[name=username]').trigger('blur');
		$('input[name=password]').trigger('blur');
		$('input[name=verifyCode]').trigger('blur');
		return false;
	});

		$('input[name=verifyCode]').blur(function(){
		var code=$(this).val();
		var span=$('#login-msg');
		if(code==''){
			span.html('验证码不能为空');
			validate.verifyCode=false;
			return;
		}
	$.ajax({
		url:APP+'/Login/verifyCode',
		data:{verifyCode:code},
		type:'post',
		success:function(data){
			if(data==0){
				validate.verifyCode=false;
				span.html('验证码错误');
			}else if(data==1){
				validate.verifyCode=true;
				
			}
		}
	})
	})


	$('input[name=username]').blur(function(){
		var username=$(this).val();		
		var span = $('#login-msg');
		if(username == ''){
			span.html('请填入账号');
			validate.username=false;
		}
		return;
	})

	$('input[name=password]').blur(function(){
	$('input[name=verifyCode]').trigger('blur');
		var password=$(this).val();	
		var span=$('#login-msg');
		if(password==''){
			span.html('请输入密码');
			validate.password=false;
			return;
		}
		var data={
			username:$('input[name=username]').val(),
			password:password
		}
		$.ajax({
			url:APP+'/Login/ajax_login',
			data:data,
			type:'post',
			success:function(data){
				if(data==1){
					validate.username=true;
					validate.password=true;
				}else{
				span.html('密码或账号错误');
				}
			}
		})

	})






})

