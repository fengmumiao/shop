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
			
 	<li><a href="/merchant.php/Merchant/Index/index"><i class="icon icon-home"></i> <span>商家操作控制台</span></a></li>

				
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
						

				
		<li class="submenu active open">
			<a href="#"><i class="icon icon-th-list"></i> <span>评论管理</span><span class="label">5</span></a>
			<ul>
				<li><a href="/merchant.php/Merchant/Accessory/notMessage">回复留言</a></li>
				<li class="active"><a href="/merchant.php/Merchant/Accessory/searchMessage">回复内容</a></li>
				<!-- <li><a href="/merchant.php/Merchant/Accessory/intergrationAction">积分管理</a></li>
				<li><a href="/merchant.php/Merchant/Accessory/giftAction">礼品卡管理</a></li>
				<li><a href="/merchant.php/Merchant/Accessory/couponAction">优惠券管理</a></li> -->
			</ul>
			</li>
			
				
				<li class="btn btn btn-danger"><a href="/merchant.php/Merchant/Index/ourgroup"><span>三合网络工作室</span></a></li>
			</ul>
		
		</div>
		
		
		
		<div id="content">
			
<br/>
<h3>所有留言</h3>
<table class="table table-bordered table-hover">
		<tr bgcolor="#7e99e7">
			<td>用户名</td>
			<td>购买商品编号</td>
			<td>留言内容</td>
			<td>回复内容</td>
			<td>留言评分</td>
			<td>回复时间</td>
			<td>评论详情</td>
		
		</tr>
	<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
			<td><?php echo ($vo["uname"]); ?></td>
			<td><a href="/merchant.php/Merchant/GoodsAction/goodsIntro?id=<?php echo ($vo["id"]); ?>"><b><?php echo ($vo["goodsnumber"]); ?></b></a></td>
			<td><?php echo (mb_substr($vo["review"],0,6,'utf-8')); ?></td>
			<td><?php echo (mb_substr($vo["replay"],0,6,'utf-8')); ?></td>
			<td><?php echo ($vo["score"]); ?></td>
			<td><?php echo (date("Y-m-d H:i:s",$vo["replaytime"])); ?></td>
			<td><button  class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" name="messageinfo">评论详情</button></td>
		</tr>
	
		<tr style="display:none">

			<td colspan="6">买家	
			<b style="color:red"><?php echo ($vo["uname"]); ?></b>
			留言:<p style="color:blue">　　　　<?php echo ($vo["review"]); ?>　　　　　　<?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></p>

			
			
		<div style="float:right">店家
			<b style="color:green"><?php echo ($_SESSION['salename']); ?></b>
			回复:<p style="color:orange;">　　　　<?php echo ($vo["replay"]); ?>　　　　　　<?php echo (date("Y-m-d H:i:s",$vo["replaytime"])); ?></p>
			</div>
			</td>
			<td>
				<button class="btn btn-warning" name="close">收起</button>
				<a href="delMessage?id=<?php echo ($vo["id"]); ?>" class="btn btn-danger">删除</a>
			</td>
		</tr><?php endforeach; endif; ?>
	<tr align="center"><td colspan="7"><?php echo ($page); ?></td></tr>
</table>
<script type="text/javascript">

	$("button[name=messageinfo]").click(function(){
		
		$(this).parent().parent().next().css('display','')
		})

	$("button[name=close]").click(function(){
		
		$(this).parent().parent().css('display','none')
		})
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