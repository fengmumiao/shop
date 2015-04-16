<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>用户注册页面 </title> 
  <meta name="keywords" content="Bootstrap" />
  <meta name="description" content="Bootstrap插件下载" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">
  <!-- Stylesheets -->
  <link href="/Public/Merchant/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="/Public/Merchant/css/font-awesome.css">
  <link href="/Public/Merchant/css/style.css" rel="stylesheet">
  <link href="/Public/Merchant/css/bootstrap-responsive.css" rel="stylesheet">
  
<!-- 三级联动 -->
<script type="text/javascript" src="/Public/Merchant/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/area.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/location.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/select2.js"></script>
<script type="text/javascript" src="/Public/Merchant/js/select2_locale_zh-CN.js"></script>
<link href="/Public/Merchant/css/common.css" rel="stylesheet"/>
<link href="/Public/Merchant/css/select22.css" rel="stylesheet"/>


 <script type="text/javascript">
//单击验证码刷新
  $(function(){
      $('#verify').click(function(event) {
        $(this).attr('src',"/merchant.php/Merchant/LoginReg/verify"+'?'+Math.random())
      });
  })

//ajax验证表单
  var gets = true;//是否让表单提交
  $(function(){


//当输入框失去焦点的时候，需要执行的方法
  $("input[name=username]").blur(function(){doUsername();});
  $("input[name=password]").blur(function(){doPassword();});
  $("input[name=repass]").blur(function(){doRepass();});
  $("input[name=shopname]").blur(function(){doShopname();});
  $("input[name=truename]").blur(function(){doTruename();});
  $("textarea[name=content]").blur(function(){doShopinfo();});
  $("input[name=phone]").blur(function(){doTel();});
  $("input[name=email]").blur(function(){doEmail();});
  $("input[name=verify]").blur(function(){doVerify();});

});

// 用户名的验证
  function doUsername(){
    var t = $("input[name=username]");
    var span = t.next();
    if(/^\w{5,12}$/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html("使用数字、字母、下划线，长度在5-12之间").css({color:"red",fontSize:"12px"});
      return false;

    }
  }
// 密码的验证
  function doPassword(){
    var t = $("input[name=password]");
    var span = t.next();
    if(t.val() == ''){
      span.html("密码不能为空").css({color:"red",fontSize:"12px"});
      return false;
    }else{
      span.html('');
      if(t.val().length<6 || t.val().length>15){
        span.html("密码长度为6-15位").css({color:"red",fontSize:"12px"});
        return false;
      }
      return true;
    }
  }
// 确认密码的验证
  function doRepass(){
    var t = $("input[name=repass]");
    var span = t.next();
    if(t.val() == $("input[name=password]").val() && t.val() != ''){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html("两次密码不一致").css({color:"red",fontSize:"12px"});
      return false;
    }
  }
// 店铺名的验证
   function doShopname(){
    var t = $("input[name=shopname]");
    var span = t.next();
    if(/^[a-zA-Z\u4e00-\u9fa5]{5,12}$/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html("使用汉字、字母，长度在5-30字符之间").css({color:"red",fontSize:"12px"});
      return false;
    }
  }
  // 真实姓名的验证
   function doTruename(){
    var t = $("input[name=truename]");
    var span = t.next();
    if(/^[\u4e00-\u9fa5]{2,12}$/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html("真实姓名必须是汉字2-12").css({color:"red",fontSize:"12px"});
      return false;
    }
  }


// 电子邮箱的验证
  function doEmail(){
    var t = $("input[name=email]");
    var span = t.next();
    if(/^\w+@\w+(\.[a-zA-Z]{2,3})+$/.test(t.val())){
      span.html('格式正确').css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html('邮箱不合法').css({color:"red",fontSize:"12px"});
      return false;
    }
  }

// 手机号码的验证
  function doTel(){
    var t = $("input[name=phone]");
    var span = t.next();
    if(/^1[3578][0-9]{9}$/.test(t.val())){
      span.html('');
      return true;
    }else{
      span.html("手机号码格式错误").css({color:"red",fontSize:"12px"});
      return false;
    }
  }
  // 店铺详情的验证
  function doShopinfo(){
    var t = $("textarea[name=content]");
    var span = t.next();
    if(t.val() == '' || t.val().length<20){
      span.html("详情不能为空并且不能少于20字符,严重审核").css({color:"red",fontSize:"12px"});
      return false;
    }else{
      return true;
    }
 
  
  }
// 数据提交的时候执行的方法
  function doTable(){
    var user = doUsername();
    var pass = doPassword();
    var repass = doRepass();
    var shopname = doShopname();
    var truename = doTruename();
    var content = doShopinfo();
    var email = doEmail();
    var tel = doTel();
    if(user&&pass&&repass&&shopname&&truename&&content&&email&&tel){

      return true;
    }else{
      return false;

    }
  }



</script> 
<style type="text/css">
  body{

    background:url('/Public/Merchant/img/banner_02.gif') no-repeat fixed ;
   
  }
  .select2-container .select2-choice .select2-arrow {
    display: inline-block;
    width: 18px;
    height: 100%;
    position: absolute;
    right: 0;
    top: 0;

    border-left: 1px solid #aaa;
    border-radius: 0 4px 4px 0;

    background-clip: padding-box;

    background: #ccc;
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #ccc), color-stop(0.6, #eee));
    background-image: -webkit-linear-gradient(center bottom, #ccc 0%, #eee 60%);
    background-image: -moz-linear-gradient(center bottom, #ccc 0%, #eee 60%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr = '#eeeeee', endColorstr = '#cccccc', GradientType = 0);
    background-image: linear-gradient(to top, #ccc 0%, #eee 60%);
    }

    html[dir="rtl"] .select2-container .select2-choice .select2-arrow {
        left: 0;
        right: auto;

        border-left: none;
        border-right: 1px solid #aaa;
        border-radius: 4px 0 0 4px;
    }

    .select2-container .select2-choice .select2-arrow b {
        display: block;
        width: 100%;
        height: 100%;
        background: url("/Public/Merchant/img/select2.png") no-repeat 0 1px;
    }

    html[dir="rtl"] .select2-container .select2-choice .select2-arrow b {
        background-position: 2px 1px;
    }

</style>
 
  <link rel="shortcut icon" href="/Public/Merchant/img/favicon/favicon.png">
</head>

<body>
 <div class="admin-form" style="margin-left:650px;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Widget starts -->
            <div class="widget wred">
              <div class="widget-head">
                <i class="icon-lock"></i> 注册 
              </div>
              <div class="widget-content">
                <div class="padd">
                  <form class="form-horizontal" action="addreg" method="post" onsubmit="return doTable()">
                    <!-- 用户名 -->
                        <div class="form-group" style="background:#fcf8e3">
                          <label class="control-label col-lg-3" >用户名</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="username" style="background:#fcf8e3"><span></span>
                          </div>
                        </div>
                        <!-- 密码 -->
                        <div class="form-group">
                          <label class="control-label col-lg-3" >密码</label>
                          <div class="col-lg-9">
                            <input type="password" class="form-control" name="password">
                            <span></span>
                          </div>
                        </div>
                        <!-- 重复密码 -->
                        <div class="form-group bg-danger">
                          <label class="control-label col-lg-3">确认密码</label>
                          <div class="col-lg-9">
                            <input type="password" class="form-control" name="repass"><span></span>
                          </div>
                        </div> 
                        <!-- 店铺名 -->
                        <div class="form-group bg-success" style="background:#f2dede">
                          <label class="control-label col-lg-3">店铺名</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="shopname" style="background:#f2dede"><span></span>
                          </div>
                        </div> 
                        <!-- 经营品牌 -->
                        <div class="form-group bg-success" style="background:#f2dede">
                          <label class="control-label col-lg-3">经营品牌</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="brand" style="background:#f2dede"><span></span>
                          </div>
                        </div> 
                        <!-- 真实姓名 -->
                        <div class="form-group">
                          <label class="control-label col-lg-3"  >真实姓名</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="truename" ><span></span>
                          </div>
                        </div> 
                        <!-- 邮箱 -->
                        <div class="form-group">
                          <label class="control-label col-lg-3" >邮箱</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="email"><span></span>
                          </div>
                        </div>
                        <!-- 手机号 -->
                        <div class="form-group" style="background:#d9edf7">
                          <label class="control-label col-lg-3" >手机号</label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="phone" style="background:#d9edf7"><span></span>
                          </div>
                        </div>
                        <!-- 店铺注册地址 -->
                        <div class="form-group">
                          <label class="control-label col-lg-3">商家地址</label>
                       
                          <div class="col-lg-9">
                            <select id="loc_province" style="min-width:88px;">
                            </select>
                            <select id="loc_city" style="min-width:100px; margin-left: 10px">
                            </select>
                            <select id="loc_town" style="min-width:115px;margin-left: 10px">
                            </select>

                            
                            
                           
                          </div> 

                        </div>  
                      <!-- 确认地址 -->
                        <div class="form-group" style="background:#d9edf7">

                          <label class="control-label col-lg-3" ><input type="button" id="btntext" value="点击确认" style="padding:5px 15px;" class="btn btn-primary" /></label>
                          <div class="col-lg-9">
                            <input type="text" class="form-control" name="address" style="background:#d9edf7"><span></span>
                          </div>
                          <script type="text/javascript">
                              $('#btntext').click(function(){ 
                              var position=$('#loc_province').select2('data').text + ' - ' + $('#loc_city').select2('data').text + ' - ' +  $('#loc_town').select2('data').text;
                                $("input[name=address]").val(position)
    })
                           </script>
                        </div>
                        


                          <!-- 店铺详情 -->
                          <div class="form-group">
                          <label class="control-label col-lg-3">店铺详情</label>
                          <div class="col-lg-9"> 
                            <textarea class="form-control" rows="5" name="content"></textarea><span></span>
                          </div>
                        </div> 
                        <!-- 验证码 -->
                          <div class="form-group">
                          <label class="control-label col-lg-3">验证码</label>
                          <img id="verify" src="/merchant.php/Merchant/LoginReg/verify" width="120px" height="36px">
                          <div class="col-lg-3"> 
                            
                            <input type="text" name="verify" class="form-control"><span></span>
                             
                          </div>
                          </div>
                          <!-- Accept box and button s-->
                          <div class="form-group">
                            <div class="col-lg-9 col-lg-offset-3">
       
                            
                              <button type="submit" class="btn btn-danger">注册</button>
                              <button type="reset" class="btn btn-success">重置</button>
                            </div>
                          </div>
                  </form>
                </div>
              </div>
                <div class="widget-foot">
                已经注册? <a href="login.html">登录</a>
                </div>
            </div>  
      </div>
    </div>
  </div> 
</div>   

<!-- JS -->

<script src="/Public/Merchant/js/bootstrap.js"></script>
</body>





</html>