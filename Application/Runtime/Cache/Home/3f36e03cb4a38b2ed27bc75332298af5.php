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
      
      <style type="text/css">
            /* reset */
            body{font:12px/18px "宋体",arial,sans-serif;color:#585858;}
            body,div,p,span,form,iframe,table,td,th,input,textarea,button,label,ul,ol,li,dl,dt,dd,h1,h2,h3,h4,h5,h6{margin:0;padding:0;}
            h1,h2,h3,h4,h5,h6{font-size:100%; }
            ul,ol,li,dl{list-style-type:none;}
            em,i,dfn,cite,strong,small{font-style:normal;} 
            img{border:0;}
            fieldset,button,input,select,option{vertical-align:middle;font:12px/18px "宋体",arial,sans-serif;}
            table{border-collapse:collapse;border-spacing:0}
            textarea{resize:none}

            /* color */
            a:link,a:visited{color:#575757;text-decoration:none;}
            a:hover{color:#ef4165;text-decoration:none;}
            a:active{color:#1d7400;}

            /* clearfix */
            .clearfix:after{ visibility:hidden; display:block; font-size:0; content:" "; clear:both; height:0;}
            *html .clearfix{ zoom:1;}


            .preview{width:400px; height:465px; margin:50px 0px 0px 150px;}
            /* smallImg */
            .smallImg{position:relative; height:52px; margin-top:1px; background-color:#F1F0F0; padding:6px 5px; width:390px; overflow:hidden;float:left;}
            .scrollbutton{width:14px; height:50px; overflow:hidden; position:relative; float:left; cursor:pointer; }
            .scrollbutton.smallImgUp , .scrollbutton.smallImgUp.disabled{background:url(/Public/Home/images/images/d_08.png) no-repeat;}
            .scrollbutton.smallImgDown , .scrollbutton.smallImgDown.disabled{background:url(/Public/Home/images/images/d_09.png) no-repeat; margin-left:375px; margin-top:-50px;}

            #imageMenu {height:50px; width:360px; overflow:hidden; margin-left:0; float:left;}
            #imageMenu li {height:50px; width:60px; overflow:hidden; float:left; text-align:center;}
            #imageMenu li img{width:50px; height:50px;cursor:pointer;}
            #imageMenu li#onlickImg img, #imageMenu li:hover img{ width:44px; height:44px; border:3px solid #959595;}
            /* bigImg */
            .bigImg{position:relative; float:left; width:400px; height:400px; overflow:hidden;}
            .bigImg #midimg{width:400px; height:400px;}
            .bigImg #winSelector{width:235px; height:210px;}
            #winSelector{position:absolute; cursor:crosshair; filter:alpha(opacity=15); -moz-opacity:0.15; opacity:0.15; background-color:#000; border:1px solid #fff;}
            /* bigView */
            #bigView{position:absolute;border: 1px solid #959595; overflow: hidden; z-index:999;}
            #bigView img{position:absolute;}
      </style>
      <!-- 弹窗插件 -->
      <link rel="stylesheet" type="text/css" href="/Public/Home/plug/css/common.css"> 
      <link href="/Public/Home/css/base.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/css/goods_outlets.css?2.9.4" type="text/css" rel="stylesheet" />
      <link href="/Public/Home/list/css/base-2.css?2.9.4" type="text/css" rel="stylesheet" />
      <script type="text/javascript" src="/Public/Home/js/jquery.js"></script>
      <script type="text/javascript" src="/Public/Home/js/list.js"></script>
      <script type="text/javascript" src="/Public/Home/js/info.js"></script>
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

<!-- 评价部分 -->
 <div id="HBox" style="display: none; position: fixed; background-color: rgb(255, 255, 255); top: 50%; left: 50%; margin: -135px 0px 0px -150px; z-index: 100000; width: 300px; height: 270px;" class="animated demo17 bounceIn">
      <form onsubmit="return false;" method="post" action="">
        <ul class="list">
          <li>
            <strong> 评分  <font color="#ff0000">*</font></strong>
            <div class="fl">
                <span style="margin-top:-12px;" class="rate rate_point_s point5s_0"></span>
                <select name="grade" class="grade" style="margin-top:-6px;width:45px;">
                  <option class="grades" value="10">10</option>
                  <option class="grades" value="9">9</option>
                  <option class="grades" value="8">8</option>
                  <option class="grades" value="7">7</option>
                  <option class="grades" value="6">6</option>
                  <option class="grades" value="5">5</option>
                  <option class="grades" value="4">4</option>
                  <option class="grades" value="3">3</option>
                  <option class="grades" value="2">2</option>
                  <option class="grades" value="1">1</option>
                </select>
            </div>
          </li>
          <li>
            <strong> 尺码 <font color="#ff0000">*</font></strong>
            <div class="fl">
                合适:<input style="margin-left:3px;" checked="checked" type="radio" name="0" class="si" id="sizes"/>
                不合适:<input style="margin-left:3px;" type="radio" name="1" class="si" id="sizes"/>
            </div>
          </li>
          <li>
            <strong style="margin-left:-2px;" >内容&nbsp;<font color="#ff0000">*</font></strong>
            <div class="fl">
                <textarea cols="25" rows="4" class="contents"></textarea>
            </div>
          </li>

          <li><input type="submit" class="submitBtn" value="确认提交"></li>
        </ul>
      </form>
    <a style="width:24px;height:24px;line-height:18px;display:inline-block;cursor:pointer;background-color:#ccc;color:#fff;font-size:1.4em;text-align:center;position:absolute;top:8px;right:8px;" title="关闭" id="HCloseBtn"><span  class="close" style="width:24px;height:24px;display:inline-block;">×</span></a></div>
<!--//公共头部end-->
<!--公用头部end-->
<!--弹出尺码选择层 start-->
<div class="tcar_out select_size" id="select_size">
  <div class="tcar_titleBar">
    <div class="tcar_title">您尚未选择尺码</div>
    <a href="javascript:void(0)" class="tcar_close" id="select_size_close">关闭</a>
  </div>
  <div class="tcar_outc art_size_select">
    
        
        <p data-property="尺码" class="prosize">
    <span class="fl" style="display:inline;">尺码</span>
  <span class="fl prodSpec size" style="display:inline;width:400px;margin-left:10px;">
    
      <a data-value="size_s350" data-name="35">35<i></i></a>
    
      <a data-value="size_s360" data-name="36">36<i></i></a>
    
      <a data-value="size_s370" data-name="37">37<i></i></a>
    
      <a data-value="size_s380" data-name="38">38<i></i></a>
    
      <a data-value="size_s390" data-name="39">39<i></i></a>
    
      <a data-value="size_s400" data-name="40">40<i></i></a>
    
  </span>
</p>
    
    <p class="blank5"></p>
    <p id="size_select_btn" style="padding-left:33px;visibility:hidden;*margin-top:10px;">
      <a href="javascript:void(0);" class="btn-confirm"></a></p>
    <p class="clear"></p>
  </div>
</div>
<!--弹出尺码选择层 end-->
<!-- 购物车弹窗 -->
<div class="tcar_out" id="add_to_car" style="width:458px;height:200px;position:absolute;bottom:0px;right:0;display:none;overflow:hidden;">
  <div class="tcar_titleBar">
    <div class="tcar_title">放入购物车</div>
    <a href="javascript:void(0)" class="tcar_close" id="add_to_car_close">关闭</a></div>
  <div class="tcar_outc">
    <div class="add_to_car">
      <div class="showpic"></div>
      <div class="showcon">
        <p class="tleft Yellow  Size14">商品已放入购物车中！</p>
        <p class="tleft Size14">您的购物车中共有<b class="Yellow" id="pordNum"> </b>件商品,金额共计<b class="Yellow" id="priceSum"> </b>元。
        </p>
        <p class="tleft" style="padding-top:20px">
          <a href="javascript:void(0);" onclick="YouGou.Biz.ShoppingCart.checkShoppingCart();" class="gotobuy1"></a><span><a href="javascript:void(0);" id="closeBuyLink" class="Blue">继续购物</a></span>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end of 购物车弹窗 -->
<!-- 商品已上架 -->
<?php if(is_array($goods)): foreach($goods as $key=>$vo): if(is_array($off)): foreach($off as $key=>$v): ?><div class="cen">
<!-- 分类路径start -->
<div class="curLct ngoods_bor">您当前位置：
  <a href="/index.php/Index">首页</a> &gt;
</div>
<!-- 分类路径end -->
<div class="cen fl relative" id="goodsContainer" style="height:500px;">
  <!-- 图片默认组(默认展示一张大图,全部小图,其余大图异步加载) -->
  
      <div class="goodsblank"></div>
      <div class="goodsImg" id="goodsImg0">
        <!-- [issue #4146] 运动鞋显示第六张图片 tanfeng 2012.09.19 -->  
            <div class="goodsPic" style="margin-left:-90px;margin-top:-40px">

<div class="preview">

  <div id="vertical" class="bigImg">
    <img class="bImg" src="/Public/Home/images/carousel/<?php echo ($default[0][id]); ?>" width="400" height="400" alt="" id="midimg" />
    <div style="display:none;" id="winSelector" class="winSelector"></div>
  </div><!--bigImg end-->
  
  <div class="smallImg">
    <div class="scrollbutton smallImgUp disabled"></div>
    <div id="imageMenu">
      <ul class="tp">
      <!-- id="" onlickImg -->
      <?php if(is_array($default)): foreach($default as $key=>$de): ?><li class="sImg"><img src="/Public/Home/images/carousel/<?php echo ($de["id"]); ?>" width="68" height="68" alt=""/></li><?php endforeach; endif; ?>
      </ul>
    </div>
    <div class="scrollbutton smallImgDown"></div>
  </div><!--smallImg end-->
  
  <div id="bigView" style="display:none;margin-left:0px"><img width="800" height="800" alt="" src="" /></div>
  
</div><!--preview end-->
            </div>
            <!-- 新分享2012-12-17 start-->
            <div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare" data="{text:'我在 @优购时尚商城  看上了一件非常不错的商品：GAODI高蒂 秋冬新款马丁靴真皮方跟低跟欧美保暖靴短靴44076-822，优购价：328.0元。你们感觉怎么样！#优生活，购时尚# 分享一下。',pic: 'images/100057932_01_m.jpg',comment:'优购价：328.0元 商品编号：100057932" onclick="javascript:if(_gaq){ _gaq.push(['_trackPageview','/PageAction/detail/share']); }">
            <!-- <span class="goods_share_to">分享到：</span> -->
            <a class="bds_qzone">QQ空间</a>
            <a class="bds_tsina">新浪微博</a>
            <a class="bds_tqq">腾讯微博</a>
            <a class="bds_renren">人人网</a>
            <!-- <span class="bds_more">更多</span> -->
      </div>
      <!-- 新分享2012-12-17 end -->
      </div>
  
  <form name="buyForm" id="buyForm" method="post">
    <input type="hidden" name="productNo" id="productNo"/>
    <input type="hidden" name="productNum" id="productNum"/>
    <input type="hidden" name="productUrl" id="productUrl"/>
    <input type="hidden" name="refProductUrl" id="refProductUrl"/>
  </form>
        <div class="goodsCon fr">
          <input id="ids" type="hidden" value="<?php echo ($vo["id"]); ?>" /> 
          <h1><?php echo ($vo["goods"]); ?> <?php echo ($vo["intro"]); ?></h1>
          <p class=""><span class="Red f14"></span></p>
          <p class="ht31"><span id="pordNoSpan" class="fr Gray">商品编号：<a id="number"><?php echo ($vo["goodsnumber"]); ?></a></span>
            <span class="flagship" style="height:23px;">
            <!--  /inc/fss_link/brand_gaodi.shtml  -->
              <!-- <img width="80" height="40" src="/Public/Home/images/carousel/<?php echo ($sale["upic"]); ?>"/> -->
              <a href="/index.php/Flagship/index/id/<?php echo ($sale["id"]); ?>" target="_blank" class="Blue" style="color:red"><?php echo ($sale["shopname"]); ?></a>
            
            </span>
          </p>
          <p class="ht25"><span class="fr Gray" id="pordNoSpan"><a class="Gray" href="/index.php/Flagship/index/id/<?php echo ($sale["id"]); ?>">更多<?php echo ($sale["shopname"]); ?>商品&gt;&gt;</a></span>市&nbsp;&nbsp;场&nbsp;价：<s class="f_song" id="priceSpan">&yen;<?php echo ($vo["price"]); ?></s>
          </p>
          <p id="ygprice_area" class="ht25">优&nbsp;&nbsp;购&nbsp;价：<span class="ygprc16" id="yitianPrice"><?php echo ($vo["discount"]); ?></span><span class="Gray" id="jies">&nbsp;&nbsp;打折(<?php echo ($v["off"]); ?>)</span>
          </p>
          <!-- 促销活动start -->
            <div id="activeContent">
              <!--全场活动开始-->
              <p class="none" id="actGlobal">
                <a id="Detail_Btn_Active" class="Blue Song" href="javascript:void(0);" style="outline: medium none;">详情>></a>
              </p>
              <div class="tcar_out none" id="Global_Detail_Box">
                <div class="tcar_titleBar">
                  <div class="tcar_title">活动详情</div>
                  <a href="javascript:void(0);" class="tcar_close" id="Global_Detail_Box_close">关闭</a>
                </div>
                <div class="tcar_outc content">
                  <h5>活动明细</h5>
                  <p id="actDetailGlobal"></p>
                  <hr/>
                  <h5>活动条件</h5>
                  <p id="avtRuleGlobal"></p>
                </div>
              </div>
              <!--全场活动结束-->
              <!--非全场活动开始-->
              <div class="movable none" id="movable">
                &nbsp;&nbsp;<a href="javascript:void(0);" class="Blue Song" id="Detail_Btn">详情>></a></span>
              </div>
              <div id="Detail_Box" class="tcar_out none">
                <div class="tcar_titleBar">
                  <div class="tcar_title">活动详情</div>
                  <a id="Detail_Box_close" class="tcar_close" href="javascript:void(0);">关闭</a></div>
                <div class="tcar_outc content">
                  <h5>活动明细</h5>
                  <p id="actDetail"></p>
                  <hr>
                  <h5>活动条件</h5>
                  <p id="avtRule"></p>
                </div>
              </div>
              <!--活动结束-->
            </div>
            <!-- 促销活动end -->
              <div class="ht25" id="deliverTime" style="height:25px;display:none;">
                <span class="fl">送&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;至：</span>
                <div id="areaArrive" class="areaArrive fl">
                  <span class="areaSel" id="areaSel"></span>
                  <i>&nbsp;</i> <em class="blankLine">&nbsp;</em>
                  <ul id="provinceBox" class="areaBox">
                  </ul>
                </div>
                <span id="deliverTimeDay" class="fl arriveTip">现在下单，预计<em id="arriveDay">-</em>日内达到</span>
              </div>
              <div id="zengpin"></div>
              <div id="zengquan"></div>
              <p class="ht31 cmnt">
              <span id="commentStatisticsData">商品评分：
                <i class="rate_point_s point5s_0"></i>
              <a href="#goodsBar1" class="Blue">已有0人点评</a>
            </span>
              </p>
              <p class="ht31 cmnt none">
                <span>运费说明：</span><span class="Yellow" id="f_feight">0</span><span>&nbsp;元</span><span style="padding-left:20px">退换货运费：</span><span class="Yellow" id="f_feight2">0</span><span>&nbsp;元</span>
              </p>
              <div class="buy ylbgbd mt5">
                
                    <p data-property="颜色" class="attrib" id="imgBtn_0">
                      <span class="fl" style="display:inline;">颜色</span>
                    <!-- <span class="fl prodSpec" style="display:inline;width:400px;margin-left:2px;"> -->
                        <?php if(is_array($nums)): foreach($nums as $key=>$con): ?><input type="hidden" value="<?php echo ($con[id][0]); ?>" name="src" class="src"/><?php endforeach; endif; ?>
                        <?php if(is_array($src)): foreach($src as $key=>$srcs): ?><a  id="select" class="se"  data-name="黑色">
                            <img width="40" height="40" src="/Public/Home/images/carousel/<?php echo ($srcs[src][0]); ?>" alt="黑色" midpic="/Public/Home/images/index/100057932_01_s.jpg?1"/>
                            <img class="picon" width="12" height="12" src="/Public/Home/images/index/picon.gif" alt=""/>
                            <i></i></a><?php endforeach; endif; ?>        
              </span>
                    </p>
                
                
                    <p data-property="尺码" class="prosize">
                    <span class="fl" style="display:inline;">尺码</span>
                    <span class="fl prodSpec size" id="size">
                      <?php if(is_array($size)): foreach($size as $key=>$vsize): ?><a data-value="size_s350" id="onSize" class="onSize" data-name="<?php echo ($vsize["size"]); ?>"><?php echo ($vsize["size"]); ?><i></i></a><?php endforeach; endif; ?>

                    </span>
                      
                    </p>
                
                
                    <p class="num">
                      <span class="nums">数量</span>
                      <span><a href="javascript:void(0);" id="bot_subtract" class="subtract"></a><em class="numdis"><input type="hidden" name="oldNum" class="oldNum"/><input type="text" value="1" maxLength="1"  class="mycartxt newNum"/></em>
                      <a href="javascript:void(0);" id="bot_plus" class="plus" style="url('/Public/Home/images/index/jiajian.gif') no-repeat scroll 0 0 rgba(0, 0, 0, 0)"></a>
                      </span>
                      <span class="selected"><span>已选择</span><span class='Red'> 
                      <?php if(is_array($color)): foreach($color as $key=>$cov): ?><strong class="color"><?php echo ($cov["color"]); ?></strong><?php endforeach; endif; ?>
                      <strong class="selectsize"></strong></span></span>
                      <span id="stockinfo"><b class="Green"></b></span>
                      <span id="huotips"></span>
                    </p>
                    
                        <p class="c9 col">本商品由<strong id="ShopName">品牌商</strong>直接发货
                    
                    </p>
                    <p class="blank8"></p>
                    <p class="qbuy">
                      <a id="buyNow" class="lj2" href="javascript:void(0)"></a>
                      <a id="addShoppingCart" class="ks2 addShoppingCart" href="javascript:void(0)"></a>
                      <a id="qrButton" class="qrButton Gray" href="javascript:void(0)"><strong class="yahei qrButtonText">手机下单惊喜连连</strong></a>
                    </p>
                
                <p class="mt5 soldoutdiv">猜您喜欢：</p>
                <p class="blank8 soldoutdiv"></p>
              </div>
              <div style="padding: 10px 0px 16px 0px;border:1px solid #E7E7E7" id="guessUlike" class="mt5 soldoutdiv">
                  <ul style="list-style:none;"></ul></div>
              <p class="blank8"></p>
              <div>
              </div>
              <!--收藏 2014-07-16 start-->
              <div class="online_sc f_gray clearfix mt10">
                <span class="good_sc goodsClear" id="favoriteImg"><a class="Blue" href="javascript:void(0)"><i></i>收藏商品</a></span>
                <a title="在线咨询" onclick="javascript:NTKF.im_openInPageChat();" class="lnk-ntalker Blue">在线咨询</a>
              </div>
              <!--收藏 2014-07-16 end-->
              <!--新服务承诺2012-12-17 start-->
              <dl class="ser_promise clearfix mt10">
                <dt>服务承诺</dt>
                <dd>
                  <ul>
                    <li class="promise1">
                      <h3>商品保证</h3>
                      <a href="http://www.yougou.com/help/aboutus.html" target="_blank" rel="nofollow">100%正品</a>
                    </li>
                    <li class="promise2">
                      <h3>退换货服务</h3>
                      <a href="http://www.yougou.com/help/returnpolicy.html" target="_blank" rel="nofollow">10天退换货</a>
                    </li>
                    <li class="promise3">
                      <h3>价格保障</h3>
                      <a href="http://www.yougou.com/help/priceprotection.html" target="_blank" rel="nofollow">10天补差价</a>
                    </li>
                  </ul>
                </dd>
              </dl>
              <!--新服务承诺2012-12-17 end-->
        </div>
</div>
<!-- <p class="blank10"></p> -->
<!--组合销售 start-->
<div class="bindSaleTj js-tab">
  <div class="bindSt bindTj js-tab-bd"></div>
</div>
<div id="solookbuy" class="bindSt bindTj js-tab-bd">
  <div class="buyGuds buyGuds">
    <p class="guesstit">浏览了本商品的用户最终购买</p>
    <p class="guess-page buyGud-page"></p>
    <a href="javascript:;" class="buyprev buyGudsprev"></a>
    <a href="javascript:;" class="buynext buyGudsnext"></a>
    <div class="guessGudsBox3 buyGuds">
      <ul style="left: 0px;" class="guessGudsList">
      </ul>
    </div>
  </div>
</div>
<!--组合销售\同类商品推荐 end-->
<!--商品介绍tab开始-->
<div class="blank20"></div>
<!-- 右则列表start -->
<!-- 右则列表2012-12-10 start -->
<div class="goods_rc fr">
  <!--浏览最终买start-->
    <div class="good_rList mt10">
      <h3 class="fz12px">浏览了本商品的用户最终购买</h3>
      <ul id="viewbuy2" class="pro_endBuy">
      </ul>
    </div>
  <!--浏览最终买end-->
    <!--如果设置为false，则不显示-->
    
    <!--原猜您喜欢现在其他相似商品start-->
      <div class="good_rList mt10">
        <h3 class="fz12px">其他相似商品</h3>
        <ul id="otherlikegoods2" class="pro_otherPro">
        </ul>
      </div>
    <!--原猜您喜欢现在其他相似商品end -->
    <!-- 想买还想买start -->
      <div class="good_rList mt10">
        <h3 class="fz12px">购买了该商品的用户还购买了</h3>
        <ul id="buybuy2" class="pro_otherPro">
        </ul>
      </div>
    <!-- 想买还想买end -->
            <!-- 其它商品品类推荐start  goods_brandCate.ftl -->
              <!-- 其它商品品类推荐start /inc/hotgoods/brand/b_Nv58/c_M0_v2.shtml -->
              
File Not Found
              <!-- 其它商品品类推荐end -->
              
                <!--右侧品牌介绍start-->
                <div class="brand_box mt10">
                  <h3>
                      <!--fss url 2014-11-10 02:00:02-->
          <a href="/index.php/Flagship/index/id/<?php echo ($sale["id"]); ?>" target="_blank" class="Blue">
            <input id="saleId" type="hidden" name="sale" value="<?php echo ($sale["id"]); ?>"/>
                      
                      <img style="height:40px;" src="/Public/Home/images/carousel/<?php echo ($sale["upic"]); ?>" width="85" height="40" alt="<?php echo ($sale["brand"]); ?>" /></a></h3>
                  
                  <div class="bcon"><?php echo ($sale["content"]); ?></div>
                  <div class="bshop">
                    商&nbsp;&nbsp;&nbsp;家：
                    
                    <a href="/index.php/Flagship/index/id/<?php echo ($sale["id"]); ?>" target="_blank" class="Blue"><?php echo ($sale["shopname"]); ?></a>
                    
                  </div>
                  <div class="bbtn clearfix">
        <span class="btn-org31">
                    
                    <a href="/index.php/Flagship/index/id/<?php echo ($sale["id"]); ?>" target="_blank" class="Blue">店铺首页<span class="flag-arrow"></span></a>
                    
        </span>
                  </div>
                </div>
                <!--右侧品牌介绍end-->
              
              <!-- 右侧导出活动广告开始 -->
              <!-- 暂时只支持上传图片  -->
              <!-- 右侧导出活动广告结束 -->
</div>
   

<!-- 右则列表end -->
<!--2013-02-18 左侧内容开始 start-->
<div class="goods_lc" id="goods_lc">
  <div class="goods_lc_triggle" id="goodsBar1">
    <a href="#goods_lc" class="elect current">商品详情</a>
    <a class="elect" href="#goods_comment">商品点评<em id="comment_count" class="ygprc14"><i></i></em></a>
    <a class="elect" href="#goods_lc_bz">购物保障<i class="newtip"></i></a>
  <!--   <a class="elect" href="#goods_lc_thhwy">退换货无忧</a>
    <a class="elect" href="#goods_lc_pay_send">支付与配送</a>
    <a class="elect" href="#goods_lc_xuanxie">按脚型选鞋</a>
    <a class="elect" href="#goods_foot_item">如何保养</a> -->
  </div>
  <div class="goods_lc_box">
    <!--商品详情开始-->
    <div class="goods_lc_item">
      <div class="bd">
        <div class="goods_lc_tb">
          <?php echo ($vo["content"]); ?>  
        </div>
      </div>
    </div>
    <!--商品详情结束-->
    <!--商品点评start-->
    <div class="goods_lc_item" id="goods_comment">
      <div class="hd mt20 clearfix">
        <h3 class="hd_t fl">商品点评</h3>
        <p class="hd_tip fr">购买过该商品的用户才能进行评论</p>
      </div>
      <div class="bd">
        <div id="dpbox">
          <div id="userCommentContainer">
<!--点评汇总start-->
  <div class="usercomm_top">
    <div class="usercomm_top_lbox fl"> 
      <label class="fl">商品满意度：</label>
      <div class="fl">
      <?php if($score == 10): ?><div id="re" class="rate_point_b Red point5b_0 "><?php echo ($score); ?>分</div><?php endif; ?>     
      <?php if($score == 9): ?><div id="re" class="rate_point_b Red point4b_1 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 8): ?><div id="re" class="rate_point_b Red point4b_0 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 7): ?><div id="re" class="rate_point_b Red point3b_1 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 6): ?><div id="re" class="rate_point_b Red point3b_0 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 5): ?><div id="re" class="rate_point_b Red point2b_1 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 4): ?><div id="re" class="rate_point_b Red point2b_0 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 3): ?><div id="re" class="rate_point_b Red point1b_1 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 2): ?><div id="re" class="rate_point_b Red point1b_0 "><?php echo ($score); ?>分</div><?php endif; ?>      
      <?php if($score == 1): ?><div id="re" class="rate_point_b Red point1b_0 "><?php echo ($score); ?>分</div><?php endif; ?>     
        <p id="Gray" class="Gray">此商品共<?php echo ($count); ?>人评价</p>
      </div>
    </div>
    <div class="usercomm_top_cbox fl">
        <div><b class="Red" id="Red"><?php echo ($count); ?>位已购买用户</b>对尺码大小的评价</div>
      <p><span>实际尺码<strong>适合&nbsp;&nbsp;&nbsp;：</strong></span><span class="point"><i class="tif" style="width:<?php echo ($fit); ?>%;"></i></span><span id="fit" class="result"><?php echo ($fit); ?>%</span></p>
      <p><span>实际尺码<strong>不合适：</strong></span><span class="point"><i class="ntif" style="width:<?php echo ($nfit); ?>%;"></i></span><span id="nfit" class="result"><?php echo ($nfit); ?>%</span></p>
      
    </div>
    <div class="usercomm_top_rbox fl">
      <p class="Gray">我购买过此商品</p>
      <p><a style="outline: medium none;" class="buybtn block" href="javascript:void(0)" onclick="javascript:newComment(&quot;2ffbb2cc9d034b7c83f822731c4a18e4&quot;);return false;">我要写点评</a></p>
    </div>
  </div>
<!--点评汇总end-->

<!--点评正文 start-->
<div class="blank15"></div>
<div class="pdlr20 mgt8">
  <div class="tright">
      <span><input id="allCmmnt" name="cmmntLst" onclick="YGG.Module.getComment();" value="0" checked="" type="radio"><label for="allCmmnt" style="cursor:pointer"> 全部评价</label><em class="ca">（<?php echo ($count); ?>）</em></span>
        <span class="ml10">
    </div>
  <div id="userCommentContainer-1">
      <input id="pageSize" value="10" type="hidden">
      <input id="pageNo" value="1" type="hidden">
      <input id="totalCount" value="26" type="hidden">
     <?php if(is_array($page)): foreach($page as $key=>$pa): ?><div class="usercomm_content_box">
        <div class="member_info">
          <a href="javascript:void(0);" class="Blue">
                  <img src="/Public/Home/images/index/SVIP.jpg">
          <br>
                <?php echo ($pa["uname"]); ?>
          </a>
        </div>
        <div class="comm">
          <p>
            <span class="fl">
              <span class="Red">商品评分：</span>
              <?php if($pa["score"] == 10): ?><span class="rate_point_s point5s_0"><?php endif; ?>             
              <?php if($pa["score"] == 9): ?><span class="rate_point_s point4s_1"><?php endif; ?>
              <?php if($pa["score"] == 8): ?><span class="rate_point_s point4s_0"><?php endif; ?> 
              <?php if($pa["score"] == 7): ?><span class="rate_point_s point3s_1"><?php endif; ?> 
              <?php if($pa["score"] == 6): ?><span class="rate_point_s point3s_0"><?php endif; ?>         
              <?php if($pa["score"] == 5): ?><span class="rate_point_s point2s_1"><?php endif; ?>            
              <?php if($pa["score"] == 4): ?><span class="rate_point_s point2s_0"><?php endif; ?>              
              <?php if($pa["score"] == 3): ?><span class="rate_point_s point1s_1"><?php endif; ?>              
              <?php if($pa["score"] == 2): ?><span class="rate_point_s point1s_0"><?php endif; ?>              
              <?php if($pa["score"] == 1): ?><span class="rate_point_s point5s_0"><?php endif; ?>
              </span><span class="buytime">购买时间：<?php echo date('Y-m-d H:i:s',$pa['addtime']);?></span>　<span >店铺:<?php echo ($pa["color"]); ?></span>
            </span>

          </p>
          <p class="clear"></p>
            <p>
              <span class="Red">尺码大小评价：</span>
               <?php if($pa["size"] == 0): ?>尺码适合<?php endif; ?>             
               <?php if($pa["size"] == 1): ?>尺码不适合<?php endif; ?>
            </p>
          <p>
            <span class="Red">点评内容：</span><?php echo ($pa["review"]); ?>
          </p>          
          <p>
            <span class="Red">店家回复：</span><?php echo ($pa["replay"]); ?>
          </p>
          <!--如果有客服回复则显示客服回复-->
          <!--客服回复结束-->
          <p class="line"></p>

                
          <p class="comm_arr"></p>
          <p class="clear"></p>
        </div>
      </div><?php endforeach; endif; ?>

    </div>
    <div class="blank10"></div>
  </div>
  <!--点评正文 end-->
          </div>
          <!-- 点评内容分页start -->
      </div>
    </div>
    <!--商品点评end-->
    <!--购买保障start-->
    
    <div class="goods_lc_item" id="goods_lc_bz">
  <div class="hd mt20 clearfix">
    <h3 class="hd_t fl">购物保障</h3>
  </div>
  <div class="bd">
    <ul class="goods_lc_list1">
      <li class="li">
        <span class="ico ico1"></span>
        <h4>100%正品保证</h4>
        <p class="li_gs">诚信为本，100%正品，优购销售的商品均为品牌商直接供货</p>
        <p>国内最大鞋服类B2C之一优购以经营优质、名品鞋类为主，以优质、时尚为网站定位，以用户体验、服务至上为宗旨，依托投资方百丽国际强大的供应链、资金及品牌优势，经营范围涉及"男鞋、女鞋、男装、女装、运动、户外、童鞋、箱包" 八大品类，涵盖百丽、天美意、莱尔斯丹、fed、哈森、森达、季候风、OZZO、利郎、耐克、阿迪达斯、CAT、哥伦比亚等数百个知名品牌，数十万款商品</p>
      </li>
      <li class="li">
        <span class="ico ico2"></span>
        <h4>10天退换货服务</h4>
        <p class="li_gs">优购为您提供10天（自签收之日起）退换货服务，让您购物零风险</p>
        <table class="goods_lc_table1 thfw_table">
          <colgroup>
            <col width="50%" />
            <col width="50%" />
          </colgroup>
          <thead>
          <tr>
            <th>以下情况可办理退换货</th>
            <th>以下情况不可办理退换货</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td><div class="kth">商品不满意可退换</div></td>
            <td><div class="bkth">超过10天有效期不可退换</div></td>
          </tr>
          <tr>
            <td><div class="kth">尺码不适合可退换</div></td>
            <td><div class="bkth">商品无法二次销售不可退换</div></td>
          </tr>
          <tr>
            <td><div class="kth">质量问题可退换</div></td>
            <td><div class="bkth">鞋盒损坏、粘绑胶带不可退换</div></td>
          </tr>
          <tr>
            <td><div class="kth">配送错误可退换</div></td>
            <td><div class="bkth">商品相关附件丢失不可退换</div></td>
          </tr>
          </tbody>
        </table>
        <div class="mt10 relative">
          <p><span class="Yellow">温馨提示：</span>退换货时请将购物凭证随货寄回，并填写相关信息</p>
          <a href="http://www.yougou.com/help/returnprocess.html" target="_blank" class="show_dtl Blue">点击查看售后服务详细说明&gt;&gt;</a>
        </div>
      </li>
      <li class="li">
        <span class="ico ico3"></span>
        <h4>10天调价补差价</h4>
        <p class="li_gs">优购网商品售价（优购价）因季节等因素发生变化时，将给予顾客10天补差价</p>
        <p>即：在订单签收起10日内，如订单内商品降价<span class="Yellow">(优购价降价)</span>，您可以通过售后热线、在线客服、客服邮箱等方式申请价保，我们会在接到申请后，将您申请时的价格与您订购商品的价格差以礼品卡的形式予以返还。</p>
        <p class="mt5"><span class="Yellow">温馨提示：</span>退符合补差价条件的同款商品10天内仅享受一次补差价</p>
        <div class="jbyz_table">
          <h5>价保原则如下：</h5>
          <table class="goods_lc_table1">
            <colgroup>
              <col width="17%" />
              <col width="20%" />
              <col width="15%" />
              <col width="48%" />
            </colgroup>
            <thead>
            <tr>
              <th>什么时候申请？</th>
              <th>怎么申请？</th>
              <th>怎么返还？</th>
              <th>补差礼品卡使用规则</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>签收之日起10天内</td>
              <td>
                <ol class="ol_list">
                  <li>1、联系售后热线申请</li>
                  <li>2、联系在线客服申请<br /><a class="lnk-ntalker Blue" onclick="javascript:NTKF.im_openInPageChat();" title="在线咨询">在线咨询</a></li>
                  <li>3、发送客服邮箱申请<br /><span class="Blue">service@yougou.com</span></li>
                </ol>
              </td>
              <td>差价以礼品卡的形式予以返还</td>
              <td>
                <ol class="ol_list">
                  <li>1、礼品卡通常不受网站促销活动限制，可与优惠券同时使用（每张订单只能使用一张优惠券和一张礼品卡）</li>
                  <li>2、已享受补差的商品如发生退货，我司将作废礼品卡或直接从商品退款中扣除同等礼品卡金额</li>
                  <li>注：此规则从2012年12月5日起执行</li>
                </ol>
              </td>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="jbyz_table">
          <h5>不享受十天补差声明：</h5>
          <ol class="ol_list">
            <li>1、换货商品不享受十天补差价；</li>
            <li>2、秒杀、团购商品不享受十天补差；</li>
            <li>3、差价在5元或以下的不享受十天补差；</li>
            <li>4、购买时包含赠品的商品不享受十天补差；</li>
            <li>5、有售馨、断码标识、已下架的商品不享受十天补差价；</li>
            <li>6、如订单使用优惠券，申请退差后达不到优惠券使用条件的不享受十天补差；</li>
            <li>7、涉及全场活动，如：套餐组合、加价换购、满减、多件折等促销活动不享受十天补差；</li>
            <li>8、在线支付订单的部分商品补差剩余金额不满99元，按照订单99元免运费条件，需扣除15元运费计算补差。</li>
          </ol>
        </div>
      </li>
      <li class="li">
        <span class="ico ico4"></span>
        <h4>7×24小时贴心客服</h4>
        <p class="li_gs">优购客服中心为您提供<span class="Yellow">7×24小时全年无休</span>的优质服务<br />如果您有任何问题，欢迎与我们联系。<br/>客服邮箱：<span class="cblue">service@yougou.com</span></p>
      </li>
    </ul>
    <dl class="goods_lc_dl1">
      <dt>公司展示</dt>
      <dd><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/goods_detail_img1.jpg" /></dd>
      <dt>媒体报道</dt>
      <dd>
        <p>优购从2011年7月上线以来，历时3年的发展，依托百丽国际投资背景，凭借优质、时尚货品资源，新货占比量在70%以上，目前拥有用户量已超1200万，日均订单超16000单，已成为国内最大的时尚类电商购物平台之一，其快速发展历程也受到来自各大媒体的关注与聚焦。</p>
        <p class="news mt10">
          <a href="http://tech.huanqiu.com/Enterprise/2013-11/4551449.html" target="_blank" class="f_blue">双十一成交或超43万单</a><a href="http://tech.163.com/14/0507/19/9RLQ46QV000915I3.html" target="_blank" class="f_blue">优购、嘀嘀联手7日送出5亿元现金卡</a><a href="http://www.shbiz.com.cn/Item/231388.aspx" target="_blank" class="f_blue">优购进军服饰业不断引入国际大牌</a><a href="http://www.techweb.com.cn/news/2013-08-15/1317008.shtml" target="_blank" class="f_blue">诚信时代到来：优购推正品保障计划</a>
        </p>
        <p class="mt20 ml40"><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/danpin-8-1.png?2.9.4" /></p>
      </dd>
      <dt>热点问题</dt>
      <dd>
        <h5>订单生成后如何修改订单：</h5>
        <p>您的订单生成后，所有订单信息您将无法自行修改，如需修改可通过以下两种方式进行操作：<br />方法一：自主取消订单后重新订购商品<br />方法二：联系客服人员修改订单</p>
        <h5 class="mt20">如何查询订单配送情况：</h5>
        <p>订单发货后，无需致电客服查询物流进度，大约48小时后，自主登录优购网——“我的订单”中了解快递配送进度。</p>
        <h5 class="mt20">签收商品时，您需要注意的是：</h5>
        <p>第一步：检查物流包装、“优购安全封条”是否完好<br />第二步：开箱验货<br />第三步：1. 满意后再签收</p>
        <p style="margin-left:48px;"> 2. 商品不满意/存在质量问题：直接拒收</p>
        <p style="margin-left:48px;"> 3. 缺少商品，直接拒收</p>
      </dd>
    </dl>
    <div class="good_hot_issue">
      <dl>
        <dt><i class="ico_clr"></i>关于色差</dt>
        <dd>因拍照、灯光、各显示器显示效果不同等原因，实物与图片显示可能会有微弱色差，实际颜色以您收到的商品为准，色差问题不属于质量问题。</dd>
      </dl>
      <dl>
        <dt><i class="ico_size"></i>关于尺码</dt>
        <dd>因品牌尺码体系，鞋型及测量方法不同，商品实际尺码与我们提供的数据可能存在细微的差别，属正常现象，请您保留最终决定权。</dd>
      </dl>
      <dl>
        <dt><i class="ico_time"></i>关于发货</dt>
        <dd>由优购直接出库在线支付订单最快会在24小时内为您安排出库，系统会根据收货地址、商品库存等因素自动分配最近的仓库配送。</dd>
      </dl>
      <dl>
        <dt><i class="ico_truck"></i>物流公司</dt>
        <dd>优购目前不支持指定快递，系统会根据填写的收货地址自动分配圆通，申通，中通、通路、微特派等快递进行派送，客户在48小时后，自主登录优购网——“我的订单”中了解快递配送进度。</dd>
      </dl>
    </div>
  </div>
</div>
    <!--购买保障end-->
    <!--退换货无忧 start-->
    
    <div class="goods_lc_item none" id="goods_lc_thhwy">
      
</div>
    <!--退换货无忧 end-->
    <!--支付与配送 start-->
    
    <div class="goods_lc_item none" id="goods_lc_pay_send">
  <div class="bd">
    <p class="pay_t f_yellow">优购目前提供四种支付方式：信用卡支付（快捷支付）、第三方平台支付、网上银行、货到付款。</p>
    <dl class="goods_lc_dl1">
      <dt style="margin-top:10px;">信用卡支付（快捷支付）</dt>
      <dd>
        <p>快捷支付是第三方支付平台联合各大银行推出的全新的支付方式，是最安全、轻松的付款方式之一。<b>用户无需事先开通网银，只要输入卡面和手机动态口令等信息就能完成快速付款。</b>快捷支付让各类银行卡用户不需要特别开通网银就能方便地网上付款。它提供给用户更为便利的支付流程体验。</p>
        <h5 class="mt20">快捷支付常见问题：</h5>
        <ol class="goods_lc_ol1">
          <li>快捷支付分为多少种类型？<br />储蓄卡快捷支付和信用卡快捷支付两种。<br /><span class="f_yellow">优购为您提供的信用卡（快捷支付），是使用支付宝接口的信用卡快捷支付</span>，为了让您无更方便的使用，我们只是从支付平台（支付宝）前置出来了，没有支付宝账户也可以轻松完成支付。</li>
          <li class="mt20">没有开通信用卡，想要使用储蓄卡（借记卡）快捷支付怎么办？<br />请选择第三方平台支付的支付宝，登录支付宝后就可以选择储蓄卡（借记卡）快捷支付进行支付。</li>
        </ol>
      </dd>
      <dt>第三方平台支付包括：支付宝，快钱，财付通，手机支付</dt>
      <dd>
        <p><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/danpin-12.gif" /></p>
        <ol class="goods_lc_ol1 mt15">
          <li>支付宝：支付宝是由阿里巴巴公司为网络交易提供安全支付服务的第三方支付平台；</li>
          <li>快钱：国内领先的独立第三方支付企业，旨在为各类企业及个人提供安全、便捷和保密的综合电子支付服务；</li>
          <li>财付通：是腾讯公司创办的中国领先的在线支付平台，拥有QQ号即可使用；</li>
          <li>银联在线支付：是中国银联联合商业银行推出的线上支付平台，无需开通网银，选择银联在线支付方式就可支付成功。购物时，选择银联在线支付平台（无需选择银行），直接点击“确认订单，去支付”，订单提交成功后，点击“立即支付”，在支付页面输入用户名、密码、 手机校验码等相关信息就可完成支付。</li>
          <li>中国移动手机支付：就是允许移动用户使用其移动终端（通常是手机）对所消费的商品或服务进行账务支付的一种服务方式。手机支付的基本原理是将用户手机SIM卡与用户本人的银行卡账号建立一种一一对应的关系，用户通过发送短信的方式，在系统短信指令的引导下完成交易支付请求，操作简单，可以随时随地进行交易。</li>
        </ol>
      </dd>
      <dt>网上银行</dt>
      <dd>
        <p>优购支持中国工商银行、招商银行、中国农业银行、中国建设银行、中国银行、交通银行、兴业银行、 中国民生银行、广东发展银行、浦发银行、平安银行、北京银行、中国光大银行、中信银行、深圳发展银行等绝大多数银行借记卡及信用卡，即时到帐，准确快捷！</p>
        <p class="mt20 f_yellow">使用网上银行进行支付，必须先开通网上银行。</p>
        <h5>如何开通网上银行：</h5>
        <ol class="goods_lc_ol1">
          <li>您需要携带本人有效身份证件以及希望关联到网银的银行卡、存折等所有相关材料准备齐全，到银行柜台办理开通手续。为避免您多次往返银行，请一次性完成网银用户注册、关联网银账户、电子银行口令卡、开通短信认证、办理U盾等所有必要的手续。</li>
          <li>有部分银行可以到银行官方网在线自主开通，或者致电银行服务热线咨询。</li>
        </ol>
        <p class="mt15"><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/danpin-13.gif" /></p>
      </dd>
      <dt>货到付款</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li>由YouGou优购直接发货的商品，全国700多个地区使用货到付款的支付方式，仍有一部分地区由于较为偏远或承运的快递公司不提供代收货款的服务而暂时无法使用货到付款。由此给您造成的不便，还请您谅解。<a href="http://www.yougou.com/help/deliveryquery.html" target="_blank" class="f_blue">点击查询货到付款配送范围</a></li>
          <li>由品牌商直接发货的商品不支持货到付款，请您选择其他的支付方式，如：信用卡（快捷支付）、第三方支付、网上银行 ；</li>
          <li>如果您订单的商品分属在不同仓库，需要拆单发货，不支持货到付款，请选择其他的支付方式，如：信用卡（快捷支付）、第三方支付、网上银行。</li>
          <li>货到付款订单每单收取15元运费。</li>
        </ol>
        <p class="mt20"><a href="http://www.yougou.com/help/payonline.html" target="_blank" class="f_blue">更多详细帮助请点击&gt;&gt;</a></p>
      </dd>
      <dt>配送说明</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li><b>配送范围：</b><br />全国各地均可到达。（香港、澳门、台湾除外）。</li>
          <li class="mt20"><b>配送方式：</b><br />如发现快递人员没有按以上方式提供相应的服务，请马上与优购网客服人员联系，我们将以最快速度解决您的问题。</li>
          <li class="mt20"><b>配送时间：</b><br />在线支付订单，正常情况下支付成功后24小时之内出库。<br />客户可以登陆优购网，在"我的订单"中查询物流信息，或联系客服查询帮您的货物配送状态。</li>
          <li class="mt20"><b>配送异常：</b><br />如遇国家法定节假日或者是异常天气状况，订单配送可能会出现一定的延迟，敬请谅解！届时优购网会在首页发布公告，您可以随时关注。</li>
          <li class="mt20"><b>物流包装：</b><br />优购网采用统一的物流包装，保障商品在配送中的完整无损。<br />如有任何疑问请联系客服，我们将竭诚为您服务。</li>
        </ol>
      </dd>
    </dl>
  </div>
</div>
    <!--支付与配送 end-->
    <!--按脚型选鞋start 女鞋品类的时候才显示  -->
    
      
        <div class="goods_lc_item none" id="goods_lc_xuanxie">
  <div class="bd">
    <dl class="goods_lc_dl1">
      <dt>如何量脚</dt>
      <dd>
        <p class="fr" style="margin-left:10px;*margin-left:0;"><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/goods_detail_img2.jpg" /></p>
        <ol class="goods_lc_ol1">
          <li>准备一张A4大小的白纸、一支笔和一把软尺；</li>
          <li class="mt20">将脚轻踏于纸上，于脚趾最长处以及脚跟分别画一个点，再分别经过两点画垂直于脚的两条平行线，测量两线之间的距离。（注意：测量时双脚平行站立，体重均衡分在双脚上）</li>
          <li class="mt20">用软尺绕过前脚掌两边最宽处，测量趾围。</li>
        </ol>
        <p style="margin-top:34px;"><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/goods_detail_img3.jpg" /></p>
      </dd>
      <dt>不同脚型的尺码建议</dt>
      <dd>
        <p>注：实线为标准脚型，虚线为实际脚型。</p>
        <p><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/goods_detail_img4.jpg" /></p>
        <p>例如：脚长230，趾围210为标准脚型，若测量得到的实际脚长230，趾围205，则属于偏瘦脚型；若测量得到的实际脚长230，趾围215，则属于偏胖脚型；特殊脚型为脚掌侧骨较突出。</p>
        <p class="mt15"><img src="/Public/Home/images/index/blank.gif" original="http://s2.ygimg.cn/template/common/images/goods_detail_img5.gif" /></p>
      </dd>
    </dl>
  </div>
</div>
    
    <!--按脚型选鞋end-->
    <!-- 如何保养start -->
     
    <div class="goods_lc_item none" id="goods_foot_item">
  <div class="bd">
    <dl class="goods_lc_dl1">
      <dt>正确的穿鞋方法</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li>遇到新鞋不易上脚时，不要勉强，请用鞋拨相助。</li>
          <li>脱鞋时不要踩着后帮，以免出现塌跟变形。</li>
          <li>避免雨天湿滑地使用，不慎遇水应尽快以干布擦净，用纸擦好，放通风干燥处晾干，切忌阳光曝晒、水洗、火烤。如果处理不当，轻者鞋变型，皮面脱色，严重的会造成皮质变硬产生裂面或掉涂层。</li>
          <li>不可接触酸、碱、油溶剂等化工物品。很容易造成鞋底变型，开胶及皮面变色。</li>
          <li>深色真皮内里如受潮及磨擦产生掉色属正常现象，建议不要穿浅色袜子。皮鞋穿用时定期查看掌面（鞋跟着地的添加层）发现有深度磨损应及时更换。</li>
        </ol>
      </dd>
      <dt>运动鞋保养须知</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li>定期清洁鞋子。鞋面脏后，准备一块干净软布，一盆温水和清洁液轻拭；</li>
          <li>把软布完全浸湿，拧干、在布的角落倒点清洁液；</li>
          <li>在鞋面上打圈拭擦，去除鞋面污垢，小心不要把面弄得湿透；</li>
          <li>拿一把旧牙刷。清洁皱摺和接缝部位。小心轻刷，避免破坏缝线；</li>
          <li>清洗时不可使用漂白剂和切勿用刷子猛刷；</li>
          <li>皮质运动鞋应打油以保证皮质韧性；</li>
          <li>维持两双以上可替换的鞋子，让鞋子轮流休息；</li>
          <li>要注意专鞋专用、休闲鞋、凉鞋不宜做剧烈运动，室内运动鞋不宜在室外进行剧烈运动。</li>
        </ol>
      </dd>
      <dt>皮鞋保养须知</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li><b>光牛皮、乌面牛皮 保养：</b><br />最好不要在5℃以下穿着，在10℃以上穿着最佳，涂层不易折裂；表面保养最好用无色的高级鞋乳，不可用光亮剂类保养，否则会造成假性涂层脱落。</li>
          <li><b>平面漆皮、皱漆皮 保养：</b><br />皱漆皮是用中性的树脂涂料制成的，所以不易掉色，表面不易吸水，护理比较方便，表面灰尘可用干净的湿布（以不滴水为佳）轻轻擦洗干净，用不起绒的软布擦干净即可，也可用皮革清洗剂或清洁膏保养，但不能用光亮剂或鞋乳保养，光亮剂会造成假性涂层脱落，鞋乳会使鞋面发乌。皱漆皮最好在10℃以上穿着为佳。</li>
          <li><b>暗花羊皮保养：</b><br />方法比较容易，用较好的鞋乳、鞋膏均可，色彩选用无色的为佳。</li>
          <li><b>花纹羊皮、条纹格子皮保养：</b><br />不可用亮光剂，要用较好的无色高级鞋乳，保养时鞋乳不易太多，擦拭要均匀，处理后会发现皮面色略微加深，鞋乳挥发后基本恢复如初，如略有颜色变深属正常现象。</li>
          <li><b>水染皮、打腊牛皮保养：</b><br />水染皮、打腊牛皮是无涂层的皮料，容易吸收水份及污渍，彩色的更为突出，穿着时要注意避免水渍或其它污渍，保持鞋面清洁，不可雨淋，不穿时擦净灰尘用鞋乳保养，保持鞋面的光度，防止霉变。</li>
        </ol>
      </dd>
      <dt>布鞋保养须知</dt>
      <dd>
        <ol class="goods_lc_ol1">
          <li>刷鞋时切不可将鞋泡在水盆里，应蘸水刷；</li>
          <li>如遇雨水或鞋底被浸湿后，切不可摔拧，应及时刷净，鞋面朝上晾干，不可暴晒；</li>
          <li>绣花鞋、缎面鞋，因鞋面薄软，不能与硬物磕碰、刮蹭，以免破损；</li>
          <li>请您在存放时，将鞋置于阴凉通风处，切勿受潮。翻毛面料、毡绒里应放樟脑防虫蛀;</li>
          <li>全棉、真丝、沙丁等。不能用水刷洗，布面有污渍使用干净的白布粘取少量布料清洁剂擦拭．再改用清水擦拭．如果清洁后，鞋面有轻微的分层，在布面还没有全干透时，用手捏住鞋面和里捋平服即可。如果分层比较严重，在鞋面垫上白布，用烫斗加热加压15秒左右,并放置1小时以上再穿。</li>
        </ol>
      </dd>
    </dl>
  </div>
</div>
    <!-- 如何保养end -->
  </div>
</div>
<!--2013-02-18 左侧内容结束 end-->
</div>
<p class="blank8"></p>
<!--底部最近浏览与才你喜欢start-->
<div class="histyGuessGuds" id="histyGuessGuds">
  <div class="histyGuds">
    <div class="histytit">
      <h3>最近浏览</h3>
      <ul class="qiehuan">
        <li class="hisprev">&lt;</li>
        <li>1</li>
        <li>/</li>
        <li>0</li>
        <li class="hisnext">&gt;</li>
      </ul>
    </div>
    <div class="histyGudsul">
      <ul id="historyGoods2" style="top: 0px;"></ul>
    </div>
  </div>
  <div class="guessGuds goodsTjCon">
  </div>
</div>
<!--底部最近end-->
<p class="blank8"></p>
<!--遮罩-->
<div class="body_mask"></div>
<!--底部购买导航start-->
<div class="bot_buy_nav fixed_bottom" id="botBuyNav">
  <div class="bot_buyLeft">
    <p class="bot_buyLeft_content"><i></i></p>
  </div>
  <div class="bot_buyRight">
    <p class="bot_buyRight_content"><i></i></p>
  </div>
  <div class="bot_buyMiddle">
    <div class="bot_buyContent art_size_select">
      <!--尺码-->
      
          
          <p data-property="尺码" class="prosize">
    <span class="fl" style="display:inline;">尺码</span>
  <span class="fl prodSpec size" style="display:inline;width:400px;margin-left:10px;">
    
      <a data-value="size_s350" data-name="35">35<i></i></a>
    
      <a data-value="size_s360" data-name="36">36<i></i></a>
    
      <a data-value="size_s370" data-name="37">37<i></i></a>
    
      <a data-value="size_s380" data-name="38">38<i></i></a>
    
      <a data-value="size_s390" data-name="39">39<i></i></a>
    
      <a data-value="size_s400" data-name="40">40<i></i></a>
    
  </span>
</p>
      
      <!--数量-->
      <p class="num">
        <span class="nums">数量</span>
        <span><a href="javascript:void(0);" id="subtract" class="subtract"></a><em class="numdis"><input type="hidden" name="oldNum" class="oldNum"/><input type="text" value="1" maxLength="1" onbeforepaste="clipboardData.setData('text ',clipboardData.getData('text ').replace(/[^\d]/g, ' ')) " class="mycartxt newNum"/></em><a href="javascript:void(0);" class="plus" id="plus"></a></span>
        <span id="huotips"></span>
      </p>
      <span class="buySel selected">已选择 <strong class="Red">黑色</strong><strong class="selectsize Red"></strong></span>
      <a href="javascript:void(0);" class="bot_buy_buybtn" id="botBuybtn">立即购买</a>
      <a href="javascript:void(0);" class="bot_buy_cartbtn" id="botCartbtn">加入购物车</a>
      <i class="bot_buy_caption"></i>
      <i class="bot_buyClose" id="bot_buyClose"></i>
    </div>
  </div>
</div><?php endforeach; endif; endforeach; endif; ?>
<!-- 优购导购 --> 

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