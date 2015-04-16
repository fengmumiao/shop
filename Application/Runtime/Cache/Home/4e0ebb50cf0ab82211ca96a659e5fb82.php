<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><iframe style="display: none;" scrolling="no" src="/Public/Home/images/index/analyze.htm" height="1" width="1"></iframe>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache,no-store, must-revalidate">
<meta http-equiv="expires" content="0">
<title>我的购物车</title>

<link href="/Public/Home/cart/uc.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/cart/base.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/cart/shopcar_v4.css" type="text/css" rel="stylesheet">
<link href="/Public/Home/cart/ygdialog.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/cart.js"></script>


</head>
<body>
<!--
-->
<!--header start-->
<!-- top nav bar created time: 2014-11-17 16:06:13-->
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
<div class="about_user" style="margin-left:150px;">
<?php if (empty($_SESSION[buyUser])) { Echo '<span id="user_id"><a href="/index.php/Login/index" style="color:red">登录</a></span>'; Echo '<a class="quit" href="/index.php/Reg/index">注册</a>'; }else{ Echo '<span id="user_id">'.$_SESSION[buyUser].'</span>'; Echo '<a class="quit" href="/index.php/Login/ex">退出</a>'; } ?>
</div><!--about_user end -->
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

<div class="cen cart_header">
<h1 class="logo"><a href="" title="优生活，购时尚"><img src="/Public/Home/images/index/logo-yg.png" alt="优购时尚商城" height="50" width="150"></a></h1>
<div class="fr cart_step mt20">
<ul>
<li class="current">我的购物车<em></em><i></i></li>
<li>提交订单中心<em></em><i></i></li>
<li>成功提交订单<em></em><i></i></li>
</ul>
</div>
</div>


<span class="none">
<input id="addProductMaxNum" value="1" type="hidden">
<input id="limitCartAddProductMaxNum" value="100" type="hidden">
<input id="orderNum" value="0" type="hidden">
<input id="isLock" value="false" type="hidden">
<input id="limitOrderNum" value="40" type="hidden">
<input id="limitOrderCommBuyMaxNum" value="40" type="hidden">
</span>

<!-- 普通购物车 -->
<div id="shoppingCartContainerCNY">
<div class="cen cart_gray_box mt20">
<table class="cart_list_tb">
<colgroup>
<col width="60">
<col width="405">
<col width="110">
<col width="90">
<col width="107">
<col width="118">
<col width="60">
</colgroup>
<thead>
<tr>
<th>
<input class="all" id="CNYcheckAll" checked="checked" type="checkbox">
<label for="CNYcheckAll">全选</label>
</th>
<th>
<span class="pr25">商品名称</span>
</th>
<th>原/单价(元)</th>
<th>数量</th>
<th>优惠/单价(元)</th>
<th>小计(元)</th>
<th>操作</th>
</tr>
</thead>
<tbody>
<tr>
<td colspan="7">
<input value="1" id="productRecordNum" type="hidden">
<input value="0" id="productGiftRecordNum" type="hidden">
<input value="1" id="orderCommNum" type="hidden">
<!-- 优购时尚商城开始-->
<div id="shopping_cart0" class="shopping_cart_tr ">
	<?php if(is_array($order)): foreach($order as $key=>$or): ?><dl class="clearfix">
			<input value="<?php echo ($or["time"]); ?>" id="addTime" name="time" type="hidden">
			<input value="<?php echo ($or["shopid"]); ?>" id="addTime" name="shopid" type="hidden">
			<dd class="fl rel col_chkbox">
				<input value="<?php echo ($or["id"]); ?>" name="" class="chkbox" checked="checked" type="checkbox" />
				<input value="<?php echo ($or["id"]); ?>" type="hidden" class="thisId">
			</dd>
			<dt class="col_1 fl rel">
				<a target="_blank" href="/index.php/Info/index/id/<?php echo ($or["id"]); ?>">
					<img onerror="<?php echo ($or["src"]); ?>'" src="<?php echo ($or["src"]); ?>" class="thumImg" height="60" width="60">
		        	
				</a>
			</dt>
			<dd class="col_2 fl"> <a target="_blank" href="/index.php/Info/index/id/<?php echo ($or["id"]); ?>" title="<?php echo ($or["name"]); ?>" class="shopLink"><?php echo ($or["name"]); ?></a><br>
				<span class="cgray">颜色：<em class="f_gray"><?php echo ($or["color"]); ?></em>&nbsp;&nbsp;尺码：<em class="f_gray"><?php echo ($or["size"]); ?></em></span>
				<br>
			</dd>
			<dd class="col_3 fl"><?php echo ($or["former"]); ?></dd>
				<dd class="col_4 fl rel ">
					<a  class="goodsSub fl" proindex="1" href="javascript:void(0);">-</a>
					<input value="<?php echo ($or["id"]); ?>" type="hidden" class="thisId">
					<input class="goodsTxt fl" value="<?php echo ($or["num"]); ?>" readonly="readonly" name="goodsCount" type="text">
					<input id="productId_1" value="a53211bdbafb4929afe981c14395ac95" type="hidden">
					<input id="productNo_1" value="99963459002" type="hidden">
					<input id="minCanBuyNum_1" value="1" type="hidden">
					<input id="maxCanBuyNum_1" value="2147483647" type="hidden">
					<a  class="goodsPlus fl" proindex="1" href="javascript:void(0);">+</a>
					<input name="oldNum_99963459002" id="oldNum_1" value="1" type="hidden">
		            	<span class="mt3 gc_tips">剩<?php echo ($or["goodsnum"]); ?>件</span>
						<input type="hidden" value="<?php echo ($or["goodsnum"]); ?>" class="mtt33" />
				 </dd>
				 <dd class="col_5 fl rel">
						-<?php echo ($or["favo"]); ?>元
							<input value="<?php echo ($or["favo"]); ?>" type="hidden" class="thisOld" />
							<div class="mt3"><span class="actvtip2">限时抢<i></i></span></div>
				</dd>
				<dd class="col_6 fl"><strong id="price" class="ones corg"><?php echo ($or["price"]); ?></strong></dd>
				<dd class="col_7 fl">
				<input type="hidden" value="<?php echo ($or["id"]); ?>" class="did"/>
				<a  prono="99963459002" id="del" class="JsRemoveGood JsDel" pid="a53211bdbafb4929afe981c14395ac95">删除</a> 
				</dd>
		</dl><?php endforeach; endif; ?>
</div> 	
</td>
</tr>
</tbody>
</table>

<div class="shpcrt_opt clearfix">
<div class="opt_bd fr">
<table class="ygtjzx_ttl_lrtbl cart_reduce_price">
<colgroup>
<col>
<col width="80">
</colgroup>
<tbody>
</tbody>
</table>
</div>
</div>
</div>

<div class="cen cart_gray_box_ft">
<a href="/index.php/Lists/index" class="cart_goon_link mt5 ml20 fl">继续购物</a>
<div class="fr">
<strong>总计（不含运费）</strong>：<strong class="cgray f16">¥</strong><strong id="count" class="corg f20"><?php echo ($count); ?></strong>
<a class="cart_b_paybtn ml10 ">去结算</a>
</div>
</div>

<!--//最低成单金额start-->
<!--//最低成单金额end-->
</div>
<!-- 香港潮牌购物车   -->
<div id="shoppingCartContainerHKD"></div>
<div class="clearfix cen mt15">
<div class="fl ml15">
<a href="javascript:;" class="cblue ml20 clearShopcart">清空购物车</a>
</div>
<div class="fr cgray cart_btinfo">
<p class="cart_bz">
购物保障：<i class="icon_zp"></i>100%正品<i class="icon_thh"></i>10天退换货<i class="icon_bcj"></i>10天补差价
</p>
<p>优惠券/礼品卡在下一步使用</p>
<p><a href="" target="_blank" class="cgray">帮助我们改进购物流程</a></p>
</div>
</div>





<div class="cen uc_main mt30">
<h3 class="f16 c6 f_yahei"></h3>
<div class="cart_recpro">
<div class="uc_slide uc_cnlike rel zmjmz4">
<input class="loa" value="0" type="hidden">
<div class="slide_hd"><h2></h2></div>

</div>
</div>
</div>
<!--//再买就满足活动end>	

<!--//根据购物车商品推荐 start-->
<div style="display: block;" class="cen uc_main mt30">
<h3 class="f16 c6 f_yahei">猜你喜欢的商品</h3>
<div class="cart_recpro">
<div class="uc_slide uc_cnlike rel gwcgm">
<div class="slide_hd"><h2></h2></div>
<div class="slide_bd">

<div class="slide_bd_c rel">
<ul style="left: 0px;" class="uc_hpro_lst abs clearfix">

<?php if(is_array($rand)): foreach($rand as $key=>$ra): ?><li class="clone" style="position: relative;">
	<div class="hpro_box">
	<div class="pic">
	    <a href="/index.php/Info/index/id/<?php echo ($ra["id"]); ?>"><img src="/Public/Home/images/carousel/<?php echo ($ra["src"]); ?>" height="160" width="160"></a>
	</div>
	<p class="title mt5"><a href="/index.php/Info/index/id/<?php echo ($ra["id"]); ?>" ><?php echo ($ra["goods"]); ?> <?php echo ($ra["intro"]); ?></a></p>
	<div class="price c9 mt3">
	    <p>市场价：<del>¥<?php echo ($ra["price"]); ?></del></p>
	           <p class="pricec clearfix"><span class="fl Red">活动价：<em class="ygprc16">￥<i><?php echo ($ra["discount"]); ?></i></em>(<?php echo ($ra["off"]); ?>折)</span></p>
	    <p class="mt5"><a class="cart_addto_lnk" href="/index.php/Info/index/id/<?php echo ($ra["id"]); ?>" goodsno="99967883">查看详情</a></p>
	</div>
	</div>
	</li><?php endforeach; endif; ?>

</ul>
</div>
</div>
</div>
</div>
</div>

<!--//根据购物车商品推荐end>


</div>
<!--//最近浏览过的商品end-->

<!--底部start-->
<div class="cgray cen footer">
<span class="pr10">
Copyright © 2011-2014 Yougou Technology Co., Ltd. 
</span>
<span class="pr10">
<a href="">粤ICP备09070608号-4</a>
</span>
<span class="pr10">
增值电信业务经营许可证：<a href="" target="_blank">粤 B2-20090203</a>
</span>
</div>
<!--//底部end-->
<!--//问卷调查-->	


<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<noscript>
<div style="display:none;">
<img height="0" width="0" style="border-style:none;" src="http://eclick.baidu.com/rt.jpg?t=noscript&rtid=n1f4nf" />
</div>
</noscript>
<div id="cartSelector" class="cart_selector_pop none"><b class="icon arr jsarr">&nbsp;</b><a href="javascript:;" class="icon close jsclose">&nbsp;</a><div class="bd" id="cartSelectorCon"><p class="loading">加载中，请稍后...</p></div></div></body></html>