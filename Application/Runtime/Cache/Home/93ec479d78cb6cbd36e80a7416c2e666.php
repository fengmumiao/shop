<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!-- //top start -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	   <title>
	     <?php echo ($name); ?>
	   </title>
	   <meta name="Description" content="优购网热销女鞋新款|正品|折扣,知名品牌，厂家直销，全网最低价，100%专柜正品保障，10天退换货!"/>

	    <meta name="Keywords"  content="女鞋新款|正品|折扣|价格"/>
      
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/fss.css">	
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/index.css">	
	<link rel="stylesheet" type="text/css" href="/Public/Home/Flagship/channel.css">
      <link href="/Public/Home/css/base.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/css/goods_outlets.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
      <script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
      <script type="text/javascript" src="/Public/Home/js/list.js"></script>
      <link href="/Public/Home/seckill/css/seckill.css?2.9.4" type="text/css" rel="stylesheet" />
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

<!--//导航end-->

<!--//公共头部end--> 

<div id="fss_content">

<!--头部start-->

<div id="fss_hd">

<!--布局为一栏 start-->

<div class="fss_lyt fss_lyt_one">
<div class="fss_colmain">

<!--店招模块-->

<div class="skin_box fss_custom_banner">
<div class="skin_box_bd clearfix">
<div class="tbaner_box">
<img src="/Public/Home/images/carousel/<?php echo ($row['upic']); ?>" width="110" height="50" alt="<?php echo ($row['shopname']); ?>" />
<span class="name rel"><?php echo ($row['shopname']); ?></span>
<a class="sc rel" id="collectFss" data-storeName="<?php echo ($row['shopname']); ?>" href="javascript:void(0);">收藏本店</a>
</div>
</div>
</div>

<!--店招模块end-->

<!--导航模块-->

<div class="skin_box fss_main_nav">
<div class="skin_box_bd clearfix">
<ul class="fss_nav_list">
<li class="on"><a  style="font-family:'黑体'" href="">首页</a></li>
<?php if(is_array($arr)): foreach($arr as $key=>$nav): ?><li>
        <span name="types"><a style="font-family:'黑体'" href="#"><?php echo ($nav); ?></a></span>
    </li><?php endforeach; endif; ?>
</ul>
</div>
</div>

<!--导航模块end-->

</div>
</div>

<!--布局为一栏end-->

</div>

<!--头部end-->

<div id="fss_bd"> 
<div class="fss_lyt fss_lyt_one">
<div class="fss_colmain fss_col">

<!--折扣特惠（一行4个商品）-->
<div class="skin_box fss_rec_list">
<div class="skin_box_bd clearfix">
<div class="item4line1 mt10">
<ul class="pro_lst clearfix">
<?php if(is_array($recommFirst)): foreach($recommFirst as $key=>$recommFirst): ?><li>
<div class="itm_box">
    <div class="hd">
        <a href="/index.php/Info/index?id=<?php echo ($recommFirst['id']); ?>">
        <img src="/Public/Home/images/carousel/<?php echo ($recommFirst['picname']); ?>" width="160" height="160" alt="" />
        <sup no="100042133" class="mark_small_100042133 salepic"></sup>
        </a>
    </div>
    <div class="bd">
        <p class="name"><a title="<?php echo ($recommFirst['goods']); ?>"href="/index.php/Info/index?id=<?php echo ($vo['id']); ?>"  target="_blank"><?php echo ($recommFirst['goods']); ?></a></p>
        <div class="price">
			<p class="fl cmdtyPrice price_no100042133" no="100042133">优购价：<em class="ygprc16">&yen;<i><?php echo ($recommFirst['discount']); ?></i></em>(<?php echo ($recommFirst['disnum']); ?>折)</p>
            <p class="fr">市场价:<del>&yen;<?php echo ($recommFirst['price']); ?></del></p>
        </div>
    </div>
</div>
</li><?php endforeach; endif; ?>
</ul>
</div>
</div>
</div>

<!--折扣特惠（一行4个商品）end-->

</div>
</div>
<div class="fss_lyt fss_lyt_n_w">


<div class="fss_colsub fss_col">

<!--店铺信息模块-->

<div class="skin_box fss_shop_info">
<div class="skin_box_hd">
<h3>店铺介绍</h3>
</div>
<div class="skin_box_bd clearfix">
<h4 class="shop_logo"><img src="/Public/Home/images/carousel/<?php echo ($row['upic']); ?>" width="85" height="40" alt="" /></h4>

<div class="shop_js">
<?php echo ($row['content']); ?>
</div>
<div class="sj_info"><a class="fr" href=""><?php echo ($row['shopname']); ?></a>商&nbsp;&nbsp;&nbsp;&nbsp;家：</div>
</div>
</div>

<!--店铺信息模块end--> 

<!--店铺搜索模块-->

<div class="skin_box fss_srch_inshop">
<div class="skin_box_hd"><h3>店内搜索</h3></div>
<div class="skin_box_bd clearfix">
<ul class="fl clearfix">
<li class="keyword">
<label for="keyword22"><span class="key">关键字：</span><input class="fss_ipt_txt fss_kw" type="text" value="" name="keyword" id="key"></label>
</li>
<input type="hidden" name="shopid" id="shopid" value="<?php echo ($row['id']); ?>">
<li class="submit"><input id="search" class="fss_ipt_sbmt" type="submit" value="" /></li>
</ul>
</div>
</div>

<!--店铺搜索模块end-->

<!--分类导航模块-->
<div class="skin_box fss_cat_list">
<div class="skin_box_hd">
<h3>分类导航</h3>
</div>
<div class="skin_box_bd clearfix">
<ul class="fss_cat_box">
<li class="item all_pro">
<h4><span id="getAll"><a href="#" style="font-family:'黑体'">查看所有商品&gt;&gt;</a></span></h4>
</li>
<?php if(is_array($arr)): foreach($arr as $key=>$arr): ?><li class="item">
    <h4 class="cat_hd collapse"><span name="types"><a href="#"  style="font-family:'黑体'"><?php echo ($arr); ?></a></span></h4>
</li><?php endforeach; endif; ?>
</ul>
</li>
</ul>
</div>
</div>


<!--分类导航模块end-->
<!--销售排行模块-->
<div class="skin_box fss_sale_rank">


<div class="skin_box_hd">

<!-- 销售排行start -->
<h3>销售排行</h3>
</div>
<div class="skin_box_bd clearfix">
<div class="pannel js_sale_rank_pannel">
<ul class="fss_pro_list2">

<?php if(is_array($list)): foreach($list as $key=>$vo): ?><li>
<p class="pro_name"><a href="/index.php/Info/index?id=<?php echo ($vo['id']); ?>" target="_blank" title="<?php echo ($vo["goods"]); ?>"><?php echo ($vo['goods']); ?></a></p>
<div class="pro_info clearfix">
    <div class="pro_pic fl">
    <a href="/index.php/Info/index?id=<?php echo ($vo['id']); ?>" target="_blank">
    <img  width="60" height="60" src="/Public/Home/images/carousel/<?php echo ($vo['picname']); ?>" alt="" /></a></div>
    <div class="price">
        <p>市场价:<del>&yen;<?php echo ($vo["price"]); ?></del></p>
        <p class="fl cmdtyPrice price_no99998977" no="99998977">优购价:<em class="ygprc16">&yen;<i><?php echo ($vo["discount"]); ?></i></em>(<?php echo ($vo["disnum"]); ?>折)</p>
    </div>
</div>
</li><?php endforeach; endif; ?>
</ul>
</div>
</div>
</div>


<!--销售排行模块end-->
</div>
<div class="fss_colmain fss_col">

<!--商品推荐（一行4个商品）-->
<div class="skin_box fss_rec_list">
<div class="skin_box_hd"><h3 style="font-family:'黑体" id="text">  本店热销  </h3><i class="hd_jt"></i></div>
<div class="skin_box_bd clearfix">
<div class="item4line1 mt10"  id="goods">
<ul class="pro_lst clearfix">
<?php if(is_array($recomm)): foreach($recomm as $key=>$recomm): ?><li>
<div class="itm_box">
    <div class="hd">
        <a href="/index.php/Info/index?id=<?php echo ($recomm['id']); ?>" target="_blank"><img src="/Public/Home/images/carousel/<?php echo ($recomm['picname']); ?>" width="160" height="160" alt="商品名称" />
        </a>
    </div>
    <div class="bd">
        <p class="name"><a title="<?php echo ($recomm['goods']); ?>" href="/index.php/Info/index?id=<?php echo ($recomm['id']); ?>" target="_blank"><?php echo ($recomm['goods']); ?></a></p>
        <div class="price">
            <p>市场价:<del>&yen;<?php echo ($recomm["price"]); ?></del></p>
			<p class="fl cmdtyPrice price_no99956970" no="99956970">优购价：<em class="ygprc16">&yen;<i><?php echo ($recomm["discount"]); ?></i></em>(<?php echo ($recomm["disnum"]); ?>折)</p>
        </div>
    </div>
</div>
</li><?php endforeach; endif; ?>
</ul>
</div>
</div>
</div>

<!--商品推荐（一行4个商品）-->
<div class="skin_box fss_rec_list" id="new">
<div class="skin_box_hd">
<h3 style="font-family:'黑体">  上架新品  </h3>
<i class="hd_jt"></i>
</div>
<div class="skin_box_bd clearfix">
<div class="item4line1 mt10">
<ul class="pro_lst clearfix">
<?php if(is_array($newshop)): foreach($newshop as $key=>$voshop): ?><li>
<div class="itm_box">
    <div class="hd">
        <a href="/index.php/Info/index?id=<?php echo ($voshop['id']); ?>" target="_blank">
        <img src="/Public/Home/images/carousel/<?php echo ($voshop['picname']); ?>" width="160" height="160" alt="商品名称" />
        </a>
    </div>
    <div class="bd">
        <p class="name"><a title="<?php echo ($voshop["goods"]); ?>" href="/index.php/Info/index?id=<?php echo ($voshop['id']); ?>" target="_blank"><?php echo ($voshop["goods"]); ?></a></p>
        <div class="price">
            <p>市场价:<del>&yen;<?php echo ($voshop["price"]); ?></del></p>
			<p class="fl cmdtyPrice price_no99984272" no="99984272">优购价：<em class="ygprc16">&yen;<i><?php echo ($voshop["discount"]); ?></i></em>(<?php echo ($voshop["disnum"]); ?>折)</p>
        </div>
    </div>
</div>
</li><?php endforeach; endif; ?>
</ul>

</div>

</div>

</div>
<!--商品推荐（一行4个商品）-->
<div class="skin_box fss_rec_list" id="clear">
<div class="skin_box_hd">
<h3 style="font-family:'黑体"> 断码清仓 </h3>
<i class="hd_jt"></i>
</div>
<div class="skin_box_bd clearfix">
<div class="item4line1 mt10">
<ul class="pro_lst clearfix">
<?php if(is_array($clear)): foreach($clear as $key=>$clear): ?><li>
<div class="itm_box">
    <div class="hd">
        <a href="/index.php/Info/index?id=<?php echo ($clear['id']); ?>" target="_blank">
        <img src="/Public/Home/images/carousel/<?php echo ($clear['picname']); ?>" width="160" height="160" alt="商品名称" />
        </a>
    </div>
    <div class="bd">
        <p class="name"><a title="<?php echo ($clear["goods"]); ?>" href="/index.php/Info/index?id=<?php echo ($clear['id']); ?>" target="_blank"><?php echo ($clear["goods"]); ?></a></p>
        <div class="price">
            <p>市场价:<del>&yen;<?php echo ($clear["price"]); ?></del></p>
			<p class="fl cmdtyPrice price_no100010305" no="100010305">优购价：<em class="ygprc16">&yen;<i><?php echo ($clear["discount"]); ?></i></em>(<?php echo ($clear["disnum"]); ?>折)</p>
        </div>
    </div>
</div>
</li><?php endforeach; endif; ?>
</ul>

</div>


</div>


</div>

<!--商品推荐（一行4个商品）end-->
</div>
</div>
<div class="fss_lyt fss_lyt_one">
<div class="fss_colmain fss_col">
<!--猜您喜欢模块(950)-->
<div class="skin_box fss_ylk_list" id="guess">
<div class="skin_box_hd"><h3>猜您喜欢</h3></div>
<div class="skin_box_bd clearfix">
<div class="lr_scroll_box">
<a class="scroll prev js_scroll_prev" href="javascript:;"></a>
<a class="scroll next js_scroll_next" href="javascript:;"></a>
<div class="scroll_page js_scroll_page"></div>
<div class="scroll_trg"></div>
<div class="scroll_box">
<ul class="pro_lst clearfix">
<?php if(is_array($guess)): foreach($guess as $key=>$guess): ?><li>
    <div class="itm_box">
        <div class="hd">
             <a href="/index.php/Info/index?id=<?php echo ($guess['id']); ?>" target="_blank">
                <img src="/Public/Home/images/carousel/<?php echo ($guess['picname']); ?>" width="160" height="160" alt="<?php echo ($guess["goods"]); ?>" />
            </a>
        </div>
        <div class="bd">
            <p class="name"><a title="<?php echo ($guess["goods"]); ?>" href="/index.php/Info/index?id=<?php echo ($guess['id']); ?>" target="_blank"><?php echo ($guess["goods"]); ?></a></p>
           <div class="price">
            <p>市场价:<del>&yen;<?php echo ($guess["price"]); ?></del></p>
            <p class="fl cmdtyPrice price_no100040738" no="100040738">优购价:<em class="ygprc16">&yen;<i><?php echo ($guess["discount"]); ?></i></em>(<?php echo ($guess["disnum"]); ?>折)</p>
           </div>
        </div>
    </div>
</li><?php endforeach; endif; ?>
</ul>
</div>
</div>
</div>
</div>
<!--猜您喜欢模块(950)end-->
</div>
</div>
</div> 
</div>

<script type="text/javascript">

    //关键字搜索
    var shopid = $("#shopid").val();
    var goods = document.getElementById("goods");
    $("#search").click(function(){
        if($("#key").val() == ""){
            alert('输入值为空');
        }else{
            var key = $("#key").val();
            $("#guess").remove();
            $("#clear").remove();
            $("#new").remove();
            $.post('/index.php/Flagship/getGoods',{key:key,shopid:shopid},function(data){
                var datas = eval("("+data+")");
                var str;
                str = '<ul class="pro_lst clearfix">';
                for(var i in datas){
                    var disnum = datas[i]['discount'] / datas[i]['price'] * 10;
                    disnum = disnum.toFixed(1);
                    $('#text').text('搜索到的商品:');
                        str = str + "<li>";
                        str = str + '<div class="itm_box">';
                        str = str + '<div class="hd">';
                            str = str + '<a href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank"><img src="/Public/Home/images/carousel/'+datas[i]['picname']+'" width="160" height="160" alt="商品名称" /></a>';        
                            str = str + '</div>';
                            str = str + '<div class="bd">';
                            str = str + '<p class="name"><a title="<?php echo ($recomm['goods']); ?>" href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank">'+datas[i]["goods"]+'</a></p>';
                            str = str + '<div class="price"><p>市场价:<del>&yen;'+datas[i]["price"]+'</del></p><p class="fl cmdtyPrice price_no100010305" no="100010305">优购价：<em class="ygprc16">&yen;<i>'+datas[i]["discount"]+'</i></em>('+disnum+'折)</p></div>';
                        str = str + '</div>';
                        str = str + "</div>";
                    str = str + "</li>";
                    
                }
                str = str + "</ul>";
                goods.innerHTML = str;
            })
        }
    })

    //全部商品
    $("#getAll").click(function(){        
        $("#guess").remove();
        $("#clear").remove();
        $("#new").remove();
        $.post('/index.php/Flagship/getAll',{shopid:shopid},function(data){
            // alert(data);
            var datas = eval("("+data+")");
            var str;
            str = '<ul class="pro_lst clearfix">';
            for(var i in datas){
                var disnum = datas[i]['discount'] / datas[i]['price'] * 10;
                disnum = disnum.toFixed(1);
                $('#text').text('本店所有商品:');
                    str = str + "<li>";
                    str = str + '<div class="itm_box">';
                    str = str + '<div class="hd">';
                        str = str + '<a href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank"><img src="/Public/Home/images/carousel/'+datas[i]['picname']+'" width="160" height="160" alt="商品名称" /></a>';        
                        str = str + '</div>';
                        str = str + '<div class="bd">';
                        str = str + '<p class="name"><a title="<?php echo ($recomm['goods']); ?>" href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank">'+datas[i]["goods"]+'</a></p>';
                        str = str + '<div class="price"><p>市场价:<del>&yen;'+datas[i]["price"]+'</del></p><p class="fl cmdtyPrice price_no100010305" no="100010305">优购价：<em class="ygprc16">&yen;<i>'+datas[i]["discount"]+'</i></em>('+disnum+'折)</p></div>';
                    str = str + '</div>';
                    str = str + "</div>";
                str = str + "</li>";
                
            }
            str = str + "</ul>";
            goods.innerHTML = str;
        })
    });
    
    //获取分类内的商品
    $("span[name=types]").click(function(){        
        $("#guess").remove();
        $("#clear").remove();
        $("#new").remove();
        var type = $(this).text();
        $.post('/index.php/Flagship/getType',{type:type},function(data){
            // alert(data);
            var datas = eval("("+data+")");
            var str;
            str = '<ul class="pro_lst clearfix">';
            // 循环li里的内容
            for(var i in datas){
                var disnum = datas[i]['discount'] / datas[i]['price'] * 10;
                disnum = disnum.toFixed(1);
                $('#text').text(type+':');
                    str = str + "<li>";
                    str = str + '<div class="itm_box">';
                    str = str + '<div class="hd">';
                        str = str + '<a href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank"><img src="/Public/Home/images/carousel/'+datas[i]['picname']+'" width="160" height="160" alt="商品名称" /></a>';        
                        str = str + '</div>';
                        str = str + '<div class="bd">';
                        str = str + '<p class="name"><a title="<?php echo ($recomm['goods']); ?>" href="/index.php/Info/index?id='+datas[i]["id"]+'" target="_blank">'+datas[i]["goods"]+'</a></p>';
                        str = str + '<div class="price"><p>市场价:<del>&yen;'+datas[i]["price"]+'</del></p><p class="fl cmdtyPrice price_no100010305" no="100010305">优购价：<em class="ygprc16">&yen;<i>'+datas[i]["discount"]+'</i></em>('+disnum+'折)</p></div>';
                    str = str + '</div>';
                    str = str + "</div>";
                str = str + "</li>";
                
            }
            str = str + "</ul>";
            goods.innerHTML = str;
        })
    })
   
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
  
</html>
<!-- foot end -->