<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title><?php echo ($title); ?></title>
<meta name="description" content="优购网"/>
<meta name="keywords"  content="优购网"/>
<script>
</script>
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/login.js"></script>
<link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
<link href="/Public/Home/list/css/validator.css?2.9.4" type="text/css" rel="stylesheet" />
<link href="/Public/Home/list/css/new_log_reg.css?2.9.4" type="text/css" rel="stylesheet" />
</head>
<body>
<input id="redirectURL_1" type="hidden" name="redirectURL" value="">
<!-- top nav bar created time: 2014-11-10 13:32:34-->
<div id="top_nav">
	<div class="view_area clearfix">
		<div class="yg link_box"><a href="">时尚商城</a></div>
		
		<div class="flashbuy link_box"><a href="">整点降价</a></div>
		<div class="phone">
			<div class="phone_con">
                    <p class="clearfix">
                        <span class="fl qr_code">
                        </span>
                        <span class="fl ml10">
                            <a class="btn_app_store btn" href="http://itunes.apple.com/cn/app/zhang-shang-you-gou/id504493912?mt=8" target="_blank">App Store</a>
                            <a class="btn_android_store btn" href="http://mobile.yougou.com/appVersion/package.sc?channelCode=YgYougouwebA59" target="_blank">Android</a>
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
			<a href="http://www.yougou.com/my/ucindex.jhtml" class="a1">我的优购</a>
			<ul class="info_con">
				<li><a href="http://www.yougou.com/my/favorites.jhtml">我的收藏</a></li>
				<li id="commentcount"></li>
				<li id="top_msg"></li>
			</ul>
		</div>
		<div class="my_order link_box"><a href="http://www.yougou.com/my/order.jhtml" rel="nofollow">我的订单</a></div>
		<div class="notice link_box">
			<span class="notice_text">公告</span>
			<ul class="notice_con">
                    <li><a target="_blank" href="http://www.yougou.com/topics/1415004027352.html#ref=index&po=notice_notice1">惊喜不断 运动6折封顶</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1414467546270.html#ref=index&po=notice_notice2">全民狂欢 男装最低价5折封顶</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1414548088869.html#ref=index&po=notice_notice3">光棍节 女鞋特惠不打烊 3折起</a></li>
                    <li><a target="_blank" href="http://www.yougou.com/topics/1395633923466.html#ref=index&po=notice_notice4">时尚女装 知名大牌￥99起</a></li>
                    <li><a target="_blank" href='/article/201411/87dc5ccf633611e4b7eea30f61b97b3f.shtml#ref=index&po=notice_notice5'>库房发货时间调整说明</a></li>
			</ul>
		</div>
		<div class="more link_box">
			<a href="javascript:;" class='more_text'>更多</a>
			<ul class="more_con">
				<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="javascript:;">收藏优购</a></li>
				<li><a href="http://www.yougou.com/help/help.html">帮助</a></li>
			</ul>
		</div>
	</div><!--view_area end -->
</div><!--top_nav end -->


<div class="uc_hd">

	<div class="cen clearfix rel">

		<h2>用户登录</h2>

		<p class="link fl">

			<a href="/index.php/Index" class="cblue">返回时尚商城</a>
		</p>

	</div>

</div>



<!--更换雅虎邮箱提示 start-->

<div class="uc_email_tip" id="uc_email_tip" style="display:none;">

	<i class="warn"></i><strong>由于雅虎邮箱即将停止服务</strong>，为了保障您以后能够通过邮箱找回密码、接收订单提醒等，建议尽快把账号完成绑定其他邮箱。<a class="Blue" href="javascript:void(0);" id="email_bind_modify">[立即绑定]</a><i class="close"></i>

</div>

<div class="cen">
	<div class="nreg_box mt15" style="height:416px">
		<div class="nreg_left fl" style="height:416px">
			<div class="fl nreg_form">
			<form onsubmit="return fun()" id="loginform" action="/index.php/Login" method="post">
				<input type="hidden" name="3B3K2u1E9c" value="1k4j1v" id="loginNonceId"/>
				<dl class="nreg_item">
					<dd>
						<label class="lab1" for="reg_email">账号：</label>
						<div class="nreg_input_bg">
							<input type="text" name="email" placeholder="请填写用户名" id="email_" class="nreg_input" maxlength="50" value=""/>
							<p class="login_rf_tip" style="display:block" id="name"></p>
						</div>
					</dd>
					<dt><div id="login_email_tip"></div></dt>
				</dl>
				<p class="blank15"></p>
				<dl class="nreg_item">
					<dd>
						<label class="lab1" for="reg_password">密码：</label>
						<div class="nreg_input_bg">
							<input type="password" name="password" id="password_" class="nreg_input"  maxlength="50" />
							<p class="login_rf_tip" style="display:block" id="pwd"></p>
						</div>
					</dd>
					<dt><div id="login_password_tip" class="errortips"></div></dt>
				</dl>
				<p class="blank15"></p>
				<font id="code_container" style="display:none;">
					<dl class="nreg_item">
						<dd>
							<label class="lab1" for="reg_checkcode">验证码：</label>
							<div class="nreg_input_sbg fl">
								<input type="text" id="code2_" class="nreg_sinput" maxlength="4"/>
							</div>
							<div class="fl" style=" padding:10px 0 0 10px">
								<img src="" id="imageValidate2"/>
							</div>
							<div class="fl" style=" padding:10px 0 0 10px">
								<a href="javascript:void(0);" onclick="changeValidateImage2();return false;" class="Gray" >换一张</a>
							</div>
						</dd>
						<dt><div id="code2_tip"></div></dt>
					</dl>
				</font>
				<p class="blank20"></p>
				<p style="padding-left:99px">
					<input type="submit" class="nlog_submit" value=" " title="登录"/>
	<!-- 				<span><a href="" class="Gray" style="margin-left:20px; text-decoration:underline">忘记密码？</a></span> -->
				</p>
				</form>
			</div>
		</div>
		<div class="nreg_rig fl" style="height:180px">
			<p class="Size14 f_black" style="padding-top:24px;letter-spacing:1px; font-weight:bold">还不是优购用户？</p>
			<p class="Gray" style="padding-top:10px; padding-bottom:15px ">现在立即注册成为优购用户，便能立刻享受便宜又放心的购<br/>物乐趣。</p>
			<p><a href="/index.php/Reg" class="nlog_reg" title="注册新用户"></a></p>
		</div>
	</div>
</div>
<div class="blank20" ></div>


<div class="footer Gray">
	<p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd.  <a href="http://www.miibeian.gov.cn" target="_blank">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn" target="_blank" style="padding-left:0" >粤 B2-20090203</a></p>
</div>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="other/.com/pagead/conversion/1016027598/?label=EFaYCJrxqgIQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
	<script type="text/javascript">
		// 用户名
		var condition = false;
		$('#email_').focus(function(event) {
			$(this).val('');
			$('#password_').removeAttr('disabled');
		});

		$('#email_').blur(function(event) {
			if ($('#password_').val() !== '') {
				$('#password_').val('');
			}
			if ($('#email_').val() == '') {	
				$('#name').html('用户名不能为空');
				condition = false;
			}else{
					var content = {'Uname':$('#email_').val()};
					$.ajax({
						url:'/index.php/Login/Uname',
						data:content,
						type:'POST',
						success:function(data){
							if (data == '用户名不存在') {
								$('#name').html('用户名不存在');
								$('#password_').attr('disabled', 'disabled');
								// $('#name').html('该用户已被禁用,请联系管理员!');
								condition = false;
							}else if (data == '该用户已被禁用,请联系管理员!') {
								$('#password_').attr('disabled', 'disabled');
								$('#name').html('该用户已被禁用,请联系管理员!');
								condition = false;
							}else{
								$('#name').html('填写正确');
								condition = true;								
							}

						}
					});			
				}
		});
		$('#email_').focus(function(event) {
			$('#name').html('');
		});	
		// 密码
		$('#password_').blur(function(event) {
			if ($('#email_').val() !== '' && $('#password_').val() !== '') {
				var content = {'Upwd':$('#password_').val(),'Uname':$('#email_').val()};
				$.ajax({
					url:'/index.php/Login/Uname',
					data:content,
					type:'POST',
					success:function(data){
						if (data == '密码不正确') {
							$('#pwd').html('密码错误');
							condition = false;
						}else{
							$('#pwd').html('填写正确');
							condition = true;
						}
					}
				});
			}
			if ($('#password_').val() == '') {
				$('#pwd').html('密码不能为空');
				condition = false;
			}
		});
		$('#password_').focus(function(event) {
			$('#pwd').html('');
		});	
		function fun(){
			return condition;
		}
	</script>
</html>