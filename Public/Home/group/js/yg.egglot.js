	/*
		砸蛋2013-05-23
	*/
if($('.egg_list').length>0){
	var activeShareTitle='';
	var opt=settings,
		lotid=opt.id,
		confirmflag=opt.confirmFlag;
		var site='';
		var that=$('#eggList');
		var confirmDg=null; //确认弹窗
		var currEgg=null; //当前金蛋
		var eggW=parseInt($('#eggList li:first').find("sup").width());
		eggW=eggW==0?parseInt($('#eggList li:first').find("sup").css('width').replace('px','')):eggW;
		
		var hammer=$('<p>')
			   .attr('id','hammer')
			   .addClass('hammer');
	    var resultTip=$('<p>').addClass('result_tip').html('<sub>￥</sub><b id="result"></b>');
		var bdShareDiv=$('<div>')
				   .addClass('bdShare')
				   .attr('id','shareDiv')
				   .html('<span id="bdshare" class="horShare bds_tools slid bdshare_t get-codes-bdshare" data="{text:bdShareParam.bdText,desc:bdShareParam.bdDesc,comment:bdShareParam.bdComment,pic:bdShareParam.bdPic}"> <span class="fl" style="height: 26px; line-height: 26px; font-size: 12px; padding-top: 2px;">分享到：</span><span class="horShareList fl"><a class="bds_qzone" href="javascript:;" title="分享到QQ空间"></a><a class="bds_tsina" href="javascript:;" title="分享到新浪微博"></a><a class="bds_tqq" href="javascript:;" title="分享到腾讯微博"></a><a class="bds_renren" href="javascript:;" title="分享到人人网"></a><a class="bds_kaixin001" href="javascript:;" title="分享到开心网"></a></span></span>');
		
	that.append(hammer).append(resultTip);
	that.parent().append(bdShareDiv);
	var hammerW=parseInt($('#hammer').width());
	hammerW=hammerW==0?parseInt($('#hammer').css('width').replace('px','')):hammerW;
	
	$('#eggList li').each(function(index, element) {
		var li=$(this);
		var i=parseInt(index);
		li.css({'left':(eggW-40)*i+10*(i-1)});
        li.bind('click',function(){
			hammerAnimate(li);
			if($(".ygDialog").length>0) return;
			if($('.egg_list li.curr').length>0) return;
			currEgg=$(this);
			eggClickCheck();
			//confirmflag==1?eggClickCheck():eggClick();
			return false;
		});
		
		li.hover(function(){
			$(this).addClass('hover').siblings().removeClass('hover');
			var posL=$(this).position().left+hammerW+10;
			hammer.css({'left':posL});
		},function(){
			$('.egg_list li').removeClass('hover');
		});
    });
	
	function synUserAddressData(){
		flag=1;
		window.location.reload();
	}
		
	
	function errAlert(str){
		var _html='<div style="padding:30px;margin:0 auto;">'+
				'<span class="fl sadIcon"> </span>'+
				'<div class="fl" style="padding-left:20px;font-size:13px;margin-top:10px;">' + str + '</div></div>';
		ygDialog({
		title : "温馨提示",
		width:420,
		height:150,
		content : _html,
		lock : false
		});
		$(".bdShare").css({'left':'-9999px'});
	}
	
	 function sucAlert(money,type){
		var _lbl='优惠券';
		if(type=="2")
		{
			_lbl="大礼包";
		}
		var _html='<div style="padding:30px;margin:0 auto;">'+
		  '<span class="fl resultIcon"> </span>'+
		  '<div id="resultDiv"  class="fl" style="padding-left:20px;font-size:13px;margin-top:10px;">恭喜您获得<b class="Red">'+money+'</b>元'+_lbl+'    <a href="/my/coupon.jhtml" class="cblue" target="_blank">点击查看</a></div>';
		  ygDialog({
					title:"温馨提示",
					width:420,
					height:150,
					content:_html,
					lock:false,
					close:function(){
						$(".bdShare").css({'left':'-9999px'});
					}
				});
				setbdSharePos();
	}
	
		//砸蛋确认对话框
		function showWarn(use_integral,type,couponData,pvalue) {
			
			var _par='';
			var _lb='';
			 _par='获得一张<strong class="corg">40</strong>元优惠券。';
			
			if(type=='2' && couponData!=null)
			{
				_par='获得一份<strong class="corg">'+pvalue+'</strong>元优惠券大礼包，大礼包包含：';
							
				$.each(couponData,function(i,v){
					_lb+=v.num +'张'+v.parVal+'元优惠券、';
				});
				_lb=_lb.substr(0,_lb.length-1);
				_par=_par+_lb+'。';
			}
			
			var _html = '<div style="padding:30px;margin:0 auto;">' 
			+ '<span class="fl resultIcon"> </span>' 
			+ '<div class="fl" style="padding-left:20px;font-size:13px;margin-top:10px;width:400px;">注意：本次参与将消耗您<strong class="corg">'
			+use_integral+'</strong>积分，'
			+_par
			+'<p style="margin-top:15px;"><a href="javascript:;" class="autoBtn1 jsConfirmGet"><span>我要领券</span></a><a href="javascript:;"  class="autoBtn2 jsCloseConfirmDg" style="margin-left:20px;"><span>我再想想</span></a></p></div></div>';
			confirmDg = ygDialog({
				title : "温馨提示",
				content : _html,
				width : 560,
				height : 150,
				lock : false
			});
			$(".jsCloseConfirmDg").live('click',function(){
				confirmDg.close();
				return false;
			});
			
			$(".jsConfirmGet").live('click',function(){
				eggClick();
				return false;
			});

		}
		
		//锤子动画
		function hammerAnimate(obj)
		{
			
			var posL=hammer.position().left;
			hammer.animate({
				"top":obj.position().top+20,
				"left":posL-20
			},100);
			hammer.animate({
				"top":obj.position().top,
				"left":posL
			},30);
		}
		
		//验证是否可以砸蛋.
		function eggClickCheck() {
			$.get("/yitianmall/lottery/start_check.sc?lottery_id=" + lotid + "&t=" + Math.random(), function(req) {
				if(req.msg == 'user_no_login') {//验证登陆
					YouGou.Biz.loginPop({title : '您尚未登录',lock: true,closable:true,refreshTopWin:true});
				} else if(req.msg == 'checMobile') {
					//需要验证手机
					
					var _html='<div style="padding:30px;margin:0 auto;">'+
					  '<span class="fl resultIcon"> </span>'+
					  '<div id="resultDiv"  class="fl" style="padding-left:20px;font-size:13px;margin-top:10px;">您的注册资料不完整，需要绑定手机号码，才能完成此操作    <a href="/my/safeSet.jhtml" class="cblue" target="_blank">点击绑定</a></div>';
					  ygDialog({
								title:"温馨提示",
								width:420,
								height:150,
								content:_html,
								lock:false,
								close:function(){
									$(".bdShare").css({'left':'-9999px'});
								}
							});
					  
//					ygDialog({
//						title : "安全验证",
//						url : "/usercenter/checkmobile/toCheckMobile.sc",
//						closable : false
//					});
				} else if(req.msg == 'req_limit') {
					errAlert('您参与的太频繁,这样可不太好哦!! -_-');
				} else if(req.msg == 'invalid') {
					errAlert('抱歉，活动暂时未开始。');
				} else if(req.msg == 'no_start') {
					errAlert('抱歉，活动暂时未开始。');
				} else if(req.msg == 'is_end') {
					errAlert('抱歉，活动已结束。');
				} else if(req.msg == 'already_get') {
					var max_type = req.max_type;
					var max = req.max;
					var content = "抱歉，您"
					if(max_type == 0 || max_type == '0') {
						content = content + "今天已经参与过了，每天只能参与" + max + "次。"
					} else {
						content = content + "本次活动已经参与过了，每个活动只能参与" + max + "次。"
					}
					errAlert(content);
				} else if(req.msg == 'error') {
					errAlert("error");
				} else if(req.msg == 'true' || req.msg=='integral_not') {
					if(confirmflag==1)
					{
						showWarn(req.use_integral,req.sendMethod,req.couponVos,req.parvalue);
					}
					else
					{
						eggClick();
					}
				}
			}, "json");
		}
		
		function eggClick() {
			if(confirmDg){
				confirmDg.close();
			}
			var _this = currEgg;
			var result_tip=that.find(".result_tip");
			var index = $(".eggList li").index(this);
			$.get("/yitianmall/lottery/start.sc?lottery_id=" + lotid + "&t=" + Math.random(), function(req) {
				if(req.msg == 'integral_not') {
					errAlert('抱歉，您的积分不足，<strong class="corg">300</strong>积分方可参与一次！<br/><a href="http://www.yougou.com/my/point.jhtml" class="cblue">查看积分</a>');
				} else if(req.msg == 'req_limit') {
					errAlert('您参与的太频繁,这样可不太好哦!! -_-');
				} else if(req.msg == 'error') {
					errAlert("error");
				} else if(req.msg == 'winning') {
					var money = req.parvalue;
					_this.addClass("curr");
					_this.find("sup").show();
					hammer.hide();
						result_tip.find("b").html(money);
						result_tip.css({display:'block',top:'40px',left:_this.position().left+eggW/2-result_tip.width()/2+10,opacity:0}).animate({top: '+10',opacity:1},300,function(){
							sucAlert(money,req.sendMethod);});
					if(req.sendMethod=="2")
					{
						activeShareTitle = '我刚刚在@优购时尚商城，参与了领券活动，领取到一份' + money + '元大礼包，全场可用，新款上架，折上再优惠，超值。你也来参加吧！';
					}
					else
					{
						activeShareTitle = '我刚刚在@优购时尚商城，参与了领券活动，领取到一张' + money + '元优惠券，全场可用，新款上架，折上再优惠，超值。你也来参加吧！';
					}
	
					setTimeout(function() {
						hammer.show();
						$(".egg_list li").removeClass("curr");
						$('.result_tip').hide();
					}, 5000);
				} else if(req.msg == 'nowinning') {
					errAlert('抱歉，您木有中奖，再接再厉吧。');
				}
			}, "json");
		}
		
		//设置砸蛋分享提示弹出位置
		function setbdSharePos(){
			try{
				var rDiv=$('#resultDiv');
				if(rDiv.length>0){
					var bdshare=$('.bdShare');
					var posL=rDiv.offset().left+20;
					var posT;
					if ($.browser.version == "6.0" && $.browser.msie){
						posT=rDiv.offset().top+rDiv.height();
					}else{
						posT=rDiv.offset().top+rDiv.height()+5-$(document).scrollTop();
					}
					bdshare.css({'left':posL,'top':posT});
				}
			}catch(e){}
		}
	
		$(window).resize(function(){
			setTimeout(function(){setbdSharePos();},50);
		});
}