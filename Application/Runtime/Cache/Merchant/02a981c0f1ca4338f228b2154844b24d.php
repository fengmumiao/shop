<?php if (!defined('THINK_PATH')) exit(); if(session('salename') === null): ?><script>
		alert('请先登录！');
		location.href="/merchant.php/Merchant/LoginReg/login";
	</script><?php endif; ?>
<html lang="en">
	<!-- container-fluid -->
	<head>
		<title>      
		商家管理-配货说明
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
			
			

			
	<li class="submenu active open">
		<a href="#"><i class="icon icon-file"></i> <span>商品管理</span> <span class="label">5</span></a>
		<ul>
			<li><a href="/merchant.php/Merchant/goodsAction/addGoods">添加商品</a></li>
			<li class="active"><a href="/merchant.php/Merchant/goodsAction/goodsMana">商品管理</a></li>
			<!-- <li><a href="/merchant.php/Merchant/goodsAction/shortGoods">缺货商品</a></li>
			<li><a href="/merchant.php/Merchant/goodsAction/payType">付款方式</a></li>
			<li class="active"><a href="/merchant.php/Merchant/goodsAction/goodsIntro">配货说明</a></li> -->
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
			
<style type="text/css">
	
	.intro{
		color:red;
	}
</style>
<form action="saveIntro" method="post">
<table class="table table-bordered table-hover">

<tr align="center">
	<td colspan="2">
	<b style="color:green"><?php echo ($data[0]['shopname']); ?></b></td>
</tr>
<tr>
	<td colspan="2">　　　　　　　商品名称 　　　<kbd><?php echo ($good[0]['goods']); ?></kbd>  　　　　　商品编号 　　　<kbd><?php echo ($good[0]['goodsnumber']); ?></kbd>　　　　所属品牌 　　　<kbd><?php echo ($data[0]['brand']); ?></kbd></td>
</tr>
<input type="hidden" name="id" value=<?php echo ($good[0]['id']); ?>>
<!-- 遍历商品属性 -->
<?php if(is_array($goodsinfo)): foreach($goodsinfo as $key=>$vo): ?><tr align="center">

		<td colspan="2">
		商品颜色:　<span class="intro"><?php echo ($vo["color"]); ?></span>　
		尺　　寸:　<span class="intro"><?php echo ($vo["size"]); ?></span>　
		数　　量:　<span class="intro"><?php echo ($vo["num"]); ?></span>　
		<a href="attrMana?id=<?php echo ($vo["id"]); ?>" class="btn btn-warning" style="float:right">操作该颜色商品</a> 
		<a href="delGoodsinfo?id=<?php echo ($vo["id"]); ?>" class="btn btn-danger" style="float:right">删除该颜色商品</a>
		
		
		</td>
	</tr><?php endforeach; endif; ?>
<?php if(is_array($picarr)): foreach($picarr as $key=>$yy): ?><tr align="center"><td colspan="2">
			
			<?php if(is_array($yy)): foreach($yy as $key=>$qq): ?><img src="/Public/Home/images/carousel/<?php echo ($qq); ?>"  class="img-thumbnail img-circle" width="140px"><?php endforeach; endif; ?>
		</td></tr><?php endforeach; endif; ?>


<tr class="danger">
	<td>商品属性</td>
	<td>流行元素:　<span class="intro"><?php echo ($goodsinfo[0]['popular']); ?></span>
			 　　性　　别:<select>
			 		<option value="1" class="sex">女</option>
			 		<option value="0" class="sex">男</option>
			 	  </select>
	<br/>
	商品款式:　<span class="intro"><?php echo ($goodsinfo[0]['type']); ?></span>
	 　　所属季节:<span class="intro"><?php echo ($goodsinfo[0]['season']); ?></span>
	<br>
		　　
	</td>
</tr>
<tr>
	<td>价格</td>
	<td>　市场价: <input type="text" name="price" placeholder="精确到俩位小数" value=<?php echo ($good[0]['price']); ?>> 　打　折　价:<input type="text" name="discount" placeholder="精确到俩位小数" value=<?php echo ($good[0]['discount']); ?>>
	</td>
</tr>
<tr>
	<td>商品简介</td>
	<td>　
		<textarea name='intro' cols="50"><?php echo ($good[0]['intro']); ?></textarea>
	</td>
</tr>

<tr>
	<td>商品详情</td>
	<td>
		<textarea name="content" id="content"  style="width:80%;height:250px;visibility:hidden;" class="required"><?php echo ($good[0]['content']); ?></textarea>
	</td>
</tr>
<tr align="center">　　　　　　　
	<td colspan="2" ><button type="submit" class="btn btn-success">确认修改</button>
	<button type="reset" class="btn btn-warning">重置所有</button></td>
</tr>
</form>
	
</table>




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