<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache">
<title>订单提交成功</title>
<link href="/Public/Home/cart/base.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/cart/shopcar_v4.css" type="text/css" rel="stylesheet">
</head>
<body><div style="position: absolute; z-index: 9996; top: -200px;" id="ntkf_flash_div_presence"><embed src="/Public/Home/images/index/NTID.swf" id="ntkf_flash_impresence" flashvars="siteid=kf_9923&amp;settingid=kf_9923_1356320277571&amp;surl=http%3A%2F%2Fchat01.yougou.com%2Ft2d%2F&amp;r=http%3A%2F%2Fs2.ygimg.cn%2Ftemplate%2Fcommon%2Fntalker&amp;ref=http%3A%2F%2Fwww.yougou.com%2FcontinueOrder.jhtml%3FtradeCurrency%3DCNY&amp;fsid=14162365602017&amp;cid=guest3E840557-FECC-0D70-59FC-BE46F7032802&amp;u=kf_9923_ISME9754_61867170%40qq.com&amp;n=61867170%40qq.com" allowscriptaccess="always" pluginspage="https://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" height="1" width="1"></div><iframe style="width: 0px; height: 0px; position: absolute; top: 0px; left: 0px;" src="/Public/Home/images/index/adxcm_base_idigger.htm"></iframe>
<!--}iDigger监测服务代码部署方案-优购官网sem end--> 

<!-- Vizury数据(跟踪代码) -->
<iframe class="none" src="/Public/Home/images/index/analyze.htm" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" height="1" width="1"></iframe>

<!-- head start-->
<!-- top nav bar created time: 2014-11-17 16:06:13-->
<div id="top_nav">
<div class="view_area clearfix">
<div class="yg link_box"><a href="/index.php/Index">时尚商城</a></div>

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
<li><a href="">我的收藏</a></li>

</ul>
</div>
<div class="my_order link_box"><a href="/index.php/OrderSet" rel="nofollow">我的订单</a></div>
<div class="notice link_box">
<span class="notice_text">公告</span>
<ul class="notice_con">
<li><a target="_blank" href="http://www.yougou.com/topics/1415169820446.html#ref=index&amp;po=notice_notice1">精品女装 爆款2折起</a></li>
<li><a target="_blank" href="http://www.yougou.com/topics/1415684013840.html#ref=index&amp;po=notice_notice2">温暖一冬 运动名品 5折起</a></li>
<li><a target="_blank" href="http://www.yougou.com/topics/1415169652866.html#ref=index&amp;po=notice_notice3">激情不降温 男装5折封顶</a></li>
<li><a target="_blank" href="http://www.yougou.com/topics/1415069636582.html#ref=index&amp;po=notice_notice4">迷情冬靴 温暖来袭 2折起</a></li>
<li><a target="_blank" href="http://www.yougou.com/article/201411/87dc5ccf633611e4b7eea30f61b97b3f.shtml#ref=index&amp;po=notice_notice5">库房发货时间调整说明</a></li>
</ul>
</div>
<div class="more link_box">
<a href="javascript:;" class="more_text">更多</a>
<ul class="more_con">
<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="javascript:;">收藏优购</a></li>
<li><a href="http://www.yougou.com/help/help.html">帮助</a></li>
</ul>
</div>
</div><!--view_area end -->
</div><!--top_nav end -->

<div class="cen cart_header">
<h1 class="logo"><img title="优购时尚商城" src="/Public/Home/images/index/logo-yg.png" height="50" width="150"></h1>
<p class="cart_bz fr mt20">
购物保障：<i class="icon_zp"></i>100%正品<i class="icon_thh"></i>10天退换货<i class="icon_bcj"></i>10天补差价
</p>
</div>
<!-- head end-->
<div class="orderSucDiv cen mt10">

<div id="orderSmtsccss" class="order_smtsccss rel">
<div class="smtsccss_hd">
<strong class="f16">订单已提交，请尽快完成支付！</strong><span class="ml15">您的订单号：<strong class="corg"><?php echo ($ordernumber); ?></strong></span><span class="ml25">应付金额：<strong class="corg f24"><?php echo ($price); ?></strong> 元</span></div>
<div class="smtsccss_bd mt15">
<table class="yg_lrtbl">
<colgroup><col>
<col>
</colgroup><tbody>
<tr>
<th valign="top">商品名称：</th>
<td>	
	<?php if(is_array($goodsname)): foreach($goodsname as $key=>$gn): echo ($gn["goodsname"]); ?><br><?php endforeach; endif; ?>
</td>
</tr>
<tr>
<th>收货信息：</th>
<td><?php echo ($address); echo ($linkname); ?></td>
</tr>
</tbody>
</table>
</div>
</div>
<!--}订单信息end-->

<!--付款方式-->
<div class="normalBdBox">
<div id="paymentBank" class="f14">我们将为您订单的商品暂时保留1个小时，1小时之后，未支付订单将被自动取消</div>
<!--已选择支付方式-->

<!-- 香港直发 -->
<!--上次支付方式-->
<div id="lastPayType" class="cart_paytype_list lastPayType mt15">
<dl class="clearfix">
<dt class="f14">您当前选择的支付方式是：</dt>
<dd class="curr currPayType">
<span><input class="curr" name="webbankpay" id="bank_zhongguo" value="zhongguo" checked="checked" type="radio"></span>
<img src="<?php echo ($pay); ?>" title="" alt="">

</dd>
</dl>

</div>

<!--end 上次支付方式-->

<!--修改支付方式-->
<div class="cart_paytype_list jsPayTypeList mt20 none" id="payTypeList">
<dl class="clearfix" style="margin-top:0;" "="">
<dt>网银支付
<span class="c9 ml10">支持国内几乎所有银行的储蓄卡及信用卡进行支付（需开通网上银行）</span>
</dt>
<dd>
<span><input name="webbankpay" id="bank_zhaoshang" value="zhaoshang" type="radio"></span>
<img src="/Public/Home/images/index/bank-img3_002.png" title="招商银行" alt="招商银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_gongshang" value="gongshang" type="radio"></span>
<img src="/Public/Home/images/index/bank-img2.png" title="中国工商银行" alt="中国工商银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_nongye" value="nongye" type="radio"></span>
<img src="/Public/Home/images/index/bank-img4.png" title="中国农业银行" alt="中国农业银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_jianshe" value="jianshe" type="radio"></span>
<img src="/Public/Home/images/index/bank-img5.png" title="中国建设银行" alt="中国建设银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="bank_zhongguo" value="zhongguo" type="radio"></span>
<img src="/Public/Home/images/index/bank-img6.png" title="中国银行" alt="中国银行" height="40" width="139">
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
<img src="/Public/Home/images/index/bank-img11_002.png" title="广东发展银行" alt="广东发展银行" height="40" width="139">
</dd>
<dd>
<span><input name="webbankpay" id="webbank_minsheng" value="minsheng" type="radio"></span>
<img src="/Public/Home/images/index/bank-img12.png" title="中国民生银行" alt="中国民生银行" height="40" width="139">
</dd>
<dd class="pay_other"> <a href="http://www.yougou.com/pay/showPayOther.jhtml?bankGroupId=1" iwidth="732" iheight="450" class="cblue" oncontextmenu="return false" title="更多网上银行">更多网上银行 &gt;&gt;</a></dd>
<p class="clear"></p>
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
<p class="clear"></p>
</dl>
<!--信用卡-->
<dl class="crdt_payment clearfix">
<dt>
信用卡<img class="ml5" src="/Public/Home/images/index/kjpay.png" alt="快捷支付" height="17" width="74">
<span class="c9 ml10">由支付宝提供快捷支付保障，72小时安全赔付，<em class="corg">免开通网上银行</em>，有卡就能付</span>
<a class="payment_prvw rel" href="javascript:;">预览需填写信息<i></i><span class="prvw_fllinf"><img src="/Public/Home/images/index/prvw-fllinf.png" alt="" height="425" width="416"></span></a>
<a href="http://www.yougou.com/help/help_syk.shtml" target="_blank" class="cblue ml10">查看快捷支付演示</a>

</dt><dd>
<span><input name="webbankpay" id="bank_zhaoshang_quick" value="zhaoshang_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img3.png" title="招商银行" alt="招商银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_jianshe_quick" value="jianshe_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img5_002.png" title="中国建设银行" alt="中国建设银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_gongshang_quick" value="gongshang_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img2.png" title="中国工商银行" alt="中国工商银行"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_zhongguo_quick" value="zhongguo_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img6.png" title="中国银行" alt="中国银行"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_nongye_quick" value="nongye_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img4.png" title="中国农业银行" alt="中国农业银行"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_guangfa_quick" value="guangfa_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img11.png" title="广发银行" alt="广发银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_xingye_quick" value="xingye_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img20.png" title="兴业银行" alt="兴业银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_minsheng_quick" value="minsheng_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img21.png" title="中国民生银行" alt="中国民生银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_guangda_quick" value="guangda_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img10.png" title="中国光大银行" alt="中国光大银行" height="40" width="139"><sup></sup></dd>
<dd>
<span><input name="webbankpay" id="bank_pingan_quick" value="pingan_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img22.png" title="平安银行" alt="平安银行" height="40" width="139"><sup></sup> <span class="bankSeltips">支持深圳发展银行</span></dd>
<dd>
<span><input name="webbankpay" id="bankquick_beijing_quick" value="beijing_quick" type="radio"></span>
<img src="/Public/Home/images/index/bank-img23.png" title="北京银行" alt="北京银行" height="40" width="139"><sup></sup></dd>
<dd class="pay_other"><a href="http://www.yougou.com/pay/showPayOther.jhtml?bankGroupId=3" class="cblue" oncontextmenu="return false" title="更多快捷支付">更多快捷支付 &gt;&gt;</a></dd>
<p class="clear"></p>
</dl>
<dl class="arrive" style="display:none">
<dd>
<label>
<input id="payment_2" name="payment" disabled="disabled" value="CASH_ON_DELIVERY" type="radio">货到付款
</label>
&nbsp;&nbsp;
<span class="Gray">(现金支付，暂不支持刷卡。请当面验货，满意后再付款。1000元以上客服人员可能会与您取得联系)
</span>
</dd>
<p class="clear"></p>
<p class="arriveTips">
<span class="Red">提醒：</span>
<span class="Gray">请确认您填写的收货地址在货到付款配送区域内，以便商品顺利送达。</span>
</p>
</dl>
</div>
<!--end 修改支付方式-->
<p class="clear"></p>
<p><a id="payBtn" class="payNowBtn" style="cursor:pointer;">&nbsp;</a></p>
</div>
<!--}付款方式end-->
<div style="display: block;" class="payproblem">
<h3>付款遇到问题：</h3>
<dl>
<dt>1、优购网支付多少家网上银行？</dt>
<dd>答：我们支持国内几乎所有银行及信用卡支付，选择网上银行进行支付，必须先开通网上银行。</dd>
<dt>2、打开支付页面，提示“该页无法显示”或空白页，可能是什么原因？</dt>
<dd>
答：没有升级IE浏览器，导致加密级别过低，无法进入银行系统。 请升级到6.0及以上版本。<br>上网环境或上网方式受限，可能是网络服务商限制，如有条件更换一种上网方式或环境。<br>瞬间网络不通，尝试刷新页面；如果刷新不能解决问题，可能由于浏览器设置缓存，请在IE菜单—工具—Internet选项—点击“删除cookies”和“删除文件”，用以清除临时文件。
</dd>
<dt>3、网上银行有支付限额吗？</dt>
<dd>答：各家银行和各种卡的类型都会有相应不同的支付限额。<a class="cblue" href="http://www.yougou.com/help/payonline.html" target="_blank">查看银行限额及付款帮助</a></dd>
<dt>4、没有网上银行，怎样用储蓄卡付款？</dt>
<dd>答：您可使用银联在线支付，进入银联支付界面选择银联卡支付。</dd>
</dl>
<p class="mt20"><a class="cblue" href="http://www.yougou.com/help/payonline.html" target="_blank">更多帮助</a></p>
</div>
<div style="display: none;" class="payproblem none">
<h3>常见问题：</h3>
<dl>
<dt>1、扫码支付的作用是什么？</dt>
<dd>答：用户无法在电脑端完成支付时或用户有在钱包上支付的需求时，可通过【扫码支付】在支付宝钱包完成订单支付。</dd>
<dt>2、我可以使用别人的账户进行【扫码支付】吗？</dt>
<dd>
答：不能，仅支持该笔交易的账户扫描二维码付款。
</dd>
<dt>3、交易如果已完成付款，再使用扫码支付会重复付款吗？</dt>
<dd>答：不会，交易付款完成后该二维码失效。</dd>
</dl>
<p class="mt20"><a class="cblue" href="http://www.yougou.com/help/payonline.html" target="_blank">更多帮助</a></p>
</div>
<div style="display: none;" class="payproblem none">
<h3>付款遇到问题：</h3>
<dl>
<dt>1、什么是信用卡快捷支付？</dt>
<dd>答：快捷支付是支付宝联合各大银行推出的全新最安全、轻松的支付方式。只要您有信用银行卡，就可以在支付宝付款。付款时无需登录网上银行，凭支付宝支付密码和手机校验码
即可完成付款。</dd>
<dt>2、是否需要开通网上银行和支付宝账号？</dt>
<dd>
答：信用卡快捷支付无需开通网上银行和支付宝账号，有卡就付款。
</dd>
<dt>3、如何修改预存手机号码？</dt>
<dd>答：拨打银行信用卡服务热线，进入人工服务后，通知银行客服人员修改手机号。修改生效后，需登录支付宝，进入“账户管理-银行卡”频道，修改成新手机号码。 </dd>
</dl>
<p class="mt20"><a class="cblue" href="http://www.yougou.com/help/payonline.html" target="_blank">更多帮助</a></p>
</div>
</div><!--底部-->
<!--调查问卷入口-->


<p class="blank20"></p>
<div class="footer Gray cen" style="border-top:none;">
Copyright © 2011-2014 Yougou Technology Co., Ltd. <a target="_blank" href="http://www.miibeian.gov.cn/">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a target="_blank" href="http://www.miibeian.gov.cn/">粤 B2-20090203</a>
</div>
<!--end 底部-->
<!--买卖双方信息参数 -->
<form name="payorderForm" id="payorderForm" method="get" target="toPay" action="/pay/toPay.jhtml">
<input name="bizNo" value="A641118030014" type="hidden">
<input name="bizType" value="order" type="hidden">
<input name="tradeNo" value="12014111803000002" type="hidden">
<input value="3005" name="onlinePayStyleNo" id="onlinePayStyleNo" type="hidden">
<input value="" name="paymethod" id="paymethod" type="hidden">
<input value="BOCB2C" name="defaultbank" id="defaultbank" type="hidden">
<input value="bocB2cPay" name="bankType" id="bankType" type="hidden">
</form>
<a id="pay_href" href="#" target="_blank"></a>
<span class="none">

<iframe name="google_conversion_frame" title="Google conversion frame" src="/Public/Home/images/index/a.htm" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" frameborder="0" height="13" width="300">&lt;img
height="1" width="1" border="0" alt="" 
src="http://googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?frame=0&amp;random=1416251457343&amp;cv=7&amp;fst=1416251457343&amp;num=1&amp;fmt=1&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=3&amp;u_tz=480&amp;u_java=false&amp;u_nplug=25&amp;u_nmime=34&amp;data=ecomm_prodid%3D%5B%5D%3Bbrand%3D%3BfirstCategoryName%3D%3BsubCategoryName%3D%3BthirdCategoryName%3D%3Becomm_pagetype%3Dpurchase%3BwebType%3Dyg%3Becomm_totalvalue%3D0&amp;frm=0&amp;url=http%3A//www.yougou.com/pay/payOnline.sc%3FonlinePayStyleNo%3D3005%26orderNo%3DA641118030014%26uname%3D61867170%2540qq.com%26skuid%3D99963459&amp;ref=http%3A//www.yougou.com/continueOrder.jhtml%3FtradeCurrency%3DCNY&amp;vis=1"
/&gt;</iframe>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>
</body>
</html>