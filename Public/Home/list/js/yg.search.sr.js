//评论滚动
if($('#scrollDiv')[0]){
	(function($){
		$.fn.extend({
        	Scroll:function(opt,callback){
                //参数初始化
                if(!opt) var opt={};
                var _this=this.eq(0).find("ul:first");
                var lineH=_this.find("li:first").height(), //获取行高
                line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10),
                speed=opt.speed?parseInt(opt.speed,10):500, //卷动速度，数值越大，速度越慢（毫秒）
                timer=opt.timer?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒）
                if(line==0) line=1;
                var upHeight=0-line*lineH;
                //滚动函数
                scrollUp=function(){
                        _this.animate({
                                marginTop:upHeight
                        },speed,function(){
                                for(i=1;i<=line;i++){
                                        _this.find("li:first").appendTo(_this);
                                }
                                _this.css({marginTop:0});
                        });
                }
                //鼠标事件绑定
                _this.hover(function(){
                        clearInterval(timerID);
                },function(){
                        timerID=setInterval("scrollUp()",timer);
                }).mouseout();
        	}        
		})
	})(jQuery);

	$(function(){
        $("#scrollDiv").Scroll({line:2,speed:300,timer:5000});
	});
}

//resetlayout
function resetLayout(){
	if($(window).width()<1190){
		$('body').removeClass('selfadaptat');
	}else{
		$('body').addClass('selfadaptat');
	}		
}
$(function(){
	//自适应
	resetLayout();
	$(window).resize(resetLayout);
	//排序下拉菜单
	$(".list_select").hover(function(){
		$(this).addClass("lcurr").children(".list_select_show").show();	
	},function(){
		$(this).removeClass("lcurr").children(".list_select_show").hide();			
	});
	//图片懒加载
	$(".proList img").lazyload();
	//价格区间
    $(".fprice input").focus(function(){
        $(".fprice").addClass("fprice-hover");
        $(this).parents(".fpb-item").css("border","1px solid #ff5000");
    });
    $(".fprice input").blur(function(){
        $(this).parents(".fpb-item").css("border","1px solid #ccc");
    });
    $(".fprice").hover(function(){
        $("body").unbind("click");
    },function(){
        $("body").click(function(){
            $(".fprice").removeClass("fprice-hover");
        });
    });
    
    //-------------筛选器相关
    /*筛选条件很多时出现左右移动按钮*/
	var menu_width=$("#filterSelCon").width();
	var menucont_width=$("#filterTtCon").width();
	var fw=menu_width-menucont_width;
	var move=50;//每次移动步长
	var left=0;
	if(fw>0){
		//$("#filterTtlBtn,#filterTtrBtn").show();
		$("#filterTtrBtn").show();
		$("#filterTtlBtn").click(function(){
			left = parseInt($("#filterSelCon").position().left);
			if(left < 0){
				left = left + move;
				$("#filterSelCon").animate({left:left},100);
				if(left == 0){
					$("#filterTtlBtn").hide();
				}
				$("#filterTtrBtn").show();
			}else if(left ==0){
				return;
			}
		})
		$("#filterTtrBtn").click(function(){
			left=parseInt($("#filterSelCon").position().left);
			if(Math.abs(left) < fw){
				//菜单左坐标在当前值基础上减去预设的步长值
				left = left - move;
				$("#filterSelCon").animate({left:left},100);
				if(Math.abs(left) >= fw){
					$("#filterTtrBtn").hide();
				}
				$("#filterTtlBtn").show();
			}else if(Math.abs(left) >= fw){
				return;
			}
		})
	}else{
		$("#filterTtlBtn,#filterTtrBtn").hide();
	}
	
	/*点击多选*/
	$(".ygFilterCon .moreSelete").click(function(){
		var $dl=$(this).closest("dl");
		$(".ygFilterCon dl").addClass("defaultCat").removeClass("chooseList");
		//li元素显示
		$(this).prev("ul").find("li").show();
		setHeight();
		$dl.addClass("chooseList").removeClass("defaultCat").find("dd").height("100%");
		$(this).siblings(".moreLink").hide();
	});
	
	/*取消多选*/
	$(".ygFilter_cz .cancel").click(function(){
		var dl=$(this).closest("dl");
		var li=dl.find(".catList li");
		var smt=dl.find(".ygFilter_cz .ygFilterSmt");
		//点击取消后复选框返回非选中状态、提交按钮返回不可用状态
		dl.removeClass("chooseList").addClass("defaultCat");
		li.removeClass("choosed");
		smt.removeClass("smt").addClass("noSmt");
		smt.attr("disabled","disabled");
		//设置取消多选后dd的默认高度
		setHeight();
		brand_en_name = [];
	});
				
	/*复选框 、使多选中的提交按钮可用*/
	$(".chooseList .catList li a").live("click",function(){
		var has=$(this).parent().is(".choosed");
		if(has){
			$(this).parent().removeClass("choosed");
		}else{
			$(this).parent().addClass("choosed");	
		}
		showSmt($(this));
		return false;
	});
	function showSmt(e){
		var checkLength=e.closest(".chooseList").find(".catList .choosed").length;
		var ygFilterSmt=e.closest(".chooseList").find(".ygFilter_cz .ygFilterSmt");
		if(checkLength<=0){
			ygFilterSmt.removeClass("smt").addClass("noSmt");
			ygFilterSmt.attr("disabled","disabled");
		}else{
			ygFilterSmt.removeClass("noSmt").addClass("smt");
			ygFilterSmt.attr("disabled","");
		}
	}
	
	/*自动计算高度，为了加快渲染速度，请不要提到底部或者其他位置*/
	//setHeight();
	function setHeight(){
		$(".ygFilterCon dl").each(function(){
			var $self=$(this);
			var $dd=$self.find("dd");
			var height=$dd.height();
			var moreLink=$self.find(".moreLink");
			var default_height = 50;
			if($dd.find("ul").attr("name")=="seo_en_brand_name"){
				default_height = 50;
			}else{
				default_height = 25;
			}
			if(height>default_height){
				moreLink.show();
				if(moreLink.hasClass("up"))
				{
					$dd.height("100%");
				}
				else
				{
					$dd.height(default_height);
				}
			}
		});
	}
	//更多、收起链接布局
	$(".ygFilterCon .moreLink").toggle(function(){
		var $self=$(this);
		var dl=$self.closest("dl");
		dl.find("dd").css({"height":"100%"});
		dl.find("dd").find("ul").find("li").show();
		$self.removeClass("down").addClass("up");
		$self.html("收起<i class=\"list_bg\"></i>");
		return;
	},function(){
		var $self = $(this);
		var dl=$self.closest("dl");
		if(dl.find("dd").find("ul").attr("name")=="seo_en_brand_name"){
			dl.find("dd").find("ul").find("li:lt(12)").show();
			dl.find("dd").height(50);
		}else{
			dl.find("dd").find("ul").find("li:lt(6)").show();
			dl.find("dd").height(25);
		}
		$self.removeClass("up").addClass("down");
		$self.html("更多<i class=\"list_bg\"></i>");
	});
	
	//筛选器  更多筛选内容
	$("#moreFilter").toggle(function(){
		var $self = $(this);
		$("#filterCon").find("dl:gt(8)").each(function(){
			$(this).show();
		});
		$self.html("收起<i>&nbsp;</i>").addClass("collapse").removeClass("expand");
		$("#filterCon").find("dl:last").css({"margin-bottom":"0"});
		$("#filterCon").css({"border-bottom-width":"0"});
		return;
	},function(){
		var $self = $(this);
		$("#filterCon").find("dl:gt(8)").each(function(){
			$(this).hide();
		});
		$self.html("更多<i>&nbsp;</i>").addClass("expand").removeClass("collapse");
		$("#filterCon").find("dl:last").css({"margin-bottom":"-1px"});
		$("#filterCon").css({"border-bottom-width":"1px"});
		return;
	});
		
	$(".ygFilterCon dl").hover(function(){
		$(this).css({"border-bottom-style":"solid"});
	},function(){
		$(this).css({"border-bottom-style":"dotted"});
	})
	//---------------排序相关
	$(".ui-btn-s").click(function(){
        $(".fprice input").val("");
    });
    $(".ui-btn-s-primary").click(function(){
    	var url = getBaseLink() ;
    	var minPrice = $("#minPrice").val();
    	var maxPrice = $("#maxPrice").val();
    	var mctcd = $("#mctcd").val();
    	var storeId = $("#storeId").val();
    	if(!minPrice && !maxPrice && !mctcd){ 
    		location.href= url;
    		return;
    	}
    	var last = url[ url.length - 1 ] ;
    	if( last != '?' && last != '&' ) {
    		if( url.indexOf('?') == -1 ) url += "?";
    		else url += '&' ;
    	}
    	var params =[]
		if(minPrice) params.push("minPrice=" + minPrice)
		if(maxPrice) params.push("maxPrice=" + maxPrice)
		if(mctcd) params.push("mctcd=" + mctcd)
		if(storeId) params.push("storeId=" + storeId)
		var p = "";
    	for(var i = 0; i < params.length; i++){
    		p += params[i];
    		if(i != params.length - 1) p += "&";
    	}
		location.href = url + p;
    });
    
  //--------------搜索结果相关
  //跳转到某页
	function jumpPage(){
		var toPage = $("#jumpToPage").val();
		if(!toPage){
			$("#jumpToPage").focus();
			return;
		}
		if(!/^[1-9]\d*$/.test(toPage)){
			$("#jumpToPage").val("");
			$("#jumpToPage").focus();
			return;
		}
		if(toPage<1){
			toPage = 1;
		}
		toPage = Number( toPage ) ;
		var pageCount = Number( $("#pageCount").val() ) ;
		if(toPage > pageCount ){
			toPage = pageCount ;
		}
		url = getPageUrl( toPage ) ;
		window.location=url;
	}
	var v = $("#jumpToPage").val();
	$(document).click(function( e ){
		obj = $(e.srcElement || e.target);
		if (obj.attr('id') == 'jumpToPage'){
			$("#jumpToPage").val("");
		}else if(obj.attr('class') == 'gbtn'){
			jumpPage();
		}else{
			$("#jumpToPage").val(v);
		}
		
	});
});
var brand_en_name = [];

function addBrand(brand){
	if($.inArray(brand,brand_en_name)==-1){
		brand_en_name.push(brand);
	}else{
		brand_en_name.splice(jQuery.inArray(brand,brand_en_name),1); 
	}
}
function searchBrand(){
	var url = $("#baseLink").val();
	url = url.substring(url.indexOf("-"));
	url = "/f-" + brand_en_name.join("_") + url;
	url += ".html";
	if($("#queryStr").val()){
		url += "?"+$("queryStr").val();
	}
	window.location.href=url;
}

function searchKeyBrand(){
	var url = $("#baseLink").val();
	if( brand_en_name.length == 0 ) return ;
	var q = brand_en_name.join( '_' ) ;
	q = 'brandEnName=' + q ;
	if( url.indexOf( '?' ) == -1 ) url = url + '?' + q ;
	else url = url + '&' + q ;
	window.location.href=url;
}

function getPageUrl( toPage ){
	var url = "/f-" + $("#baseLink").val();
	url += "-"+$("#orderBy").val();
	url += "-" + toPage;
	url += ".html";
	if($("#queryParams").val()){
		url += "?"+$("#queryParams").val();
	}
	return url ;
}

function getBaseLink(){
	return '/f-' + $("#baseLink").val() + ".html";
}