$(function(){
	/*全选*/
	$('.all').live('click', function(event) {
		/*取消全选*/
		if ($(this).attr('checked') !== 'checked') {
			$('.chkbox').attr('checked', false);
			$('#count').text(0);
			$('.chkbox').attr('value','');
			$('.col_4').css('display', 'none');
		}
		/*选择全选*/
		if ($(this).attr('checked') == 'checked') {
			$('.chkbox').attr('checked', true);
			var str = 0;
			for (var i = 0; i < $('.ones').length; i++) {
				str = str +  parseInt($('.ones').eq(i).text());
			};
			$('#count').text(str);
			/*隐藏传获取id值*/
			for (var i = 0; i < $('.chkbox').length; i++) {
				$('.chkbox').eq(i).val($('.chkbox').eq(i).parent().find('.thisId').val());
			};
			$('.col_4').css('display', 'block');
		}
	});	
	/*选择单选*/
	$('.chkbox').live('click', function(event) {
		/*取消单选*/
		if ($(this).attr('checked') !== 'checked') {
			var price = $(this).parent().parent().find('.col_6').children().eq(0).text();
			$('#count')	.text(parseInt($('#count').text()) - parseInt(price));
			$(this).attr('value', '');
			$(this).parent().parent().find('.col_4').css('display', 'none');
		}
		/*选择单选*/
		if ($(this).attr('checked') == 'checked') {
			var price = $(this).parent().parent().find('.col_6').children().eq(0).text()
			$('#count')	.text(parseInt($('#count').text()) + parseInt(price));		
			$(this).val($(this).parent().find('.thisId').val());
			$(this).parent().parent().find('.col_4').css('display', 'block');
		}
		/*判断全选状态*/
		if ($('.chkbox').attr('checked') !== 'checked') {
			$('.all').attr('checked', false);
		}
	});
	/*减少商品*/
	$('.goodsSub ').live('click', function(event) {
		var subtr = 0;
		var id = $(this).parent().find('.thisId').val();
		var num = $(this).parent().find('.goodsTxt').val();
		/*同时改变价格*/
		if (num > 1) {
			$(this).parent().find('.goodsTxt').val(parseInt(num)-1);
			/*修改价格*/
			var price = $(this).parent().parent().find('.col_6').children().eq(0).text();
			var oldPrice = $(this).parent().parent().find('.col_3').text();
			var newPrice = $(this).parent().parent().find('.col_5').children().eq(0).val();
			price = (parseInt(oldPrice) - parseInt(newPrice)) * parseInt($(this).parent().find('.goodsTxt').val());
			$(this).parent().parent().find('.col_6').children().eq(0).text(price);
			$('#count').text(parseInt($('#count').text()) - (parseInt(oldPrice) - parseInt(newPrice)));
			var content = {'id':id,'num':$(this).parent().find('.goodsTxt').val(),'price':$(this).parent().parent().find('.col_6').children().eq(0).text()};
			/*剩余数量*/
			var goodsNum = $(this).parent().find('.mt3').text().replace('剩','');
			goodsNum = goodsNum.replace('件','');
			var cut = parseInt(goodsNum) + 1;
			if (cut <= $(this).parent().find('.mtt33').val()) {
				$(this).parent().find('.mt3').text('剩'+cut+'件');
			}
			/*ajax异步传输*/
			$.ajax({
				url:'/index.php/Car/operation',
				type:'POST',
				data:content,
			})
		}

	});
	/*猜你喜欢*/
	$('.uc_slide').fadeTo("slow", 0.66).fadeTo("slow", 1);
	$('.shopping_cart_tr').fadeTo("slow", 0.66).fadeTo("slow", 1);

	/*增加商品*/
	$('.goodsPlus').live('click', function(event) {
		var subtr = 0;
		var id = $(this).parent().find('.thisId').val();
		var num = $(this).parent().find('.goodsTxt').val();
		/*同时改变价格*/
		if (num < 9) {
			$(this).parent().find('.goodsTxt').val(parseInt(num)+1);
			/*修改价格*/
			var price = $(this).parent().parent().find('.col_6').children().eq(0).text();
			var oldPrice = $(this).parent().parent().find('.col_3').text();
			var newPrice = $(this).parent().parent().find('.col_5').children().eq(0).val();
			price = (parseInt(oldPrice) - parseInt(newPrice)) * parseInt($(this).parent().find('.goodsTxt').val());
			$(this).parent().parent().find('.col_6').children().eq(0).text(price);
			$('#count').text(parseInt($('#count').text()) + (parseInt(oldPrice) - parseInt(newPrice)));
			var content = {'id':id,'num':$(this).parent().find('.goodsTxt').val(),'price':$(this).parent().parent().find('.col_6').children().eq(0).text()};
			/*剩余数量*/
			var goodsNum = $(this).parent().find('.mt3').text().replace('剩','');
			goodsNum = goodsNum.replace('件','');
			var cut = parseInt(goodsNum) - 1;
			$(this).parent().find('.mt3').text('剩'+cut+'件');			
			/*ajax异步传输*/
			$.ajax({
				url:'/index.php/Car/operation',
				type:'POST',
				data:content,
			})
		}

	});
	/*单条删除*/
	$('#del').live('click', function(event) {
		if (window.confirm('您确定删除该宝贝嘛？')) {
			var content = {'did':$(this).parent().find('.did').val()};
			$.ajax({
				url:'/index.php/Car/operation',
				data:content,
				type:'POST'
			})
			$(this).parent().parent().stop(true,true).fadeOut('show');
			var del = $(this).parent().parent().find('.col_6').children().eq(0).text();
			$('#count').text(parseInt($('#count').text()) - parseInt(del));
			$(this).parent().parent().remove();
		}
	});
	/*清空购物车*/
	$('.cblue').live('click', function(event) {
		if (window.confirm('您确定清空购物车嘛?')) {
			var content = {'didel':1};
			$.ajax({
				url:'/index.php/Car/operation',
				data:content,
				type:'POST'
			})
			$('.shopping_cart_tr').stop(true,true).fadeOut('show');
			$('.shopping_cart_tr').parent().parent().remove();
			$('#count').text('');
		}
	});
	/*提交购物车*/
	$('.cart_b_paybtn').live('click', function(event) {
			var content = {'user':'exits!'};
			$.ajax({
				url:'/index.php/Car/isUser',
				data:content,
				type:'POST',
				success:function(data){
					if (data !== 'The user does not exist!') {
						alert('您还未登录!');
						window.location.href = "/index.php/Login/index";
					}else{
						var ids = '';
						for (var i = 0; i < $('.chkbox').length; i++) {
							if ($('.chkbox').eq(i).val() != '') {
								ids += $('.chkbox').eq(i).val()+',';
							}
						};
						var content = {'ids':ids};
						$.ajax({
							url:'/index.php/Car/isOrder',
							data:content,
							type:'POST',
							success:function(data){
								if (data) {
									window.location.href = "/index.php/Order";
								};
							}
						});
					}
				}
			})
	});
})