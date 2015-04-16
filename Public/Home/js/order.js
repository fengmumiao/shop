$(function(){
	// 自动查询
	$('.table').css('font-size', '12px');
	$('.table').css('font-family', '新宋体');
	$('.table').css('color', '#555555');
	$('.content').css('font-weight', '0');

	$('#form').live('keyup', function(event) {
		var content = {'con':$('.form-control').val()};
		$.ajax({
			url:'/merchant.php/Merchant/Orders/effectiveOrders',
			data:content,
			type:'POST',
			success:function(data){
				if (data) {
					$('.table').find('.one').siblings().remove();
					$("<tr class='content'></tr>").appendTo(".table").fadeOut('show');
					$(data).replaceAll('.content');
				};
			}
		});
	});

	$('.un > #btnn').live('click', function(event) {
		var next = $('.un > #btnn').index(this);
		var id = $(this).children().attr('href');
		var content = {'id':id};
		var position = $(this).parent().parent();
		$.ajax({
			url:'/merchant.php/Merchant/Orders/orderInfo',
			data:content,
			type:'POST',
			success:function(data){
				if (data) {
					$('.contents').remove();
					$('#contents').remove();
					$(data).insertAfter(position);
					$('.contents').css('font-size', '12px');
					$('.contents').css('color', 'red');
					$('.un > #btnn').eq(next).css('display', 'none');
				};
			}
		});
	});

	$('#bt').live('click', function(event) {
		$('.btn').css('display', 'block');
		$('.contents').remove();
		$('#contents').remove();
	});

	$('#ubt').live('click', function(event) {
		var id = $(this).children().attr('href');
		var content = {'id':id};
		$(this).attr('disabled', 'disabled');
		$(this).children().html('已发货');
		$.ajax({
			url:'/merchant.php/Merchant/Orders/unGet',
			data:content,
			type:'POST',
		});
	});
})
