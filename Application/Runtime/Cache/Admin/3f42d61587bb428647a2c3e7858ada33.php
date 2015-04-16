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
        
管理员 >> 修改密码

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<form action="/admin.php/Manager/editPwdDo" onsubmit="return fun()" method="post">
<input type="hidden" name="id" value="<?php echo ($row['id']); ?>">
<table class="table table-hover table-striped">
	<tr>
		<td width="300" align="center">用户名：</td>
		<td><?php echo ($row['username']); ?></td>
	</tr>
	<tr>
		<td align="center">注册时间：</td>
		<td><?php echo (date('Y-m-d H:i:s',$row['addtime'])); ?></td>
	</tr>
	<tr>
		<td align="center">输入新密码：</td>
		<td><input id="newPassword" type="password" name="newPassword"></td>
	</tr>
	<tr>
		<td align="center">确认新密码：</td>
		<td><input id="rePassword" type="password" name="rePassword"></td>
	</tr>
	<tr>
		<td colspan="2"><button id="btn" type="submit" class=" btn btn-primary col-md-2 col-md-offset-3">修改密码</button></td>
	</tr>
</table>
</form>
<script type="text/javascript">
var flag;
$("#btn").click(function(){
	if($("input[name=newPassword]").val() != $("input[name=rePassword]").val()){
		$("input[name=rePassword]").after("<span style='font-size:12px;color:red'>两次密码不一致</span>");
		flag = false;
	}else{
		flag = true;
	}
	
})
$("input[name=rePassword]").focus(function(){
		if($("input[name=newPassword]").val().length < 6){
			alert("新密码不能少于6位");
		}
	})
function fun(){
	return flag;
}
	
</script>

</table>
</body>
</html>