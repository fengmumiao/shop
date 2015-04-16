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
		<a href="#"><i class="icon icon-file"></i><span>商品管理</span> <span class="label">5</span></a>
		<ul>
			<li class="active"><a href="/merchant.php/Merchant/goodsAction/addGoods">添加商品</a></li>
			<li><a href="/merchant.php/Merchant/goodsAction/goodsMana">商品管理</a></li>
		
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

<script type="text/javascript">
//js验证表单
  var gets = true;//是否让表单提交
  $(function(){
//当输入框失去焦点的时候，需要执行的方法
  $("input[name=goods]").blur(function(){doGoods();});
  $("input[textarea=intro]").blur(function(){doIntro();});
  $("input[name=price]").blur(function(){doPrice();});
  $("input[name=discount]").blur(function(){doDiscount();});
  $("textarea[name=content]").blur(function(){doContent();});

});

// 商品名的验证
  function doGoods(){
    var t = $("input[name=goods]");
    var span = t.next();
    if(/^[a-zA-Z\u4e00-\u9fa5]{3,12}$/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
      span.html("使用汉字、字母，长度在3-12之间").css({color:"red",fontSize:"12px"});
      return false;

    }
  }
// 简介的验证
  function doIntro(){
    var t = $("textarea[name=intro]");
    var span = t.next();
    if(t.val() == '' || t.val().length<5){
      span.html("详情不能为空并且不能少于5字符,严重审核").css({color:"red",fontSize:"12px"});
      return false;
    }else{
      return true;
    }
 
  
  }
// 价格的验证
  function doPrice(){
    var t = $("input[name=price]");
    var span = t.next();
    if(/\d/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
    	span.html("必须为数字").css({color:"red",fontSize:"12px"});
      return false;
    }
  }
  // 打折价的验证
   function doDiscount(){
    var t = $("input[name=discount]");
    var span = t.next();
    if(/\d/.test(t.val())){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return true;
    }else{
    	span.html("必须为数字").css({color:"red",fontSize:"12px"});
      return false;
    }
  }

  // 商品详情的验证
  function doContent(){
    var t = $("textarea[name=content]");
    var span = t.next();
    if(t.val() == '' || t.val().length<20){
      span.html("填写正确").css({color:"green",fontSize:"12px"});
      return false;
    }else{
      return true;
    }
 
  
  }
// 数据提交的时候执行的方法
  function doTable(){
    var goods = doGoods();
    var intro = doIntro();
   
    var price = doPrice();
    var discount = doDiscount();
    var content = doContent();
  
    if(goods&&price&&discount){
      return true;
    }else{
      return false;

    }
  }



</script>

<h2>添加商品</h2>
<form action="/merchant.php/Merchant/GoodsAction/goodsadd" method="post" onsubmit="return doTable()">
<table class="table table-bordered table-hover">
	<tr>
		<td width="20%">商家品牌：</td>
		<td width="80%" name="brand"><?php echo ($brand[0]['brand']); ?></td>
	</tr>
	<tr>
		<td>商品分类</td>
		<td>
			大类: <select id="firstSort" name="first">
        <option>--请选择--</option> 
        <?php if(is_array($row)): foreach($row as $key=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endforeach; endif; ?>
      </select>
			小类: <select id="second" name="second">
        <option>--请选择--</option>
          <foreach name="second" item="vos">
          <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>   
      </select>
			子类: <select id="third" name="typeid">
      
        <option>--请选择--</option>
      <select>
		</td>
	</tr>
	<tr>
		<td>商品名称：</td>
		<td><input type="text" name="goods"><span></span></td>
	</tr>
	<tr>
		<td>商品简介：</td>
		<td><textarea name="intro"></textarea><span></span></td>
	</tr>
	
	
	<tr>
		<td>价格:</td>
		<td>市场价：<input type="text" name="price" placeholder="请精确到俩位小数"><span></span>打折价：<input type="text" name="discount" placeholder="请精确到俩位小数"><span></span></td>
	</tr>
	
	<tr>
		<td>商品详情:</td>
		<td>
			<textarea name="content" id="content"  style="width:80%;height:250px;visibility:hidden;" class="required"></textarea><span></span>
		</td>
	</tr>
	
	<tr align="center">
	<td colspan="2">
		<button type="submit" class=" btn btn-danger " >请添加商品属性等具体信息</button>
		</td>
	</tr>
</table>
</form>
<script type="text/javascript">
  var second = document.getElementById("second");
  var third = document.getElementById("third")
  $('#firstSort').change(function(data){
    var val = $('#firstSort').val();
    $.post('/merchant.php/Merchant/GoodsAction/selectSecond',{'pid':val},function(data){
      var datas = eval("("+data+")");
      var str = "<option>请选择</option>";
        for(var i in datas){
          str = str + "<option value="+datas[i]['id']+">"+datas[i]['name']+"</option>";
        }
        second.innerHTML=str;
    });
  })
  $('#second').change(function(data){
  var valsecond = $("#second").val();
    $.post('/merchant.php/Merchant/GoodsAction/selectSecond',{'pid':valsecond},function(data){
      var datas = eval("("+data+")");
      var str = "<option>请选择</option>";
        for(var i in datas){
          str = str + "<option value="+datas[i]['id']+">"+datas[i]['name']+"</option>";
        }
        third.innerHTML=str;
    });
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