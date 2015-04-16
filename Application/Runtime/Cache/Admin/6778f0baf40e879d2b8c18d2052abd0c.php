<?php if (!defined('THINK_PATH')) exit(); if(session('username') === null): ?><script>
    alert('请登录！');
    location.href="/admin.php/Login/login";
  </script><?php endif; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/Public/Admin/js/jquery.js"></script>


<style type="text/css">
body {
	margin:0px;
	padding:0px;
	font-size: 12px;
}
#navigation {
	margin:0px;
	padding:0px;
	width:147px;
}
#navigation a:visited{
  color:#000;
}
#navigation a.head {
	cursor:pointer;
	background:url(/Public/Admin/images/main_34.gif) no-repeat scroll;
	display:block;
	font-weight:bold;
	margin:0px;
	padding:5px 0 5px;
	text-align:center;
	font-size:12px;
	text-decoration:none;
}
#navigation ul {
	border-width:0px;
	margin:0px;
	padding:0px;
	text-indent:0px;
}
#navigation li {
	list-style:none; display:inline;
}
#navigation li li a {
	display:block;
	font-size:12px;
	text-decoration: none;
	text-align:center;
	padding:3px;
}
#navigation li ul{
	display:none;
}
#navigation li li a:hover {
	background:url(/Public/Admin/images/tab_bg.gif) repeat-x;
		border:solid 1px #adb9c2;
}
-->
</style>
</head>
<body>
<div  style="height:100%;">
  <ul id="navigation">
    <li> <a class="head">会员管理</a>
      <ul>
        <li><a href="/admin.php/Member/add" target="rightFrame">添加会员</a></li>
        <li><a href="/admin.php/Member/check" target="rightFrame">查看会员</a></li>
        <li><a href="/admin.php/Member/selectForbidden" target="rightFrame">已禁用会员</a></li>
      </ul>
    </li>
    <li> <a class="head">商品分类</a>
      <ul>
        <li><a href="/admin.php/Sort/addFirstSort" target="rightFrame">添加一级分类</a></li>
        <li><a href="/admin.php/Sort/addSecondSort" target="rightFrame">添加二级分类</a></li>
        <li><a href="/admin.php/Sort/addThirdSort" target="rightFrame">添加三级分类</a></li>
        <li><a href="/admin.php/Sort/selectSort" target="rightFrame">查看分类</a></li>
      </ul>
    </li>
    <li> <a class="head">店铺管理</a>
      <ul>
        <li><a href="/admin.php/Shop/selectAllShop" target="rightFrame">优质店铺</a></li>
        <li><a href="/admin.php/Shop/selectForbiddenShop" target="rightFrame">禁用列表</a></li>
        <li><a href="/admin.php/Shop/selectPoorShop" target="rightFrame">低访问商铺</a></li>
      </ul>
    </li>
    <li> <a class="head">审核管理</a>
      <ul>
        <li><a href="/admin.php/Audit/goodsList" target="rightFrame">未审核商品</a></li>
        <li><a href="/admin.php/Audit/groupList" target="rightFrame">未审核闪团</a></li>
        <li><a href="/admin.php/Audit/shopList" target="rightFrame">未审核商铺</a></li>
      </ul>
    </li>
    <li> <a class="head">订单管理</a>
      <ul>
        <li><a href="/admin.php/Orders/selectOrders" target="rightFrame">最新订单</a></li>
       <!--  <li><a href="/admin.php/Orders/returnsOrders" target="rightFrame">退货订单</a></li> -->
        <li><a href="/admin.php/Orders/finishOrders" target="rightFrame">已完成订单</a></li>
      </ul>
    </li>

    <li> <a class="head">评论管理</a>
      <ul>
        <li><a href="/admin.php/Comment/selectNewComment" target="rightFrame">最新评论</a></li>
        <li><a href="/admin.php/Comment/selectPraiseComment" target="rightFrame">查看好评</a></li>
        <li><a href="/admin.php/Comment/selectPoorComment" target="rightFrame">查看差评</a></li>
      </ul>
    </li>
    <li> <a class="head">前台首页</a>
      <ul>
        <li><a href="/admin.php/HomePage/carouselPhoto" target="rightFrame">轮播图</a></li>
        <li><a href="/admin.php/HomePage/information" target="rightFrame">资讯管理</a></li>
        <li><a href="/admin.php/HomePage/photoShow" target="rightFrame">四张图片展示</a></li>
        <li><a href="/admin.php/HomePage/hotRecommend" target="rightFrame">热门品牌推荐</a></li>
      </ul>
    </li>
    <li> <a class="head">友情链接</a>
      <ul>
        <li><a href="/admin.php/Blogroll/selectBlogroll" target="rightFrame">查看链接</a></li>
        <li><a href="/admin.php/Blogroll/addBlogroll" target="rightFrame">增加链接</a></li>
      </ul>
    </li>
    <li> <a class="head">管理员</a>
      <ul>
        <li><a href="/admin.php/Manager/editPwd" target="rightFrame">修改密码</a></li>
        <li><a href="/admin.php/Login/exits"  onclick= "return confirm('确定退出本系统？')" target="_top">退出登录</a></li>
        <li><a href="/admin.php/Manager/addManager" target="rightFrame">增加管理员</a></li>
        <li><a href="/admin.php/Manager/managerState" target="rightFrame">管理员状态</a></li>
      </ul>
    </li>
  </ul>
</div>
</body>
<script type="text/javascript" charset="utf-8">
        $(".head").click(function(){
                $("div").css("background",'#eeeeee');
                $(".head + ul:visible").slideUp();
                $(this).next().slideToggle(1000);
                });
    </script>
</html>