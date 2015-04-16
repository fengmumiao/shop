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
      
      <link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/list/css/channel.css?2.9.4" type="text/css" rel="stylesheet" />
      <script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
      <script type="text/javascript" src="/Public/Home/js/list.js"></script>

      <!-- selleck -->
      <!-- <link rel="stylesheet" type="text/css" href="/Public/Merchant/css/bootstrap.css" /> -->
      <!-- <link rel="stylesheet" type="text/css" href="/Public/Merchant/css/bootstrap-theme.css" /> -->
      <!-- <link rel="stylesheet" type="text/css" href="/Public/Merchant/css/bootstrap-responsive.min.css" /> -->
      <!-- <link rel="stylesheet" type="text/css" href="/Public/Merchant/css/bootstrap-theme.css.map" /> -->
      <!-- <link rel="stylesheet" type="text/css" href="/Public/Merchant/css/bootstrap.min.css" /> -->

      <link href="/Public/Home/seckill/css/base.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/seckill/css/channel.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/seckill/css/seckill.css?2.9.4" type="text/css" rel="stylesheet" />
      <!-- group end -->
      <link href="/Public/Home/group/css/base.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/group/css/channel.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/group/css/topics-new.css?2.9.4" type="text/css" rel="stylesheet" />
       
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

	<div class="banner">
      <a href="http://www.yougou.com/topics/miaosha.html" target="_blank">
        <img alt="秒杀三场" src="/Public/Home/seckill/images/77020141107T100451.jpg"/>
      </a>
</div>
<div class="main">
  <div class="mleft">
    
    <ul class="goodsList">
      
    </ul>
    <ul class="goodsList">   
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-lee/sku-l10075218-100007970.shtml" target="_blank"><img src="/Public/Home/seckill/images/100007970_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-lee/sku-l10075218-100007970.shtml" target="_blank">LEE 李 男款灰紫色条纹连帽针织毛衫L10075218G7M</a>
            </p>
            <p>市场价：<span class="srline">¥790</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>239
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/lee-brand.html" target="_blank"><img src="/Public/Home/seckill/images/lee460210481.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/lee-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          <li>
            <div class="goodsPic">
              <a href="" target="_blank"><img src="/Public/Home/seckill/images/99940507_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="" target="_blank">DKNYJEANS男士蓝色五袋直筒做旧牛仔裤D01800-9TU</a>
            </p>
            <p>市场价：<span class="srline">¥1090</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>279
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/dknyjeans-brand.html" target="_blank"><img src="/Public/Home/seckill/images/dknyjeans459315219.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/dknyjeans-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-storyofshanghai/sku-66031-100036337.shtml" target="_blank"><img src="/Public/Home/seckill/images/100036337_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-storyofshanghai/sku-66031-100036337.shtml" target="_blank">上海故事 2014秋冬新款英伦风情侣装新款男式毛衣立领开衫 男装针织外套潮棒球服6603</a>
            </p>
            <p>市场价：<span class="srline">¥698</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>109
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/storyofshanghai-brand.html" target="_blank"><img src="/Public/Home/seckill/images/storyofshanghai467697344.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/storyofshanghai-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-hyx/sku-10170213-100052014.shtml" target="_blank"><img src="/Public/Home/seckill/images/100052014_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-hyx/sku-10170213-100052014.shtml" target="_blank">恒源祥HYX 男士羊毛衫V领秋冬新中年纯羊毛套头商务休闲装鸡心领毛衣</a>
            </p>
            <p>市场价：<span class="srline">¥1480</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>288
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/hyx-brand.html" target="_blank"><img src="/Public/Home/seckill/images/hyx467203843.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/hyx-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-cat/sku-t625-99966451.shtml" target="_blank"><img src="/Public/Home/seckill/images/99966451_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-cat/sku-t625-99966451.shtml" target="_blank">CAT/卡特女装褐色棉服马甲CB3WOPVT625G25</a>
            </p>
            <p>市场价：<span class="srline">¥798</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>169
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/cat-brand.html" target="_blank"><img src="/Public/Home/seckill/images/cat413008913.gif" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/cat-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-exun/sku-10115355-100015281.shtml" target="_blank"><img src="/Public/Home/seckill/images/100015281_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-exun/sku-10115355-100015281.shtml" target="_blank">EXUN正品女装2014秋季新款L 韩版修身时尚拼接中长款打底T恤长袖</a>
            </p>
            <p>市场价：<span class="srline">¥299</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>79
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/exun-brand.html" target="_blank"><img src="/Public/Home/seckill/images/yx3.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/exun-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-slim/sku-s1201190-100049538.shtml" target="_blank"><img src="/Public/Home/seckill/images/100049538_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-slim/sku-s1201190-100049538.shtml" target="_blank">波司登【上羽】 2013秋冬新款 潮女士中长款羽绒服S1201190</a>
            </p>
            <p>市场价：<span class="srline">¥980</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>159
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/slim-brand.html" target="_blank"><img src="/Public/Home/seckill/images/slim430540890.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/slim-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-nike/sku-599392-99948057.shtml" target="_blank"><img src="/Public/Home/seckill/images/99948057_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-nike/sku-599392-99948057.shtml" target="_blank">NIKE耐克 2014年新款女子WMNS AIR PEGASUS+ 30跑步鞋599392-314</a>
            </p>
            <p>市场价：<span class="srline">¥869</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>391
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/nike-brand.html" target="_blank"><img src="/Public/Home/seckill/images/ba-1.gif" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/nike-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-adidas/sku-zk842-99931135.shtml" target="_blank"><img src="/Public/Home/seckill/images/99931135_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-adidas/sku-zk842-99931135.shtml" target="_blank">adidas阿迪达斯女子冬季茄克系列羽绒服G69639</a>
            </p>
            <p>市场价：<span class="srline">¥1299</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>448
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/adidas-brand.html" target="_blank"><img src="/Public/Home/seckill/images/adidas459311547.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/adidas-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-cat/sku-p307184d3ydc73-100010556.shtml" target="_blank"><img src="/Public/Home/seckill/images/100010556_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-cat/sku-p307184d3ydc73-100010556.shtml" target="_blank">CAT卡特2014秋冬浅蓝色牛皮女士户外休闲鞋P307184D3YDC73潮流密码(CODE)</a>
            </p>
            <p>市场价：<span class="srline">¥658</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>299
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/cat-brand.html" target="_blank"><img src="/Public/Home/seckill/images/cat413008913.gif" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/cat-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-rax/sku-301a002-99880821.shtml" target="_blank"><img src="/Public/Home/seckill/images/99880821_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-rax/sku-301a002-99880821.shtml" target="_blank">RAX微户外-新品 顶级防水透气户外男士冲锋衣30-1A002</a>
            </p>
            <p>市场价：<span class="srline">¥1039</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>129
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/rax-brand.html" target="_blank"><img src="/Public/Home/seckill/images/RAX3.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/rax-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-tata/sku-fyu66dz1-99815107.shtml" target="_blank"><img src="/Public/Home/seckill/images/99815107_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-tata/sku-fyu66dz1-99815107.shtml" target="_blank">TATA/他她 长青款 冬季棕蜡牛皮女皮靴FYU66DZ1(皮里)</a>
            </p>
            <p>市场价：<span class="srline">¥1498</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>288
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/tata-brand.html" target="_blank"><img src="/Public/Home/seckill/images/tata459318149.JPG" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/tata-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-iuggirl/sku-110830016-99909452.shtml" target="_blank"><img src="/Public/Home/seckill/images/99909452_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-iuggirl/sku-110830016-99909452.shtml" target="_blank">IUGGIRL 拼接撞色时尚韩版短筒牛皮平跟圆头女靴冬季雪地靴 110830016</a>
            </p>
            <p>市场价：<span class="srline">¥378</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>119
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/iuggirl-brand.html" target="_blank"><img src="/Public/Home/seckill/images/IUGGIRL3.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/iuggirl-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-apple/sku-2164018-100027828.shtml" target="_blank"><img src="/Public/Home/seckill/images/100027828_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-apple/sku-2164018-100027828.shtml" target="_blank">APPLE苹果男鞋 真皮正品时尚英伦商务休闲鞋男 商务正装真皮皮鞋 秋款新品2464018</a>
            </p>
            <p>市场价：<span class="srline">¥999</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>159
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/apple-brand.html" target="_blank"><img src="/Public/Home/seckill/images/pg3.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/apple-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-bermo/sku-n0400002b-100013718.shtml" target="_blank"><img src="/Public/Home/seckill/images/100013718_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-bermo/sku-n0400002b-100013718.shtml" target="_blank">宝缦Bermo 维纳水貂绒暖柔床护垫180*200cm</a>
            </p>
            <p>市场价：<span class="srline">¥879</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>189
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/bermo-brand.html" target="_blank"><img src="/Public/Home/seckill/images/bermo458112181.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/bermo-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-yuzhaolin/sku-yzlnbnzt0002-100009853.shtml" target="_blank"><img src="/Public/Home/seckill/images/100009853_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-yuzhaolin/sku-yzlnbnzt0002-100009853.shtml" target="_blank">俞兆林  男士羊毛竹炭护膝加厚加绒男款中高领保暖内衣套装 YZLNBNZT0002</a>
            </p>
            <p>市场价：<span class="srline">¥318</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>89
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/yuzhaolin-brand.html" target="_blank"><img src="/Public/Home/seckill/images/yuzhaolin459863216.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/yuzhaolin-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-storyofshanghai/sku-csmb1-100028816.shtml" target="_blank"><img src="/Public/Home/seckill/images/100028816_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-storyofshanghai/sku-csmb1-100028816.shtml" target="_blank">上海故事专柜正品2014秋冬新款素色围巾100%纯羊毛女士围巾披肩 纯色毛边</a>
            </p>
            <p>市场价：<span class="srline">¥459</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>69
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/storyofshanghai-brand.html" target="_blank"><img src="/Public/Home/seckill/images/storyofshanghai467697344.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/storyofshanghai-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-snoopy/sku-sw177642-99935712.shtml" target="_blank"><img src="/Public/Home/seckill/images/99935712_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-snoopy/sku-sw177642-99935712.shtml" target="_blank">SNOOPY史努比儿童羽绒服男童中长款SW177642蓝色</a>
            </p>
            <p>市场价：<span class="srline">¥939</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>189
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/snoopy-brand.html" target="_blank"><img src="/Public/Home/seckill/images/ba-22.gif" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/snoopy-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-paprika/sku-prpiw037-99893009.shtml" target="_blank"><img src="/Public/Home/seckill/images/99893009_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-paprika/sku-prpiw037-99893009.shtml" target="_blank">PAPRIKA专柜正品粉紫地图包女士化妆包PRPIW037</a>
            </p>
            <p>市场价：<span class="srline">¥532</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>99
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/paprika-brand.html" target="_blank"><img src="/Public/Home/seckill/images/paprika426250250.jpg" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/paprika-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
          
          <li>
            <div class="goodsPic">
              <a href="http://www.yougou.com/c-cat/sku-cc1mobjk302a78-99967231.shtml" target="_blank"><img src="/Public/Home/seckill/images/99967231_01_mb.jpg" alt=""/></a>
            </div>
            <p class="goodsName">
              <a href="http://www.yougou.com/c-cat/sku-cc1mobjk302a78-99967231.shtml" target="_blank">CAT/卡特男装深军蓝基本外套CC1MOBJK302A78</a>
            </p>
            <p>市场价：<span class="srline">¥798</span></p>
            <p class="countdown"></p>
            <div class="goodsPrice pSoldOut"><span>￥</span>199
              <p class="zhaopaiMin zSoldOut"></p></div>
            <p class="logo">
              <a href="http://www.yougou.com/cat-brand.html" target="_blank"><img src="/Public/Home/seckill/images/cat413008913.gif" alt=""/></a>
            </p>
            <a href="http://www.yougou.com/cat-brand.html" class="more" target="_blank">MORE></a>
          </li>
      
    </ul>
    <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
  </div>
  
      <div class="rightad">
        <a href="http://www.yougou.com/topics/1407978684729.html" target="_blank">
          <img src="/Public/Home/seckill/images/2520141110T115220.jpg" alt=""/>
        </a>
      </div>
  
  <ul class="mlefr">
    <li class="title">秒杀预告</li>
    
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-tata/sku-2wr23cm3-99900443.shtml" target="_blank"><img src="/Public/Home/seckill/images/99900443_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-tata/sku-2wr23cm3-99900443.shtml" target="_blank">Tata/他她秋季棕黄油蜡羊皮女单鞋2WR23CM3</a>
          </p>
          <p>市场价：￥<span class="srline">868</span></p>
          <p class="proprice">￥<span>199</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-dknyjeans/sku-w01107-99940266.shtml" target="_blank"><img src="/Public/Home/seckill/images/99940266_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-dknyjeans/sku-w01107-99940266.shtml" target="_blank">DKNYJEANS男士新款修身蓝色纯棉条纹长袖衬衣W01107</a>
          </p>
          <p>市场价：￥<span class="srline">1090</span></p>
          <p class="proprice">￥<span>199</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-cat/sku-cb1mjpnt159e79-99832586.shtml" target="_blank"><img src="/Public/Home/seckill/images/99832586_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-cat/sku-cb1mjpnt159e79-99832586.shtml" target="_blank">CAT卡特 春夏男深蓝色牛仔裤 CB1MJPNT159E79</a>
          </p>
          <p>市场价：￥<span class="srline">898</span></p>
          <p class="proprice">￥<span>159</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-geniolamode/sku-104021016-99923818.shtml" target="_blank"><img src="/Public/Home/seckill/images/99923818_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-geniolamode/sku-104021016-99923818.shtml" target="_blank">GLM 男士宽坑条浅花灰休闲内外穿拉链斜襟开衫 104021016</a>
          </p>
          <p>市场价：￥<span class="srline">699</span></p>
          <p class="proprice">￥<span>89</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-andrewangel/sku-njr017-99936644.shtml" target="_blank"><img src="/Public/Home/seckill/images/99936644_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-andrewangel/sku-njr017-99936644.shtml" target="_blank">A2 ANDREW&ANGEL 男士2013新款冬羽绒服休闲时尚男款外套NJR-017</a>
          </p>
          <p>市场价：￥<span class="srline">1699</span></p>
          <p class="proprice">￥<span>99</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-cat/sku-t774-99967944.shtml" target="_blank"><img src="/Public/Home/seckill/images/99967944_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-cat/sku-t774-99967944.shtml" target="_blank">CAT/卡特女装中蓝牛仔长裤CC1WJPNT774E75</a>
          </p>
          <p>市场价：￥<span class="srline">698</span></p>
          <p class="proprice">￥<span>169</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-storyofshanghai/sku-my041-100040938.shtml" target="_blank"><img src="/Public/Home/seckill/images/100040938_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-storyofshanghai/sku-my041-100040938.shtml" target="_blank">上海故事 秋装时尚新品新款高档提花 韩版女装优雅修身针织衫 高领毛衣</a>
          </p>
          <p>市场价：￥<span class="srline">698</span></p>
          <p class="proprice">￥<span>99</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-riguangqingcheng/sku-b9388507-100041455.shtml" target="_blank"><img src="/Public/Home/seckill/images/100041455_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-riguangqingcheng/sku-b9388507-100041455.shtml" target="_blank">日光倾城 2014秋季新款时尚双排扣毛呢外套 B9388507</a>
          </p>
          <p>市场价：￥<span class="srline">878</span></p>
          <p class="proprice">￥<span>199</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-adidasneo/sku-vl797-99918437.shtml" target="_blank"><img src="/Public/Home/seckill/images/99918437_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-adidasneo/sku-vl797-99918437.shtml" target="_blank">adidas阿迪休闲女子休闲系列雪地靴Q26485</a>
          </p>
          <p>市场价：￥<span class="srline">720</span></p>
          <p class="proprice">￥<span>318</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-adidas/sku-aa122-99922660.shtml" target="_blank"><img src="/Public/Home/seckill/images/99922660_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-adidas/sku-aa122-99922660.shtml" target="_blank">adidas阿迪达斯男子冬季茄克系列羽绒服G70509</a>
          </p>
          <p>市场价：￥<span class="srline">1499</span></p>
          <p class="proprice">￥<span>499</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-jackwolfskin/sku-17553-99864835.shtml" target="_blank"><img src="/Public/Home/seckill/images/99864835_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-jackwolfskin/sku-17553-99864835.shtml" target="_blank">JACK WOLFSKIN春季户外情侣款女款超轻保暖透气 抓绒衣17553亮蓝色</a>
          </p>
          <p>市场价：￥<span class="srline">499</span></p>
          <p class="proprice">￥<span>269</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-thenorthface/sku-a3ru-99961887.shtml" target="_blank"><img src="/Public/Home/seckill/images/99961887_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-thenorthface/sku-a3ru-99961887.shtml" target="_blank">The North Face/乐斯菲斯 秋冬 男款 21升 强大功能 可装笔记本电脑 日常背包 A3RUE9E</a>
          </p>
          <p>市场价：￥<span class="srline">798</span></p>
          <p class="proprice">￥<span>399</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-bata/sku-awi45dd2-99838847.shtml" target="_blank"><img src="/Public/Home/seckill/images/99838847_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-bata/sku-awi45dd2-99838847.shtml" target="_blank">BATA/拔佳冬季棕色油蜡牛皮高跟女中靴AWI45DD2 常青款</a>
          </p>
          <p>市场价：￥<span class="srline">1098</span></p>
          <p class="proprice">￥<span>298</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-kisscat/sku-k170401mc-99844637.shtml" target="_blank"><img src="/Public/Home/seckill/images/99844637_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-kisscat/sku-k170401mc-99844637.shtml" target="_blank">kisscat 接吻猫 超软牛皮黑 中靴 女鞋K1704-01MC</a>
          </p>
          <p>市场价：￥<span class="srline">1798</span></p>
          <p class="proprice">￥<span>299</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-tata/sku-a0702am4-99937226.shtml" target="_blank"><img src="/Public/Home/seckill/images/99937226_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-tata/sku-a0702am4-99937226.shtml" target="_blank">TATA/他她2014年春季棕色牛皮男单鞋A0702AM4</a>
          </p>
          <p>市场价：￥<span class="srline">998</span></p>
          <p class="proprice">￥<span>249</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-dinosaur/sku-ab17-100045621.shtml" target="_blank"><img src="/Public/Home/seckill/images/100045621_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-dinosaur/sku-ab17-100045621.shtml" target="_blank">恐龙纺织 超柔羊毛被单人 AB17</a>
          </p>
          <p>市场价：￥<span class="srline">950</span></p>
          <p class="proprice">￥<span>159</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-yuzhaolin/sku-yzl118065-100009110.shtml" target="_blank"><img src="/Public/Home/seckill/images/100009110_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-yuzhaolin/sku-yzl118065-100009110.shtml" target="_blank">俞兆林 男士奢华高纯羊毛细绒极地保暖内衣超暖双层加绒加厚套装 YZL118065</a>
          </p>
          <p>市场价：￥<span class="srline">398</span></p>
          <p class="proprice">￥<span>99</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-miffy/sku-dm0172-99997367.shtml" target="_blank"><img src="/Public/Home/seckill/images/99997367_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-miffy/sku-dm0172-99997367.shtml" target="_blank">Miffy/米菲童鞋2014秋季蓝色PU/织物男小童毛毛虫 运动鞋DM0172</a>
          </p>
          <p>市场价：￥<span class="srline">279</span></p>
          <p class="proprice">￥<span>69</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-tata/sku-0798adx4-100010295.shtml" target="_blank"><img src="/Public/Home/seckill/images/100010295_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-tata/sku-0798adx4-100010295.shtml" target="_blank">Tata/他她2014年冬季杏色logo布配PU水桶型手袋0798ADX4</a>
          </p>
          <p>市场价：￥<span class="srline">568</span></p>
          <p class="proprice">￥<span>198</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-dknyjeans/sku-d018339uy-99945720.shtml" target="_blank"><img src="/Public/Home/seckill/images/99945720_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-dknyjeans/sku-d018339uy-99945720.shtml" target="_blank">DKNYJEANS女士蓝色弹力中腰百搭牛仔裤D01833-9UY</a>
          </p>
          <p>市场价：￥<span class="srline">1250</span></p>
          <p class="proprice">￥<span>299</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-dknyjeans/sku-w019411-99940260.shtml" target="_blank"><img src="/Public/Home/seckill/images/99940260_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-dknyjeans/sku-w019411-99940260.shtml" target="_blank">DKNYJEANS男子纯棉灰色时尚休闲衬衫W01941-1</a>
          </p>
          <p>市场价：￥<span class="srline">1090</span></p>
          <p class="proprice">￥<span>299</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-tanboer/sku-ta19381-100058603.shtml" target="_blank"><img src="/Public/Home/seckill/images/100058603_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-tanboer/sku-ta19381-100058603.shtml" target="_blank">坦博尔 男士立领轻羽绒正品特价修身短款 商场同款 （提前双11全网最低）</a>
          </p>
          <p>市场价：￥<span class="srline">798</span></p>
          <p class="proprice">￥<span>129</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-hansu/sku-b79502-100050629.shtml" target="_blank"><img src="/Public/Home/seckill/images/100050629_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-hansu/sku-b79502-100050629.shtml" target="_blank">韩宿 2014秋冬时尚立领双排扣毛呢中长款外套B79502</a>
          </p>
          <p>市场价：￥<span class="srline">878</span></p>
          <p class="proprice">￥<span>199</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-adidas/sku-cg901-99930726.shtml" target="_blank"><img src="/Public/Home/seckill/images/99930726_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-adidas/sku-cg901-99930726.shtml" target="_blank">adidas阿迪达斯女子冬季越野系列户外鞋G97336</a>
          </p>
          <p>市场价：￥<span class="srline">920</span></p>
          <p class="proprice">￥<span>349</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-nike/sku-449794-100026190.shtml" target="_blank"><img src="/Public/Home/seckill/images/100026190_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-nike/sku-449794-100026190.shtml" target="_blank">NIKE耐克 2014年新款男子CORE COMPRESSION LS TOP 2.0紧身服449794-364</a>
          </p>
          <p>市场价：￥<span class="srline">249</span></p>
          <p class="proprice">￥<span>165</span><span class="day">(11.11
            )</span></p>
        </li>
    
        
        <li class="prdcList">
          <p class="proPic">
            <a href="http://www.yougou.com/c-columbia/sku-pl2095-99902782.shtml" target="_blank"><img src="/Public/Home/seckill/images/99902782_01_s.jpg" alt=""/></a>
          </p>
          <p class="proName">
            <a href="http://www.yougou.com/c-columbia/sku-pl2095-99902782.shtml" target="_blank">Columbia/哥伦比亚秋冬女子粉色TRAIL 徒步系列JACKET-冲锋衣(2.5L)PL2095697</a>
          </p>
          <p>市场价：￥<span class="srline">1098</span></p>
          <p class="proprice">￥<span>699</span><span class="day">(11.11
            )</span></p>
        </li>
    
  </ul>
</div>

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