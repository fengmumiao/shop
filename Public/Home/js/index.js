/** Index 页面特效 startTime 2014/11/12 Yan*/
 	/*body特效*/
 	$(function(){
 		var time = setTimeout(function(){
 			$('.continer').fadeTo("slow", 0.66).fadeTo("slow", 1);
 		}, 4000);
 	})
	leftNav();
	// 左侧导航 2014/11/12
	function leftNav(){
		$(".floatad").show();
		 /*左侧导航 绑定 新增元素依然触发的 鼠标经过事件*/ 
		 $(".indexnav2list>li").live("mouseover",function(event){
		    /*左侧导航 鼠标移动到子标签删除currr样式*/ 
	        $(".indexnav2list>li").removeClass("currr");
	        /*call方法引用该方法传递当前位置 使得直接能获得input hidden的val值*/
	        getcurrpic.call(this);
	        /*左侧导航 鼠标移动到子标签删除checkedli样式*/ 
	        $(".indexnav2list>li").removeClass("checkedli");
	        /*左侧导航 当前li标签添加样式currr*/ 
	        $(this).addClass("currr");
	        /*左侧导航 找到popmenu2的样式,把已经显示的样式隐藏*/ 
	        $(".indexnav2list>li").find(".popmenu2").hide();
	        /*左侧导航 找到popmenu2的样式,把当前已经隐藏的样式显示*/
	        $(this).find(".popmenu2").show();
	    });
		/*左侧导航 绑定 新增元素依然触发的 鼠标离开事件*/ 
	    $(".indexnav2list>li").live("mouseout",function(event){
	    	/*左侧导航 找到popmenu2的样式,把已经显示的样式隐藏*/ 
	        $(".indexnav2list>li").find(".popmenu2").hide();
	        /*左侧导航 鼠标离开到子标签删除currr样式*/ 
	        $(".indexnav2list>li").removeClass("currr");
	        /*左侧导航 鼠标离开到子标签删除checkedli样式*/
	        $(".indexnav2list>li").removeClass("checkedli")
	        /*左侧导航 鼠标离开到当前子标签添加checkedli样式*/
	        $(this).addClass("checkedli");
	    });
	    /*左侧导航 绑定 新增元素依然触发的 鼠标经过事件*/
	    $(".jingcpop>ul>li").live("mouseover",function(event){
	    	/*左侧导航 查找到a标签 停止当前自定义动画*/
	        $(this).find("a").stop().animate({
	            'margin-left':"10px"
	        },30);
	    });
	    /*左侧导航 绑定 新增元素依然触发的 鼠标离开事件*/
	    $(".jingcpop>ul>li").live("mouseout",function(event){
	    	/*左侧导航 查找到a标签 停止自定义动画*/
	        $(".jingcpop>ul>li").find("a").stop().animate({
	            'margin-left':"0px"
	        },20);
	    });
	    /*左侧导航 绑定 新增元素依然触发的 鼠标经过事件*/
	    $(".popmenu2 .categorytit").live("mouseover",function(event){
	    	/*左侧导航 停止当前自定义动画*/
	        $(this).stop().animate({
	            'margin-left':"10px"
	        },30);
	    });
	    /*左侧导航 绑定 新增元素依然触发的 鼠标离开事件*/
	    $(".popmenu2 .categorytit").live("mouseout",function(event){
	    	/*左侧导航 停止自定义动画*/
	        $(".popmenu2 .categorytit").stop().animate({
	            'margin-left':"0px"
	        },20);
	    });
	};

	// 首页导航效果
	/*首页导航效果 step给 eq默认赋值0*/ 
	var step = 0;
	/*首页导航效果 time 是一个时间周期*/
	var time;
	/*首页导航效果 menusyn 用于判断当前时间周期是否存在*/
	var menusyn = 0;
	/*首页导航效果 定义一个获取eq值的方法*/ 
	function animatemenu(){
		/*首页导航效果 删除所有indexnav2list下li的样式currr*/
	    $(".indexnav2list>li").removeClass("currr");
	    /*首页导航效果 下标为变量的元素添加currr样式*/
	    $(".indexnav2list>li").eq(step).addClass("currr");
	    /*首页导航效果 长度从1开始-1 == 下标从0开始 恢复默认值 否则加1*/
	    if(step == $(".indexnav2list>li").length - 1){
	        step = 0;
	    }else{
	        step = step + 1;
	    }
	    /*首页导航效果 call替换getcurrpic的调用方法 从0开加一后传入减1的值*/
	    getcurrpic.call($(".indexnav2list>li").eq(step-1));
	}
	/*首页导航效果 定义创建周期任务的方法*/
	function starttime(){
		/*首页导航效果 如果menusyn的值等于1就直接退出方法*/
	    if(menusyn == 1){
	        return;
	    }
	    /*首页导航效果 如果menusyn的值等于0就直接赋值为1创建周期任务*/
	    menusyn = 1;
	    time = window.setInterval("animatemenu()",900);
	}
	/*首页导航效果 定义一个清除时间任务的方法*/
	function stoptime(){
		/*首页导航效果 menusyn赋值为0 删除周期任务*/
	    menusyn = 0;
	    clearInterval(time);
	}
	/*首页导航效果 显示图片效果*/
	function getcurrpic(){
		/*首页导航效果 定义一个变量用call引用的位置(查找当前位置下的所有隐藏input标签的值)*/
	    var thispicid = $(this).find("input[type=hidden]").val();
	    /*首页导航效果 隐藏所有图片的div*/
	    $("#indexFocusPic").parent().hide();
	    /*首页导航效果 隐藏所有indexFocusPic下的所有元素*/
	    $(".ygbanner").hide();
	   	/*首页导航效果 只显示当前的ID 如:#53d0e923c7da508b0c00007e*/
	    $("#"+thispicid).show();
	}

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

	// 店铺logo
	$(function(event){
		/*店铺logo 鼠标放入事件*/
		$('.logolst a').hover(function(event){
			/*店铺logo 鼠标放入显示logolayer*/
			$(this).find('.logolayer').show();
		},function(event){
			/*店铺logo 鼠标移出隐藏logolayer*/
			$(this).find('.logolayer').hide();
		});
	});

	// 优购导购 2014/11/12
	$(function(event){
		/*优购导购 默认初始化进入>方向的单击事件*/
		var firstForm = true;
		/*优购导购 默认初始化进入<方向的单击事件*/
		var lastForm = true;
		/*优购导购 获得所有导购图标的数量*/
		var sumList = $('#brand-list').children().length;
		/*优购导购 默认初始化当前一页的导购图标数量*/
		var cutForm = 48;
		/*优购导购 默认初始化显示所有的图标*/
		$('#brand-list > a').show();
		if (firstForm) {
			/*优购导购 创建点击>事件*/
			$('.brmove_r_btn').click(function(event) {	
				/*优购导购 判断当前页能存储的所有图标是否大于图标总数量*/
				if (cutForm > sumList) {
					/*优购导购 大于总数不能在触发点击事件*/
					firstForm = false;
				}else{
					/*优购导购 不大于总数隐藏小于当前页存放的总数*/	
					$('#brand-list > a:lt('+cutForm+')').fadeOut('show');
					/*优购导购 并且把当前的存放总数追加一页的数量*/
					cutForm = cutForm + 48;
				}
			});
		};
		if (lastForm) {
			/*优购导购 创建点击<事件*/
			$('.brmove_l_btn').click(function(event) {	
				/*优购导购 判断如果存放是否数量大于第一页的数量 如果不大于则不触发<的单击事件*/			
				if (cutForm > 48) {
					/*优购导购 不小于第一页数量显示之前一页的图标*/
					$('#brand-list > a:lt('+cutForm+')').fadeIn('hide');
					/*优购导购 并且把当前的存放总数减少一页*/
					cutForm = cutForm - 48;	
				}else{
					/*优购导购 小于第一个存放图标的数量 不触发<单击事件*/
					lastForm = false;
				}
			});
		}
	});

	// 热门品牌推荐 2014/11/12
	$(function(event){
		$('#flash > li').eq(0).addClass('on');
		$('.ind_md3').children().eq(1).removeClass('none');
		/*热门品牌推荐 绑定一个新增元素依然触发的悬停事件*/
		$('#flash>li').live('hover', function(event) {
			/*热门品牌推荐 删除这个元素兄弟元素的样式on*/
			$(this).siblings().removeClass('on');
			/*热门品牌推荐 添加这个元素样式on*/
			$(this).addClass('on');
			/*热门品牌推荐 获得当前坐标后+1 因为该死页面多了一个不相干的div兄弟元素*/ 
			var location = $("#flash>li").index(this) + 1;
			/*热门品牌推荐 除了该死的div:eq(0)的元素的所有的兄弟元素添加隐藏样式*/ 
       		$('.ind_md3').children().eq(0).siblings().addClass('none');
       		/*热门品牌推荐 当前元素删除隐藏样式*/
       		$('.ind_md3').children().eq(location).removeClass('none');
		});
	});

	// 导航大图幻灯片 2014/11/13
	$(function(event){
		/*导航大图幻灯片 创建一个时间任务的变量*/
		var time = null;
		/*导航大图幻灯片 默认第一次触发事件任务的变量*/
		var timeJudge = false;
		/*导航大图幻灯片 鼠标经过按钮事件*/
		$('.trgBox > span').mouseover(function(event) {
			/*导航大图幻灯片 清除时间任务*/
			clearInterval(time);
			/*导航大图幻灯片 清除默认第一次触发事件任务*/
			timeJudge = true;
			/*导航大图幻灯片 当前元素的兄弟元素删除show样式*/
			$(this).siblings().removeClass('show');
			/*导航大图幻灯片 添加当前元素的显示样式*/
			$(this).addClass('show');
			/*导航大图幻灯片 获得当前元素是父级元素的第几个元素*/
			var location = $(".trgBox > span").index(this);
			/*导航大图幻灯片 把当前对应的图片的兄弟元素隐藏*/
			$('.picBox > div').eq(location).siblings().fadeOut('hide');
			/*导航大图幻灯片 把当前对应的图片显示*/
			$('.picBox > div').eq(location).fadeIn('show');
		});	
		/*导航大图幻灯片 鼠标移出幻灯片图片*/
		$('.picBox > div').mouseout(function(event) {
			/*导航大图幻灯片 清除默认的时间周期任务*/
			clearInterval(time);
			/*导航大图幻灯片 屏蔽默认启动时间周期任务*/
			timeJudge = true;
			/*导航大图幻灯片 重新调用事件周期*/
			invoking();
		});
		/*导航大图幻灯片 如果第一次加载调用事件周期任务*/
		if (!timeJudge) {
			invoking();
		}
		/*导航大图幻灯片 默认从节点为0的幻灯片效果*/
		var index = 0;
		function invoking(){
			/*导航大图幻灯片 创建时间任务*/
			time = setInterval(function(){
				/*导航大图幻灯片 小于总数++*/
				if (index < $('.trgBox > span').length -1) {
					index ++;
				}
				/*导航大图幻灯片 大于总数的倒数第1个 恢复默认0*/
				if (index > $('.trgBox > span').length -2) {
					index  = 0;
				}
				/*导航大图幻灯片 把当前对应的图片的兄弟元素立即隐藏特效*/
				$('.picBox > div').eq(index).siblings().stop(true, true).fadeOut('hide');
				/*导航大图幻灯片 把当前对应的图片的兄弟元素立即显示特效*/
				$('.picBox > div').eq(index).stop(true, true).fadeIn('show');
			},3000);//周期3s
		}

	});

	// 标题提示
	$(function(event){
		/*标题提示 鼠标经过事件*/
		$('.imglst li').hover(function(){
			/*标题提示 添加当前元素hover样式,查找proinfolayer元素立即停止透明度动画*/
			$(this).addClass('hover').find('.proinfolayer').stop(true,true).fadeTo('fast',0.8);
		},function(){
			/*标题提示 删除当前元素hover样式,查找proinfolayer元素立即停止淡出动画*/
			$(this).removeClass('hover').find('.proinfolayer').stop(true,true).fadeOut('fast');
		});
	});

	// 测试坚固导航
	$(function(event){
		/*坚固导航 获得首页header头的高度*/
		var headerH = $('#yg_header').height(); //167
		/*坚固导航 获得左侧整体导航对象*/
		var ygcate = $('#yg_category'); //object
		/*坚固导航 获取离优购导航的偏移高度减去横向导航的高度*/
		var tBottom = $('#ygGuid').offset().top-30; //5116
		/*坚固导航 当页面滚动条变化时候触发*/
		$(window).scroll(function(event){
			/*坚固导航 获得滚动条偏移页面的高度*/
			var scrollHeight = $(window).scrollTop(); //从0开始
			/*坚固导航 如果当前偏移高度大于header头的高度*/
			if(scrollHeight > headerH){
				/*坚固导航 给导航添加 固定(fixed)样式*/
				ygcate.addClass('js_yg_category');
					/*坚固导航 如果滚动条偏移页面的的高度大于(左侧导航到优酷导购的空白高度)*/
					if(scrollHeight > tBottom-ygcate.height()){
						/*坚固导航 给导航添加 绝对定位(absolute)样式 并且给此样式赋top属性*/
						ygcate.addClass('js_yg_category_btm').css("top",tBottom-ygcate.height()-headerH);
					}else{
						/*坚固导航 小于导航高度 给导航添加绝对定位样式,并且给这个高度赋值为0*/
						ygcate.removeClass('js_yg_category_btm').css("top",0);		
					}
			}else{
				/*坚固导航 当前滚动条偏移的高度小于header的高度 则top值为0*/
				ygcate.css("top",0);
				/*坚固导航 删除固定样式*/
				ygcate.removeClass('js_yg_category');			
			}
		})	
	});

	// 聚焦图
	$(function(event){
		/*聚焦图 初始化页面刷新第一次加载*/
		var initial = true;
		if (initial) {
			/*聚焦图 第一副图默认亮色*/
			$('.imgmasktab > li').first().stop(true, true).fadeTo('show',1);
			/*聚焦图 大于第一副图的透明度为0.7*/
			$('.imgmasktab > li:gt(0)').stop(true, true).fadeTo('show',0.8);
		}
		/*聚焦图 鼠标悬停事件*/
		$('.imgmasktab > li').hover(function() {
			/*聚焦图 先把当前元素的所有兄弟元素透明度立即调整为0.7*/
			$(this).siblings().stop(true, true).fadeTo('show',0.8);
			/*聚焦图 在把当前元素透明度取消*/	
			$(this).stop(true, true).fadeTo('show',1);
		}, function() {
			/*聚焦图 鼠标移出时把当前元素的透明度调整为0.7*/
			$(this).stop(true, true).fadeTo('show',0.8);
			/*聚焦图 鼠标移出时把第一个元素的透明度体调整为1*/	
			$(this).first().stop(true, true).fadeTo('show',1);
		});
	});
	
	// 测试 搜索
	$(function(){
		$('#keyword').css('font-size', '12px');
		// 触发搜索内容
		$('#keyword').keyup(function(event) {
			var content = {'shopName':$('#keyword').val()};
			if ($('#keyword').val() == "") {
				$('.searchmenu').remove();
			}
			$.ajax({
				url: '/index.php/Seek/seek',
				type: 'POST',
				data: content,
				success : function(data){
					if (data) {
						$('.searchmenu').remove();
						$(data).insertAfter('#keyword');
					}
				}
			})	
		});
		// 触发关闭搜索内容
		// $('.searchmenu').css('top','27');
		$('.searchmenu').live('mouseleave', function(event) {
			$('.searchmenu').css('display','none');
		});
		$('keyword').blur(function(event) {
			$('.searchmenu').remove();
		});


		// 背景色
		$('.li-searchKey').live('mouseover', function(event) {
			$(this).siblings().css('background','#fff');
			$(this).css('background','#F5E284');		
			// 同步显示
			$('#keyword').val($(this).children().first().html()).css('color', 'red'); ;
		})
	}); 

	// 测试 购物车
	$(function(event){
		/*自动查询*/
		var time = null;
		setTimeIs();
		function setTimeIs(){
			time = setTimeout(function(){
				$.ajax({
					url: '/index.php/Cart/cart',
					type: 'POST',
					success: function(data){
						if (data) {
							$('#shoppingcartContainer > ul').replaceWith(data);
							$('.mycart_pop').css('display','none');
						}
					}
				});
			},1);
		};		
		/*鼠标穿过*/ 
		$(".mycart_nav").bind("mouseenter",function(){
			if ($('.mycart_pop')) {
				$.ajax({
					url: '/index.php/Cart/cart',
					type: 'POST',
					success: function(data){
						if (data) {
							$('#shoppingcartContainer > ul').replaceWith(data);
						}
					}
				});
			};
			// clearInterval(time);
			$('.mycart_pop').css('display','block');
			$(this).addClass("mycart_hover");			
		});
		/*鼠标离开*/ 
		$(".mycart_nav").bind("mouseleave",function(){
				$('#shoppingcartContainer > ul').html('');
				$(this).removeClass("mycart_hover");	
				$('.mycart_pop').css('display','none');				
		});
		
		/*鼠标离开*/ 
		$('.dec').live('click', function(event) {
			var num = $(this).parent().find('.num').val();
			/*session id*/  
			var id = $(this).parent().find('#productId_1').val();
			/*-- */ 
			if (num > 1) {
				/*自减1*/ 
				$(this).parent().find('.num').val($(this).parent().find('.num').val()-1);
				/*获得加少后的总数*/ 
				var num = $(this).parent().find('.num').val();
				/*通过js的ajax修改seesion*/ 
				var data = {'id':id,'num':num};
				$.ajax({
					type:'POST',
					url:'/index.php/Cart/cart',
					data:data
				});
				var timeIs = setTimeout(function(){
					location.reload();
				},1);					
			}else{
				if (window.confirm('确定删除该商品?')) {
					var data = {'did':id};
					$.ajax({
						type:'POST',
						url:'/index.php/Cart/cart',
						data:data
					});
					// 延迟重新加载
					var timeIs = setTimeout(function(){
						location.reload();
					},1);	
				}else{
					return;
				}
			}
		});	

		/*手动删除*/
		$('.JsRemoveGood').live('click', function(event) {
			/*session id*/  
			var id = $(this).parent().parent().find('#productId_1').val();
			var data = {'did':id};
				$.ajax({
						type:'POST',
						url:'/index.php/Cart/cart',
						data:data
				});
				var timeIs = setTimeout(function(){
						location.reload();
				},1);	
		}); 

		/*添加商品*/ 	
		$('.add').live('click', function(event) {
			var num = $(this).parent().find('.num').val();
			/*session id*/  
			var id = $(this).parent().find('#productId_1').val();
			if (num < 10) {
				/*自增1*/ 
				$(this).parent().find('.num').val(parseInt($(this).parent().find('.num').val())+1);
				/*获得加后的总数*/ 
				var num = $(this).parent().find('.num').val();
				/*通过js的ajax修改seesion*/ 
				var data = {'id':id,'num':num};
				$.ajax({
					type:'POST',
					url:'/index.php/Cart/cart',
					data:data
				});
				var timeIs = setTimeout(function(){
					location.reload();
				},1);	
			};
		});

	}); 	

	// 测试热销排行
	$('.tab > li').live('mouseover', function(event) {
		var pidgin = $('.tab > li').index(this);
		$(this).siblings().removeClass('on');
		$(this).addClass('on');
		$('.bd > .imglst').eq(pidgin).siblings().css('display','none');
		$('.tab').css('display', 'block');
		$('.bd > .imglst' ).eq(pidgin).css('display', 'block');	
	});


	// 搜索点击赋值
	$(function(){
		$('.li-searchKey').live('click', function(event) {
			$('.li-searchKey > .search').val($(this).text());
			$('.searchmenu').css('display', 'none');
			$("form:first").trigger("submit");
		});
	});