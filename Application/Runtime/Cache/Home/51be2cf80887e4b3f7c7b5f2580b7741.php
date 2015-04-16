<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title><?php echo ($title); ?></title>
<meta name="description" content="优购时尚商城"/>
<meta name="keywords"  content="优购时尚商城"/>


<link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
<link href="/Public/Home/list/css/validator.css?2.9.4" type="text/css" rel="stylesheet" />
<link href="/Public/Home/list/css/new_log_reg.css?2.9.4" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/reg.js"></script>
</head>
<body>
<div id="top_nav">
	<div class="view_area clearfix">
		<div class="yg link_box"><a href="">时尚商城</a></div>
		
		<div class="flashbuy link_box"><a href="">整点降价</a></div>
		<div class="phone ">
			<div class="phone_con">
                    <p class="clearfix">
                        <span class="fl qr_code">
                        </span>
                        <span class="fl ml10">
                            <a class="btn_app_store btn" href="" target="_blank">App Store</a>
                            <a class="btn_android_store btn" href="" target="_blank">Android</a>
                        </span>
                    </p>
                    <p class="qr_code_tip">下载安装 <strong>优购客户端</strong></p>
                </div>
		</div>
		<div class="outlets link_box" style="border-right:none"></div>
		<div class="about_user">
			<div class="login"><a  rel="nofollow" href="/index.php/Login">登录</a></div>
			<div class="register"><a  rel="nofollow" href="/index.php/Reg">注册</a></div>
		</div><!--about_user end -->
		<div class="my_yg link_box">
			<a href="/index.php/Data" class="a1">我的优购</a>
			<ul class="info_con">
				<li><a href="">我的收藏</a></li>
				<li id="commentcount"></li>
				<li id="top_msg"></li>
			</ul>
		</div>
		<div class="my_order link_box"><a href="/index.php/OrderSet" rel="nofollow">我的订单</a></div>
		<div class="notice link_box">
			<span class="notice_text">公告</span>
			<ul class="notice_con">
                    <li><a target="_blank" href="">惊喜不断 运动6折封顶</a></li>
                    <li><a target="_blank" href="">全民狂欢 男装最低价5折封顶</a></li>
                    <li><a target="_blank" href="">光棍节 女鞋特惠不打烊 3折起</a></li>
                    <li><a target="_blank" href="">时尚女装 知名大牌￥99起</a></li>
                    <li><a target="_blank" href=''>库房发货时间调整说明</a></li>
			</ul>
		</div>
		<div class="more link_box">
			<a href="javascript:;" class='more_text'>更多</a>
			<ul class="more_con">
				<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="">收藏优购</a></li>
				<li><a href="">帮助</a></li>
			</ul>
		</div>
	</div><!--view_area end -->
</div><!--top_nav end -->


<div class="uc_hd">

	<div class="cen clearfix rel">

		<h2>新用户注册</h2>

		<p class="link fl">

			<a href="/index.php/Index" class="cblue">返回时尚商城</a>

		</p>

	</div>

</div>



<!--更换雅虎邮箱提示 start-->

<div class="uc_email_tip" id="uc_email_tip" style="display:none;">

	<i class="warn"></i><strong>由于雅虎邮箱即将停止服务</strong>，为了保障您以后能够通过邮箱找回密码、接收订单提醒等，建议尽快把账号完成绑定其他邮箱。<a class="Blue" href="javascript:void(0);" id="email_bind_modify">[立即绑定]</a><i class="close"></i>

</div>

<!--更换雅虎邮箱提示 end-->

<form action="/index.php/Reg/Index" method="post" onsubmit="return fun()">
  <input id="redirectURL_1" type="hidden" name="redirectURL" value="">
<input type="hidden" name="8z7Y7g0B8Z" value="1p2y2Y" id="reg_nonce_id"/>
  <div class="cen mt20">
    <div class="regTabDiv">
      <a id="emailLink" class="regTab regTabCurr" href="?" regtype="email">邮箱注册</a>
      <input type="hidden" name="option" id="option" value="email"/>
    </div>
    <div class="nreg_box" style="height:600px;">
      <div id="emailDiv" class="nreg_left fl">
        <div class="fl nreg_form">
          <dl class="nreg_item mobile_regitem" id="mobile_nreg_item" style="display:none;">
            <dd>
              <label class="lab1" for="reg_email"><em class="Red">*</em>手机号码：</label>
              <div class="nreg_input_bg">
                <input type="text" name="mobile" id="reg_mobile_" class="nreg_input"  valid = "Mobile" placeholder="请输入您的手机号码"/>
                <p class="login_rf_tip" style="display:none" id="reg_mobile_rf_tip_id">请刷新页面后重新提交</p>
              </div>
            </dd>
            <dt>
              <div id="reg_mobile_tip"></div>
            </dt>
          </dl>
          <dl class="nreg_item email_regitem" id="email_nreg_item">
            <dd>
              <label class="lab1" for="reg_email"><em class="Red">*</em>用户名：</label>
              <div class="nreg_input_bg">
                <input type="text" name="email" id="reg_email_" class="nreg_input" value="" valid = "Email" placeholder="请填写 用户名"/>
                 <p class="login_rf_tip" style="display:block" id="user"></p>
              </div>
            </dd>
            <dt>
              <div id="reg_email_tip"></div>
            </dt>
          </dl>
          <p class="blank15"></p>
          <dl class="nreg_item relative">
          	 <div style="position:absolute;top:38px;left:101px;">
                <div id="pwdStrength" class="pwdStrength none">
                  <em>低</em><em>中</em><em>高</em>
                </div>
            </div>
            <dd>
              <label class="lab1" for="reg_password"><em class="Red">*</em>密码：</label>
              <div class="nreg_input_bg">
                <input type="password" name="password1" id="reg_password_" class="nreg_input" maxlength="25" valid="Password" placeholder="字母、数字、符号均可，3-25个字符以内"/>
                <p class="login_rf_tip" style="display:block" id="pwd"></p>
              </div>
            </dd>
            <dt>
              <div id="reg_password_tip1"></div>
            </dt>
          </dl>
          <p class="blank15"></p>
          <dl class="nreg_item">
            <dd>
              <label class="lab1" for="reg_password_re"><em class="Red">*</em>确认密码：</label>
              <div class="nreg_input_bg">
                <input type="password" id="reg_password2" class="nreg_input" maxlength="25" valid="RePassword"/>
                <p class="login_rf_tip" style="display:block" id="pwds"></p>
              </div>
            </dd>
            <dt>
              <div id="reg_password_tip2"></div>
            </dt>
          </dl>
          <p class="blank15">
          </p>
          <dl id="dlCode" class="nreg_item email_regitem mobile_regitem">
            <dd>
              <label class="lab1" for="reg_checkcode"><em class="Red">*</em>验证码：</label>
              <div class="nreg_input_sbg fl" style="width:120px">
                <input type="text" name="reg_checkcode" id="code2_" class="nreg_sinput" maxlength="4" valid="IdentifyCode"/>
              </div>
              <div class="fl">
                <img src="/index.php/Reg/code" width="180" height="40" id="imageValidate2"/>
                 
              </div>
              <div class="fl" style=" padding:15px 0 0 10px">

                <!-- <a href="?" class="Gray changeImg" >换一张</a> -->
              </div>
              <p class="login_rf_tip" style="display:block" id="code"></p>
            </dd>

            <dt>
              <div id="code2_tip" style="margin-top:10px;color:red;background:#FFEBEC;width:100px;border:1px solid #D5D5D5;height:21px;"></div>
            </dt>
          </dl>
          <dl id="dlMobileCode" class="nreg_item mobile_regitem" style="display:none;">
            <dd style="width:235px;">
              <label class="lab1" for="reg_mobile_code_"><em class="Red">*</em>短信验证码：</label>
              <div class="nreg_input_bg fl" style="width:130px;">
                <input type="text" name="mobilecode" id="reg_mobile_code_" class="nreg_sinput" valid="MsgIdentifyCode"/>
              </div>
            </dd>
            <dt style="width:330px;">
            <div class="fl" style="margin-top:5px;">
                <a id="sendMsgBtn" href="javascript:;" class="regAutoBtn_1">
                <span style="margin-left:0;" id="getMsgSpan">获取短信验证码</span>
                </a>
              </div>
            	<div id="sendMsgTips" style="width:195px;float:left;">&nbsp;</div>
			</dt>
          </dl>
          <!-- <p class="blank10"> -->
          </p>
          <p style="padding-left:99px">
          </p>

				<p style="padding-left:99px">
					<a href="javascript:void();" class=""><input type="submit" title="立即注册" value="" id="sut" style="width:143px;height:53px;border:0px;background:url('/Public/Home/images/index/1.jpg')"></a>
				</p>
			
        </div>
      </div>
      <div class="nreg_rig fl">
		<p class="Size14 Gray" style="padding-top:24px; padding-bottom:18px; letter-spacing:1px">已有优购账号，请直接登录</p>
		<p><a href="/index.php/Login" class="nreg_login"></a></p>
	  </div>
    </div>
  </div>
  </form>
  <!--底部start-->

<div class="footer Gray">
	<p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="" target="_blank" style="padding-left:0" >粤 B2-20090203</a></p>
</div>
</body>
<script type="text/javascript">
    var login = false;
      name();
      pwd();
      pwds();
      code();
    function name(){
         $('.nreg_input').blur(function(event) {
            if ($('#reg_email_').val().length < 1) {
            $('#user').html('用户名不能为空！');
            login = false;
          }else if($('#reg_email_').val().length > 12){
            $('#user').html('用户名不能超过12位数！');
            login = false;
          }else if($('#reg_email_').val().length > 6){
              var content = {'name':$(this).val()};
              $.ajax({
                url:'/index.php/Reg/userName',
                type:'POST',
                data:content,
                success:function(data){
                  if (data) {
                    $('#user').html(data);
                    if ($('#user').html(data) == '验证码不正确!') {
                        login = false;
                    };
                  }
                }
              });
            }else{
            login = true;
          }   
        });
      }
        function pwds(){
        $('#reg_password_').blur(function(event) {
          if ($('#reg_password_').val().length < 1) {
            $('#pwd').html('密码不能为空!');
            login = false;
          }else if($('#reg_password_').val().length > 12){
            $('#pwd').html('密码不能超过12为数!');
            login = false;
          }else{
            $('#pwd').html('密码可用!');
            login = true;
          };
        });
      }
      function pwd(){
      $('#reg_password2').blur(function(event){
        if ($('#reg_password2').val().length < 1) {
          $('#pwds').html('密码不能为空！');
          login = false;
        }else if($('#reg_password2').val() != $('#reg_password_').val()){
          $('#pwds').html('两次输入密码不一致!');
          login = false;
        }else{
          $('#pwds').html('密码一致!');
          login = true;
         };
       })
    };
    function code(){
      $('#code2_').blur(function(event) {
          // if ($(this).val().length > 3) {
            var content = {'code':$(this).val()};
            $.ajax({
              url:'/index.php/Reg/check_verify',
              data:content,
              type:'POST',
              success:function(data){
                if (data) {
                    $('#code2_tip').html(data);
                };
              }
            });
          // };
      });
    }
    function fun(){
      if ($('#reg_email_').val().length < 1) {
        $('#user').html('用户名不能为空！');
        login = false;
      }
      if ($('#reg_password_').val().length < 1) {
        $('#pwd').html('密码不能为空!');
        login = false;
      } 
      if ($('#reg_password2').val().length < 1) {
        $('#pwds').html('密码不能为空！');
        login = false;
      } 
      if ($('#code2_').val().length < 1) {
        $('#code2_tip').html('验证码不能为空!');
        login = false;
      }else if ($('#code2_').val().length < 4) {
        $('#code2_tip').html('验证码不正确!');
        login = false;
      };
      if ($('#code2_tip').html() == '验证码不正确!') {
        login = false;
      }
      if (login) {
        return true;
      }else{
        return false;
      }
    }
    code1();
    function code1(){
      $('#imageValidate2').bind('click', function(event) {
         $('#imageValidate2').attr('src', '/index.php/Reg/code'+'?'+Math.random());
      });
    };
      $('#sut').click(function(event) {
        if (login && name() && pwd() && pwds() && pwds()) {   
          alert($('#reg_email_').val()+'注册成功!');
         
        }
      });
</script>
</html>