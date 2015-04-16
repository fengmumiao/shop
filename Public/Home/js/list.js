/*** List 页面特效 startTime 2014/11/15 Yan*/
 	/*body特效*/
  	$(function(){
 		$('.selfadaptat').fadeTo("slow", 0.66).fadeTo("slow", 1);
 		$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
 	})

 	// 垂直导航
 	$(function(){
 		$('.hd').live('mouseenter', function(event) {
 			$('.indexnav2list').css('display', 'block');
 		});
 		$('.indexnav2list').live('mouseleave', function(event) {
 			$('.indexnav2list').css('display', 'none');
 		});
 	});

 	leftNav();
	// 左侧导航 2014/11/12
	function leftNav(){
		$(".floatad").show();
		 /*左侧导航 绑定 新增元素依然触发的 鼠标经过事件*/ 
		 $(".indexnav2list>li").live("mouseover",function(event){
		    /*左侧导航 鼠标移动到子标签删除currr样式*/ 
	        $(".indexnav2list>li").removeClass("currr");
	        /*call方法引用该方法传递当前位置 使得直接能获得input hidden的val值*/
	        // getcurrpic.call(this);
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

		$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
		// 背景色
		$('.li-searchKey').live('mouseover', function(event) {
			$(this).siblings().css('background','#fff');
			$(this).css('background','#F5E284');		
			// 同步显示
			$('#keyword').val($(this).children().first().html()).css('color', 'red'); ;
		})
	}); 

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


	// 测试 下方搜索
	$(function(){
		$('#kword2').css({'font-size':'12px','color':'red'});
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


	// 筛选器
	$(function(){
		/*点击多选*/
		$(".ygFilterCon .moreSelete").click(function(){
			var dl = $(this).closest("dl");
			$(".ygFilterCon dl").addClass("defaultCat").removeClass("chooseList");
			//li元素显示
			$(this).prev("ul").find("li").show();
			setHeight();
			dl.addClass("chooseList").removeClass("defaultCat").find("dd").height("100%");
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
			// smt.attr("disabled","disabled");
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
					// ygFilterSmt.attr("disabled","disabled");
				}else{
					ygFilterSmt.removeClass("noSmt").addClass("smt");
					// ygFilterSmt.attr("disabled","");
				}
			}
		/*自动计算高度，为了加快渲染速度，请不要提到底部或者其他位置*/
		//setHeight();
		function setHeight(){
			$(".ygFilterCon dl").each(function(){
				var self = $(this);
				var dd = self.find("dd");
				var height = dd.height();
				var moreLink = self.find(".moreLink");
				var default_height = 50;
				if(dd.find("ul").attr("name")=="seo_en_brand_name"){
					default_height = 50;
				}else{
					default_height = 25;
				}
				if(height>default_height){
					moreLink.show();
					if(moreLink.hasClass("up")){
						dd.height("100%");
					}else{
						dd.height(default_height);
					}
				}
			});
		}
		//更多、收起链接布局
		$(".ygFilterCon .moreLink").toggle(function(){
			var self = $(this);
			var dl = self.closest("dl");
			dl.find("dd").css({"height":"100%"});
			dl.find("dd").find("ul").find("li").show();
			self.removeClass("down").addClass("up");
			self.html("收起<i class=\"list_bg\"></i>");
			return;
		},function(){
			var self = $(this);
			var dl = self.closest("dl");
			if(dl.find("dd").find("ul").attr("name")=="seo_en_brand_name"){
				dl.find("dd").find("ul").find("li:lt(12)").show();
				dl.find("dd").height(50);
			}else{
				dl.find("dd").find("ul").find("li:lt(6)").show();
				dl.find("dd").height(25);
			}
			self.removeClass("up").addClass("down");
			self.html("更多<i class=\"list_bg\"></i>");
		});
		//筛选器  更多筛选内容
		$("#moreFilter").toggle(function(){
			varself = $(this);
			$("#filterCon").find("dl:gt(8)").each(function(){
				$(this).show();
			});
			self.html("收起<i>&nbsp;</i>").addClass("collapse").removeClass("expand");
			$("#filterCon").find("dl:last").css({"margin-bottom":"0"});
			$("#filterCon").css({"border-bottom-width":"0"});
			return;
		},function(){
			var self = $(this);
			$("#filterCon").find("dl:gt(8)").each(function(){
				$(this).hide();
			});
			self.html("更多<i>&nbsp;</i>").addClass("expand").removeClass("collapse");
			$("#filterCon").find("dl:last").css({"margin-bottom":"-1px"});
			$("#filterCon").css({"border-bottom-width":"1px"});
			return;
		});
		$(".ygFilterCon dl").hover(function(){
			$(this).css({"border-bottom-style":"solid"});
		},function(){
			$(this).css({"border-bottom-style":"dotted"});
		})
	})
	// 提交多选
	$(function(){
			var brand  = 0;
			var strBrand = '';
			var string = '';
			var click = 0;
			var content = '';
		$('.ygFilter_cz > #smtClick').live('click', function(event) {
			$('.newPage').css('display', 'none');
			$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
			var arr = new Array();
			click = parseInt(click) + 1;
			/*标识归属范围*/
		
			var strl = $(this).parent().parent().children().first().attr('color');			
			for (var i = 0; i < $(this).parent().parent().children().first().find('.choosed').length; i++) {
				arr[i] = '"%'+ $(this).parent().parent().children().first().find('.choosed').eq(i).attr('name')+'%"';
			};
			if (click > 2) {
			   var or = ' or ';	
			}else{
			   var or = '';
			}
			if (strl == 'brand') {
				if (brand < 1) {
					brand = parseInt(brand) + 1;
					strBrand += strl+' like '+arr.join(' or '+strl+' like ');
				}else{
					strBrand = '';
					brand = parseInt(brand) - 1;
					strBrand += strl+' like '+arr.join(' or '+strl+' like ');
				}
			}else{
				string += or + $(this).parent().parent().children().first().attr('color')+' like '+arr.join(' or '+$(this).parent().parent().children().first().attr('color')+' like ');
			}
		
			content = {'betwo':strBrand,'bestwo':string,'url':window.location.pathname,'click':click,'state':'','start':'','stop':''};
			
			$.ajax({
				url:'/index.php/Screen/be',
				type:'POST',
				data:content,
				success:function(d){
					if (d) {
						$('#proList').replaceWith(d);
					}
				}
			})
		});
		var arr = new Array();
		var arrs = new Array();
		var brand = 0;
		// 单选
		$('#screen').live('click', function(event) {
			$('.newPage').css('display', 'none');
			$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
			// $('#proList').slideDown("slow").fadeTo("slow", 0.66).fadeTo("slow", 1);
			if ($(this).parent().attr('color') == 'brand') {
				brand = parseInt(brand) + 1;
				if (brand < 2) {
					arr += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%"';		
				}else{
					arr = '';
					arrs = '';
					arr += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%"';
					brand = parseInt(brand) - 1;
				}
			}else{
				arrs += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%",';
			}
			content = {'be':arr,'bes':arrs,'url':window.location.pathname,'state':'','starts':'','stops':''};
			$.ajax({
				url:'/index.php/Screen/be',
				type:'POST',
				data:content,
				success:function(d){
					if (d) {
						$('#proList').replaceWith(d);
					}
				}
			})
		});
		// minPrice
		$('#maxPrice').live('keyup',function(event) {
			$('.newPage').css('display', 'none');
			if (content.bestwo && content !== '') {
				// content.bestwo = content.bestwo.replace(/\price/g,'season');
				if ($('#minPrice').val() !== '') {
					content.starts = $('#minPrice').val();
					content.stops = $('#maxPrice').val();
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:content,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})
				}
			}

			// if (content.bes && content !== '') {
				// content.bes = content.bes.replace('price','sex');
				if ($('#minPrice').val() !== '' && $('#maxPrice').val().length > 2) {
					content.starts = $('#minPrice').val();
					content.stops = $('#maxPrice').val();
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:content,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})
				}
			// }
			if (content == '') {
				var con = {'url':window.location.pathname,'default':5,'starts':$('#minPrice').val(),'stops':$('#maxPrice').val()};
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:con,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})	
			}
				
		});
		/*热销*/
		$('#tt0_1').live('click', function(event) { 

			$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
			if (content == '') {
				var con = {'url':window.location.pathname,'default':1};
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:con,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}else{
				content.state = 1;
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:content,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}
		});
		/*新品*/
		$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
		$('#tt0_1').live('click', function(event) { 
			if (content == '') {
				var con = {'url':window.location.pathname,'default':1};
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:con,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}else{
				content.state = 1;
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:content,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}
		});
		/*新品*/
		$('#tt0_3').live('click', function(event) { 
				$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
			if (content == '') {
				var con = {'url':window.location.pathname,'default':2};
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:con,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}else{
				content.state = 2;
				$.ajax({
					url:'/index.php/Screen/be',
					type:'POST',
					data:content,
					success:function(d){
						if (d) {
							$('#proList').replaceWith(d);
						}
					}
				})				
			}
		});
		/*价格select-up  tt tt-down select-down  tt tt-up select-up*/
		var clickNum = 0;
		$('#tt0_2').live('click', function(event) {

			$('.srchlst-wrap').css('opacity', '0').css('width', '0px').css('height', '0px').animate({'width':'240px','height':'240px','opacity':'1'},1000);
			if (clickNum == 0) {
				$(this).removeClass('select-up');
				$(this).addClass('tt-up');
				$(this).addClass('select-up');
				clickNum = clickNum + 1;

				if (content == '') {
					var con = {'url':window.location.pathname,'default':3};
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:con,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})				
				}else{
					content.state = 3;
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:content,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})				
				}

			}else if (clickNum == 1){
				$(this).removeClass('tt-up');
				$(this).removeClass('select-up');
				$(this).addClass('tt-down');
				$(this).addClass('select-down');
				clickNum = clickNum - 1;

				if (content == '') {
					var con = {'url':window.location.pathname,'default':4};
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:con,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})				
				}else{
					content.state = 4;
					$.ajax({
						url:'/index.php/Screen/be',
						type:'POST',
						data:content,
						success:function(d){
							if (d) {
								$('#proList').replaceWith(d);
							}
						}
					})				
				}				
			}
		});

	})
	// 单选
	// $(function(){
	// 	var arr = new Array();
	// 	var arrs = new Array();
	// 	var brand = 0;
	// 	$('#screen').live('click', function(event) {
	// 		if ($(this).parent().attr('color') == 'brand') {
	// 			brand = parseInt(brand) + 1;
	// 			if (brand < 2) {
	// 				arr += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%"';		
	// 			}else{
	// 				arr = '';
	// 				arrs = '';
	// 				arr += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%"';
	// 				brand = parseInt(brand) - 1;
	// 			}
	// 		}else{
	// 			arrs += $(this).parent().attr('color')+' like "%'+$(this).attr('name')+'%",';
	// 		}
	// 		var centent = {'be':arr,'bes':arrs,'url':window.location.pathname};
	// 		$.ajax({
	// 			url:'/index.php/Screen/be',
	// 			type:'POST',
	// 			data:centent,
	// 			success:function(d){
	// 				if (d) {
	// 					$('#proList').replaceWith(d);
	// 				}
	// 			}
	// 		})
	// 	});

	// 	$('#tt0_1').live('click', function(event) {
	// 		alert(arr+'|'+arrs)
	// 	});

	// })

	// 搜索点击赋值
	$(function(){
		$('.li-searchKey').live('click', function(event) {
			$('.li-searchKey > .search').val($(this).text());
			$('.searchmenu').css('display', 'none');
			$("form:first").trigger("submit");
		});
	});

	// 重新搜索功能
	$(function(){
		$('.inputSubmit').live('click', function(event) {
			var content = {'keyword':$('.inputTxt').val()};
			$.ajax({
				url:'/index.php/SeekGet/index',
				type:'POST',
				data:content
			});
		});
	})


	// 筛选器默认显示个数
	$(function(){
		$('#one > li:gt(9)').css('display', 'none');
		$('#two > li:gt(4)').css('display', 'none');
		$('#three > li:gt(4)').css('display', 'none');
		$('#four > li:gt(4)').css('display', 'none');
		$('#five > li:gt(4)').css('display', 'none');
		$('#six > li:gt(4)').css('display', 'none');
		$('#nine > li:gt(4)').css('display', 'none');
	})


	//瀑布流商品
	