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
        
添加分类 >> 添加二级分类

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<table>
<form role="form" action="/admin.php/Sort/addSecondSortDo" onsubmit="return fun()" method="post">
	<div class="col-md-2" style="margin:45px 0 0 120px">
		<div style="font-size:14px;font-weight:bolder">
			请选择一级分类：
		</div>
		<select class="form-control" name="pid">
			<option>请选择</option>
			<?php if(is_array($row)): foreach($row as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
		</select>
	</div>
	<div class="form-group" style="margin:125px 0 0 123px;font-size:14px;">
	  	<div class="col-md-4">
		    <label for="exampleInputEmail1">请输入商品二级分类</label>
		    <input type="text" name="name" class="form-control" id="type" placeholder="商品分类">
    	</div>
  	</div>
  	<div style="font-size:14px;margin:225px 0 0 140px">
  		<span style="font-weight:bolder;color:red">注意：</span>本页为商品二级分类页，请在提交之前确认输入的信息！
  	</div>
  	<div style="margin:35px 0 0 140px">
  		<button id="btn" type="submit" class="btn btn-primary btn-lg">提交</button>
  	</div>
</form>
</table>

</table>
</body>
</html>