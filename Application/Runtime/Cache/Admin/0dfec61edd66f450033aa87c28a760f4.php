<?php if (!defined('THINK_PATH')) exit();?><HTML>
<HEAD>
<TITLE>后台管理登录</TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8" />
<LINK 
href="/Public/Admin/css/style_left.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>
<!-- <SCRIPT src="/Public/Admin/js/softkeyboard.js" type=text/javascript></SCRIPT> -->
<META content="MSHTML 6.00.2900.5880">
</HEAD>
<BODY id="loginbody">
<FORM action="/admin.php/Login/loginDo" method="post">
  <DIV id="adminboxall">
  <DIV class=adminboxtop></DIV>
  <DIV id="adminboxmain">
    <DIV style="MARGIN-TOP: 5px; MARGIN-LEFT: 380px">
      <INPUT id="IbtnEnter" 
style="BORDER-TOP-WIDTH: 0px; BORDER-LEFT-WIDTH: 0px; BORDER-BOTTOM-WIDTH: 0px; WIDTH: 76px; HEIGHT: 26px; BORDER-RIGHT-WIDTH: 0px" 
type=image src="/Public/Admin/images/admin_menu.gif" name=IbtnEnter>
    </DIV>
  </DIV>
  <DIV class="adminboxbottom">
    <DIV id="login">
      <UL>
        <LI class="text">用户名：<BR>
          <DIV class="box1">
            <INPUT class=smallInput id=LoginName style="WIDTH: 80px;margin-top:3px"" 
  name="user">
          </DIV>
        </LI>
        <LI class="text">密 码：<BR>
          <DIV class=box2>
            <INPUT class=smallInput id="LoginPassword" style="WIDTH: 80px;margin-top:3px" 
  type=password name="pwd">
          </DIV>
        </LI>
        <LI class="text"><span style="margin-left:-65px">验证码：</span><BR>
          <DIV class="box4">
            <INPUT name="chknumber" class=smallInput id="code" maxLength=5 size=8 style="margin-top:-26px"/>
            &nbsp;<img src="/admin.php/Login/code" id="safecode"/></DIV>
        </LI>
      </UL>
    </DIV>
  </DIV>
  </DIV>
</FORM>
</BODY>
<script type="text/javascript">
  $("#safecode").click(function(){
    $("#safecode").attr('src',"/admin.php/Login/code"+'?'+Math.random());
  })
</script>
</HTML>