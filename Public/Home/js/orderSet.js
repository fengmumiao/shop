/*订单查询与搜索 startTime 2014/11/19 --Yan*/
$(function(){
	$('#searchCriteria').live('mousedown', function(event) {
		$(this).val('');
	});
	/*提交订单*/
	$('.uc_ordersearchbtn').live('click', function(event) {
		var content = {'ord':$('#searchCriteria').val()};
		$.ajax({
			url:'/index.php/OrderSet/seek',
			type:'POST',
			data:content,
			success:function(data){
				if (data) {
					var width = $('.seek').css('width');
					var height = $('.seek').css('height');
					
					$(data).replaceAll($('.seek'));
					$('.seek').animate({'width':'0%','height':'0%'},1000,function(){
						$('.seek').animate({'width':width,'height':height},1000);
					});									
				}
			}
		})
	});
	/*确认收货*/
	$('.take').live('click', function(event) {
		var content = {'num':$(this).parent().find('.num').val()};
		var thiss = $(this);
		$.ajax({
			url:'/index.php/OrderSet/take',
			type:'POST',
			data:content,
			success:function(data){
				if (data) {
					$('<span style="width:60px;">已收货</span>').replaceAll(thiss);
				}
			}
		})
	});
})