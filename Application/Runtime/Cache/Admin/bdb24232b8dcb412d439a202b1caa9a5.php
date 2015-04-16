<?php if (!defined('THINK_PATH')) exit(); if(session('username') === null): ?><script>
    alert('请登录！');
    location.href="/admin.php/Login/login";
  </script><?php endif; ?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {
	font-size: 12px;
	color: #000000;
}
.STYLE5 {font-size: 12}
.STYLE7 {font-size: 12px; color: #FFFFFF; }
.STYLE7 a{font-size: 12px; color: #FFFFFF; }
a img {
	border:none;
}
</style></head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="57" background="/Public/Admin/images/main_03.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="378" height="57" background="/Public/Admin/images/main_01.gif">&nbsp;</td>
        <td>&nbsp;</td>
        <td width="281" valign="bottom"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="33" height="27"><img src="/Public/Admin/images/main_05.gif" width="33" height="27" /></td>
            <td width="248" background="/Public/Admin/images/main_06.gif"><table width="225" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td height="17"><div align="right"><a href="/admin.php/Manager/editPwd" target="rightFrame"><img src="/Public/Admin/images/pass.gif" width="69" height="17" /></a></div></td>
                
                <td><div align="right"><a href="/admin.php/Login/exits"  onclick= "return confirm('确定退出本系统？')" target="_parent"><img src="/Public/Admin/images/quit.gif" alt=" " width="69" height="17" /></a></div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="40" background="/Public/Admin/images/main_10.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="194" height="40" background="/Public/Admin/images/main_07.gif">&nbsp;</td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          
        </table></td>
        <td width="248" background="/Public/Admin/images/main_11.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="16%"><span class="STYLE5"></span></td>
            <td width="75%"><div align="center"><span class="STYLE7"><a href="/admin.php/Index/exits" target="_top">点此进入退出登录进入前台首页</a></span></div></td>
            <td width="9%">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="30" background="/Public/Admin/images/main_31.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="8" height="30"><img src="/Public/Admin/images/main_28.gif" width="8" height="30" /></td>
        <td width="147" background="/Public/Admin/images/main_29.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="24%">&nbsp;</td>
            <td width="43%" height="20" valign="bottom" class="STYLE1">管理菜单</td>
            <td width="33%">&nbsp;</td>
          </tr>
        </table></td>
        <td width="39"><img src="/Public/Admin/images/main_30.gif" width="39" height="30" /></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
          <?php switch($state): case "0": $state = '超级管理员'; break;?>    
            <?php case "1": $state = '管理员'; break;?>    
            <?php case "2": $state = '录入人员'; break;?>    
            <?php default: endswitch;?>
            <td height="20" valign="bottom"><span class="STYLE1">当前登录用户：<?php echo ($username); ?> &nbsp;用户角色：<?php echo ($state); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="STYLE1">登录IP：<?php echo ($ip); ?> &nbsp;</span></td>
            <td valign="bottom" class="STYLE1"><div align="right"></div></td>
          </tr>
        </table></td>
        <td width="17"><img src="/Public/Admin/images/main_32.gif" width="17" height="30" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>