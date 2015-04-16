<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!-- //top start -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <title>
	     <?php echo ($title); ?>
	   </title>
	   <meta name="Description" content="优购网热销女鞋新款|正品|折扣,知名品牌，厂家直销，全网最低价，100%专柜正品保障，10天退换货!"/>

	    <meta name="Keywords"  content="女鞋新款|正品|折扣|价格"/>
      
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/fss.css">	
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/index.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/personal/bdsstyle.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/personal/ucenter_v2.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/personal/ygdialog.css">
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/channel.css">
    <link href="/Public/Home/css/base.css?2.9.4" type="text/css" rel="stylesheet" />
    <link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
    <script type="text/javascript" src="/Public/Home/js/list.js"></script>
 
      <style type="text/css">

      	#mbx{display:inline-block;background:url(/Public/Home/list/images/filter-sprite.png) no-repeat;background-position:right 0; padding-right:16px; margin-right:10px;}
      </style> 

</head>
<body class="selfadaptat">

<!--header created time: 2014-11-10 13:32:34 by nobody-->
<!--公共头部start-->
<div class="yg_header">
    	<div class="top_banner" style="background:url(/Public/Home/images/index/7af3bb6b179c425f88c6a57220f3e4ba.jpg) center;cursor:pointer"><a href="" target="_blank"></a></div>
	 <div class="mod_top_banner" id="cb_head_info" style="display:none">
		<div class="main_area">
			<div class="sale_tip" id="cb_headshow"></div>
			<div class="login_status">
				<span class="login_span">您好，<span id="cb_showmsg"></span></span>
				<a class="my_caibei" id="jifen_url" target="_blank" href="#">我的积分</a>
			</div>
		</div>
	</div>
<!--新头部导航9854 -->
<div id="top_nav">
	<div class="view_area clearfix">
		<div class="yg link_box"><a class="clicked" href="">时尚商城</a></div>
		
		<div class="flashbuy link_box"><a href="">整点降价</a><span></span></div>
		<div class="phone">
			<!-- <a href="" class="phone_text"><i class="mobile_ico"></i>手机优购<i class="tip"></i></a> -->
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
    <?php
 if (empty($_SESSION['buyUser'])) { echo '<div class="login"><a  rel="nofollow" href="/index.php/Login">登录</a></div>'; echo '<div class="register"><a  rel="nofollow" href="/index.php/Reg">注册</a></div>'; }else{ echo '<div class="login" style="width:32px;"><a  rel="nofollow href="/index.php/Data/'.$_SESSION['buyUser'].'">'.$_SESSION['buyUser'].'</div>'; echo '<div class="register"><a  rel="nofollow" href="/index.php/Login/ex">退出</a></div>'; } ?>
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

    <!--新头部导航9854 end-->
	<div id="yg_logo_tab" class="clearfix ygwrap">
    	<div class="logo fl">
            <a href=""></a>
        </div>
<form action="/index.php/SeekGet" onsubmit=""  name="" id="J_TopSearchForm" method="POST" class="search_box clearfix fl">
  <div class="zs_left fl"></div>
  <div class="input_box fl">
    <input type="text" id="keyword" name="keyword" maxlength="80"  class="search flc" />
    
  </div>
  <div class="zs_right fl"></div>
  <div class="search_btn fl"><input class="int" style="width:35px;opacity: 0.0;" type="submit" value=""></div>
</form>
        <div class="mycart_nav fl">
	    <div class="mycart_btn">
        	<div class="zs_left fl"></div>
		<div class="zs_center fl">
      			<div class="tip_left fl"></div>
			<div id="paymoney" class="text fl">购物车(<span id="pordcount">0</span>)件</div>
			<div class="tip_right fl"></div>
		</div>
		<div class="zs_right fl"></div>
	    </div>
	    <div id="shoppingcartContainer"><ul></ul></div>
        </div><!--mycart_nav end-->
		<div></div>
        <div class="company_name">香港上市公司百丽国际旗下购物网站</div>
    </div>
    <div class="yg_sites_tabtn"></div>
</div>
     <!-- nav created time: 2014-11-10T18:59:08+08:00 -->
<div class="yg_category_nav">
  <div class="ygwrap rel clearfix">
      <!--水平导航开始-->
      <div class="yginwrap yg_nav rel">
      <ul class="yg_nav_list">
          <?php if(is_array($topnav)): foreach($topnav as $key=>$vo): ?><li><a href="/index.php/Lists/index/zid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
          <li>
          <a class="highlight" href="/index.php/Seckill" target="_blank">秒杀</a></li>
          <li>
          <a class="highlight" href="/index.php/Group" target="_blank">闪团</a></li>
          <li>
          <i class="newtip_icon"></i>
          <li class="last">
      </ul>       
      </div>
      <!--水平导航结束-->
      <div class="yg_category" id="yg_category">
        <a class="left_yg_logo" href="" target="_blank"><img src="/Public/Home/list/images/left-yg-logo.jpg" width="198" height="57" /></a>
        <h2 class="hd rel"><a href="" target="_blank">全部商品分类 <i class="abs"></i></a></h2>
        <!-- 垂直导航 -->

<!-- 坚导航开始 -->
<ul class="indexnav2list clearfix" style="display:none">

    <li class="">
      <input value="53d0e923c7da508b0c00007e" type="hidden">

      <div class="titt">
        
            <i class="iconn jingc"></i>
        

        <h3><a href="" target="_blank">本周精彩</a>
          
        </h3>
      </div>
      <p class="chldlist">
            <a href="" target="_blank" >品牌轮播打造时尚巅峰</a>
      </p>  
  
    </li>

    <li class="">
      <input value="53d0e923c7da508b0c00007f" type="hidden">

      <div class="titt">
        
            <i class="iconn nvx"></i>
        

         <h3><a href="/index.php/Lists/index/zid/12" target="_blank">女鞋</a> 
              /<a href="/index.php/Lists/index/zid/13" target="_blank">男鞋</a>
          
        </h3>
      </div>
      <p class="chldlist">
          <?php if(is_array($menContent)): foreach($menContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>     
      </p>
      
          <div class="popmenu2" style="height:360px;">
            
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/12" target="_blank">
                          <img src="/Public/Home/images/index/93920141023T135302.png" alt=""/>
                      
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($man)): foreach($man as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/13" target="_blank"
                       >
                          <img src="/Public/Home/images/index/40820141023T114456.png" alt=""/>
                      
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($woman)): foreach($woman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>
    </li>

    <li>
      <input type="hidden" value="53d0e925c7da508b0c0001c6"/>

      <div class="titt">
        
            <i class="iconn nanx"></i>
        

        <h3><a href="/index.php/Lists/index/zid/14" target="_blank">男装</a>/
        <a href="/index.php/Lists/index/zid/15" target="_blank">女装</a>
          
        </h3>
      </div>
      <p class="chldlist">
          <?php if(is_array($clContent)): foreach($clContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>
      </p>
      
          <div class="popmenu2" style="height:480px;">      
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/14" target="_blank">
                          <img src="/Public/Home/images/index/64620141023T104657.png" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                  <?php if(is_array($clman)): foreach($clman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?> 
                  </p>
                </div>
            
                <div class="categoryy" style="height:400px;">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/15" target="_blank" >
                          <img src="/Public/Home/images/index/78120141023T105219.png" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($clwoman)): foreach($clwoman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                            <?php echo ($vo["name"]); ?>
                          </a><?php endforeach; endif; ?>
                  </p>
                </div>
            
          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e923c7da508b0c0000ed"/>

      <div class="titt">
        
            <i class="iconn nvz"></i>  

        <h3><a href="/index.php/Lists/index/zid/16" target="_blank">童装</a>
              /<a href="/index.php/Lists/index/zid/17" target="_blank">童鞋</a>
          
        </h3>
      </div>
      <p class="chldlist">
        <?php if(is_array($chContent)): foreach($chContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>
      </p>
          <div class="popmenu2" style="height:400px;">    
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/16" target="_blank">
                          <img src="/Public/Home/images/index/19320140725T114110.png" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($chman)): foreach($chman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>
            
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/17" target="_blank">
                          <img src="/Public/Home/images/index/92320140828T143047.png" alt=""/>
                      
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($chwoman)): foreach($chwoman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                    
                  </p>
                </div>            
          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e925c7da508b0c0001f4"/>

      <div class="titt">
        
            <i class="iconn nanz"></i>
        

        <h3><a href="/index.php/Lists/index/zid/18" target="_blank">家品</a>
              /<a href="/index.php/Lists/index/zid/19" target="_blank">内衣</a>
        </h3>
      </div>
      <p class="chldlist">
          <?php if(is_array($unContent)): foreach($unContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>
      </p>
          <div class="popmenu2" style="height:350px;">
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/18" target="_blank">
                          <img src="/Public/Home/images/index/53320141023T100030.jpg" alt=""/>
                    </a>
                  </p>
                  <p class="categoryul">
                      <?php if(is_array($unwoman)): foreach($unwoman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/19" target="_blank">
                          <img src="/Public/Home/images/index/71420141023T103606.jpg" alt=""/>
                      
                    </a>
                  </p>    
                </div>
                <div class="categoryy">
                  <p class="categoryul">
                      <?php if(is_array($unman)): foreach($unman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>     
                  </p>
                </div>
            
          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e924c7da508b0c000155"/>

      <div class="titt">       
            <i class="iconn xiangb"></i>      
        <h3><a href="/index.php/Lists/index/zid/20" target="_blank">箱包</a>
              /<a href="/index.php/Lists/index/zid/21" target="_blank">配饰</a>
        </h3>
      </div>
      <p class="chldlist">
          <?php if(is_array($bagContent)): foreach($bagContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>
      </p>
      
          <div class="popmenu2" style="height:320px;">
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/20" target="_blank">
                          <img src="/Public/Home/images/index/37420141023T105202.png" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($bagman)): foreach($bagman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>    
                  </p>
                </div>

                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/21" target="_blank">
                          <img src="/Public/Home/images/index/63020141105T151547.png" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($bagwoman)): foreach($bagwoman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>
            
          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e923c7da508b0c000008"/>

      <div class="titt">
        
            <i class="iconn tongx"></i>
        <h3><a href="/index.php/Lists/index/zid/22" target="_blank">运动</a>
        </h3>
      </div>
      <p class="chldlist">
        <?php if(is_array($moContent)): foreach($moContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>
      </p>
      
          <div class="popmenu2" style="height:450px;">
            
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/22" target="_blank">   
                          <img src="/Public/Home/images/index/15620140728T133344.jpg" alt=""/>       
                    </a>
                  </p>

                  <p class="categoryul">
                    <?php if(is_array($moman)): foreach($moman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>           

          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e924c7da508b0c00011e"/>

      <div class="titt">
        
            <i class="iconn huw"></i>
        

        <h3>

          <a href="/index.php/Lists/index/zid/23" target="_blank">户外</a>

        </h3>
      </div>
      <p class="chldlist">
          <?php if(is_array($outContent)): foreach($outContent as $key=>$vo): ?><a href="/index.php/Lists/index/pid/<?php echo ($vo["id"]); ?>" target="_blank"><?php echo ($vo["name"]); ?>&nbsp;</a><?php endforeach; endif; ?>  
      </p>
          <div class="popmenu2" style="height:450px;">       
                <div class="categoryy">
                  <p class="categorytit">
                    <a href="/index.php/Lists/index/zid/23" target="_blank">
                          <img src="/Public/Home/images/index/75520140728T132455.jpg" alt=""/>
                    </a>
                  </p>

                  <p class="categoryul">
                      <?php if(is_array($outman)): foreach($outman as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
                          <?php echo ($vo["name"]); ?>
                        </a><?php endforeach; endif; ?>
                  </p>
                </div>  
          </div>
      
    </li>

    <li>
      <input type="hidden" value="53d0e925c7da508b0c000195"/>

      <div class="titt">
        
            <i class="iconn yund"></i>
        

        <h3><a href="" target="_blank">品牌大全</a>
          
        </h3>
      </div>
      <p class="chldlist">
            <a href="/index.php/Group" target="_blank">闪团&nbsp;</a>
            <a href="/index.php/Seckill" target="_blank">秒杀</a>
      </p>   
    </li>
</ul>
<!-- 坚导航结束 -->
  <a class="left_go_outlet" href="star.shtml#ref=all&amp;po=menu_banner1" target="_blank"><img src="/Public/Home/images/index/60520141031T144632.gif" width="200"></a>


      </div>
  </div>
</div>
<!--//导航end-->
<!--//公共头部end-->

<div class="blank10"></div>
<!-- //end top  -->
<!-- //content start -->

<p class="curLct">您当前的位置：<a href="" class="f_blue">首页</a> &gt; 我的优购</p>
<div class="cen clearfix">
	<!--左侧公共部分 start-->
<div class="u_leftxin u_leftxin fl mgr10" id="umenu">
	<div class="wdygtit"><a href=""><span>我的优购</span></a></div>
	<ul class="jiaoyizx">
    	<li class="ultit">交易中心</li>
    	<li class="myorderli"><a href="/index.php/OrderSet"><span>我的订单</span></a></li>
    	<li class="myfavorli"><a href=""><span>我的收藏</span></a></li>
    	<li class="mydatingbuyli"><a href=""><span>我的预约</span></a></li>
    	<li class="mycommentli"><a href=""><span>商品评论/晒单</span></a></li>
        <li class="msgli"><a href=""><span id="uc_msg_count">站内消息<i class="huise">（<em>0</em>）</i></span></a></li>
    </ul>
    <ul class="wodezc">
    	<li class="ultit">我的资产</li>
    	<li class="mycouponli"><a href=""><span id="my_coupon_tick">我的优惠券</span></a></li>
        <li class="giftcardli"><a href=""><span id="my_giftcard_tick">我的礼品卡</span></a></li>
        <li class="mypointli"><a href="/index.php/Total"><span id="my_point_tick">我的积分</span></a></li>
    </ul>
	<ul class="gerensz">
    	<li class="ultit">个人设置</li>
    	<li class="myinfoli"><a href="/index.php/Data"><span>个人资料</span></a></li>
        <li class="safesetli"><a href=""><span id="uc_safe_level">安全设置</span></a></li>
        <li class="myaddrli"><a href=""><span>我的收货地址</span></a></li>
    </ul>
    <ul class="shouhoufw">
    	<li class="ultit">售后服务</li>
    	<li class="afterservli"><a href=""><span>查看退换货</span></a></li>
        <li class="appservli"><a href=""><span>申请退换货</span></a></li>
    </ul>
</div>    <!--左侧公共部分 end-->

<div id="ucindex" class="uc_right fr" style="margin-right:195px;">
    	<!--右侧头部 start-->

<p class="ubtitle"><span class="Size14 fb">修改密码</span></p>
<div class="u_con2" style="height:204px">
    <div class="u_unit fl passwordf" style="">
        <form action="" onsubmit="return fun()" method="post" id="form_" name="form_">
            <input id="promptMsg" name="promptMsg" value="" type="hidden">  
            <div class="row" style="height:50px">
                <label>旧密码：</label>
                <span><input id="oldPwd" class="sinput" name="oldPwd" maxlength="16" autocomplete="off" type="password"></span>
                <span>&nbsp;&nbsp;</span>
                <span id="oldPwd_tips" class="f_gray">请输入旧密码</span>
            </div>
            <div class="row" style="height:50px">
                <label>新密码：</label>
                <span><input id="newPwd" class="sinput" name="newPwd" maxlength="16" autocomplete="off" type="password"></span>
                <span>&nbsp;&nbsp;</span>
                <span id="newPwd_tips" class="f_gray">密码可使用字母+数字或符号的组合长度6-16个字符</span>
            </div>
            <div class="row" style="height:50px">
                <label>确认密码：</label>
                <span><input class="sinput" name="surePwd" id="surePwd" maxlength="16" autocomplete="off" type="password"></span>
                <span>&nbsp;&nbsp;</span>
                <span id="surePwd_tips" class="f_gray">请再次输入密码进行确认</span>
            </div>
                <label></label>
                <span><input value="确认修改" class="u1_btn" name="submit1" type="submit"></span>
                <input type="submit" value="保 存" name="basic_submit" class="buybtn rbtn" style="margin-top:0px;margin-left:40px;">
            </form></div>
        
    </div>      
</div>
</div>
<script type="text/javascript">
        var condition = false;
        // 原始密码判断
        oldPwd();
        function oldPwd(){
            $('#oldPwd').blur(function(event) {
                var content = {'pwd':$('#oldPwd').val()};
                $.ajax({
                    url:'/index.php/Personal/oldPwd',
                    data:content,
                    type:'POST',
                    success:function(data){
                        if (data == '密码不正确！') {
                            condition = false;
                            $('#oldPwd_tips').html('密码不正确！').css('color', 'red');
                        }else if($('#oldPwd').val() == ''){
                            condition = false;
                            $('#oldPwd_tips').html('密码不能为空！').css('color', 'red');
                        }else{
                            $('#oldPwd_tips').html('密码正确！').css('color', 'green');
                            condition = true;
                        }
                    }
                });
            });
        }
        $('#oldPwd').focus(function(event) {
            $('#oldPwd_tips').html('请输入旧密码').css('color', '#666666');;
        });
        newPwd(); // 新密码
        function newPwd(){
            $('#newPwd').blur(function(event) {
                if ($('#newPwd').val().length < 6) {
                    condition = false;
                    $('#newPwd_tips').html('密码不能少于6位数！').css('color', 'red');
                }else if($('#newPwd').val() == ''){
                    condition = false;
                    $('#newPwd_tips').html('密码不能为空！').css('color', 'red');
                }else if(!$('#newPwd').val().match(/[0-9a-zA-Z]{6,16}/)){
                    condition = false;
                     $('#newPwd_tips').html('密码可使用字母+数字或符号的组合长度6-16个字符！').css('color', 'red');
                }else{
                    condition = true;
                    $('#newPwd_tips').html('密码可用!').css('color', 'green');
                }
            });
        }
        $('#newPwd').focus(function(event) {
            $('#newPwd_tips').html('密码可使用字母+数字或符号的组合长度6-16个字符！').css('color', '#666666');;
        });
        // 密码判断
        surePwd();
        function surePwd(){
            $('#surePwd').blur(function(event) {
                if ($('#surePwd').val() !== $('#newPwd').val()) {
                    condition = false;
                    $('#surePwd_tips').html('两次密码不一致').css('color', 'red');
                }else if($('#surePwd').val() == ''){
                    condition = false;
                    $('#surePwd_tips').html('密码不能为空！').css('color', 'red');
                }else{
                    condition = true;
                    $('#surePwd_tips').html('密码一致').css('color', 'green');
                }
            });
        }
        $('#surePwd').focus(function(event) {
            $('#surePwd_tips').html('请再次输入密码进行确认').css('color', '#666666');
        });
        clickOn(); //提交设置
        function clickOn(){
            $('.buybtn').live('click', function(event) {
                if ($('#oldPwd').val() == '') {
                    condition = false;
                }
                if($('#newPwd').val() == ''){
                    condition = false;
                }  
                if($('#surePwd').val() == '') {
                    condition = false;
                } 
            });
        }
        function fun(){
            if (condition) {
                return true;
            }else{
                return false;
            }
        }
</script>

<!--添加底部搜索框结束-->
<!-- <div class="blank8"></div>  -->
   </div>

    <!--2013.11.22 #9036 动态分类树 end-->

</div>

<div class="ygwrap">
  <div class="ygGuid mb10" id="ygGuid">
    <h2 class="ygGuidTit">优购导购</h2>
    <div class="item_bom">
      <a id="brand-left" class="brmove_l_btn" href="javascript:;"></a>
      <a id="brand-right" class="brmove_r_btn" href="javascript:;"></a>
      <div class="brand_move" id="brand-list">
          <?php if(is_array($guide)): foreach($guide as $key=>$vo): ?><a href="/index.php/Flagship/id/<?php echo ($vo["id"]); ?>" target="_blank" >
              <img style="margin-top:10px;" class="lazy_loading" width="85" height="40" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="<?php echo ($vo["shopname"]); ?>"/>
            </a><?php endforeach; endif; ?>
      </div>
      <div class="clear"></div>
      <!-- rec link -->
      <ul class="rec_buy_link mt20">
  <li>
    <dl>
      <a href="/index.php/Lists/index/zid/22" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">时尚运动</a></dd>
      <dt>  
          <?php if(is_array($move)): foreach($move as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>  

  <li>
    <dl>
      <a href="/index.php/Lists/index/zid/13" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">流行男鞋</a></dd>
      <dt>  
          <?php if(is_array($ln)): foreach($ln as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl> 

    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/12" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">潮流女鞋</a></dd>
      <dt>  
          <?php if(is_array($lv)): foreach($lv as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>


    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/17" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">童鞋童装</a></dd>
      <dt>  
          <?php if(is_array($tx)): foreach($tx as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>

    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/15" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">魅力女装</a></dd>
      <dt>  
          <?php if(is_array($mv)): foreach($mv as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>

    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/23" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">户外休闲</a></dd>
      <dt>  
          <?php if(is_array($hx)): foreach($hx as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>

    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/14" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">精品男装</a></dd>
      <dt>  
          <?php if(is_array($jz)): foreach($jz as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>
    <li>
    <dl>
      <a href="/index.php/Lists/index/zid/20" class="fr Gray">更多>></a>
      <dd><a href="" target="_blank">高档箱包</a></dd>
      <dt>  
          <?php if(is_array($db)): foreach($db as $key=>$m): ?><a href="/index.php/Lists/index/pid/<?php echo ($m["id"]); ?>" target="_blank"><?php echo ($m["name"]); ?></a><?php endforeach; endif; ?>
      </dt>
    </dl>
  </li>


      </ul>
    </div>
  </div>
</div>




   <!--footer created time: 2014-11-10 13:32:34-->
<!--Ntalker start-->

<!--Ntalker end-->
<div class="wcen footser">
	<div class="ygwrap">
		<ul class="hd">
			<li><i class="item1"></i><a href="" target="_blank" rel="nofollow"><em>100%</em>正品保证</a></li>
			<li><i class="item2"></i><a href="" target="_blank" rel="nofollow"><em>10天</em>退换货</a></li>
			<li><i class="item3"></i><a href="" target="_blank" rel="nofollow"><em>10天调价</em>补差额</a></li>
			<li><i class="item4"></i><a href="" target="_blank" rel="nofollow"><em>7X24小时</em>在线客服</a></li>
		</ul>
		<div id="n_help" class="clearfix">
		<dl>
				<dt>新手帮助</dt>
				<dd><a href="" target="_blank" rel="nofollow" >交易条款协议</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >注册新用户</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >会员积分详情</a></dd>
				<!-- <dd><a href="/help/memberlevel.shtml" target="_blank" rel="nofollow" >会员等级</a></dd> -->
			</dl>
			<dl>
				<dt>购物指南</dt>
				<dd><a href="" target="_blank" rel="nofollow" >订购流程</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >验货与签收</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >订单配送查询</a></dd>
			</dl>
			<dl>
				<dt>支付/配送</dt>
				<!--  <dd><a href="/help/payment.shtml" target="_blank" rel="nofollow" >支付说明</a></dd>-->
				<dd><a href="" target="_blank" rel="nofollow" >支付方式</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >配送方式</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >配送时间及运费</a></dd>
			</dl>
			<dl>
				<dt>售后服务</dt>
				<dd><a href="" target="_blank" rel="nofollow" >退换货政策</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >退款说明</a></dd>
				<dd><a href="" target="_blank" rel="nofollow" >发票制度</a></dd>
			</dl>
			<dl>
				<dt>会员服务</dt>
				<dd><a href="" target="_blank" rel="nofollow" >找回密码</a></dd>
				<dd><a href="" target="_blank" >联系我们</a></dd>
			</dl>
	 		<dl class="help">
				<dt>优购客服</dt>
				<dd class="kf tleft"><span>
				<a onclick="javascript:NTKF.im_openInPageChat();" class="lnk-ntalker" href="javascript:;">在线咨询</a>
				</span></dd>
				<dd>Email：<em class="Red Size12">service@yougou.com</em></dd>
			</dl>
			<dl class="qrcode">
                <dd class="center"><a href="" target="_blank"><img src="/Public/Home/list/images/footer-mobile-qrcode.jpg" width="114" height="103" /></a></dd>
                <dd class="tright"><img src="/Public/Home/list/images/footer-wechat-qrcode.jpg" width="72" height="103" /></dd>
            </dl>
		</div>
	</div>
</div>
<div class="wcen n_footinfo">
<div class="ygwrap">
<div class="n_footl fl tleft" id="endlogo">
<a href="default.htm" class="ba_logo" title="优购时尚商城" alt="优购时尚商城"><img src="/Public/Home/images/index/blank.gif" original="/Public/Home/images/index/endlogo.png" title="优购时尚商城" alt="优购时尚商城" /></a>
</div>
<div class="n_footr fr f_white">
<p class="tright">
<a href="" target="_blank" >关于优购</a> | 
<a href="" target="_blank" >品牌招商</a> |	
<a href="" target="_blank" >集团采购</a> |	
<a href="" target="_blank">招贤纳士</a> | 
<a href="" target="_blank" >手机优购</a> | 
<a href="" target="_blank" >联系我们</a> | 
<a target="_blank" href="">品牌大全</a> |
<a href="" target="_blank">网站地图</a> |
<a href="" target="_blank">销售排行</a> |
<a href="" target="_blank">优购资讯</a> |
<a href="" target="_blank">网站联盟</a> |
<a href="" target="_blank" >友情链接</a> 
</p>
<p class="tright">Copyright &copy; 2011-2014 Yougou Technology Co., Ltd. <a href="" target="_blank" rel="nofollow">粤ICP备09070608号-4</a> 增值电信业务经营许可证：<a href="" target="_blank" rel="nofollow">粤 B2-20090203</a>&nbsp;<span>深公网安备：4403101910665 </span></p>
<p class="tright beian">
<a href="" target="_blank" rel="nofollow" class="ba_link2"><img src="/Public/Home/images/index/blank.gif" original="/Public/Home/images/index/beian2.png" /></a>
<a href="" target="_blank" rel="nofollow" class="ba_link1"><img src="/Public/Home/images/index/blank.gif" original="/Public/Home/images/index/beian1.png" /></a>
<a href="" class="ba_link2" target="_blank" title="诚信网站" rel="nofollow"><img original="/Public/Home/images/index/szfw_logo.jpg" src="/Public/Home/images/index/blank.gif" width="108" height="40" /></a>
<a href="" class="ba_link2" target="_blank" title="众信网" rel="nofollow"><img original="/Public/Home/images/index/ebs-logo.jpg" src="/Public/Home/images/index/blank.gif" width="108" height="40" /></a>	
<a key ="" logo_size="124x47" logo_type="realname" href="" style="width:108px; height:40px;">
</a>
<a href="" class="ba_link2" target="_blank" title="众信网" rel="nofollow"><img original="/Public/Home/images/index/ebs.png" src="/Public/Home/images/index/blank.gif" width="108" height="40" /></a>
</p>
</div>
</div>
</div>

<noscript>

<div style="display:inline;">

	<img height="1" width="1" style="border-style:none;" alt="" src="other/.com/pagead/conversion/1016027598/?label=ni7GCOL2nQIQzrO95AM&amp;guid=ON&amp;script=0"/>

</div>

</noscript>

</span>


<!-- <script type="text/javascript" src="/Public/Home/list/js/rt.js"></script> -->

<noscript>

<div style="display:none;">

<img height="0" width="0" style="border-style:none;" src="/Public/Home/list/images/rt.jpg" />

</div>

</noscript>


<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="other/.net/pagead/viewthroughconversion/1016027598/?value=0&amp;label=189vCLqHowQQzrO95AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

</body>

<script type="text/javascript">
$(document).ready(function(){
  // 图片上下滚动
  var count = $("#imageMenu li").length - 5; /* 显示 6 个 li标签内容 */
  var interval = $("#imageMenu li:first").width();
  var curIndex = 0;
  
  $('.scrollbutton').click(function(){
    if( $(this).hasClass('disabled') ) return false;
    
    if ($(this).hasClass('smallImgUp')) --curIndex;
    else ++curIndex;
    
    $('.scrollbutton').removeClass('disabled');
    if (curIndex == 0) $('.smallImgUp').addClass('disabled');
    if (curIndex == count-1) $('.smallImgDown').addClass('disabled');
    
    $("#imageMenu ul").stop(false, true).animate({"marginLeft" : -curIndex*interval + "px"}, 600);
  });
  
  // 解决 ie6 select框 问题
  $.fn.decorateIframe = function(options) {
        if ($.browser.msie && $.browser.version < 7) {
            var opts = $.extend({}, $.fn.decorateIframe.defaults, options);
            $(this).each(function() {
                var $myThis = $(this);
                //创建一个IFRAME
                var divIframe = $("<iframe />");
                divIframe.attr("id", opts.iframeId);
                divIframe.css("position", "absolute");
                divIframe.css("display", "none");
                divIframe.css("display", "block");
                divIframe.css("z-index", opts.iframeZIndex);
                divIframe.css("border");
                divIframe.css("top", "0");
                divIframe.css("left", "0");
                if (opts.width == 0) {
                    divIframe.css("width", $myThis.width() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                if (opts.height == 0) {
                    divIframe.css("height", $myThis.height() + parseInt($myThis.css("padding")) * 2 + "px");
                }
                divIframe.css("filter", "mask(color=#fff)");
                $myThis.append(divIframe);
            });
        }
    }
    $.fn.decorateIframe.defaults = {
        iframeId: "decorateIframe1",
        iframeZIndex: -1,
        width: 0,
        height: 0
    }
    //放大镜视窗
    $("#bigView").decorateIframe();

    //点击到中图
    var midChangeHandler = null;
  
    $("#imageMenu li img").live("click", function(){
    if ($(this).attr("id") != "onlickImg") {
      midChange($(this).attr("src").replace("small", "mid"));
      $("#imageMenu li").removeAttr("id");
      $(this).parent().attr("id", "onlickImg");
    }
  }).live("mouseover", function(){
    if ($(this).attr("id") != "onlickImg") {
      window.clearTimeout(midChangeHandler);
      midChange($(this).attr("src").replace("small", "mid"));
      $(this).css({ "border": "3px solid #959595" });
    }
  }).live("mouseout", function(){
    if($(this).attr("id") != "onlickImg"){
      $(this).removeAttr("style");
      midChangeHandler = window.setTimeout(function(){
        midChange($("#onlickImg img").attr("src").replace("small", "mid"));
      }, 1000);
    }
  });

    function midChange(src) {
        $("#midimg").attr("src", src).load(function() {
            changeViewImg();
        });
    }

    //大视窗看图
    function mouseover(e) {
        if ($("#winSelector").css("display") == "none") {
            $("#winSelector,#bigView").show();
        }

        $("#winSelector").css(fixedPosition(e));
        e.stopPropagation();
    }


    function mouseOut(e) {
        if ($("#winSelector").css("display") != "none") {
            $("#winSelector,#bigView").hide();
        }
        e.stopPropagation();
    }


    $("#midimg").mouseover(mouseover); //中图事件
    $("#midimg,#winSelector").mousemove(mouseover).mouseout(mouseOut); //选择器事件

    var $divWidth = $("#winSelector").width(); //选择器宽度
    var $divHeight = $("#winSelector").height(); //选择器高度
    var $imgWidth = $("#midimg").width(); //中图宽度
    var $imgHeight = $("#midimg").height(); //中图高度
    var $viewImgWidth = $viewImgHeight = $height = null; //IE加载后才能得到 大图宽度 大图高度 大图视窗高度

    function changeViewImg() {
        $("#bigView img").attr("src", $("#midimg").attr("src").replace("mid", "big"));
    }

    changeViewImg();

    $("#bigView").scrollLeft(0).scrollTop(0);
    function fixedPosition(e) {
        if (e == null) {
            return;
        }
        var $imgLeft = $("#midimg").offset().left; //中图左边距
        var $imgTop = $("#midimg").offset().top; //中图上边距
        X = e.pageX - $imgLeft - $divWidth / 2; //selector顶点坐标 X
        Y = e.pageY - $imgTop - $divHeight / 2; //selector顶点坐标 Y
        X = X < 0 ? 0 : X;
        Y = Y < 0 ? 0 : Y;
        X = X + $divWidth > $imgWidth ? $imgWidth - $divWidth : X;
        Y = Y + $divHeight > $imgHeight ? $imgHeight - $divHeight : Y;

        if ($viewImgWidth == null) {
            $viewImgWidth = $("#bigView img").outerWidth();
            $viewImgHeight = $("#bigView img").height();
            if ($viewImgWidth < 200 || $viewImgHeight < 200) {
                $viewImgWidth = $viewImgHeight = 800;
            }
            $height = $divHeight * $viewImgHeight / $imgHeight;
            $("#bigView").width($divWidth * $viewImgWidth / $imgWidth);
            $("#bigView").height($height);
        }

        var scrollX = X * $viewImgWidth / $imgWidth;
        var scrollY = Y * $viewImgHeight / $imgHeight;
        $("#bigView img").css({ "left": scrollX * -1, "top": scrollY * -1 });
        $("#bigView").css({ "top": 75, "left": $(".preview").offset().left + $(".preview").width() + 15 });

        return { left: X, top: Y };
    }

});
</script>
  
</html>
<!-- foot end -->