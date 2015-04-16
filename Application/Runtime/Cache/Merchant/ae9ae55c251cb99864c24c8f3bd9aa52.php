<?php if (!defined('THINK_PATH')) exit(); if(session('salename') === null): ?><script>
		alert('请先登录！');
		location.href="/merchant.php/Merchant/LoginReg/login";
	</script><?php endif; ?>
<html lang="en">
	<!-- container-fluid -->
	<head>
		<title>      
		商家管理-添加商品
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
			<li><a href="/merchant.php/Merchant/goodsAction/goodsIntro">配货说明</a></li> -->
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
				<h3>商品管理</h3>
				<form action="/merchant.php/Merchant/GoodsAction/searchGoods" method="post">
			    <div class="col-sm-6">
			      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="输入商品编号" name="search">
			    </div>
			    <button class="btn btn-primary" type="submit">搜索</button>
			</form>
     <br/>
			<table class="table table-hover" >
				<thead>
				<tr bgcolor="#cfe4e5" align="center">
				<td>商品编号</td>
				<td>商品名称</td>
				<td>市场价</td>
				<td>打折价</td>
				<td>点击次数</td>
				<td>添加时间</td>
				<td>审核状态</td>
				<!-- <td>选项</td> -->
				<td>操作</td>
				</tr>
				</thead>
				<tbody>
				
			<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr align="center">
				<td><a href="/merchant.php/Merchant/goodsAction/goodsIntro?id=<?php echo ($vo["id"]); ?>"><b><?php echo ($vo["goodsnumber"]); ?></b></a></td>
				<td title="<?php echo ($vo["intro"]); ?>"><?php echo (mb_substr($vo["intro"],0,6,'utf-8')); ?></td>
				
				<td class="center"><?php echo ($vo["price"]); ?></td>
				<td class="center"><?php echo ($vo["discount"]); ?></td>
				<td class="center"><?php echo ($vo["clicknum"]); ?></td>
				<td class="center"><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
				<?php switch($vo["state"]): case "1": $state="审核通过"; break;?>    
					<?php case "2": $state="等待审核"; break;?>    
					<?php case "3": $state="审核失败"; break; endswitch;?>
				<td class="center">
				<!-- 2未审核  1通过 3失败  -->
				<kbd><?php echo $state; ?></kbd>
				</td>
				<!-- <td><a><input type="checkbox" name="ids[]" value="<?php echo ($vo["id"]); ?>"></a></td> -->
				<td><a href="/merchant.php/Merchant/GoodsAction/delGoods?id=<?php echo ($vo["id"]); ?>" class="btn btn-danger">删除</a> <a href="/merchant.php/Merchant/GoodsAction/goodsCont?goodsid=<?php echo ($vo["id"]); ?>" class="btn btn-success">添加其他颜色</a>
				</td>
				</tr><?php endforeach; endif; ?>	
			
				</tbody>
				<!-- <tr align="right"><td colspan="8">
					<button onclick="selected(1)" class="btn btn-warning">全选</button>
	        		<button onclick="selected(2)" class="btn btn-success">反选</button>
	        		<button onclick="selected(3)" class="btn btn-primary">全不选</button>
	        	</td>
	        	<td align="center">
	        		<button class="btn btn-danger">删除所选</button>
        		</td></tr> -->
				<tr><td colspan="9" align="center"><?php echo ($page); ?></td></tr>	
					
			</table>
					
				
				<div class="row-fluid">
					<div id="footer" class="span12">
						2012 &copy; Unicorn Admin. Brought to you by <a href="https://wrapbootstrap.com/user/diablo9983">diablo9983</a>
					</div>
				</div>
		<script type="text/javascript" charset="utf-8">


            //得到所有的input 表单
            // var inps = document.getElementsByTagName("input");
            // //单击按钮时会调用这个函数
            // function selected(n){
            //     //如果函数的参数为1，则为全选
            //     if(1 == n){
            //         //遍历这个inps数组，每次都把一个input表单的属性checked赋值为真
            //         for(var i in inps){
            //             inps[i].checked = true;
            //         }
            //     }
            //     //如果函数的参数为2，则为反选
            //     if(2 == n){
            //         //遍历所有的表单。选得到每个表单的checked的属性值，并取反。再赋值给checked属性
            //         for(var i in inps){
            //             inps[i].checked = !inps[i].checked;
            //         }
            //     }
            //     //如果函数的参数为3，则为全不选
            //     if(3 == n){
            //         //遍历所有的表单，把所有的表单的checked属性赋值为false
            //         for(var i in inps){
            //             inps[i].checked = false;
            //         }
            //     }
            // }
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