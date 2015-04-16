//判断专题过期
$.ajax({
	url: '/cms/topics/checkExpireTopic.sc', 
	dataType: 'json',
	data: {'topicsId':$('#newtopicbd').attr('topicsid') },
	success: function(json) {
		if(json == true) {
			$("#mainBox").prepend('<div class="blank10"></div><div class="ygwrap topic_expire"></div>')
		}
	}
}); 
//控制右侧浮动飘层
var rfixed=$("#rightFixed");
if($.trim(rfixed.html())!='')
{
	rfixed.jqScrollTop();
	/*#10673 时尚商城首页和专题页飘窗导航位置调整*/
	//var rfixedW=rfixed.outerWidth(true);由于已有css样式问题，导致js为了兼容ie7要做相应处理
	var rfixedW=parseInt(rfixed.find(".fltlayer").css("width"));
	rfixed.css('width',rfixedW+'px');
	//var eleW=ele.outerWidth(true);
	//.yg_category_nav
	$(window).resize(function(){
		var _windowW=$(window).width();
		//console.log((_windowW/2)>=(1190/2)+10+rfixedW);
		if((_windowW/2)>=(1190/2)+10+rfixedW)
		{
			var left=(_windowW-1190)/2+1190+10;
			rfixed.css("right",'auto');
			rfixed.css("left",left+'px');
		}else{
			rfixed.css("left",'auto');
			rfixed.css("right",0);
		}
		
	});
	//$(window).resize();	
	$('#mainBox').addClass('hasfloatbar');//有浮层时 查看更多>>左移，以免被浮层挡住

}
 //== brand move function ==
   var nfun_move=function(position_left,position_right,position_id){	      
	$("#"+position_left).click(function(){
	$("#"+position_id+" img").each(function() {
       if($(this).attr("src")!=$(this).attr("original")){
		   $(this).attr("src",$(this).attr("original"));
		   } 
    });
		  var index = $("#"+position_id+" a").length-20;
		  $("#"+position_id+" a:lt("+index+")").appendTo("#"+position_id);

	})
	  $("#"+position_right).click(function(){
		$("#"+position_id+" img").each(function() {
       if($(this).attr("src")!=$(this).attr("original")){
		   $(this).attr("src",$(this).attr("original"));
		   } 
    });  
		$("#"+position_id+" a:lt(20)").appendTo("#"+position_id);
	})
	}
//专题页使用的loazylod
$.fn.lazyloadImg=function(){
	var dThis = this;
	this.each(function(){
		$(this).attr('load','unload');
	})
	$(window).scroll(function(){
		var $window = $(window),nTop = $window.scrollTop()+$window.height();
		dThis.each(function(){
			if($(this).attr('load')=='unload'&&nTop>$(this).offset().top){
				var dImgs = $(this).find('p.proImg img[original]');
				dImgs.each(function(){
					$(this).attr('src',$(this).attr('original'));
				});
				$(this).attr('load','loaded');
			}
		});
	});	
	return this;
}
$('.topicProList').lazyloadImg();
if($('#newtopicbd')[0]){
	$('.lazy_loading').lazyload();
	//自适应
	$(window).resize(function(){
		if($(window).width()>=1190){
			$("body").addClass("selfadaptat");
		}else{
			$("body").removeClass("selfadaptat");
		}
	});
	$(window).resize();
}
/*
$(".proImg img").lazyload({
     placeholder:YouGou.UI.uimg.img160,
     threshold:200,
     placeholder:YouGou.UI.uimg.img1
}); 
*/

//加载自动完成
$('#kword').focus(function(){
		$('body').append($('#jsAutocomplete').text());
});
nfun_move("brand-left","brand-right","brand-list");


//10009控制头部手机优购点中 
if($('#sjyg').length>0)
{
	$('#top_nav .yg a.clicked').removeClass('clicked');
	if(!$('#top_nav .phone a.phone_text').hasClass('clicked'))
	{
		$('#top_nav .phone a.phone_text').addClass('clicked');
	}
	
}

//噢来变成专题页后，要处理定位问题
$(function(){
	
	var url=window.location.href;
	var str=/1394617951051/;
	if(str.test(url))
	{
		$('#top_nav .yg a.clicked').removeClass('clicked');
		if(!$('#top_nav .outlets a').hasClass('clicked'))
		{
			$('#top_nav .outlets a').addClass('clicked');
		}
	}
});