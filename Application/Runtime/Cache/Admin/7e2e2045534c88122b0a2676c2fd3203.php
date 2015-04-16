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
        
后台首页

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
    <table class="table table-striped">
    	<tr>
    		<td colspan="2">
    			<span style="font-weight:bolder">感谢您使用三合网上购物商城后台管理系统</span>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<span style="font-size:14px;margin-left:28px">1. 本系统是由三合兄弟网络工作室开发，版本: v1.0。</span>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<span style="font-size:14px;margin-left:28px">2. 通过本系统可以更直观、更便捷的浏览网站数据。你只需会上网、会打字，就可以管理网站。</span>
    		</td>
    	</tr>
    	<tr>
    		<td colspan="2">
    			<span style="font-size:14px;margin-left:28px">3.  如有问题请联系三合兄弟网络工作室 电话12345678901。</span>
    		</td>
    	</tr>
        <?php switch($row[0]['state']): case "0": $state = '超级管理员'; break;?>    
            <?php case "1": $state = '管理员'; break;?>    
            <?php case "2": $state = '录入人员'; break;?>    
            <?php default: endswitch;?>
	     <tr>
	        <td style="padding-left:100px;width:300px">欢迎您：&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight:bolder;color:#ffb90f"><?php echo ($username); ?></span></td>
	        <td style="padding-left:-300px">您的身份是：&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight:bolder;color:#ffb90f"><?php echo ($state); ?></span></td>
	    </tr>
	    <tr>
	        <td style="padding-left:100px">上次登录时间：&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight:bolder;color:#ffb90f"><?php echo (date('Y-m-d H:i:s',$lastLogTime)); ?></span></td>
	        <td>本次登录时间：&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-weight:bolder;color:#ffb90f"><?php echo (date('Y-m-d H:i:s',$nowTime)); ?></span></td>
	    </tr>
	    <tr>
	        <td style="padding-left:100px" colspan="2">这是第&nbsp;&nbsp;<span style="font-weight:bolder;color:#ffb90f"><?php echo ($row[0]['loginnum']); ?>&nbsp;&nbsp;</span>次登陆</td>
	    </tr>
    </table>    

</table>
</body>
</html>