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
        
商户管理 >> 查看优质商铺

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<table class="table table-hover table-striped">
	<tr>
		<th>商铺名</th>
		<th>LOGO</th>
		<th>商铺管理员</th>
		<th>电子邮箱</th>
		<th>联系电话</th>
		<th>访客量</th>
		<th>操作</th>
	</tr>
	<?php if(is_array($row)): foreach($row as $key=>$vo): ?><tr>
			<td><a href="/admin.php/Shop/findShop?id=<?php echo ($vo["id"]); ?>" target="rightFrame"><?php echo ($vo["shopname"]); ?></a></td>
			<td><img src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" width="60"></td>
			<td><?php echo ($vo["username"]); ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo ($vo["phone"]); ?></td>
			<td><?php echo ($vo["visitors"]); ?></td>
			<td>
				<a href="/admin.php/Shop/findShop?id=<?php echo ($vo["id"]); ?>" target="rightFrame"><button class="btn btn-warning">修改</button></a>&nbsp;<a href="/admin.php/Shop/forbidden?id=<?php echo ($vo["id"]); ?>" target="rightFrame"><button class="btn btn-Danger">禁用</button></a>
			</td>
		</tr><?php endforeach; endif; ?>
	<tr>
         <td colspan="7" align="center"><?php echo ($page); ?></td>
    </tr>
</table>

</table>
</body>
</html>