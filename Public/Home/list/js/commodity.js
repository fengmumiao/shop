// $(document).ready(function(){commodity_mark()});function commodity_mark(d){var g=[];var h=false;var c=false;var b=false,e=false,f=false,a=false;if(d){strProductNos=d.split(",");g=strProductNos;h=true}else{$("sup.salepic2").each(function(){var i=$(this).attr("no");if(i&&i!=""){g.push(i);c=true}});$("sup.salepic").each(function(){var i=$(this).attr("no");if(i&&i!=""){g.push(i);h=true}});$(".cmdtyPrice").each(function(){var i=$(this).attr("no");if(i&&i!=""){g.push(i);b=true}})}if($("#newtopicbd")[0]){e=true;if($(".tpc_lst_module3").length>0){a=true}}if(document.getElementById("indexOutlets")){f=true}if(g.length>0){$.post("/api/mark_new.jhtml",{cNos:g.join(";")},function(n){if(n!=null&&n.length>0){var m=function(G){var y=n[G],r=y.no,q=y.activePrice,p=y.discount;if(q){var x=['<span class="ajaxprice"><span class="ajaxprice_tag">活动价:</span> <em class="ygprc">&yen;<i>'];x.push(q);x.push("</i></em></span>");if(p){x.push('<span class="discount">(');x.push(p);x.push("折)</span>")}if(e&&!a){var A=$("span.price_no"+r)}else{var A=$(".price_no"+r)}A.html(x.join("")).addClass("c_actprc")}if(e&&a){$("i.discount_no"+r).html(p)}if(f){if(p){var B=p.split("."),z="<em>"+B[0]+"</em>.";if(B.length>1){z+=B[1]}else{z+="0"}$("span.discount_no"+r).html(z)}}if(!c&&!h){return}var F=y.marks;if(y.memberPrice){$("sup.mark_small_"+r).html("<em class='saleActiveRemark memberprice'>会员尊享<strong>&yen;"+y.memberPrice+"</strong></em>")}if(F!=null&&F!=""&&F.length>0&&!y.memberPrice){for(var D=0;D<F.length;D++){var t=F[D];var s=t.mark;var w=t.value;var H=t.lessSize;if(s==null&&s==""){continue}if(s=="sys"){if(w=="out"){if(c){$("sup.mark_big_"+r).html('<em class="markSoldOut"></em>').addClass("markSoldOut_sup")}if(h){$("sup.mark_small_"+r).html('<em class="markSoldOut"></em>').addClass("markSoldOut_sup")}}if(w=="less"){if(h){if(H&&H!=undefined){H="尺码："+H;$("sup.mark_small_"+r).html('<em class="markLess saleActiveRemark" >'+H+"</em>")}else{$("sup.mark_small_"+r).html('<em class="markLess saleActiveRemark"></em>')}}}}else{if(s=="promotion"&&h&&typeof(activeTopic)!="boolean"){var E=t.type;var o="";if(t.uLevel){o=t.uLevel+" "}if(E==1){$("sup.mark_small_"+r).html("<em class='saleActiveRemark mj'>"+o+"满"+t.full+"<strong>减"+w+"</strong></em>")}else{if(E==2){$("sup.mark_small_"+r).html("<em class='saleActiveRemark xsq'>"+o+"限时抢<strong>&yen;"+w+"</strong></em>")}else{if(E==8){$("sup.mark_small_"+r).html("<em class='saleActiveRemark xsq'>"+o+"加价购</em>")}else{if(E==9){$("sup.mark_small_"+r).html("<em class='saleActiveRemark xsq'>"+o+"立减<strong>&yen;"+w+"</strong></em>")}else{if(E==10||E==11){var C=[];var v="折";var u=t.specMark;if(E==11){v="元"}if(u){$.each(u,function(J,I){C.push(I.number+"件"+I.value+v)})}$("sup.mark_small_"+r).html("<em class='saleActiveRemark mj'>"+o+C.join("，")+"</em>")}else{if(E==13){$("sup.mark_small_"+r).html("<em class='saleActiveRemark mzk'>"+o+"满"+t.full+"<strong>享"+w+"折</strong></em>")}else{if(E==14||E==15){$("sup.mark_small_"+r).html("<em class='saleActiveRemark xsq'>"+o+"送赠品</em>")}else{if(E==17){$("sup.mark_small_"+r).html("<em class='saleActiveRemark mj'>"+o+t.full+"件套装"+t.value+"元</em>")}else{if(E==18){$("sup.mark_small_"+r).html("<em class='saleActiveRemark xsq'>预约购买</em>")}}}}}}}}}}else{if(s=="ordinary"){if(c){$("sup.mark_big_"+r).html('<em class="markNew saleActiveRemark"></em>')}if(h){$("sup.mark_small_"+r).html('<em class="markNew saleActiveRemark"></em>')}}}}}}};var k=30,j=0,i=n.length;var l=function(){j++;for(var o=(j-1)*k;o<k*j&&o<i;o++){m(o)}if(o<i){setTimeout(l,3000)}};l(j)}},"json")}};