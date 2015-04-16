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

<div class="cen newListy">

	<input type="hidden" name="baseLink" value="0-Y0A_L9C-0" id="baseLink"/>

	<input type="hidden" name="queryStr" value="" id="queryStr"/>

	<input type="hidden" name="orderBy" value="0" id="orderBy"/>

	<input type="hidden" name="mctcd" value="" id="mctcd"/>

	<input type="hidden" name="storeId" value="" id="storeId"/>

	<input type="hidden" name="queryParams" value="" id="queryParams"/>

    <div class="blank5"></div>

    <div class="cen" >

    </div> <!--cen end -->



 <div id="bread" class="clearfix">

 <span class="tit">您已选择：</span>

 <a href="/index.php/Lists">全部分类</a><span class="fenge">&nbsp;&gt;&nbsp;</span>
	   
	    <!-- <span class="fenge">&nbsp;&gt;&nbsp;</span> -->
      <?php if($leftNav != null): ?><a href="/index.php/Lists/index/zid/<?php echo ($leftNav["id"]); ?>" title="<?php echo ($leftNav["name"]); ?>"><?php echo ($leftNav["name"]); ?></a><?php endif; ?>
      <?php if($leftTwo != null): ?><span class="fenge">&nbsp;&gt;&nbsp;</span>
	       <a href="/index.php/Lists/index/pid/<?php echo ($leftTwo["id"]); ?>" title="<?php echo ($leftTwo["name"]); ?>"><?php echo ($leftTwo["name"]); ?></a><?php endif; ?>
      <?php if($leftThree != null): ?><span class="fenge">&nbsp;&gt;&nbsp;</span>
         <a href="/index.php/Lists/index/pid/<?php echo ($leftThree["id"]); ?>" title="<?php echo ($leftThree["name"]); ?>"><?php echo ($leftThree["name"]); ?></a><?php endif; ?>
 </div>

<div id="fitler_main" class="clearfix">

    <div class="filter_sider">

        <div id="cls_nav" class="clearfix">

         <ul class="fst_cls">

            <li class="all">

           		 <h1><a href="/index.php/Lists">全部分类</a></h1>

            </li>

	      </ul>

	 		<ul class="fst_cls">

			<li class="on">

			<h1><a href="/index.php/Lists/index/zid/<?php echo ($leftNav["id"]); ?>" class="clicked" ><?php echo ($leftNav["name"]); ?></a></h1>

        	<ul	class="sec_cls">

               	<li class="on">
                <?php if(is_array($leftNavs)): foreach($leftNavs as $key=>$le): ?><h2><a href="/index.php/Lists/index/ids/<?php echo ($le["id"]); ?>" ><?php echo ($le["name"]); ?></a></h2><?php endforeach; endif; ?>
	             </li>

				</ul>

    		</li>

    	</ul>

    	</div><!--cls_nav end-->

    <!-- 最近浏览 -->

<!--最近浏览推荐10个-->

<div class="rec_list" style="display:none">

    <h2>猜你喜欢</h2>

    <div class="top_bg"></div><!--top_bg end -->

</div><!--list_common -->

<!--最近浏览由6个改为3个-->

<div class="list_common" style="display:none">

    <h2>最近浏览</h2>

    <div class="top_bg"></div><!--top_bg end -->

</div><!--list_common -->

	</div><!--filter_sider end -->

    <div class="filter_con">
	<div id="filterCon" class="ygFilterCon">
		<dl class="clearfix defaultCat" 
				>
			<dt>品牌 </dt>
			<dd>
				<ul color="brand" class="catList clearfix" id="one" name='seo_en_brand_name'>
          <?php if(is_array($brand)): foreach($brand as $key=>$br): ?><li id="screen" name='<?php echo ($br["brand"]); ?>'> <a title="<?php echo ($br["brand"]); ?>"><i></i><?php echo ($br["brand"]); ?><em class="Gray">(<?php echo ($br["brandnum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
<!-- 		<dl class="clearfix defaultCat" 
				>
			<dt>价格 </dt>
			<dd>
				<ul color="price" class="catList clearfix" id="two" name='price_group'>
        <?php if(is_array($price)): foreach($price as $key=>$pr): ?><li id="screen" name='<?php echo ($pr["price"]); ?>'> <a  title="<?php echo ($pr["price"]); ?>元" ><i></i><?php echo ($pr["price"]); ?>元<em class="Gray">(<?php echo ($pr["pricenum"]); ?>)</em></a></li><?php endforeach; endif; ?>						
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl> -->
		<dl class="clearfix defaultCat" 
				>
			<dt>尺码 </dt>
			<dd>
				<ul color="size" class="catList clearfix" id="three" name='size_list'>
        <?php if(is_array($size)): foreach($size as $key=>$si): ?><li id="screen" name='<?php echo ($si["sizes"]); ?>'> <a title="<?php echo ($si["sizes"]); ?>"><i></i><?php echo ($si["sizes"]); ?><em class="Gray">(<?php echo ($si["sizenum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>颜色 </dt>
			<dd>
				<ul color="color" class="catList clearfix" id="four" name='color'>
          <?php if(is_array($color)): foreach($color as $key=>$co): if($co["color"] == '黑色'): ?><li id="screen" name='<?php echo ($co["color"]); ?>'> <a  title="黑色"><i></i><img title="黑色" src="/Public/Home/list/images/cs01.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '红色'): ?><li id="screen" name='<?php echo ($co["color"]); ?>'> <a title="红色"><i></i><img title="红色" src="/Public/Home/list/images/cs04.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '蓝色'): ?><li id="screen" name='<?php echo ($co["color"]); ?>'> <a title="蓝色"><i></i><img title="蓝色" src="/Public/Home/list/images/cs07.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '棕色'): ?><li id="screen" name='<?php echo ($co["color"]); ?>'> <a  title="棕色"><i></i><img title="棕色" src="/Public/Home/list/images/cs03.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '啡色'): ?><li id="screen" name='<?php echo ($co["color"]); ?>'> <a title="啡色"><i></i><img title="啡色" src="/Public/Home/list/images/cs02.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '黄色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="黄色"><i></i><img title="黄色" src="/Public/Home/list/images/cs06.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '绿色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="绿色"><i></i><img title="绿色" src="/Public/Home/list/images/cs08.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '驼杏色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="驼杏色"><i></i><img title="驼杏色" src="/Public/Home/list/images/cs09.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '灰色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="灰色"><i></i><img title="灰色" src="/Public/Home/list/images/cs11.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '米色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="米色"><i></i><img title="米色" src="/Public/Home/list/images/cs16.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '白色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="白色"><i></i><img title="白色" src="/Public/Home/list/images/cs12.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '金银色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="金银色"><i></i><img title="金银色" src="/Public/Home/list/images/cs10.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '拼色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a ><i></i><img title="拼色" src="/Public/Home/list/images/cs14.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '紫色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a ><i></i><img title="紫色" src="/Public/Home/list/images/cs21.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '橙色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="橙色"><i></i><img title="橙色" src="/Public/Home/list/images/cs05.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '其它色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="其它色"><i></i><img title="其它色" src="/Public/Home/list/images/cs13.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($co["color"] == '驼色'): ?><li id="screen" style="display:block"  name='<?php echo ($co["color"]); ?>'> <a  title="驼色"><i></i><img title="驼色" src="/Public/Home/list/images/cs15.gif"><em class="Gray">(<?php echo ($co["colornum"]); ?>)</em></a></li><?php endif; endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>款式 </dt>
			<dd>
				<ul color="type" class="catList clearfix" id="five"  name='prop_value_no_02C'>
          <?php if(is_array($type)): foreach($type as $key=>$ty): ?><li id="screen" name='<?php echo ($ty["type"]); ?>'> <a title="<?php echo ($ty["type"]); ?>"><i></i><?php echo ($ty["type"]); ?><em class="Gray">(<?php echo ($ty["typenum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>流行元素 </dt>
			<dd>
				<ul color="popular" class="catList clearfix" id="six" name='prop_value_no_02B'>
        <?php if(is_array($popular)): foreach($popular as $key=>$po): ?><li id="screen" name='<?php echo ($po["popular"]); ?>'> <a  title="<?php echo ($po["popular"]); ?>"><i></i><?php echo ($po["popular"]); ?><em class="Gray">(<?php echo ($po["popularnum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>季节 </dt>
			<dd>
				<ul color="season" class="catList clearfix" id="seven" name='prop_value_no_050'>
        <?php if(is_array($season)): foreach($season as $key=>$se): ?><li id="screen" name='<?php echo ($se["season"]); ?>'> <a title="<?php echo ($se["season"]); ?>"><i></i><?php echo ($se["season"]); ?><em class="Gray">(<?php echo ($se["seasonnum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>性别 </dt>
			<dd>
				<ul color="sex" class="catList clearfix" name='prop_value_no_03T'>
        <?php if(is_array($sex)): foreach($sex as $key=>$sx): if($sx["sex"] == 0): ?><li id="screen" name='<?php echo ($sx["sex"]); ?>'> <a  title="男性"><i></i>男性<em class="Gray">(<?php echo ($sx["sexnum"]); ?>)</em></a></li><?php endif; ?>
          <?php if($sx["sex"] == 1): ?><li id="screen" name='<?php echo ($sx["sex"]); ?>'> <a  title="女性"><i></i>女性<em class="Gray">(<?php echo ($sx["sexnum"]); ?>)</em></a></li><?php endif; endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>
		<dl class="clearfix defaultCat" 
				>
			<dt>风格 </dt>
			<dd>
				<ul color="style" class="catList clearfix" id="nine" name='prop_value_no_04T'>
        <?php if(is_array($style)): foreach($style as $key=>$st): ?><li id="screen" name='<?php echo ($st["style"]); ?>'> <a  title="<?php echo ($st["style"]); ?>"><i></i><?php echo ($st["style"]); ?><em class="Gray">(<?php echo ($st["stylenum"]); ?>)</em></a></li><?php endforeach; endif; ?>
				</ul>
				
				<a href="javascript:;" class="moreSelete"><i class="list_bg"></i>多选</a>
					<p class="ygFilter_cz">
	        			<input name='filter_multi_search' value="提交" type="submit" class="list_bg ygFilterSmt noSmt" id="smtClick"  /><input name="" value="取消" type="button" class="list_bg cancel" />
	       			</p>
				
				<a href="javascript:;" class="moreLink down" style="display:inline" >更多<i class="list_bg"></i></a> 
			</dd>
		</dl>

 </div>
<div class="toggleFilter relative">
    <a href="javascript:;" hidefocus="true" class="expand" id="moreFilter">更多<i>&nbsp;</i></a>
 </div>

<!-- 时尚商城or特卖商城-->



<div class="filter_bar cen">

	

	<!-- 排序方式开始 -->



	<input type="hidden" value="239" name="pageCount" id="pageCount"/>

	<div class="bd" name="content">

	  <span class="proup fl" id="tb0">

	  <label class="fl">排序方式：</label>

	  <a id="tt0_0" title="按默认排序" class="tt tt-normal select-normal" target="content">默认</a> 

	  <a id="tt0_1" title="按销量" class="tt tt-normal" >销量</a> 

	  <a id="tt0_3" rel="nofollow" title="按新品" class="tt tt-normal">新品</a>

	  	<a id="tt0_2" rel="nofollow" title="按价格由高到低" class="tt tt-down">价格</a> 
 
	  </span>

	  <!--价格区间开始-->

	  <div class="fprice">

	     <div class="fp-box">

	         <b class="fpb-item" style="border: 1px solid rgb(204, 204, 204);">

	            <span>

	             <i class="ui-price-plain">¥</i>

	             <input type="text" maxlength="8" value="" autocomplete="off" id="minPrice" name="minPrice" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')">

	            </span>

	         </b>

	         <i class="fpb-split">-</i>

	         <b class="fpb-item">

	            <span>

	             <i class="ui-price-plain">¥</i>

	             <input type="text" maxlength="8" value="" autocomplete="off" id="maxPrice" name="maxPrice" onafterpaste="this.value=this.value.replace(/\D/g,'')" onkeyup="this.value=this.value.replace(/\D/g,'')">

	            </span>

	         </b>

	     </div>

	     <div class="fp-expand">

	         <a class="ui-btn-s">清空</a>

	         <a class="ui-btn-s-primary">确定</a>

	     </div>

	  </div>

	  

<!-- 	  <span class="fr toppage">总共找到

	  <span class="Red">14286</span> 个商品
 -->
	

	</div>

</div>

<!--排序方式结束--> 
<ul class="proList new_prdlist" id="proList">
  <?php if(is_array($goods)): foreach($goods as $key=>$v): ?><li>

		      	<div class="srchlst-wrap">
            
			       <div class="hd">            
			       			<a target='_blank' href='/index.php/Info/index/id/<?php echo ($v["id"]); ?>'>            
			       		    <sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="<?php echo ($v["goods"]); ?>" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($v["src"]); ?>" original="/Public/Home/images/carousel/<?php echo ($v["src"]); ?>" /> 
			        	</a>
			        </div>
			        <div class="bd">
				        <span class='nptt'>         
				       		 <a target='_blank' href='/index.php/Info/index/id/<?php echo ($v["id"]); ?>' title="<?php echo ($v["goods"]); ?> <?php echo ($v["intro"]); ?>"><?php echo ($v["goods"]); ?> <?php echo ($v["intro"]); ?></a></span>			   
                   <p class="price">		                     
					        	<span class="fl Red price_no100057138">
									活动价:<em class="ygprc16">￥<i><?php echo ($v["discount"]); ?></i></em>           
					        (<?php echo ($v["off"]); ?>折)
					        </span>                
					         <span class="fr">市场价:<del>￥<?php echo ($v["price"]); ?></del></span>				        
                </p>
			         </div>
               
		        </div> 

		      </li><?php endforeach; endif; ?>	    
    </ul>
    <!--分页-->
    <div class="cen">
     <div class="newPage fr" style="margin-left:50spx;">
    
<!--         <a class="curr">1</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-2.html">2</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-3.html">3</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-4.html">4</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-5.html">5</a> -->
      <?php echo ($page); ?>
 <!--      <a class="dot">...</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-238.html">238</a>
        <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-239.html">239</a>
          <a rel="nofollow" href="/f-0-Y0A_L9C-0-0-2.html">下一页&gt;&gt;</a>
        <span class="fl pageinfo"> -->
        <!-- <span>  <input type="text" id='jumpToPage' value="1" class="ginput" /> 页 </span> -->
        <!-- <a class="gbtn">确定</a> </span> -->
      </div> 
		
			
      <!--end 分页-->
      </p>
      <!--div class="cen currSite">
        您当前位置：<a href="/">首页</a> &gt;
        百丽
      </div-->
      <p class="blank10">
      </p>
<!--无品牌-->
<!--elseseo推广链接，分类部分-->

<!--seo推广链接结束，else分类部分结束-->
<p class="blank20"></p>
    </div>
  </div>
<!--添加底部搜索框-->
<form action="/index.php/SeekGet/index" method="post">
  <div class="filterSearchDiv">
	<span class="inputTxtbox">
		<input type="text" style="height:30px;" id="kword2" onfocus="this.style.color='#000'" onblur="this.style.color='#aaa'" name="keyword" class="inputTxt" value="" maxLength="80" /><span class="zs_right"></span>
	</span><input type="submit" id="" class="inputSubmit" value="" />
</div>
</form>

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