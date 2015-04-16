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
			
			
	<li class="submenu active open">
		<a href="#"><i class="icon icon-tint"></i> <span>订单管理</span><span class="label">2</span></a>
		<ul>
            <li class="active"><a href="/merchant.php/Merchant/Orders/effectiveOrder">待解决订单</a></li>
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
			
<div id="content-header">
				<h1>会员订单</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Order</a>
				<a href="#" class="current">set</a>
			</div>
		
    <!-- 搜索 -->
    <form action="/merchant.php/Merchant/Orders/searchorders" method="post">
        <input type="text" name="ordernumber" style="margin-left:12px;width:200px" placeholder="请输入查询订单编号">
        <button type="submit" class="btn btn-info btn-sm">查询</button>
    </form>
			
<div class="table-responsive">
  <table class="table table-hover" style="font-size:14px;color:#666">
    <tr class="one">
        <th>#</th>
    	<th>用户名</th>
    	<th>订单编号</th>
    	<th>联系人</th>
    	<th>联系地址</th>
    	
    	<th>电话</th>
    	<th>总金额</th>
        <th>发货状态</th>
        <th>下单时间</th>
    	
    	<th >操作</th>
    </tr>
    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr align="center" class="content">
            <td><?php echo ($vo["str"]); ?></td>
    		<td><?php echo ($vo["buyuser"]); ?></td>
    		<td><?php echo ($vo["ordernumber"]); ?></td>
    		<td><?php echo ($vo["linkname"]); ?></td>
    		<td><?php echo ($vo["address"]); ?></td>
    		<td><?php echo ($vo["phone"]); ?></td>
            <td><?php echo ($vo["total"]); ?></td>
    		<td name="status">

              <?php switch($vo["status"]): case "0": ?><a href="/merchant.php/Merchant/Orders/sendGoods?id=<?php echo ($vo["id"]); ?>"><span style='color:blue'><b>发货</b></span></a><?php break;?> 
                    <?php case "1": ?><php><span style='color:purple'>等待买家收货</span><?php break;?>    
                    <?php case "2": ?><span style='color:green'>交易完成</span><?php break;?>    
                    <?php case "3": ?><span style='color:#333'>退货</span><?php break; endswitch;?>
            </td>


    		<td><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
    		<td ><a href="/merchant.php/Merchant/Orders/introOrder?number=<?php echo ($vo["ordernumber"]); ?>" class="btn btn-warning btn-xs">查看详情</a></td>
    	</tr><?php endforeach; endif; ?>
  </table>
  <div align="right"><?php echo ($page); ?></div>
</div>



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