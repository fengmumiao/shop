<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--2014-11-05 22:02:49-->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php echo ($name); ?></title>
<meta name="keywords"  content="优购网,优购时尚商城,优购网上鞋城"/>
<meta name="description" content="优购网-时尚服饰鞋包网购首选,经营耐克、阿迪达斯、Kappa、匡威、百丽、他她、天美意、森达等众多知名品牌,100%专柜正品,免费送货,10天退换货,提供愉悦购物体验!"/>
<meta property="qc:admins" content="155157677461757756375" />
<meta property="wb:webmaster" content="7302e98c431526b8" />
<meta name="mobile-agent" content="format=html5;url=../m.yougou.com/touch">
<link rel="alternate" media="only screen and (max-width: 640px)" href="../m.yougou.com/touch" >
<link href="/Public/Home/css/base.css@2.9.4" type="text/css" rel="stylesheet" />
<link href="/Public/Home/css/index.css@2.9.4" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
<script type="text/javascript" src="/Public/Home/js/index.js"></script>
</head>
<body class="continer">
<!-- top start -->

<div id="bigBannerShow" style="background:url('/Public/Home/images/index/121.jpg');">
  <a id="bf3856b360ea11e4b7eea30f61b97b3f" target="_blank"  href=""></a>
<style type="text/css">
#bigBannerShow{background:url("/Public/Home/images/index/dadd3d497dbf4491bee108e7f737f098.jpg") no-repeat center top;}
</style>
</div>
<!--header created time: 2014-11-04 11:22:08-->
<!--公共头部start-->
<div class="yg_header" id="yg_header">
<div id="smallBannerShow">
      <div class="topani" style="background:url(/Public/Home/images/index/1234.jpg) no-repeat scroll center top rgba(0, 0, 0, 0)"></div>
      <div class="top_banner" style="background:url(/Public/Home/images/index/7af3bb6b179c425f88c6a57220f3e4ba.jpg) center;cursor:pointer">

      <a href="topics/1414051717819.html#ref=index&po=top_top1" target="_blank"></a></div>
</div>
<div class="mod_top_banner none" id="cb_head_info">
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
<div class="yg link_box"><a class="clicked" href="#ref=all&po=logo_yougou">时尚商城</a></div>

<div class="flashbuy link_box"><a href="../flashbuy.yougou.com/#ref=all&po=logo_flashbuy">整点降价</a><span></span></div>
<div class="phone">
<!-- <a href="topics/mobile.html" class="phone_text"><i class="mobile_ico"></i>手机优购<i class="tip"></i></a> -->
<div class="phone_con">
          <p class="clearfix">
              <span class="fl qr_code">
              </span>
              <span class="fl ml10">
                  <a class="btn_app_store btn" href="../itunes.apple.com/cn/app/zhang-shang-you-gou/id504493912@mt=8" target="_blank">App Store</a>
                  <a class="btn_android_store btn" href="../mobile.yougou.com/appVersion/package.sc@channelCode=YgYougouwebA59" target="_blank">Android</a>
              </span>
          </p>
          <p class="qr_code_tip">下载安装 <strong>优购客户端</strong></p>
      </div>
</div>
<div class="outlets link_box" style="border-right:none"></div>
<div class="about_user">
    <?php
 if (empty($_SESSION['buyUser'])) { echo '<div class="login"><a  rel="nofollow" href="/index.php/Login">登录</a></div>'; echo '<div class="register"><a  rel="nofollow" href="/index.php/Reg">注册</a></div>'; }else{ echo '<div class="login" style="width:37px;"><a  rel="nofollow href="/index.php/Data/'.$_SESSION['buyUser'].'">'.$_SESSION['buyUser'].'</div>'; echo '<div class="register"><a  rel="nofollow" href="/index.php/Login/ex">退出</a></div>'; } ?>
    <!-- <div class="register"><a  rel="nofollow" href="/index.php/Reg">注册</a></div> -->
</div><!--about_user end -->
<div class="my_yg link_box">
<a href="/index.php/Data" class="a1">我的优购</a>
<ul class="info_con">
<li><a href="">我的收藏</a></li>
<li id="commentcount"></li>
<li id="top_msg"></li>
</ul>
</div>
<div class="my_order link_box"><a href="" rel="nofollow">我的订单</a></div>
<div class="notice link_box">
<span class="notice_text">公告</span>
<ul class="notice_con">
          <li><a target="_blank" href="">运动名品最高立减￥300</a></li>
          <li><a target="_blank" href="">男装特惠大促 2折起</a></li>
          <li><a target="_blank" href="">初冬潮靴 时髦小伙伴3折起</a></li>
          <li><a target="_blank" href="">知名女装 爆款推荐 5折封顶</a></li>
          <li><a target="_blank" href=''>APEC会议期间派件延时详情</a></li>
</ul>
</div>
<div class="more link_box">
<a href="javascript:;" class='more_text'>更多</a>
<ul class="more_con">
<li><a onclick="YouGou.Biz.WebToolkit.addFavorite();" href="javascript:;">收藏优购</a></li>
<li><a href="">帮助</a></li>
</ul>
</div>
</div><!--view_area end -->
</div><!--top_nav end -->
<!--新头部导航9854 end-->
<div id="yg_logo_tab" class="clearfix ygwrap">
<div class="logo fl">
  <a href="#ref=all&po=logo_yougou"></a>
</div>
<form action="/index.php/SeekGet" onsubmit=""  name="" id="J_TopSearchForm" method="POST" class="search_box clearfix fl">
  <div class="zs_left fl"></div>
  <div class="input_box fl">
  	<input type="text" id="keyword" name="keyword" maxlength="80"  class="search flc" />
    
  </div>
  <div class="zs_right fl"></div>
  <div class="search_btn fl"><input style="width:35px;opacity: 0.0;" type="submit" value=""></div>
</form>
<div class="mycart_nav fl">
<div id="cart">
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
</div>

</div>
<!--mycart_nav end-->
<div></div>
<div class="company_name">香港上市公司百丽国际旗下购物网站</div>
</div>
<div class="yg_sites_tabtn"></div>
</div>
<!--导航start-->
<!-- nav created time: 2014-11-05T21:59:07+08:00 -->
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
<a class="left_yg_logo" href="default.htm" target="_blank"><img src="/Public/Home/images/index/left-yg-logo.jpg" width="198" height="57"/></a>

<h2 class="hd rel">
<a href="#" target="_blank">全部商品分类 <i class="abs"></i></a></h2>

<!-- top nav start-->

<div class="bd rel">
<!-- 坚导航开始 -->
<ul class="indexnav2list clearfix">

    <li>
      <input type="hidden" value="53d0e923c7da508b0c00007e"/>

      <div class="titt">
        
            <i class="iconn jingc"></i>
        

        <h3><a href="default.htm" target="_blank">本周精彩</a>
          
        </h3>
      </div>
      <p class="chldlist">
            <a href="" target="_blank" >品牌轮播打造时尚巅峰</a>
      </p>  
    </li>

    <li>
      <input type="hidden" value="53d0e923c7da508b0c00007f"/>

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
                      <?php if(is_array($mann)): foreach($mann as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
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
                      <?php if(is_array($womann)): foreach($womann as $key=>$vo): ?><a href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>" target="_blank">
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
  <a class="left_go_outlet" href="star.shtml#ref=all&po=menu_banner1" target="_blank"><img src="/Public/Home/images/index/60520141031T144632.gif" width="200"></a>
</div>
</div>
</div>
</div>

<!-- top nav end -->
<!--//导航end-->
<!--//公共头部end-->

<!--//content start -->
<div id="53d0e923c7da508b0c00007e">
<div id="indexFocusPic" class="ygwrap">
<div class="focusPicBd">
<div class="picBox">
<?php if(is_array($shuffling)): foreach($shuffling as $key=>$vo): ?><div class="imgBox" style="display: block; ">
         <a href="/index.php/Flagship/index/id/<?php echo ($vo["title"]); ?>" target="_blank">
            <img src="/Public/Home/images/carousel/<?php echo ($vo["photo"]); ?>" height="420" />
         </a>
    </div><?php endforeach; endif; ?>
</div>
<div class="trgBox">


  <span class="show">1</span>



  <span>2</span>



  <span>3</span>



  <span>4</span>



  <span>5</span>



  <span>6</span>



  <span>7</span>


</div>
</div><!--focusPic_bd end-->
</div>
</div>



<div id="53d0e923c7da508b0c00007f" class="ygbanner">


<a href="topics/1413794369938.html" target="_blank">
<img src="/Public/Home/images/index/58920141103T145447.jpg">
</a>


</div>



<div id="53d0e925c7da508b0c0001c6" class="ygbanner">


<a href="topics/1413960797984.html" target="_blank">
<img src="/Public/Home/images/index/23520141105T101557.jpg">
</a>


</div>



<div id="53d0e923c7da508b0c0000ed" class="ygbanner">


<a href="topics/1413274590557.html" target="_blank">
<img src="/Public/Home/images/index/70920141103T110658.jpg">
</a>


</div>



<div id="53d0e925c7da508b0c0001f4" class="ygbanner">


<a href="topics/1414462802220.html" target="_blank">
<img src="/Public/Home/images/index/47920141103T142514.jpg">
</a>


</div>



<div id="53d0e924c7da508b0c000155" class="ygbanner">


<a href="topics/1405416658177.html" target="_blank">
<img src="/Public/Home/images/index/30720141103T132945.jpg">
</a>


</div>



<div id="53d0e923c7da508b0c000008" class="ygbanner">


<a href="topics/1413958816072.html" target="_blank">
<img src="/Public/Home/images/index/51420141105T094832.jpg">
</a>


</div>



<div id="53d0e924c7da508b0c00011e" class="ygbanner">


<a href="topics/1413966484124.html" target="_blank">
<img src="/Public/Home/images/index/94820141103T113526.jpg">
</a>


</div>



<div id="53d0e925c7da508b0c000195" class="ygbanner">


<a href="topics/1414468039780.html" target="_blank">
<img src="/Public/Home/images/index/16720141104T103558.jpg">
</a>


</div>






<!-- redmine6537 开 -->
<div class="ygwrap">
<div class="yginwrap">

<div class="ind_md1 clearfix">
<ul class="imgmasktab">
<?php if(is_array($puzzle)): foreach($puzzle as $key=>$vo): if($vo["id"] == 1): ?><li class="item1">
      	<p class="imgmasklayer"></p>
      	<a target="_blank" href="/index.php/Info/index/number/<?php echo ($vo["goodsid"]); ?>"><img src="/Public/Home/images/carousel/<?php echo ($vo["uploadimg"]); ?>" alt="国际牛仔 秋装上新 2.5折起" width="430" height="420"/></a>
      </li><?php endif; ?>
  <?php if($vo["id"] == 2): ?><li class="item2 " >
      	<p class="imgmasklayer"></p>
      	<a target="_blank" href="/index.php/Info/index/number/<?php echo ($vo["goodsid"]); ?>"><img src="/Public/Home/images/carousel/<?php echo ($vo["uploadimg"]); ?>" alt="秋冬新品首发，冬靴全场3.5折起" width="360" height="280"/></a>
      </li><?php endif; ?>
  <?php if($vo["id"] == 3): ?><li class="item3 " >
      	<p class="imgmasklayer"></p>
      	<a target="_blank" href="/index.php/Info/index/number/<?php echo ($vo["goodsid"]); ?>"><img src="/Public/Home/images/carousel/<?php echo ($vo["uploadimg"]); ?>" alt="秋冬必备 运动鞋精选 3折起" width="360" height="140"/></a>
      </li><?php endif; ?>
  <?php if($vo["id"] == 4): ?><li class="item4 j_resizemd" >
      	<p class="imgmasklayer"></p>
      	<a target="_blank" href="/index.php/Info/index/number/<?php echo ($vo["goodsid"]); ?>"><img src="/Public/Home/images/carousel/<?php echo ($vo["uploadimg"]); ?>" alt="FOR BABY'S SHOES 童鞋￥" width="200" height="420"/></a>
      </li><?php endif; endforeach; endif; ?>
</ul>
</div>


<!--redmine8408
<!--大牌回馈-->
<!--2013.8.19后改成新品发布-->
<!--2013.9.29后改成分楼层显示-->
  <div class="ind_md2 clearfix">
      <div class="hd tabhd zk clearfix">
          <h2 class="tit1">品质男装</h2>
              <div class="wrdlst">

                  <?php if(is_array($top)): foreach($top as $key=>$vo): ?><a target="_blank" href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>|<?php endforeach; endif; ?>
              </div>
      </div>
      <div class="bd module1"  
          style="background:url(/Public/Home/images/index/bebd484e4cca477c8950764a15e1da92.jpg) 0 0 no-repeat;"
      >
          <a target="_blank" href="" title="男装特惠" class="bglink"></a>
          <div class="cnt">
              <div class="logolst">

                      <?php if(is_array($rand)): foreach($rand as $key=>$vo): ?><a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" ><i class="logolayer"></i>
                              <img width="85" height="40" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="Dickies" />
                          </a><?php endforeach; endif; ?>                          
              </div>              
              <ul class="imglst ">
                      <?php if(is_array($rands)): foreach($rands as $key=>$vo): ?><li>
                            <div class="proinfolayer" style="line-height:36px;font-family:微软雅黑;">
                                <?php echo ($vo["brand"]); ?>
                            </div>
                            <a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
                            <img width="160" height="160" class="lazy_loading" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" /></a>
                        </li><?php endforeach; endif; ?>
              </ul>
          </div>
      </div>
  </div>
  <div class="ind_md2 clearfix">
      <div class="hd tabhd zk clearfix">
          <h2 class="tit2">潮流女装</h2>
              <div class="wrdlst">
                    <?php if(is_array($tops)): foreach($tops as $key=>$vo): ?><a target="_blank" href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>|<?php endforeach; endif; ?>
              </div>
      </div>
      <div class="bd module1"  
          style="background:url(/Public/Home/images/index/a755fa173e354bddb39195b92de5f07b.jpg) 0 0 no-repeat;"
      >
          <a target="_blank" href="" title="潮流女装 新品热销" class="bglink"></a>
          <div class="cnt">
              <div class="logolst">
                        <?php if(is_array($rand_Woman)): foreach($rand_Woman as $key=>$vo): ?><a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" ><i class="logolayer"></i>
                              <img width="85" height="40" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="百丽" />
                          </a><?php endforeach; endif; ?>
              </div>              
              <ul class="imglst ">
                  <?php if(is_array($rands_Woman)): foreach($rands_Woman as $key=>$vo): ?><li>
                          <div class="proinfolayer" style="line-height:36px;font-family:微软雅黑;">
                              <?php echo ($vo["brand"]); ?>
                          </div>
                          <a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
                          <img width="160" height="160" class="lazy_loading" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" /></a>
                      </li><?php endforeach; endif; ?>
              </ul>
          </div>
      </div>
  </div>
  <div class="ind_md2 clearfix">
      <div class="hd tabhd zk clearfix">
          <h2 class="tit3">大牌鞋包</h2>
              <div class="wrdlst">
                  <?php if(is_array($topB)): foreach($topB as $key=>$vo): ?><a target="_blank" href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>|<?php endforeach; endif; ?>
              </div>
      </div>
      <div class="bd module1"  
          style="background:url(/Public/Home/images/index/6fd478cdfba743b187c45a8d4337fbc9.jpg) 0 0 no-repeat;"
      >
          <a target="_blank" href="topics/1413871579353.html#ref=index&po=new_top301" title="穿梭时尚潮流  精品鞋包2.5折起" class="bglink"></a>
          <div class="cnt">
              <div class="logolst">
                        <?php if(is_array($rand_Box)): foreach($rand_Box as $key=>$vo): ?><a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" ><i class="logolayer"></i>
                              <img width="85" height="40" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="百丽" />
                          </a><?php endforeach; endif; ?>
              </div>              
              <ul class="imglst ">
                  <?php if(is_array($rands_Box)): foreach($rands_Box as $key=>$vo): ?><li>
                          <div class="proinfolayer" style="line-height:36px;font-family:微软雅黑;">
                              <?php echo ($vo["brand"]); ?>
                          </div>
                          <a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
                          <img width="160" height="160" class="lazy_loading" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" /></a>
                      </li><?php endforeach; endif; ?>
              </ul>
          </div>
      </div>
  </div>
  <div class="ind_md2 clearfix">
      <div class="hd tabhd zk clearfix">
          <h2 class="tit4">运动户外</h2>
            <div class="wrdlst">
                  <?php if(is_array($topD)): foreach($topD as $key=>$vo): ?><a target="_blank" href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>|<?php endforeach; endif; ?>
              </div>
      </div>
      <div class="bd module1"  
          style="background:url(/Public/Home/images/index/fa99f75d32cb402b9cda4797fa5ffbca.jpg) 0 0 no-repeat;">
          <a target="_blank" href="topics/1413958367748.html#ref=index&po=new_top401" title="秋冬新品运动服  ￥129起" class="bglink"></a>
          <div class="cnt">
              <div class="logolst">
                      <?php if(is_array($rand_Door)): foreach($rand_Door as $key=>$vo): ?><a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" ><i class="logolayer"></i>
                              <img width="85" height="40" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="耐克" />
                          </a><?php endforeach; endif; ?>
              </div>              
              <ul class="imglst ">
                  <?php if(is_array($rands_Door)): foreach($rands_Door as $key=>$vo): ?><li>
                          <div class="proinfolayer" style="line-height:36px;font-family:微软雅黑;">
                              <?php echo ($vo["brand"]); ?>
                          </div>
                          <a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
                          <img width="160" height="160" class="lazy_loading" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" /></a>
                      </li><?php endforeach; endif; ?>
              </ul>
          </div>
      </div>
  </div>
  <div class="ind_md2 clearfix">
      <div class="hd tabhd zk clearfix">
          <h2 class="tit5">童鞋童装</h2>
              <div class="wrdlst">
                    <?php if(is_array($topS)): foreach($topS as $key=>$vo): ?><a target="_blank" href="/index.php/Lists/index/ids/<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></a>|<?php endforeach; endif; ?>
              </div>
      </div>
      <div class="bd module1"  
          style="background:url(/Public/Home/images/index/5b19c69a93c64b31b9a97787869b9c28.jpg) 0 0 no-repeat;"
      >
          <a target="_blank" href="" title="不一样的童装 不一样的萌￥48起" class="bglink"></a>
          <div class="cnt">
              <div class="logolst">
                        <?php if(is_array($rand_Shoes)): foreach($rand_Shoes as $key=>$vo): ?><a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" ><i class="logolayer"></i>
                              <img width="85" height="40" class="lazy_loading" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="米菲" />
                          </a><?php endforeach; endif; ?>
              </div>              
              <ul class="imglst ">
                    <?php if(is_array($rands_Shoes)): foreach($rands_Shoes as $key=>$vo): ?><li>
                          <div class="proinfolayer" style="line-height:36px;font-family:微软雅黑;">
                              <?php echo ($vo["brand"]); ?>
                          </div>
                          <a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank">
                          <img width="160" height="160" class="lazy_loading" original="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" /></a>
                      </li><?php endforeach; endif; ?>
              </ul>
          </div>
      </div>
  </div>
<!--redmine8408-->

<!--redmine8319-->
<!--潮流风向标-->
<!--2013.8.19后改成潮流风向标-->
<div class="ind_md3">
<div class="hd tabhd">
<h2>热门品牌推荐</h2>
<ul id="flash">
  <?php if(is_array($soft)): foreach($soft as $key=>$vo): ?><li>
    			<!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
    			<a target="_blank" href="/index.php/Flagship/index/id/<?php echo ($vo["shopnumber"]); ?>"><?php echo ($vo["shopname"]); ?></a>
    </li><?php endforeach; endif; ?>
</ul>
</div>


<?php if(is_array($soft)): foreach($soft as $key=>$vo): ?><div class="bd module1  none">
  <div align="center">
    <a href="/index.php/Flagship/index/id/<?php echo ($vo["shopnumber"]); ?>" target="_blank"><img src="/Public/Home/images/carousel/<?php echo ($vo["uploadimg"]); ?>" alt="" width="990" height="460" border="0"></a></div>
  </div><?php endforeach; endif; ?>
</div>	

<!--热销排行-->
<div class="ind_md4">
<div class="hd tabhd">
<h2>热销排行</h2>
</div>
<div class="bd module1">
        <ul class="imglst" style="display: block;">
        <?php if(is_array($footwear)): foreach($footwear as $key=>$wear): if($wear["cid"] == 0): ?><li class="fst">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <p class="price">
                  <span no="100024489" class="cmdtyPrice price_no100024489 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i><?php echo ($wear["discount"]); ?></i></em></span><span class="discount">(5.6折)</span></span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>
          </li><?php endif; ?>
        <?php if($wear["cid"] == 1): ?><li class="scd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <!-- <p>跑步鞋</p> -->
                <p class="price">
                  <span no="100045228" class="cmdtyPrice price_no100045228">
                  优购价： <span class="corg"> ¥<em><?php echo ($wear["discount"]); ?></em></span>
                  </span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>    
          </li><?php endif; ?>
        <?php if($wear["cid"] == 2): ?><li class="thd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="21006560" class="cmdtyPrice price_no21006560 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 3): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100042041" class="cmdtyPrice price_no100042041 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 4): ?><li>
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100012804" class="cmdtyPrice price_no100012804 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount">(</span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 5): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["discount"]); ?></p>
                <p no="100047632" class="cmdtyPrice price_no100047632">
                  优购价 ¥<em><?php echo ($wear["price"]); ?></em>
                </p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>      
          </li><?php endif; endforeach; endif; ?>
        </ul>
        <ul class="imglst" style="display: none;">
    <?php if(is_array($manwear)): foreach($manwear as $key=>$wear): if($wear["cid"] == 0): ?><li class="fst">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <p class="price">
                  <span no="100024489" class="cmdtyPrice price_no100024489 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i><?php echo ($wear["discount"]); ?></i></em></span><span class="discount">(5.6折)</span></span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>
          </li><?php endif; ?>
        <?php if($wear["cid"] == 1): ?><li class="scd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <!-- <p>跑步鞋</p> -->
                <p class="price">
                  <span no="100045228" class="cmdtyPrice price_no100045228">
                  优购价： <span class="corg"> ¥<em><?php echo ($wear["discount"]); ?></em></span>
                  </span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>    
          </li><?php endif; ?>
        <?php if($wear["cid"] == 2): ?><li class="thd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="21006560" class="cmdtyPrice price_no21006560 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 3): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100042041" class="cmdtyPrice price_no100042041 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 4): ?><li>
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100012804" class="cmdtyPrice price_no100012804 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount">(</span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 5): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["discount"]); ?></p>
                <p no="100047632" class="cmdtyPrice price_no100047632">
                  优购价 ¥<em><?php echo ($wear["price"]); ?></em>
                </p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>      
          </li><?php endif; endforeach; endif; ?>
        </ul>
        <ul class="imglst" style="display: none;">
    <?php if(is_array($man)): foreach($man as $key=>$wear): if($wear["cid"] == 0): ?><li class="fst">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <p class="price">
                  <span no="100024489" class="cmdtyPrice price_no100024489 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i><?php echo ($wear["discount"]); ?></i></em></span><span class="discount">(5.6折)</span></span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>
          </li><?php endif; ?>
        <?php if($wear["cid"] == 1): ?><li class="scd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <!-- <p>跑步鞋</p> -->
                <p class="price">
                  <span no="100045228" class="cmdtyPrice price_no100045228">
                  优购价： <span class="corg"> ¥<em><?php echo ($wear["discount"]); ?></em></span>
                  </span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>    
          </li><?php endif; ?>
        <?php if($wear["cid"] == 2): ?><li class="thd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="21006560" class="cmdtyPrice price_no21006560 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 3): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100042041" class="cmdtyPrice price_no100042041 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 4): ?><li>
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100012804" class="cmdtyPrice price_no100012804 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount">(</span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 5): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["discount"]); ?></p>
                <p no="100047632" class="cmdtyPrice price_no100047632">
                  优购价 ¥<em><?php echo ($wear["price"]); ?></em>
                </p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>      
          </li><?php endif; endforeach; endif; ?>
        </ul>
        <ul class="imglst" style="display: none;">
     <?php if(is_array($woman)): foreach($woman as $key=>$wear): if($wear["cid"] == 0): ?><li class="fst">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <p class="price">
                  <span no="100024489" class="cmdtyPrice price_no100024489 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i><?php echo ($wear["discount"]); ?></i></em></span><span class="discount">(5.6折)</span></span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>
          </li><?php endif; ?>
        <?php if($wear["cid"] == 1): ?><li class="scd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <!-- <p>跑步鞋</p> -->
                <p class="price">
                  <span no="100045228" class="cmdtyPrice price_no100045228">
                  优购价： <span class="corg"> ¥<em><?php echo ($wear["discount"]); ?></em></span>
                  </span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>    
          </li><?php endif; ?>
        <?php if($wear["cid"] == 2): ?><li class="thd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="21006560" class="cmdtyPrice price_no21006560 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 3): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100042041" class="cmdtyPrice price_no100042041 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 4): ?><li>
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100012804" class="cmdtyPrice price_no100012804 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount">(</span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 5): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["discount"]); ?></p>
                <p no="100047632" class="cmdtyPrice price_no100047632">
                  优购价 ¥<em><?php echo ($wear["price"]); ?></em>
                </p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>      
          </li><?php endif; endforeach; endif; ?>
        </ul>
        <ul class="imglst" style="display: none;">
     <?php if(is_array($woman)): foreach($woman as $key=>$wear): if($wear["cid"] == 0): ?><li class="fst">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <p class="price">
                  <span no="100024489" class="cmdtyPrice price_no100024489 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i><?php echo ($wear["discount"]); ?></i></em></span><span class="discount">(5.6折)</span></span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>
          </li><?php endif; ?>
        <?php if($wear["cid"] == 1): ?><li class="scd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <img width="240" height="240" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" alt="<?php echo ($wear["intro"]); ?>" class=""></a>
              <div class="info">
                <h4><?php echo ($wear["goods"]); ?></h4>
                <!-- <p>跑步鞋</p> -->
                <p class="price">
                  <span no="100045228" class="cmdtyPrice price_no100045228">
                  优购价： <span class="corg"> ¥<em><?php echo ($wear["discount"]); ?></em></span>
                  </span>
                  <span>市场价: <del>¥<?php echo ($wear["price"]); ?></del></span>
                </p>
              </div>    
          </li><?php endif; ?>
        <?php if($wear["cid"] == 2): ?><li class="thd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="21006560" class="cmdtyPrice price_no21006560 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 3): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100042041" class="cmdtyPrice price_no100042041 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount"></span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 4): ?><li>
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["goods"]); ?></p>
                <p no="100012804" class="cmdtyPrice price_no100012804 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:<?php echo ($wear["discount"]); ?></span> <em class="ygprc">¥<i><?php echo ($wear["price"]); ?></i></em></span><span class="discount">(</span></p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>
              
          </li><?php endif; ?>
          <?php if($wear["cid"] == 5): ?><li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/index.php/Info/index/id/<?php echo ($wear["id"]); ?>" target="_blank">
              <div class="proinfolayer">
                <p><?php echo ($wear["discount"]); ?></p>
                <p no="100047632" class="cmdtyPrice price_no100047632">
                  优购价 ¥<em><?php echo ($wear["price"]); ?></em>
                </p>
              </div>  
              <img width="160" height="160" alt="<?php echo ($wear["intro"]); ?>" src="/Public/Home/images/carousel/<?php echo ($wear["picname"]); ?>" class=""></a>      
          </li><?php endif; endforeach; endif; ?>
        </ul>
        <ul class="imglst" style="display: none;">
          <li class="fst">
            <i class="rankico"></i>
              <a href="/c-cat/sku-p717958d3ema03-100001056.shtml#ref=index&amp;po=hot_single601" target="_blank">
              <img width="240" height="240" src="" alt="CAT卡特2014秋冬深棕色牛皮/合成革男士户外休闲满帮鞋P717959D3EMA33活跃装备(Active)" class=""></a>
              <div class="info">
                <h4>卡特</h4>
                <p>户外休闲鞋</p>
                <p class="price">
                  <span no="100001056" class="cmdtyPrice price_no100001056 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>469</i></em></span><span class="discount">(5.5折)</span></span>
                  <span>市场价: <del>¥858</del></span>
                </p>
              </div>
              
          </li>
          <li class="scd">
            <i class="rankico"></i>
              <a href="/c-rax/sku-345p163-99917766.shtml#ref=index&amp;po=hot_single602" target="_blank">
              <img width="240" height="240" src="
              " alt="RAX微户外-翔云 反绒牛皮防水男式登山鞋 34-5P163" class=""></a>
              <div class="info">
                <h4>RAX</h4>
                <p>登山鞋</p>
                <p class="price">
                  <span no="99917766" class="cmdtyPrice price_no99917766 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>149</i></em></span><span class="discount">(1.7折)</span></span>
                  <span>市场价: <del>¥869</del></span>
                </p>
              </div>
              
          </li>
          <li class="thd">
            <i class="rankico"></i>
              <a href="/c-toread/sku-tawc91814-99989192.shtml#ref=index&amp;po=hot_single603" target="_blank">
              <div class="proinfolayer">
                <p>探路者  冲锋衣</p>
                <p no="99989192" class="cmdtyPrice price_no99989192 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>658</i></em></span><span class="discount">(5.5折)</span></p>
              </div>  
              <img width="160" height="160" alt="TOREAD/探路者2014新款秋冬男式套绒冲锋衣防水透湿耐磨好-铁蓝灰TAWC91814-C27C" src="
              " class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/c-cat/sku-p716470d3bdc70-99892597.shtml#ref=index&amp;po=hot_single604" target="_blank">
              <div class="proinfolayer">
                <p>卡特  户外休闲鞋</p>
                <p no="99892597" class="cmdtyPrice price_no99892597 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>599</i></em></span><span class="discount">(6.0折)</span></p>
              </div>  
              <img width="160" height="160" alt="CAT卡特2014秋冬蓝色牛皮/织物男装休闲鞋CAT活力P716470D3BDC70 潮流密码(CODE)" src="
              " class=""></a>
              
          </li>
          <li>
            <i class="rankico"></i>
              <a href="/c-thenorthface/sku-c550-99988644.shtml#ref=index&amp;po=hot_single605" target="_blank">
              <div class="proinfolayer">
                <p>乐斯菲斯  徒步鞋</p>
                <p no="99988644" class="cmdtyPrice price_no99988644 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>709</i></em></span><span class="discount">(6.5折)</span></p>
              </div>  
              <img width="160" height="160" alt="The North Face/乐斯菲斯 2014春夏 男 灰色/蓝色 GORE-TEX 防水透气 耐磨 缓震 轻便 户外低帮 徒步鞋 C550N6T" src="
              " class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/c-merrell/sku-r401625d3bmr74-99998252.shtml#ref=index&amp;po=hot_single606" target="_blank">
              <div class="proinfolayer">
                <p>迈乐  越野鞋</p>
                <p no="99998252" class="cmdtyPrice price_no99998252 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>396</i></em></span><span class="discount">(5.7折)</span></p>
              </div>  
              <img width="160" height="160" alt="MERRELL/迈乐2014年男子秋季越野跑步鞋R401625D3BMR74户外跑鞋" src="
              " class=""></a>
              
          </li>
        </ul>
        <ul class="imglst" style="display: none;">
          <li class="fst">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-15mins_basto_belle_innet_senda_tata_teenmix-Y0A_VUF_46H_PX6-0-1.html#ref=index&amp;po=hot_single701" target="_blank">
              <img width="240" height="240" src="" alt="INNET/茵奈儿2014冬红色PU革手袋Z04DDDX4" class=""></a>

              <div class="info">
                <h4>茵奈儿</h4>
                <p>手提/斜挎两用包</p>
                <p class="price">
                  <span no="100010205" class="cmdtyPrice price_no100010205 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>110</i></em></span><span class="discount">(2.4折)</span></span>
                  <span>市场价: <del>¥468</del></span>
                </p>
              </div>
              
          </li>
          <li class="scd">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-happylane-Y0A_VUF_46H_PX6-0-1.html#ref=index&amp;po=hot_single702#ref=index&amp;po=hot_single702" target="_blank">
              <img width="240" height="240" src="" alt="happylane 幸福里 牛皮小香风名媛菱格链条包 黑色 HL131208" class=""></a>
              <div class="info">
                <h4>幸福里</h4>
                <p>单肩/斜挎两用包</p>
                <p class="price">
                  <span no="99945760" class="cmdtyPrice price_no99945760 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>198</i></em></span><span class="discount">(3.3折)</span></span>
                  <span>市场价: <del>¥598</del></span>
                </p>
              </div>
              
          </li>
          <li class="thd">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-canifier-Y0A_VUF-0-1.html#ref=index&amp;po=hot_single703" target="_blank">
              <div class="proinfolayer">
                <p>柯尼菲尔  单肩/斜挎两用包</p>
                <p no="100000960" class="cmdtyPrice price_no100000960">
                  优购价 ¥<em>188</em>
                </p>
              </div>  
              <img width="160" height="160" alt="CANIFIER（柯尼菲尔）2014秋冬新款可爱绣线丝印梦幻小王子系列包包女包单肩斜跨包1480009" src="" class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-dannybear-Y0A_VUF-0-1.html#ref=index&amp;po=hot_single704" target="_blank">
              <div class="proinfolayer">
                <p>丹尼熊  手提/斜挎两用包</p>
                <p no="100013877" class="cmdtyPrice price_no100013877 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>178</i></em></span><span class="discount">(4.2折)</span></p>
              </div>  
              <img width="160" height="160" alt="DANNY BEAR丹尼熊紫精灵熊彩绘系列女式手提斜挎包DB14575-37" src="" class=""></a>
              
          </li>
          <li>
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-sasa-Y0A_VUF-0-1.html#ref=index&amp;po=hot_single705" target="_blank">
              <div class="proinfolayer">
                <p>SASA  手提/斜挎两用包</p>
                <p no="99974451" class="cmdtyPrice price_no99974451 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>429</i></em></span><span class="discount">(3.4折)</span></p>
              </div>  
              <img width="160" height="160" alt="Sasa/萨萨  2014春夏新品简约风鳄鱼纹牛皮手提包 单肩斜挎包 SA42-H0467" src="" class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/f-camel-Y0A_VUF-0-1.html#ref=index&amp;po=hot_single706" target="_blank">
              <div class="proinfolayer">
                <p>CAMEL骆驼  斜挎包</p>
                <p no="99845172" class="cmdtyPrice price_no99845172 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>259</i></em></span><span class="discount">(3.6折)</span></p>
              </div>  
              <img width="160" height="160" alt="（好评热卖）CAMEL/骆驼商务休闲潮流时尚男士黑色单肩斜挎包MB124021-1A" src="" class=""></a>
              
          </li>
        </ul>
        <ul class="imglst" style="display: none;">
          <li class="fst">
            <i class="rankico"></i>
              <a href="/c-innet/sku-mn0001-100012618.shtml#ref=index&amp;po=hot_single801" target="_blank">
              <img width="240" height="240" src="" alt="INNET/茵奈儿童鞋2014秋季黄色反毛皮男童/女童小中童超轻舒适运动鞋MN0001" class=""></a>
              <div class="info">
                <h4>茵奈儿</h4>
                <p>跑步鞋</p>
                <p class="price">
                  <span no="100012618" class="cmdtyPrice price_no100012618 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>129</i></em></span><span class="discount">(3.2折)</span></span>
                  <span>市场价: <del>¥399</del></span>
                </p>
              </div>
              
          </li>
          <li class="scd">
            <i class="rankico"></i>
              <a href="http://www.yougou.com/topics/1413272203425.html#ref=index&amp;po=hot_single802" target="_blank">
              <img width="240" height="240" src="" alt="巴帝巴帝 2014冬装新款男童两面穿棉衣外套女小童加厚棉服 084142205BD" class=""></a>
              <div class="info">
                <h4>巴帝巴帝</h4>
                <p>棉服/羽绒服</p>
                <p class="price">
                  <span no="100025831" class="cmdtyPrice price_no100025831 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>109</i></em></span><span class="discount">(3.2折)</span></span>
                  <span>市场价: <del>¥339</del></span>
                </p>
              </div>
              
          </li>
          <li class="thd">
            <i class="rankico"></i>
              <a href="/c-miffy/sku-dm0172-99997367.shtml#ref=index&amp;po=hot_single803" target="_blank">
              <div class="proinfolayer">
                <p>米菲  跑步鞋</p>
                <p no="99997367" class="cmdtyPrice price_no99997367">
                  优购价 ¥<em>199</em>
                </p>
              </div>  
              <img width="160" height="160" alt="Miffy/米菲童鞋2014秋季蓝色PU/织物男小童毛毛虫 运动鞋DM0172" src="" class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/c-barbie/sku-da1181-100023136.shtml#ref=index&amp;po=hot_single804" target="_blank">
              <div class="proinfolayer">
                <p>芭比  中靴</p>
                <p no="100023136" class="cmdtyPrice price_no100023136 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>169</i></em></span><span class="discount">(3.8折)</span></p>
              </div>  
              <img width="160" height="160" alt="BARBIE/芭比童鞋2014冬季二层皮:PU红色女小童童靴时装靴DA1181" src="" class=""></a>
              
          </li>
          <li>
            <i class="rankico"></i>
              <a href="/c-qqduck/sku-753135601-100019328.shtml#ref=index&amp;po=hot_single805" target="_blank">
              <div class="proinfolayer">
                <p>可可鸭  儿童套服</p>
                <p no="100019328" class="cmdtyPrice price_no100019328 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>71</i></em></span><span class="discount">(3.4折)</span></p>
              </div>  
              <img width="160" height="160" alt="QQ duck/可可鸭2014秋季新品男童女童内衣套装" src="" class=""></a>
              
          </li>
          <li class="j_resizemd">
            <i class="rankico"></i>
              <a href="/c-jmbear/sku-8535193120141202-100013596.shtml#ref=index&amp;po=hot_single806" target="_blank">
              <div class="proinfolayer">
                <p>杰米熊  毛衣/针织衫</p>
                <p no="100013596" class="cmdtyPrice price_no100013596 c_actprc"><span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">¥<i>58</i></em></span><span class="discount">(2.6折)</span></p>
              </div>  
              <img width="160" height="160" alt="杰米熊秋款时尚休闲女中童毛衫  85351931201 -41202" src="" class=""></a>
              
          </li>
        </ul>
        <ul class="tab">
            <li class="on">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/12" target="_blank">女鞋</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/13" target="_blank">男鞋</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/14" target="_blank">男装</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/15" target="_blank">女装</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/16" target="_blank">童鞋</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/17" target="_blank">童装</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/18" target="_blank">家品</a><i></i>
                </li>
            <li class="">
                <!--如果启用特殊标签,则标签分类1中的名称以分类标签为主,并添加链接-->
                      <a href="/index.php/Lists/index/pid/19" target="_blank">内衣</a><i></i>
                </li>
        </ul>
      </div>
</div>	

<!--资讯-->
<div class="ind_md5 clearfix">
<div class="newlist">
<div class="hd tabhd">
<h2>资讯</h2>
</div>	
<ul class="dotwrdlst">
  <?php if(is_array($news)): foreach($news as $key=>$news): ?><li><a target="_blank" href="/index.php/News/news?id=<?php echo ($news["id"]); ?>"><?php echo ($news["title"]); ?></a></li><?php endforeach; endif; ?>
</ul>
</div>
<div class="ft">
<a target="_blank" 
 class="mr10"
href=""><img src="/Public/Home/images/index/4be3f77c08a54ed5a496466cb4bd9db2.jpg" original="/Public/Home/images/index/4be3f77c08a54ed5a496466cb4bd9db2.jpg"
 width="520" height="180"
 alt="阿尔皮纳袋鼠"/>
</a> 
<a target="_blank" 
class="j_resizemd"
href=""><img src="/Public/Home/images/index/250909907cd14c3f9e0f31fab61138c8.jpg" original="/Public/Home/images/index/250909907cd14c3f9e0f31fab61138c8.jpg"
width="210" height="180" 
 alt="宝缦 玛瑞吉 床品1折起"/>
</a> 
</div>
</div>
</div>
</div>
<!-- redmine6537 结束 -->
<div class="ygwrap">
<div class="yginwrap ">
<div class="olmd clear">
<a href="" target="_blank">
<img class="lazy_loading" original="/Public/Home/images/index/ed14115335de405f9f58436f32284c2e.jpg" src="/Public/Home/images/index/ed14115335de405f9f58436f32284c2e.jpg" width="990" height="219" />
</a>
</div>
</div>
</div>
<div class="ygwrap">
<div class="yginwrap bt_adver">
<a href="" target = "_blank">
	<img class="lazy_loading"  original="/Public/Home/images/index/543f7cfc81f242d8aa10a397e36bb10b.gif" src="/Public/Home/images/index/543f7cfc81f242d8aa10a397e36bb10b.gif" width="990" height="219"  />
</a>
</div> 	
</div>


<!-- //content结束end -->

<!-- 2014-10-31 16:54:39 +0800 -->
<!-- //floot start -->

<div class="ygwrap">
<div class="ygGuid mb10" id="ygGuid">
<h2 class="ygGuidTit">优购导购</h2>

<div class="item_bom">
<a id="brand-left" class="brmove_l_btn" href="javascript:;"></a>
<a id="brand-right" class="brmove_r_btn" href="javascript:;"></a>

<div class="brand_move" id="brand-list">
  <?php if(is_array($guide)): foreach($guide as $key=>$vo): ?><a href="/index.php/Flagship/index/id/<?php echo ($vo["id"]); ?>" target="_blank" >
      <img style="margin-top:10px;" class="lazy_loading" width="85" height="40" src="/Public/Home/images/carousel/<?php echo ($vo["upic"]); ?>" alt="<?php echo ($vo["shopname"]); ?>"/>
    </a><?php endforeach; endif; ?>
</div>

<div class="clear"></div>

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

<div class="top_banner" style="background:url(/Public/Home/images/index/7af3bb6b179c425f88c6a57220f3e4ba.jpg) center;cursor:pointer"><a href="" target="_blank"></a></div>

<div class="floatad none">
<span class="floatad_close" title="关闭"></span>
<div class="floatad_box">
<div class="floatad_tab">
<ul>
    	<li class="on" ><span>运动</span></li>
    	<li  ><span>女装</span></li>
    	<li  ><span>男装</span></li>
    	<li  style="width:60px;"><span>家品</span></li>
  </ul>
</div>
<div class="floatad_content">
<ul>
<li class="none" style="display:block;">
 <a href="" target="_blank">
 <img src="/Public/Home/images/index/c4e1df4637ea4772b5a5f82574bc47df.jpg" style="display: inline-block;" width="240" height="125"></a>
</li>
    	<li class="none" style="display:block;">
 <a href="" target="_blank">
 <img src="/Public/Home/images/index/0ec40e3d63054d76a9356ecd34860cb4.jpg" style="display: inline-block;" width="240" height="125"></a>
</li>
    	<li class="none" style="display:block;">
 <a href="" target="_blank">
 <img src="/Public/Home/images/index/10e18274c70d4c4a94a3f95008d9a30d.jpg" style="display: inline-block;" width="240" height="125"></a>
</li>
    	<li class="none" style="display:block;">
 <a href="" target="_blank">
 <img src="/Public/Home/images/index/c545b0ed6cd641b0a4fa5f487d6f5516.jpg" style="display: inline-block;" width="240" height="125"></a>
</li>
</ul> 
</div>
<div class="floatad_list">
  	 <a href="" target="_blank">
	<img width="242" height="76" src="/Public/Home/images/index/6fc35b92e1694526865409bc576f6f5d.jpg" alt="闪团9.15">
</a>
</div>
</div>
</div>
<div class="blank10"></div>
<!--footer created time: 2014-11-04 11:22:08
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
<dd><a href="" rel="nofollow" >订购流程</a></dd>
<dd><a href="" target="_blank" rel="nofollow" >验货与签收</a></dd>
<dd><a href="" target="_blank" rel="nofollow" >订单配送查询</a></dd>
</dl>
<dl>
<dt>支付/配送</dt>

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
      <dd class="center"><a href="" target="_blank"><img src="/Public/Home/images/index/footer-mobile-qrcode.jpg" width="114" height="103" /></a></dd>
      <dd class="tright"><img src="/Public/Home/images/index/footer-wechat-qrcode.jpg" width="72" height="103" /></dd>
  </dl>
</div>
</div>
</div>
<div class="wcen n_footinfo">
<div class="ygwrap">
<div class="n_footl fl tleft" id="endlogo">
<a href="" class="ba_logo" title="优购时尚商城" alt="优购时尚商城"><img src="/Public/Home/images/index/blank.gif" original="/Public/Home/images/index/endlogo.png" title="优购时尚商城" alt="优购时尚商城" /></a>
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
<a href="/index.php/Blogroll" target="_blank" >友情链接</a> 
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
<!-- common js -->
<span class="none">
<!-- 1. sourceChannel -->
<noscript>
<div style="display:none;">
<img height="0" width="0" style="border-style:none;" src="" />
</div>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src=""/>
</div>
</noscript>
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="../googleads.g.doubleclick.net/pagead/viewthroughconversion/1016027598/@value=0&label=189vCLqHowQQzrO95AM&guid=ON&script=0"/>
</div>
</noscript>
<!-- //floot end -->

</body>
</html>