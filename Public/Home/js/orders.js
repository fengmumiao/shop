$(function(){
	/*支付方式*/
	$('input:radio').click(function(event) {
		$('input:radio').attr('checked', false);
		$(this).attr('checked', 'checked');	
	});

	/*信息断定*/
	var re = /[0-9]+.?[0-9]*/;
	var res = /^[0-9]+.?[0-9]*$/;
	var index = true;
	user();
	function user(){
		$('.minput').blur(function(event) {
			var num = $(this).val();
			/*收货人判断*/
			if ($(this).val().length < 2) {
				$('.c9').text('（收货人信息不正确!）');
				$('.c9').css('color', 'red');
				index =  false;
			}else if ($(this).val() == '') {
				$('.c9').text('（请输入收货人!）');
				$('.c9').css('color', 'red');
				index = false;
			}else if (re.test(num)) {
				$('.c9').text('（收货人不能含有数字!）');
				$('.c9').css('color', 'red');
				index = false;
			}else if ($(this).val().length > 8) {
				$('.c9').text('（收货人过长!）');
				$('.c9').css('color', 'red');
				index = false;
			}else{
				$('.c9').text('（收货人可用!）');
				$('.c9').css('color', '#a9a9a9');
				index =  true;
			}
		});

	}

	/*详细地址判断*/
	adds();
	function adds(){
		$('.linput').blur(function(event) {
			var num = $(this).val();
			if ($(this).val().length < 5) {
				$('.f_red').text('（收货地址不精确!）');
				$('.f_red').css('color', 'red');
				index = false;
			}else if($(this).val().length > 20) {
				$('.f_red').text('（收货地址过长!）');
				$('.f_red').css('color', 'red');
				index = false;
			}else{
				$('.f_red').text('（收货地址可用!）');
				$('.f_red').css('color', '#a9a9a9');	
				index = true;
			}
		});

	}
	/*手机信息判断*/
	phone();
	function phone(){
		$('.minputs').blur(function(event) {
			if ($(this).val().length < 11) {
				$('.f_reds').text('（手机信息不正确!）');
				$('.f_reds').css('color', 'red');
				index = false;	
			}else if ($(this).val().length > 11){
				$('.f_reds').text('（手机信息不正确!）');
				$('.f_reds').css('color', 'red');
				index = false;
			}else if (isNaN($(this).val())) {
				$('.f_reds').text('（手机信息不不是数字!）');
				$('.f_reds').css('color', 'red');
				index = false;			
			}else{
				$('.f_reds').text('（手机信息可用!）');
				$('.f_reds').css('color', '#a9a9a9');
				index = true;	
			}
		});
	}
	/*选择支付方式*/
	fun();
	function fun(){
			if ($('.minputs').val() == '') {
				$('.f_reds').text('（手机信息不能为空!）');
				$('.f_reds').css('color', 'red');
				return  false;
			}else if ($('.linput').val() == '') {
				$('.f_red').text('（收货地址不能为空!）');
				$('.f_red').css('color', 'red');
				return  false;
			}else if ($('.minput').val() == '') {
				$('.c9').text('（收货人信息不能为空!）');
				$('.c9').css('color', 'red');
				return false;
			}else{
				return true;
			}			
	}
/*	address();
	function address(){
		var address = $('#loc_province').select2('data').text + ' - ' + $('#loc_city').select2('data').text + ' - ' +  $('#loc_town').select2('data').text);
		if (address == '省份 - 地级市 - 市、县、区') {
			alert('请选择(省份 - 地级市 - 市、县、区)');

		}
	}*/
	$(function(){
		$('#submi21t').live('click', function(event) {
					var user = $('.minput').val();  //收货人
		        	var address = $('#loc_province').select2('data').text + ' - ' + $('#loc_city').select2('data').text + ' - ' +  $('#loc_town').select2('data').text;
	 				var ress = $('.linput').val();  //详细地址
	 				var iphone = $('.minputs').val();  //联系电话
	 				var mselect = ''; //送货时间
	 				var bank = '';
	 				var bankImg = '';
	 				for(var i = 0;i < $('input:radio').length;i++){
	 					if ($('input:radio').eq(i).attr('checked') == 'checked') {
	 						bank = $('input:radio').eq(i).parent().next().attr('title');
	 						bankImg = $('input:radio').eq(i).parent().next().attr('src');
	 					}
	 				}
	 				for (var i = 0; i < $('.mselect > option').length; i++) {
	 					if ($('.mselect > option').eq(i).attr('value') == $('.mselect').val()) {
	 						mselect = $('.mselect > option').eq(i).text();
	 					}
	 				}
			if (fun() && index) {
	 				$('.user').val(user);
	 				$('.address').val(address);
	 				$('.ress').val(ress);
	 				$('.iphone').val(iphone);
	 				$('.mselect').val(mselect);
	 				$('.bank').val(bank);
	 				$('.bankImg').val(bankImg);
	 				var time = setInterval(function(){
	 					
	 				}, 1000)
				
			}else{
 				return  false;
			}
		});		
	})



// submi21t

})