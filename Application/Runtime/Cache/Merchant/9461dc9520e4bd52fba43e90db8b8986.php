<?php if (!defined('THINK_PATH')) exit(); if(session('salename') === null): ?><script>
		alert('请先登录！');
		location.href="/merchant.php/Merchant/LoginReg/login";
	</script><?php endif; ?>
<html lang="en">
	<!-- container-fluid -->
	<head>
		<title>      
		商家管理
		</title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="/Public/Merchant/width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="/Public/Merchant/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/Public/Merchant/css/bootstrap-responsive.min.css" />
		<link rel="stylesheet" href="/Public/Merchant/css/bootstrap-theme.css" />
		<link rel="stylesheet" href="/Public/Merchant/css/fullcalendar.css" />	
		<link rel="stylesheet" href="/Public/Merchant/css/unicorn.main.css" />
		<link rel="stylesheet" href="/Public/Merchant/css/unicorn.grey.css" class="skin-color" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="/Public/Merchant/js/jquery.min.js"></script>
		<script src="/Public/Merchant/js/jquery.js"></script>
	</head>
	<body>
		
			
		
		
		<div id="header">
			<h1><a href="./dashboard.html">三合</a></h1>		
		</div>
		
		<div id="search">
			<img src="/Public/Merchant/img/ftlogo.png">
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
            <ul class="nav btn-group">
                <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text" style="color:#888;font-size:12px;"><?php echo ($_SESSION['salename']); ?></span></a></li>

                <!-- <li class="btn btn-inverse dropdown" id="menu-messages"><a href="/merchant.php/Merchant/Index/newmessage"><i class="icon icon-envelope"></i> <span class="text" style="color:#888;font-size:12px;">消息</span> <span class="label label-important" style="color:#888;font-size:12px;color:red">!</span> <b class="caret"></b></a>
                </li> -->
         
                <li class="btn btn-inverse"><a title="" href="/merchant.php/Merchant/LoginReg/logout"><i class="icon icon-share-alt"></i> <span class="text" style="color:#888;font-size:12px;">注销</span></a></li>
            </ul>
        </div>
            
		<div id="sidebar">
			
			<ul>
			
				<li class="active"><a href="/merchant.php/Merchant/Index/index"><i class="icon icon-home"></i> <span>商家操作控制台</span></a>
				</li>
				
			
				
				<li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>信息配置</span> <span class="label">3</span></a>
					<ul>
						<li><a href="/merchant.php/Merchant/infoSettings/basicInformation">基本信息</a></li>
						<li><a href="/merchant.php/Merchant/infoSettings/shopInfo">店铺介绍</a></li>
						<li><a href="/merchant.php/Merchant/infoSettings/changePass">密码修改</a></li>
						<li><a href="/merchant.php/Merchant/infoSettings/shopLogo">店铺logo</a></li>
					</ul>
				</li>
			
			

			
				<li class="submenu">
					<a href="#"><i class="icon icon-file"></i> <span>商品管理</span> <span class="label">4</span></a>
					<ul>
						<li><a href="/merchant.php/Merchant/goodsAction/addGoods">添加商品</a></li>
						<li><a href="/merchant.php/Merchant/goodsAction/goodsMana">商品操作</a></li>
					</ul>
				</li>
			
			
				<li class="submenu">
					<a href="#"><i class="icon icon-tint"></i> <span>订单管理</span><span class="label">2</span></a>
					<ul>
						<li><a href="/merchant.php/Merchant/Orders/effectiveOrder">待发货订单</a></li>
						<li><a href="/merchant.php/Merchant/Orders/finishedOrder">已完成订单</a></li>
					</ul>

				</li>
			

				
				<li class="submenu">
					<a href="#"><i class="icon icon-pencil active"></i> <span>申请闪团</span><span class="label">2</span></a>
					<ul>
						<li><a href="/merchant.php/Merchant/Group/add">添加闪团商品</a></li>
						<li><a href="/merchant.php/Merchant/Group/groupList">闪团商品列表</a></li>
					</ul>

				</li>
						

				
				<li class="submenu">
					<a href="#"><i class="icon icon-th-list"></i> <span>留言管理</span><span class="label">2</span></a>
					<ul>
						<li><a href="/merchant.php/Merchant/Accessory/notMessage">回复留言</a></li>
						<li><a href="/merchant.php/Merchant/Accessory/searchMessage">回复内容</a></li>
					</ul>
				</li>
				
				
				<li class="btn btn btn-danger"><a href="/merchant.php/Merchant/Index/ourgroup"><span>三合网络工作室</span></a></li>
			</ul>
		
		</div>
		
		
		
		<div id="content">
			
<br/>
<h2 align="center" style="color:purple">
三合网络
</h2>
<link href="/Public/Merchant/group/css/style.css" type="text/css" rel="stylesheet" />
<div class="qixi">

    <div class="relian">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/relian.jpg" /> <img src="/Public/Merchant/group/images/relian2.jpg" /> </div>
        </div>
    </div>

    <div class="miyue">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/miyue.jpg" /> <img src="/Public/Merchant/group/images/miyue2.jpg" /> </div>
        </div>
    </div>
    
    <div class="qinzi">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/qinzi.jpg" /> <img src="/Public/Merchant/group/images/qinzi2.jpg" /> </div>
        </div>
    </div>

    <div class="jiqing">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/jiqing.jpg" /> <img src="/Public/Merchant/group/images/jiqing2.jpg" /> </div>
        </div>
    </div>

    <div class="xfq">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/xfq.jpg" /> <img src="/Public/Merchant/group/images/xfq2.jpg" /> </div>
        </div>
    </div>

    <div class="qianshou">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/qianshou.jpg" /> <img src="/Public/Merchant/group/images/qianshou2.jpg" /> </div>
        </div>
    </div>
    
    <div class="jiqing2">
        <div class="pic">
            <div class="pic2"> <img src="/Public/Merchant/group/images/jiqing3.jpg" /> <img src="/Public/Merchant/group/images/jiqing4.jpg" /> </div>
        </div>
    </div>
    
</div>
<br>
<br>
<br>
<center>
<p style="font-size:20px">
    如有问题，请与三合网络联系<br>
    电话：<span style="color:green;font-weight:800">15010831191</span>　　　
    邮箱：<span style="color:green;font-weight:800">sanhe@lampbrother.net</span>
</p>
</center>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    
    $(".qixi > div").hover(function(){
        $(this).find('.pic2').stop().animate({top:-$(this).find(".pic2 > img").height()},200);                          
    },function(){
        $(this).find('.pic2').stop().animate({top:'0'},200);    
    });
    
});
</script>


		</div>
<script src="/Public/Merchant/js/excanvas.min.js"></script>
<script src="/Public/Merchant/js/jquery.ui.custom.js"></script>
<script src="/Public/Merchant/js/bootstrap.min.js"></script>
<script src="/Public/Merchant/js/jquery.flot.min.js"></script>
<script src="/Public/Merchant/js/jquery.flot.resize.min.js"></script>
<script src="/Public/Merchant/js/jquery.peity.min.js"></script>
<script src="/Public/Merchant/js/fullcalendar.min.js"></script>
<script src="/Public/Merchant/js/unicorn.js"></script>
<script src="/Public/Merchant/js/unicorn.dashboard.js"></script>
<!-- kindeditor编辑器 -->


<script charset="UTF-8" src="/Public/kindeditor/kindeditor-min.js"></script> 
<script charset="UTF-8" src="/Public/kindeditor/lang/zh_CN.js"></script> 

<script> 

var editor; 
KindEditor.ready(function(K) { 
editor = K.create('textarea[name="content"]', { 
                allowFileManager : true 
            }); 
               
        }); 
</script>


</body>
</html>