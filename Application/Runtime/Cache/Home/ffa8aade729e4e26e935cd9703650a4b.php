<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>订单详情</title>
<link href="/Public/Home/cart/base.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/cart/shopcar_v4.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/Public/Home/cart/ygdialog.css">

    <!-- <link href="/Public/Home/data/common.css" rel="stylesheet"/> -->
    <link href="/Public/Home/data/select2.css" rel="stylesheet"/>
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/orders.js"></script>
   <script type="text/javascript" src="/Public/Home/js/area.js"></script>
    <script type="text/javascript" src="/Public/Home/js/location.js"></script>
    <script type="text/javascript" src="/Public/Home/js/select2.js"></script>
    <script type="text/javascript" src="/Public/Home/js/select2_locale_zh-CN.js"></script>
<iframe style="display: none;" scrolling="no" src="/Public/Home/images/index/analyze.htm" height="1" width="1"></iframe>
<style>
.clearfix:after {content: ".";display: block;height: 0px;clear: both; visibility: hidden;}
.sort_select{border:1px solid #ddd; width:100%;color:#6b5a8e;clear:both;}
.sort_select span{float:left;display:inline;line-height:28px;padding-left:10px;}
.sort_select{border:#e4e4e4 solid 1px;}
.sort_select p{display:block;height:30px; line-height:30px; padding-left:20px; background:#F7F7F7;border-bottom:#e4e4e4 solid 1px;}
.sort_select ul li{float:left;margin-right:50px;height:20px; line-height:20px;padding:10px 20px;display:block;}
.sort_select ul li span{margin:0 5px;}
.sort_select ul li  img{margin-left:30px;}
.sort_select ul {clear:both;}
</style>
</head>
<body><div style="position: absolute; z-index: 9996; top: -200px;" id="ntkf_flash_div_presence"><embed src="/Public/Home/images/index/NTID.swf" id="ntkf_flash_impresence" flashvars="" allowscriptaccess="always" pluginspage="" type="application/x-shockwave-flash" height="1" width="1"></div>
<!--header start-->
<!-- top nav bar created time: 2014-11-17 16:06:13-->
<div id="top_nav">
<div class="view_area clearfix">
<div class="yg link_box"><a href="http://www.yougou.com/#ref=all&amp;po=logo_yougou">时尚商城</a></div>

<div class="flashbuy link_box"><a href="http://flashbuy.yougou.com/#ref=all&amp;po=logo_flashbuy">整点降价</a></div>
<div class="phone ">

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
<div class="about_user" style="margin-left:150px;">
<?php if (empty($_SESSION[buyUser])) { Echo '<span id="user_id"><a href="/index.php/Login/index" style="color:red">登录</a></span>'; Echo '<a class="quit" href="/index.php/Reg/index">注册</a>'; }else{ Echo '<span id="user_id">'.$_SESSION[buyUser].'</span>'; Echo '<a class="quit" href="/index.php/Login/ex">退出</a>'; } ?>
</div>
<div class="my_yg link_box">
<a href="" class="a1">我的优购</a>
<ul class="info_con">
<li><a href="">我的收藏</a></li>
<li style="display: list-item;" id="commentcount"><a href="">等待点评(<i class="corg">0</i>)</a></li>
<li style="display: list-item;" id="top_msg"><a href="">站内消息(<i class="corg">0</i>)</a></li>
</ul>
</div>
<div class="my_order link_box"><a href="" rel="nofollow">我的订单</a></div>
<div class="notice link_box">
<span class="notice_text">公告</span>
<ul class="notice_con">
<li><a target="_blank" href="">精品女装 爆款2折起</a></li>
<li><a target="_blank" href="">温暖一冬 运动名品 5折起</a></li>
<li><a target="_blank" href="">激情不降温 男装5折封顶</a></li>
<li><a target="_blank" href="">迷情冬靴 温暖来袭 2折起</a></li>
<li><a target="_blank" href="">库房发货时间调整说明</a></li>
</ul>
</div>
<div class="more link_box">
<a href="javascript:;" class="more_text">更多</a>
<ul class="more_con">
<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="javascript:;">收藏优购</a></li>
<li><a href="">帮助</a></li>
</ul>
</div>
</div><!--view_area end -->
</div><!--top_nav end -->

<!--header end-->
<form id="orderForm" method="POST" onsubmit="javascript:return funn()" name="orderForm" action="/index.php/Orderin/order">
<div class="cen cart_header">
<h1 class="logo"><a href="" title="优生活，购时尚"><img src="/Public/Home/images/index/logo-yg.png" alt="优购时尚商城" height="50" width="150"></a></h1>
<div class="fr cart_step mt20">
<ul>
<li>我的购物车<em></em><i></i></li>
<li class="current">提交订单中心<em></em><i></i></li>
<li>成功提交订单<em></em><i></i></li>
</ul>
</div>
</div>

<input id="orderNum" value="0" type="hidden">
<input id="isLock" value="false" type="hidden">
<input id="limitOrderNum" value="40" type="hidden">
<input id="limitOrderCommBuyMaxNum" value="40" type="hidden">
<input id="isOrderDistributionSide" value="false" type="hidden">
<input id="tradeCurrency" name="tradeCurrency" value="CNY" type="hidden">
<input id="noSupportCODMsg" value="4" type="hidden">
<!-- 收货地址 start -->
<input name="receivingProvince" id="receivingProvince" value="" type="hidden">
<input name="receivingProvinceName" id="receivingProvinceName" value="" type="hidden">
<input name="receivingCity" id="receivingCity" value="" type="hidden">
<input name="receivingCityName" id="receivingCityName" value="" type="hidden">
<input name="receivingDistrict" id="receivingDistrict" value="" type="hidden">
<input name="receivingDistrictName" id="receivingDistrictName" value="" type="hidden">
<input name="addressState" id="addressState" value="" type="hidden">
<input name="addressId" id="addressId" value="" type="hidden">

<div class="cen mt30 clearfix">
<div class="col_hd">  
<h2 class="col_tlt" id="selAddrTitle">请填写您的收货地址</h2>
<span class="pay_addr_alipay">
<a class="cart_back_link ml10 cblue undline" href="/index.php/Car">返回购物车</a>
</span>
<span class="col_trt"><a  target="_blank" class="cblue">管理收货地址</a></span>
</div>
<div id="noaddress" class="none" style="display: block;">
<div class="address_info_x" style="height:auto" id="address_info">
<p class="tright"></p>
<table class="table_address">
<tbody>
<tr id="checkPhoeOrderContainer" style="height:33px;overflow:hidden;display:none;">
<td class="tdleft" style="height:25px; overflow:hidden"></td>
<td style="height:25px; overflow:hidden"><div class="warnmsgbg" style="width:550px"><span class="warnmsg Black">为了更好的为您服务，请验证手机号码，每个手机号码只验证一次。</span></div></td>
</tr>
<tr>
<td class="tdleft">收货人姓名<i>*</i></td>
<td>
<input maxlength="16" id="receivingName" name="receivingName" class="minput" type="text"><span id="receivingName_tips" class="mltips"><font class="c9">（为避免日后退款时给您带来不便，请您使用真实姓名）</font></span>
</td>
</tr>
<tr>
<td class="tdleft">收货人地址<i>*</i></td>
<td>
<div class="dropdown_span">
<div class="fl" id="province_select" style="display:none">
</div>
<span id="receivingDistrict_tips" class="mltips" style="margin-left:210px;">
<select id="loc_province" name="province" style="width:120px;margin-left:-210px;">
</select>
<select id="loc_city" name="city" style="width:120px; margin-left: 10px">
</select>
<select id="loc_town" name="area" style="width:120px;margin-left: 10px">
</select>		
</span>


</td>
</tr>
<tr>
<td class="tdleft"></td>
<td>
<span id="province_i"></span>
<span id="city_i"></span>
<span id="area_i"></span>
<input id="receivingAddress" name="receivingAddress" maxlength="60" class="linput" style="width:250px" type="text">
<span id="receivingAddress_tips" class="mltips"><font class="f_red">&nbsp;&nbsp;（请填写详细地址，确保准确送达）</font></span>
</td>
</tr>
<tr>
<td class="tdleft">收货人手机<i>*</i></td>
<td style="vertical-align:middle;"><span class="fl"> <input id="receivingMobilePhone" name="receivingMobilePhone" class="minputs" type="text"> </span>
<span id="updatePhoneOrder_tips" class="pl12 fl none"> <font class="f_red">您的手机号码已经变更，请重新获取验证码</font> </span>
<span id="receivingMobilePhone_tips" class="mltips fl"></span>
<span id="yzspanarea"><font class="f_reds" style="margin-left:20px;">(请认真填写您的手机号)</font></span>

<!--<span class="yzdjs center none fl" id="yzdjs1"></span>-->
<input value="秒后重新获取" id="yzdjs1" class="none" style="width:115px;" type="button">
<span style="display:none;" class="phoneCodeOrder_tips rightTips" id="phoneCodeOrder_tips">&nbsp;</span>
<span id="checkResultOrder_tips" class="f_black none" style="padding-left: 12px;"></span>
<input style="display: none;width:75px;margin-left:5px;" id="phoneCodeOrderTxt" name="activeCode" class="sinput Gray none" onfocus="if(this.value=='请输入验证码')this.value='';" onblur="if(this.value=='')this.value='请输入验证码';" maxlength="4" type="text">
<span id="codeCheckOrderResult_tips" class="none"> <font class="Green">验证成功</font><font class="f_red">验证码错误</font> </span>
<span style="padding-left:8px;"> 
<input style="display:none;" value="确认" class="payNormalBtn" onclick="checkSmsCodeOrder();" id="checkSmsCodeOrderBtn" type="button">
</span>
</td>
</tr>
<tr>
<td class="tdleft">收货时间：<i>*</i></td>
<td>
<select name="deliveryDate" class="mselect delivery_time">
<option selected="selected" value="1">只工作日送货(双休日、假日不用送)</option>
<option value="2">工作日、双休日与假日均可送货</option>
<option value="3">只双休日、假日送货(工作日不用送)</option>
<!-- 
<option value="4">学校地址/地址白天没人</option>
-->
</select>
<span class="cgray">（送货时间仅供参考，快递公司会尽量满足您的要求）</span>
</td>
</tr>
</tbody>
</table>
</div>
</div> 
<!-- ===============qq彩贝地址================ -->
<!-- ===============qq彩贝地址================ -->

<p class="blank10"></p>
</div>

<!--//收货地址end-->
<!-- 支付方式 start -->
<div id="paymentContainer" class="cen mt30">
<!--付款方式-->
<div for="payment_1" style="display:none">在线支付<input id="payment_1" name="payment" value="ONLINE_PAYMENT" checked="checked" type="radio"></div>
<div class="col_hd" id="paymentBank">
<h2 class="col_tlt">请选择您的付款方式</h2>
<span class="col_trt"><a href="http://www.yougou.com/help/payonline.html" target="_blank" class="cblue">查看银行限额及付款帮助</a></span>
</div>
<p class="mt15"><strong>在线支付</strong>
<span class="corg">(在线支付免运费)</span>
</p>
<!--上次支付方式-->
<div id="lastPayType" class="lastPayType cart_paytype_list mt10 none"></div>
<!--end 上次支付方式--> 

<!--修改支付方式-->
<div class="cart_paytype_list " id="payTypeList">
<div class="pay_online_div">
<dl class="clearfix" style="margin-top:0;">
<dt>网银支付
<span class="c9 ml10">支持国内几乎所有银行的储蓄卡及信用卡进行支付（需开通网上银行）</span>
</dt>
<dd>
<span><input checked="checked" name="webbankpay" id="bank_zhaoshang" value="zhaoshang" type="radio"></span>
<img src="/Public/Home/images/index/bank-img3.png" title="招商银行" alt="招商银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_gongshang" value="gongshang" type="radio"></span>
<img src="/Public/Home/images/index/bank-img2.png" title="中国工商银行" alt="中国工商银行" height="40" width="139">
</dd>
<dd class="">
<span><input name="webbankpay" id="bank_nongye" value="nongye" type="radio"></span>
<img src="/Public/Home/images/index/bank-img4.png" title="中国农业银行" alt="中国农业银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_jianshe" value="jianshe" type="radio"></span>
<img src="/Public/Home/images/index/bank-img5.png" title="中国建设银行" alt="中国建设银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_zhongguo" value="zhongguo" type="radio"></span>
<img src="/Public/Home/images/index/bank-img6_002.png" title="中国银行" alt="中国银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_jiaotong" value="jiaotong" type="radio"></span>
<img src="/Public/Home/images/index/bank-img7.png" title="交通银行" alt="交通银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_youzheng" value="youzheng" type="radio"></span>
<img src="/Public/Home/images/index/bank-img8.png" title="中国邮政储蓄银行" alt="中国邮政储蓄银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_pufa" value="pufa" type="radio"></span>
<img src="/Public/Home/images/index/bank-img9.png" title="浦发银行" alt="浦发银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_guangda" value="guangda" type="radio"></span>
<img src="/Public/Home/images/index/bank-img10.png" title="中国光大银行" alt="中国光大银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_guangfa" value="guangfa" type="radio"></span>
<img src="/Public/Home/images/index/bank-img11.png" title="广东发展银行" alt="广东发展银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="webbank_minsheng" value="minsheng" type="radio"></span>
<img src="/Public/Home/images/index/bank-img12.png" title="中国民生银行" alt="中国民生银行" height="40" width="139">
</dd>
<dd class="pay_other"><a href="http://www.yougou.com/pay/showPayOther.jhtml?bankGroupId=1" iwidth="732" iheight="450" class="cblue" oncontextmenu="return false" title="更多网上银行">更多网上银行 &gt;&gt;</a></dd>
</dl>
<!-- 支付平台 -->
<dl class="zfpt_dl clearfix">
<dt>支付平台</dt>
<dd>
<span class="kjtip">支持银行卡快捷</span>
<span><input name="webbankpay" id="bank_zhifubao" value="zhifubao" type="radio"></span>
<img src="/Public/Home/images/index/bank-img13.png" title="支付宝" alt="支付宝" height="40" width="139">
</dd>
<dd>
<span class="kjtip">支持银行卡快捷</span>
<span><input name="webbankpay" id="bank_yinlian" value="yinlian" type="radio"></span>
<img src="/Public/Home/images/index/bank-img14.png" title="银联" alt="银联" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_kuaiqian" value="kuaiqian" type="radio"></span>
<img src="/Public/Home/images/index/bank-img15.png" title="快钱" alt="快钱" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_caifutong" value="caifutong" type="radio"></span>
<img src="/Public/Home/images/index/bank-img16.png" title="财付通" alt="财付通" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_shouji" value="shouji" type="radio"></span>
<img src="/Public/Home/images/index/bank-img17.png" title="手机支付" alt="手机支付" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_lakala" value="lakala" type="radio"></span>
<img src="/Public/Home/images/index/bank-img18.png" title="拉卡拉" alt="拉卡拉" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_zhifubao_saoma" value="zhifubao_saoma" type="radio"></span>
<img src="/Public/Home/images/index/bank-img19.png" title="支付宝扫码支付" alt="支付宝扫码支付" height="40" width="139">
</dd>
</dl>
<!--信用卡-->
<dl class="crdt_payment clearfix">
<dt>
信用卡<img class="ml5" src="/Public/Home/images/index/kjpay.png" alt="快捷支付" height="17" width="74">
<span class="c9 ml10">由支付宝提供快捷支付保障，72小时安全赔付，<em class="corg">免开通网上银行</em>，有卡就能付</span>
<a class="payment_prvw rel" href="javascript:;">预览需填写信息<i></i><span class="prvw_fllinf"><img src="/Public/Home/images/index/prvw-fllinf.png" alt="" height="425" width="416"></span></a>
<a href="http://www.yougou.com/help/help_syk.shtml" target="_blank" class="cblue ml10">查看快捷支付演示</a>
</dt>
<dd>
<span><input name="webbankpay" id="bank_zhaoshang_quick" value="zhaoshang_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img3_002.png" title="招商银行" alt="招商银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_jianshe_quick" value="jianshe_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img5_002.png" title="中国建设银行" alt="中国建设银行" height="40" width="139"><sup></sup></dd>
<dd class="">
<span><input name="webbankpay" id="bank_gongshang_quick" value="gongshang_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img2_002.png" title="中国工商银行" alt="中国工商银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_zhongguo_quick" value="zhongguo_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img6.png" title="中国银行" alt="中国银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_nongye_quick" value="nongye_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img4.png" title="中国农业银行" alt="中国农业银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_guangfa_quick" value="guangfa_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img11.png" title="广发银行" alt="广发银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_xingye_quick" value="xingye_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img20.png" title="兴业银行" alt="兴业银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_minsheng_quick" value="minsheng_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img21.png" title="中国民生银行" alt="中国民生银行" height="40" width="139"><sup></sup></dd>
<dd class="">
<span><input name="webbankpay" id="bank_guangda_quick" value="guangda_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img10.png" title="中国光大银行" alt="中国光大银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_pingan_quick" value="pingan_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img22.png" title="平安银行" alt="平安银行" height="40" width="139"><sup></sup> <span class="bankSeltips">支持深圳发展银行</span></dd>
<dd>
<span><input name="webbankpay" id="bankquick_beijing_quick" value="beijing_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img23.png" title="北京银行" alt="北京银行" height="40" width="139"><sup></sup></dd>
<dd class="pay_other"><a href="http://www.yougou.com/pay/showPayOther.jhtml?bankGroupId=3" iwidth="690" class="cblue" oncontextmenu="return false" title="更多快捷支付">更多快捷支付 &gt;&gt;</a></dd>
<p class="clear"></p>
</dl>
</div>
</div>
<!-- 货到付款 --> 
<div>
<div id="cashOnDelivery_1" class="arrive noArriveDiv clearfix" style="display:none">
<dl class="arrive">
<dd>
<label class="fb"><input class="radio" id="payment_2" name="payment" value="CASH_ON_DELIVERY" type="radio"> 货到付款</label>
&nbsp;&nbsp;
<span class="c9">(每单收取<em class="corg">15元</em>运费)</span>
</dd>
<p class="clear"></p>
</dl>
<!--手机绑定start-->
<div class="none" id="mobileCheckDiv">
<input name="mobileCheck" id="mobileCheck" type="hidden">
<p id="mobileCheck_tips" class="ml20"></p>
<p class="clear"></p>
<div class="mobile_check">
<div class="clearfix">
<span class="fl mt3">图片验证：</span><span class="fl"><input class="minput" name="code2_" id="code2_" maxlength="4" type="text"></span>
<img src="/Public/Home/images/index/imageCaptcha.png" id="imageValidate2">
<a href="javascript:void(0);" onclick="changeValidateImage();return false;" class="Gray">换一张</a>
<span id="codeTips2" class="mltips">&nbsp;</span>
</div>
<div class="clearfix">
<div class="fl"><span class="fl mt3">手机号码：</span><span class="fl"><input name="mobile" id="Mobile" class="minput" maxlength="11" placeholder="请输入您的手机号码" type="text"></span></div>
<span id="updatePhoneOrder_tips" class="pl12 fl none"> <font class="f_red">您的手机号码已经变更，请重新获取验证码</font> </span>
<a class="u_send u_sendyzm ml10 fl" href="javascript:;" id="sendCodeBtn"><span id="getMsgSpan">获取短信验证码</span></a>
<span id="sendTips" class="mltips">&nbsp;</span>
<div class="fl ml20 none" id="MobileCodeSpan">
<input name="Code" id="Code" class="minput code fl" maxlength="4" placeholder="请输入验证码" type="text">
<span class="fl ml5 none" id="codeTips"></span>
<span class="fl ml5 mt3"><a class="autobtn_orign  fl" href="javascript:;" id="MobileCodeConfirm"><span class="fl">确 认</span></a></span>
</div>
</div>
<p class="c9 mt10 warntips">
为了确保您的商品顺利送达和保护账号安全，请进行<span class="corg">手机号码与账户绑定</span>。
</p>
<p id="Tips" class="row mt10 none">
<span class="safeTipInfo corg">若您一直无法接收到验证码，可能是被拦截为垃圾短信，或者由于通信网络异常，请您稍后再重新尝试。</span>
</p>
</div>
</div>
<!--手机绑定end-->
<p class="arriveTips">
<span class="corg">提醒：</span>
<span class="c9">现金支付，暂不支持刷卡。请当面验货，满意后再付款，1000元以上客服人员可能会与您取得联系。</span>
</p>
</div>
<div id="cashOnDelivery_2" class="arrive noArriveDiv clearfix">
<span class="fl rel" style="margin-top:3px;">
<label class="fb"><input class="radio" id="payment_3" name="payment" disabled="disabled" type="radio"> <span class="c9">货到付款</span></label>
</span>
<div class="fl noArriveTips rel">
<div id="noSupportCODMsg_1" style="display:none">
<span class="c9">抱歉，您所在地区暂不支持货到付款，请选择其他的支付方式</span><br>
</div>
<div id="noSupportCODMsg_2" style="display:none">
由于您购买的是
<span id="noArriveArr" class="noArriveArr rel"><font class="cred">由品牌商直接发货的商品</font><i>&nbsp;</i>
<div id="noArriveGoodsList" class="noArriveGoodsList">
<ul>
</ul>
</div>
</span>不支持货到付款，请选择其他的支付方式<br>
</div>
<div id="noSupportCODMsg_3" style="display:none">
<span class="c9">由于您购买的商品分属在不同仓库，需要拆单发货，不支持货到付款，请选择其他的支付方式</span>
</div>
<div id="noSupportCODMsg_4">
<span class="c9">该商品所在的发货仓库不支持货到付款，请选择其他的支付方式</span>
</div>
<div id="noSupportCODMsg_5" style="display:none">
<span class="c9">该商品所在的发货仓库不支持货到付款，请选择其他的支付方式</span>
</div>
<div id="noSupportCODMsg_6" style="display:none">
<span class="c9">由于您的订单金额超过3000元，为安全考虑，请选择其他支付方式</span>
</div>
</div>
</div>

<!--end 不支持支持货到付款情况-->
</div>	
<p class="blank40"></p>
<!--end 修改支付方式--> 
<!--end 付款方式-->
<input name="paymethod" id="paymethod" value="" type="hidden">
<input name="defaultbank" id="defaultbank" value="" type="hidden">
<input name="bankType" id="bankType" value="" type="hidden">
<input name="onlinePayStyleNo" id="onlinePayStyleNo" value="" type="hidden">	</div>
<!--// 支付方式 end -->
<!--确认订单信息start-->
<div id="orderSettlementContainer">
<input id="addProductNum" value="1" type="hidden">
<!--商品列表start-->
<div class="cen mt30">
<div class="col_hd" style="border-bottom:none;">
<h2 class="col_tlt">确认订单信息</h2>
</div>

<div class="cart_gray_box order_lst mt10">
<table id="cart_goods_tb" class="order_goods_tb">
<colgroup>
<col width="440">
<col width="120">
<col width="110">
<col width="155">
<col width="120">
</colgroup>
<thead>
<tr>
<th>商品名称</th>
<th>优购/单价(元)</th>
<th>数量</th>
<th>优惠/单价(元)</th>
<th>小计(元)</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="5">
<input value="1" id="productRecordNum" type="hidden">
<input value="0" id="productGiftRecordNum" type="hidden">
<input value="1" id="orderCommNum" type="hidden">
<input id="orderAmountLimit" value="99" type="hidden">
<input id="lackOrderAmount" value="0" type="hidden">

<!-- 优购时尚商城开始-->
<?php if(is_array($res)): foreach($res as $key=>$vo): ?><div id="shopping_cart1" class="shopping_cart_tr ">
<dl class="clearfix">
<input value="2014-11-16 23:46:14" id="addTime" type="hidden">
<dt class="col_1 fl rel">
	<a target="_blank" href="/index.php/Info/index/id/<?php echo ($vo["id"]); ?>">
		<img onerror="<?php echo ($vo["src"]); ?>" src="<?php echo ($vo["src"]); ?>" class="thumImg" height="60" width="60">
		
		
	</a>
</dt>
<dd class="col_2 fl"> <a target="_blank" href="/index.php/Info/index/id/<?php echo ($vo["id"]); ?>" title="<?php echo ($vo["name"]); ?>" class="shopLink"><?php echo ($vo["name"]); ?></a><br>
	<span class="cgray">颜色：<em class="f_gray"><?php echo ($vo["color"]); ?></em>&nbsp;&nbsp;尺码：<em class="f_gray"><?php echo ($vo["size"]); ?></em></span>
	<br>
</dd>
<dd class="col_3 fl"><?php echo ($vo["former"]); ?></dd>
	<dd class="col_4 fl rel ">
		<?php echo ($vo["num"]); ?>
	 </dd>
	 <dd class="col_5 fl rel">
			-<?php echo ($vo["favo"]); ?>元
				<div class="mt3">
					<span class="actvtip2">限时抢<i></i></span>
				</div>
	</dd>
	<dd class="col_6 fl"><strong class="corg"><?php echo ($vo["price"]); ?></strong></dd>
</dl>
</div><?php endforeach; endif; ?>
</td>
</tr>
</tbody>
</table>
<div class="ygtjzx_ttl clearfix" id="shoppingCartContainer">
<div id="couponarea" class="fl mt10">


<div class="cen invc_box mt15 none" id="invcBox">
<div class="hd"><input class="jsInvcChck" id="invc" name="isInvc" value="0" type="checkbox"> <label for="invc">我需要发票</label></div>
<div class="bd none">
<ul class="invc_cbox">
<li><span class="t">发票类型：</span>普通发票</li>
<li>
<span class="t"><i class="corg">*</i> 发票抬头：</span>
<div class="ttbox">
<div class="ttbox_hd jsInvcTt clearfix">
<div class="fl mr5">
<input id="prsnl" name="invcTt" checked="checked" value="0" type="radio"><label for="prsnl" class="mr20">个人</label>
<input id="unit" name="invcTt" value="1" type="radio"><label for="unit">单位</label>
<input name="unitName" size="40" placeholder="请填写正确单位名称(将打印到发票上)" type="text">
<!--<input class="invc_ipttxt " name="unitName" type="text" size="40" placeholder="请填写正确单位名称(将打印到发票上)">-->
</div>
<span class="error_tip fl">请输入单位名称</span>
</div>
<p class="c9 mt5">发票内容统一为“商品明细”，发票金额以实际支付金额为准；如需要开具增值税专用发票请联系客服办理；<br>如需办理退换货时请将原发票随货品一同寄回，否则无法办理退换货。</p>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="ygtjzx_ttl_bd fr">
<table class="ygtjzx_ttl_lrtbl">
<colgroup><col>
<col>
</colgroup><tbody>
<tr>
<th><strong>商品总金额：</strong></th>
<td><strong class="corg"><?php echo ($count); ?></strong></td>
</tr>

<tr>
<th><strong>应付金额：</strong></th>
<td><strong class="c9 f16 pr5">¥</strong><strong class="f18 fmTahoma corg" id="u_buyAmount"><?php echo ($count); ?></strong></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="mt15 mr40">
<div class="clearfix tright">
<p class="fr">
<a class="cart_back_link cblue undline" href="/index.php/Car">返回购物车</a>
<input type="submit"  class="cart_submitbtn ml10"  id="submi21t" value="确认，提交订单" name="submi21t"/>
</p>
</div>
</div>
</div>
</div>
<!--最低成单价start-->
<div class="cen mt20">	
<div class="lwst_cdje mr10">
</div>
</div>
<!--最低成单价end-->
</div>

<input id="limitCartAddProductMaxNum" value="100" type="hidden">
<input id="higestPayDeliveryOrderAmount" value="3000" type="hidden">
<!--确认订单信息end-->
<div class="clearfix cen mt15">
<div class="fr cgray cart_btinfo ">
<p class="cart_bz">
购物保障：<i class="icon_zp"></i>100%正品<i class="icon_thh"></i>10天退换货<i class="icon_bcj"></i>10天补差价
</p>
<p class="cart_paytips"><b></b>请您在订单提交成功后1小时内完成支付，否则订单将被自动取消</p>
</div>
</div>
<div class="clear"></div>
<div id="help_order_pop" style="display:none"></div>
<div id="help_pay_pop" style="display:none"></div>
<div id="help_coupon_pop" style="display:none"></div>

<input type="hidden" value="" name="user" class="user" />
<input type="hidden" value="" name="address" class="address" />
<input type="hidden" value="" name="ress" class="ress" />
<input type="hidden" value="" name="iphone" class="iphone" />
<input type="hidden" value="" name="mselect" class="mselect" />
<input type="hidden" value="" name="bank" class="bank" />
<input type="hidden" value="" name="bankImg" class="bankImg" />

</form>

<div class="cen mt20 clearfix">
<span class="fl cgray"> 购物过程中遇到任何问题，请联系在线客服
<a title="在线咨询" onclick="javascript:NTKF.im_openInPageChat();" class="lnk-ntalker Blue">在线咨询</a> 
</span>
<span class="fr"> <a style="text-decoration:underline;" class="cgray" target="_blank" href="http://www.yougou.com/shoppingcart/shoppingcart_advise.jhtml">帮助我们改进购物流程</a> </span>
</div>

<!--底部start-->
<div class="cgray cen footer">
<span class="pr10">
Copyright © 2011-2014 Yougou Technology Co., Ltd. 
</span>
<span class="pr10">
<a href="http://www.miibeian.gov.cn/" target="_blank">粤ICP备09070608号-4</a>
</span>
<span class="pr10">
增值电信业务经营许可证：<a href="http://www.miibeian.gov.cn/" target="_blank">粤 B2-20090203</a>
</span>
</div>
<!--//底部end-->
<!--//问卷调查-->	
<iframe style="width: 0px; height: 0px; position: absolute; top: 0px; left: 0px;" src="/Public/Home/images/index/adxcm_base_idigger.htm"></iframe>
</body>
</html>