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
        
会员管理 >> 查看会员

        <div style="float:right;margin:-12px 0 0 0;"><img src="/Public/Home/images/images/logo.png"></div>
        <hr/>
    </li>
  </ul>
  
<style type="text/css">
    tr{
      height: 30px;
    }
    .main th,.main td{
      text-align: center;
    }
</style>
    <table width="100%" class="main table table-striped">
        <thead>
            <th>用户名</th>
            <th>电话</th>
            <th>注册时间</th>
            <th>地址</th>
            <th>操作</th>
        </thead>
        <?php if(is_array($row)): foreach($row as $key=>$vo): ?><tr>
            <td><a href="/admin.php/Member/editMessage?id=<?php echo ($vo["id"]); ?>" target="rightFrame"><?php echo ($vo["username"]); ?></a></td>
            <td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo (date('Y-m-d H:i:s',$vo["regtime"])); ?></td>
            <td><textarea rows="1"><?php echo ($vo["address"]); ?></textarea></td>
            <td>
                <a href="/admin.php/Member/editForbidden?id=<?php echo ($vo["id"]); ?>" target="rightFrame"><button class="btn btn-warning">启用</button></a>&nbsp;<a href="/admin.php/Member/delete?id=<?php echo ($vo["id"]); ?>"><button class="btn btn-danger">删除</button></a>
            </td>
        </tr><?php endforeach; endif; ?>
        <tr>
            <td colspan="6"><?php echo ($page); ?></td>
        </tr>
    </table>

</table>
</body>
</html>