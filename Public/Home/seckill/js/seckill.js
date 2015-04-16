/*时间倒计时*/
(function($){
    $.fn.countDown=function(options){
        var settings = {
            type:0
        };
        settings = $.extend(settings, options || {});
        return this.each(function(){
            var _this=$(this);
            var _leftSec=_this.attr('endtime')*1000;;
            var _t=null;
            var d,h,m,s,ms;
            function countdown(){
                _leftSec-=1000;
                d=Math.floor(_leftSec/(1000*60*60*24));
                h=Math.floor((_leftSec/(1000*60*60))%24);
                m=Math.floor((_leftSec/(1000*60))%60);
                s=Math.floor((_leftSec/1000)%60);
                if(m<10){
                    m="0"+m;
                }
                if(s<10){
                    s="0"+s;
                }
                if(_this.attr('first')){
                    _this.html('<i></i>还剩'+d+'天<em>'+h+'</em>小时<em>'+m+'</em>分<em>'+s+'</em>秒');
                }else{
                    _this.html('还剩'+d+'天<em>'+h+'</em>小时<em>'+m+'</em>分<em>'+s+'</em>秒');
                }
                if(_leftSec<=0) {
                    clearTimeout(_t);
					if(_this.attr('first')){
						//置顶商品已结束
						_this.parents('.goodsDesc:first').addClass('goodsDesc_soldout');
						_this.remove();
					}else{
						//已结束
						_this.html('').siblings('.goodsPrice').addClass('pSoldOut').find('.zhaopaiMin').addClass('zSoldOut');
					 }
                }
                if(_leftSec>0){
                    _t=setTimeout(countdown,1000);
                }
            }
            countdown();
        });
    }
})(jQuery);


$(function(){
    try{
        EvPNG.fix('div,em');
    }catch(e){}
        var _data = [];
        for(var i = 0 ; i < $(".goodsPic>sub").length ; i ++){
            _data.push($(".goodsPic>sub").eq(i).attr("no"));
        }
        i = 0;
        $.ajax({
            type: "POST",
            url: "/api/mark_new.jhtml",
            data: "cNos="+_data.join(";"),
            success: function(msg){
                var _msg = eval(msg);
                if(_msg != 0){
                    for(var i = 0 ; i < _msg.length ; i ++){
                        if(_msg[i].marks[0].value == "out"){
                            $(".miaos_"+_msg[i].no).addClass('soldout').find("em").addClass("sekout").click(function(){
                                location.href = $(this).parent().parent().find("a").attr("href");
                            });
                        }
                    }
                }


                //获取倒计时时间
                $.get('/cms/topics/getLeftTimeForSeckillCommodity.sc?r='+Math.random(),function(d){

                    $.each(d,function(i,n){

                        var domGood=$('.miaos_'+this.commodityNo);
                        if(domGood.length>0){
							if(!domGood.hasClass('soldout')){
								//进行中
								var domInfo=domGood.parent().parent();
								if(domInfo[0].nodeName.toLowerCase()!='li'){
									$('.countdown',domInfo).attr('endTime',this.endtime).attr('first',true).countDown();
								}else{
									$('.countdown',domInfo).attr('endTime',this.endtime).countDown();
								}
							}else{
								//售罄
								domGood.parent().parent().find('.countdown').html('&nbsp;');
							}
						}

                    });

                },'json');
            }
        }) ;

/**
 * IE下 window.onresize 有bug 可以使用debounce封装监听函数
 */

/**
 *
 * @param {Function} callback 回调函数
 * @param {Integer} delay   延迟时间，单位为毫秒(ms)，默认150
 * @param {Object} context  上下文，即this关键字指向的对象，默认为null
 * @return {Function}
 */
    function debounce(callback, delay, context){
        if (typeof(callback) !== "function") {
            return;
        }
        delay = delay || 150;
        context = context || null;
        var timeout;
        var runIt = function(){
            callback.apply(context);
        };
        return (function(){
            window.clearTimeout(timeout);
            timeout = window.setTimeout(runIt, delay);
        });
    }

//控制右侧浮动飘层
    var ele=$("#rightFixed"),w_flt;
    function setElepos(){
        var _windowW=$(window).width();
        if((_windowW/2)>=(1190/2)+10+258)
        {
            var left=(_windowW-1190)/2+1190;
            ele.css("left",left+'px');
        }else{
            ele.css({"left":'auto',"right":0});
        }

    }
    if(ele.length>0){
        w_flt=ele.width()*2;
        ele.hover(function(){
            $(this).find('.fixed_bd').show().siblings('.fixed_hd').hide();
        },function(){
            if($(window).width()<1190+w_flt){
                $(this).find('.fixed_hd').show().siblings('.fixed_bd').hide();
            }

        });
        //.yg_category_nav
        var w_screen=window.screen.width;
        if(w_screen<1190+w_flt){
            ele.css({"left":'auto',"right":0});
        }else{
            ele.css("right",'auto');
            window.onresize= debounce(setElepos, 300);
            //$(window).resize();
            setElepos();
        }


        var isIE6 = $.browser.msie && $.browser.version == "6.0"
        if(isIE6){

            ele.css('position','absolute');
            var _windowH = $(window).height(),_docH = $(document).height();


            $(window).scroll(function(){
                var scrollTop = $(document).scrollTop();
                var top;
                if(scrollTop<_docH-_windowH-10){
                    top = scrollTop+_windowH-300;
                    ele.css('top',top);
                }

            });
        }
}

});