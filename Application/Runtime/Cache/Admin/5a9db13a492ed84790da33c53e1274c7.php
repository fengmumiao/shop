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
        
添加分类 >> 添加一级分类

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<table>
<form role="form" action="/admin.php/Sort/addSortDo" onsubmit="return fun()" method="post">
  	<div class="form-group" style="margin-left:100px;margin-top:40px">
	  	<div class="col-md-4">
		    <label for="exampleInputEmail1">请输入商品一级分类</label>
		    <input type="text" name="name" class="form-control" id="type" placeholder="商品分类">
    	</div>
  	</div>
  	<div style="float:left;margin:150px 0 0 -340px">
  		<button id="btn" type="submit" class="btn btn-primary">提交</button>
  	</div>
  	<div style="float:left;font-size:12px;margin-top:90px;margin-left:-340px"><span style="color:red">注意：</span>请输入一级分类，如：男鞋、女鞋、童装等</div>
</form>
</table>
<script type="text/javascript">
	var flag;
	var btn = document.getElementById("btn");
	var type = document.getElementById("type");
	btn.onclick = function(){
		if(type.value.length == 0){
			flag = false;
			alert('一级分类不能为空');
		}else{
			flag = true;
		}
	}
	function fun(){
		return flag;
	}
</script>

</table>
</body>
</html>