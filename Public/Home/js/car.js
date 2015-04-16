// 头部下拉列表 2014/11/12
	$(function(event){ 
		var domTopNav=$('#top_nav');
		/*头部下拉列表 我的优购 公告 更多 手机 绑定数鼠标穿过事件*/
		$('.my_yg,.notice,.more,.phone',domTopNav).bind('mouseenter',function(event){
			/*头部下拉列表 返回当前父元素 查找.hover删除*/
			$(this).parent().find('.hover').removeClass('hover');
			/*头部下拉列表 添加当前.hover*/
			$(this).addClass('hover');
		/*头部下拉列表 我的优购 公告 更多 手机 绑定数鼠标指针离开事件*/ 
		}).bind('mouseleave',function(event){
			/*头部下拉列表 删除当前.hover*/
			$(this).removeClass('hover');
		});
	});