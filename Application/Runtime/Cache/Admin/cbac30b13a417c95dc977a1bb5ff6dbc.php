<?php if (!defined('THINK_PATH')) exit(); if(session('username') === null): ?><script>
    alert('干嘛呢这是！');
    location.href="/admin.php/Login/login";
  </script><?php endif; ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-theme.min.css"/>
    <script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.min.js"></script>

<!-- 引入kindeditor -->
    <script charset="UTF-8" src="/Public/kindeditor/kindeditor-min.js"></script>
    <script charset="UTF-8" src="/Public/kindeditor/lang/zh_CN.js"></script>

    <script type="text/javascript">
    KindEditor.ready(function(K){
        K.create('textarea[name="content"]', {
            allowFileManager: true,
        afterBlur: function(){this.sync();}
        });
    });
    </script>

<style type="text/css">
body {
    margin:0px 3px 0px 3px;
.STYLE1 {
	color: #e1e2e3;
	font-size: 12px;
}
.STYLE6 {color: #000000; font-size: 12px; }
.STYLE10 {color: #000000; font-size: 12px; }
.STYLE19 {
	color: #344b50;
	font-size: 12px;
}
.STYLE21 {
	font-size: 12px;
	color: #3b6375;
}
.STYLE22 {
	font-size: 12px;
	color: #295568;
}
</style>
</head>
<body bgcolor="red">
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  <ul style="">
    <li style="list-style:none;background:#DCEFFA;font-size:16px;color:#333;padding-top:12px;margin-left:-43px;line-height:16px;"><span style="font-weight:bolder">当前所在位置：</span>
        
会员管理 >> 添加会员

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
	<style type="text/css">
	input{
		height: 40px;
		width: 450px;
		margin-top: 5px;
	}
	.btn{
		margin-left:450px;
	}
	.btn input{
		height: 30px;
		width: 80px;
	}
	
	</style>
	<form action="/admin.php/Member/addDo" onsubmit="return fun()"  method="post">
		<table class="add" width="100%">
			<tr>
				<td align="right" width="200">用户名：</td>
				<td><input type="text" name="username" id="username" value="请输入用户名！"/></td>
			</tr>
			<tr>
				<td align="right">密  码：</td>
				<td><input type="password" name="password" id="password" /></td>
			</tr>
			<tr>
				<td align="right">电话号码：</td>
				<td><input type="text" name="phone"/>
					<span></span>
				</td>
			</tr>
			<tr>
				<td align="right">邮  箱：</td>
				<td><input type="email" name="email" id="email" /></td>
			</tr>
			<tr>
				<td align="right">地  址：</td>
				<td><input type="text" name="address" id="address" /></td>
			</tr>
		</table>
		<div class="btn">
			<input type="submit" value="提交" />
			<input type="reset" value="重置" />
		</div>
			
		
	</form>
	<script type="text/javascript">
		var username = document.getElementById("username");
		var password = document.getElementById("password");
		var flag;
		username.onblur = function(){
			if(this.value.length == 0){
				$("#username").after("<span style='font-size:12px;color:red'>用户名不能为空！</span>");
				flag = false;
			}else if(!isNaN(username.value+0)){
				$("#username").after("<span style='font-size:12px;color:red'>用户名不能全为数字！</span>");
				flag = false;
			}else if(this.value.length < 6){
				$("#username").after("<span style='font-size:12px;color:red'>用户名不能少于6位！</span>");
				flag = false;
			}else{
				$.post('/admin.php/Member/addUserDo',{'username':this.value},function(data){
					if(data == "success"){
						$("#username").after("<span style='font-size:12px;color:green'>用户名可用</span>");
						flag = true;
					}else{
						$("#username").after("<span style='font-size:12px;color:red'>用户名已存在</span>");
						flag = false;
					}
				})
			}
		}
		username.onfocus = function(){
			if(this.value == "请输入用户名！"){
				this.value = "";
				
			}
			if($("#username+span") != null){
				$("#username+span").empty();
			}
		}
		password.onblur = function(){
			if(this.value.length == 0){
				$("#password").after("<span style='font-size:12px;color:red'>密码不能为空！</span>");
				flag = false;
			}else if(this.value.length < 6){
				$("#password").after("<span style='font-size:12px;color:red'>密码不能少于6位！</span>");
				flag = false;
			}else{
				$("#password").after("<span style='font-size:12px;color:green'>密码可用！</span>");
				flag = true;
			}
		}
		password.onfocus = function(){
			if($("#password+span") != null){
				$("#password+span").empty();
			}
		}
		function fun(){
			return flag;
		}
		$("input[name=email]").blur(function(){doEmail();});
		$("input[name=phone]").blur(function(){doTel();});
		//验证邮箱
		function doEmail(){
			var t = $("input[name=email]");
			var span = t.next();
			if(/^\w+@\w+(\.[a-zA-Z]{2,3})+$/.test(t.val())){
				span.html('格式正确').css({color:"green",fontSize:"12px"});
				flag = true;
			}else{
				span.html('邮箱不合法').css({color:"red",fontSize:"12px"});
				flag = false;
			}
		}
		//验证手机号
		function doTel(){
			var t = $("input[name=phone]");
			var span = t.next();
			if(/^1[3578][0-9]{9}$/.test(t.val())){
				span.html('');
				flag = true;
			}else{
				span.html("手机号码格式错误").css({color:"red",fontSize:"12px"});
				flag = false;
			}
		}
	</script>

</table>
</body>
</html>