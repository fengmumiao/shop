<?php if (!defined('THINK_PATH')) exit(); if(session('username') === null): ?><script>
		alert('亲，请先登录您的账号！');
		location.href="/admin.php/Login/login";
	</script><?php endif; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>三合商城后台管理系统</title>

<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>


</head>
<frameset rows="127,*,11" frameborder="no" border="0" framespacing="0">
	<frame src="/admin.php/Index/top" name="topFrame" scrolling="No"
		noresize="noresize" id="topFrame" />
	<frame src="center.html" name="mainFrame" id="mainFrame" />	
</frameset>
<noframes>
<body>
顶顶顶顶顶顶顶顶顶
</body>
</noframes>
</html>