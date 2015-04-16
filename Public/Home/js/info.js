$(function(){
    // 修改导航错误格式
    $('.yg_nav_list').css('margin-left','-200px');
    $('.ygwrap > .hd > li').css('margin-left', '70px');
    $('#n_help > dl').css('margin-left', '25px');
})

$(function(){
	// 默认样式
	$('.se').eq(0).addClass('select');
	$('.onSize').eq(0).addClass('select');
	// 样式添加
	$('.onSize').live('click', function(event) {
		$(this).siblings().removeClass('select');
		$(this).addClass('select');
	});
	// ajax异步传输
	$('.se').live('click', function(event) {
		$(this).siblings().removeClass('select');
		$(this).addClass('select');
		var content = {'id':$('.src').eq($('.se').index(this)).val()};
		$.ajax({
			url:'/index.php/Info/imgOver',
			type:'POST',
			data:content,
			datatype:'json',
			success:function(data){
				if (data) {
					var data = eval("("+data+")");
					$('.tp').empty();
					$(".tp").replaceWith(data.newStr);
					$('#size').empty();
					$('#size').replaceWith(data.sizeStr);
					$('.color').replaceWith(data.colo);
					$('.bImg').attr('src',data.bigImg);
					$('.onSize').eq(0).addClass('select');
				}
			}
		})
	});
})

$(function(){
	//增加商品
	$('.plus').live('click', function(event) {
		if ($('.mycartxt').val() < 8){
			$('.mycartxt').val(parseInt($('.mycartxt').val())+1);
		}else{
			alert('购买数量过大,请分批购买!');
		};
	});
	// 减少商品
	$('.subtract').live('click', function(event) {
		if ($('.mycartxt').val() > 1) {
			$('.mycartxt').val($('.mycartxt').val()-1);
		}else{
			alert('已经是最少数量了!');
		}
	});
})

// js_fixed_triggle
// 测试
$(function(){
	// 766
	/*滚动事件*/
	$(window).scroll(function(event) {
		if ($(window).scrollTop() > 766) {
			$('.goods_lc_triggle').css('position','fixed');
			$('.goods_lc_triggle').css('top',0);
			$('.goods_lc_triggle').css('z-index',999);
		}else{
			$('.goods_lc_triggle').removeAttr('style');
		}
	});
})
$(function(){
	/*选择事件*/
	$('.elect').live('click', function(event) {
		$(this).siblings().removeClass('current');
		$(this).addClass('current');
	});
})

$(function(){
	/*加入购物事件*/
	$('.ks2').live('click', function(event) {
		var id = $('#ids').val();
		var name = $('.goodsCon > h1').text(); //商品名
		var img  = $("a[id='select'][class$='select']").children().eq(0).attr('src');// 图片
		var size = $("#size > a[id='onSize'][class$='select']").attr('data-name'); //尺码
		var shopid = $('#saleId').val(); //店铺Id
		var color = $('.color').text(); //商品颜色
		var price = $('.f_song').text().replace('¥',''); //原始价格
		var goodsNumber = $('#number').text(); //商品编号
		var num = $('.mycartxt').val(); //购买数量
		var favo = parseInt(price) - parseInt($('.ygprc16').text()); //优惠价格
		var minor = (parseInt(price) - parseInt(favo))*num; //小计
		
		if (id && name && img && size && shopid && color && price && goodsNumber && num && favo && minor) {
			var content = { 'id':id,
							'name':name,
							'img':img,
							'size':size,
							'shopid':shopid,
							'color':color,
							'price':price,
							'goodsNumber':goodsNumber,
							'num':num,
							'favo':favo,
							'minor':minor}
			$.ajax({
				url:'/index.php/Cart/cartInsert',
				type:'POST',
				data:content,
				success:function(data){
					if (data) {
						var time = setTimeout(function(){
							location.reload();
						},1);
					};
				}
			})				

		}

	});
})
/*直接购买*/
$(function(){
	/*加入购物事件*/
	$('.lj2').live('click', function(event) {
		var id = $('#ids').val();
		var name = $('.goodsCon > h1').text(); //商品名
		var img  = $("a[id='select'][class$='select']").children().eq(0).attr('src');// 图片
		var size = $("#size > a[id='onSize'][class$='select']").attr('data-name'); //尺码
		var shopid = $('#saleId').val(); //店铺Id
		var color = $('.color').text(); //商品颜色
		var price = $('.f_song').text().replace('¥',''); //原始价格
		var goodsNumber = $('#number').text(); //商品编号
		var num = $('.mycartxt').val(); //购买数量
		var favo = parseInt(price) - parseInt($('.ygprc16').text()); //优惠价格
		var minor = (parseInt(price) - parseInt(favo))*num; //小计
		
		if (id && name && img && size && shopid && color && price && goodsNumber && num && favo && minor) {
			var content = { 'id':id,
							'name':name,
							'img':img,
							'size':size,
							'shopid':shopid,
							'color':color,
							'price':price,
							'goodsNumber':goodsNumber,
							'num':num,
							'favo':favo,
							'minor':minor}
			$.ajax({
				url:'/index.php/Cart/cartIns',
				type:'POST',
				data:content,
				success:function(data){
					if (data) {
						var time = setTimeout(function(){
							window.location.href = "/index.php/Order";
						},1);
					};
				}
			})				

		}

	});
})
/*评价商品*/
$(function(){
	$('.buybtn').live('click', function(event) {
		/*判断当前用户是否购买过此商品*/
		var content = {'user':$('#ids').val()};
		$.ajax({
			url:'/index.php/Comment/userExit',
			type:'POST',
			data:content,
			success:function(data){
				if (data) {
					$('#HBox').css('display', 'block');
				}else{
					alert('您还为购买此商品！');
				}
			}
		})
		
	});
	/*评分设置*/
	$('.grades').live('click', function(event) {
		var oldClass = $('.rate').attr('class').substr(18);
		if ($(this).val() == 10) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point5s_0'); 
		}else if ($(this).val() == 9) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point4s_1'); 	
		}else if ($(this).val() == 8) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point4s_0'); 
		}else if ($(this).val() == 7) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point3s_1'); 			
		}else if ($(this).val() == 6) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point3s_0'); 		
		}else if ($(this).val() == 5) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point2s_1'); 
		}else if ($(this).val() == 4) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point2s_0'); 
		}else if ($(this).val() == 3) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point1s_1'); 			
		}else if ($(this).val() == 2) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point1s_0'); 				
		}else if ($(this).val() == 2) {
			$('.rate').removeClass(oldClass);
			$('.rate').addClass('point0_0'); 
		}
	});
	/*尺码评价*/
	$('#sizes').live('click', function(event) {
		$(this).siblings().attr('checked', false);
		$(this).attr('checked', 'checked');
	});
	/*手动关闭评价*/
	$('.close').live('click', function(event) {
		$('#HBox').css('display', 'none');
	});
	/*提交*/
	$('.submitBtn').live('click', function(event) {
		var id = $('#ids').val();
		var size = '';
		for(var i = 0;i< $('.si').length;i++){
			if ($('.si').eq(i).attr('checked') == 'checked') {
				size = $('.si').eq(i).attr('name');
			}
		}
		var score = $('.grade').val();
		var name = $('.flagship').children().eq(0).text();
		var con = $('.contents').val();
		var content = {'id':id,'size':size,'score':score,'name':name,'con':con};
		$.ajax({
			url:'/index.php/Comment/handle',
			type:'POST',
			data:content,
			success:function(data){
				if (data) {
					var id = $('#ids').val();
					var content = {'id':id};
					$('#HBox').css('display', 'none');
					$.ajax({
						url:'/index.php/Comment/updates',
						type:'POST',
						datatype:'json',
						data:content,
						/*更新评价*/
						success:function(da){
							if (da) {
								var das = eval("("+da+")");
								/*自定义动画*/
								$('#fit').text(das.fit+'%');
								$('#nfit').text(das.nfit+'%');
								$('.tif').animate({'width':'0%'},1000,function(){
									$('.tif').animate({'width':das.fit+'%'},2000);
								})
								$('.ntif').animate({'width':'0%'},1000,function(){
									$('.ntif').animate({'width':das.nfit+'%'},2000);
								})
								$('#Red').text(das.count+'位已购买用户');
								$('#Gray').text('此商品共'+das.count+'人评价');
								$('#re').text(das.score+'分');
								$('.ca').text('（'+das.count+'）');
								var oldClass = $('#re').attr('class').substr(17);	
								if (das.score == 10) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point5b_0'); 
								}else if (das.score == 9) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point4b_1'); 
								}else if (das.score == 8) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point4b_0'); 
								}else if (das.score == 7) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point3b_1'); 
								}else if (das.score == 6) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point3b_0'); 
								}else if (das.score == 5) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point2b_1'); 
								}else if (das.score == 4) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point2b_0'); 
								}else if (das.score == 3) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point1b_1'); 
								}else if (das.score == 2) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point1b_0');
								}else if (das.score == 1) {
									$('#re').removeClass(oldClass);
									$('#re').addClass('point1b_0');
								}

							}
							
						}
					})
					$.ajax({
							url:'/index.php/Comment/update',
							type:'POST',
							datatype:'json',
							data:content,
							/*更新评价内容*/
							success:function(da){
								if (da) {
									$(da).replaceAll($('#userCommentContainer-1'));
									var width = $('#userCommentContainer-1').css('width');
									var height = $('#userCommentContainer-1').css('height');
									$('#userCommentContainer-1').fadeOut('show').fadeIn('show');
									// alert($('#userCommentContainer-1').css('height'));
				/*					$('#userCommentContainer-1').animate({'width':'0%','height':'0%'},1000,function(){
										$('#userCommentContainer-1').animate({'width':width,'height':height},1000);
									})*/
								}
							}
					})		
				}else{
					alert('你还为登录!');
					$('#HBox').css('display', 'none');
				}
			}

		})

	});
})
