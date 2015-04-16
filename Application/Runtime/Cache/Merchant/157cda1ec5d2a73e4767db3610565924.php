<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>商家后台登录</title>

<link href="/Public/Merchant/css/main.css" rel="stylesheet" type="text/css" />

</head>
<body>


<div class="login">
    <div class="box png">
    <div class="logo png"></div>
    <div class="input">
      <div class="log">
      <form action="/merchant.php/Merchant/LoginReg/check_log" method="post">
        <div class="name">
          <label>用户名</label><input type="text" class="text" id="value_1" placeholder="用户名" tabindex="1" name="username">
        </div>
        <div class="pwd">
          <label>密　码</label><input type="password" class="text" id="value_2" placeholder="密码" tabindex="2" name="password">
          <input type="submit" class="submit" tabindex="3" value="登录">
          <div class="check"></div>
        </div>
      </form>
        
        <div class="tip"></div>
      </div>
    </div>
  </div>
    <div class="air-balloon ab-1 png"></div>
  <div class="air-balloon ab-2 png"></div>
    <div class="footer"></div>
</div>

<script type="text/javascript" src="/Public/Merchant/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/fun.base.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/script.js"></script>


<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>没有账号?<a href="register">请先注册!</a></p>
</div>
<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">
<p>技术之持：lamp兄弟连90期三合网络工作室</p>
</div>
</body>
</html>