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
        
审核管理 >> 未审核商品列表

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<table class="table table-hover table-striped">
	<tr>
		<th>商品编号</th>
		<th>商品名</th>
		<th>所属品牌</th>
		<th>商品市场价</th>
		<th>商品现价</th>
		<th>商品简介</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($row)): foreach($row as $key=>$vo): ?><tr>
			<td><?php echo ($vo["id"]); ?></td>
			<td><a href="/admin.php/Audit/goods?id=<?php echo ($vo["id"]); ?>"><?php echo ($vo["goods"]); ?></a></td>
			<td><?php echo ($vo["brand"]); ?></td>
			<td><?php echo ($vo["price"]); ?>元</td>
			<td><?php echo ($vo["discount"]); ?>元</td>
			<td><textarea rows="1"><?php echo ($vo["intro"]); ?></textarea></td>
			<td>
				<a href="/admin.php/Audit/editState?id=<?php echo ($vo["id"]); ?>"><button class="btn btn-primary">通过</button></a>
				<a href="/admin.php/Audit/notPass?id=<?php echo ($vo["id"]); ?>"><button class="btn btn-primary btn-danger">不通过</button></a>
			</td>
		</tr><?php endforeach; endif; ?>
	<tr>
		<td colspan="8" align="center"><?php echo ($page); ?></td>
	</tr>
</table>

</table>
</body>
</html>