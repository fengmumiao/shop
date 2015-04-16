<?php 
namespace Home\Controller;
use Think\Controller;
class OrderSetController extends PublicController{
	public function index(){
	/** 
	 * @name   	  	OrderSet()   个人资料  - 订单查询
	 * @return 	  	display  
	 * @version   	2014-11-17
	 * @copyright	sh工作室
	 */
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> cofine(); // 登录设置
		$this -> guide();  //导购设置
		$this -> event();  //更多
		/*订单遍历*/
		$orderParent = M('orderparent');
		$orderInfo = M('orderinfo');
		$orders = M('orders');
		$data['buyuser'] =  $_SESSION[buyUser];
		if (!empty($_POST['ord'])) {
			$data['ordernumber'] = $_POST['ord'];
		}
		$result = $orderParent -> where($data) -> select();
		/*子订单*/
		$ress = array();
		foreach ($result as &$key) {
			$res = $orders -> where('pid = '.$key['id']) -> select();
			foreach ($res as &$k) {
				$key['addtime'] = date('Y-m-d H:i:s',$k['addtime']);
 				$number['ordernumber'] = $k['ordernumber'];

				$re = $orderInfo -> where($number) -> find();
				$k['address'] = mb_substr($k['address'], 1,16,'utf-8');
				$k['goodsid'] = $re['goodsid'];
				$k['img'] = $re['img'];
				$k['name'] = $re['name'];
				$k['num'] = $re['num'];
				$k['price'] = $re['price'];
				$key['buytype'] = $re['buytype'];
				$key['orr'][] = $k;
			}	
					
		}

		/*返回订单信息*/
		$this -> assign('orderParent',$result);

		$this -> assign('title','个人资料');
		$this -> display();
	}
	/*搜索功能*/
	public function seek(){
		if (!empty($_POST['ord'])) {
			/*订单遍历*/
			$orderParent = M('orderparent');
			$orderInfo = M('orderinfo');
			$orders = M('orders');
			$data['buyuser'] =  $_SESSION[buyUser];
			if (!empty($_POST['ord'])) {
				$arr = array_shift(explode('_', $_POST['ord']));
				$data['ordernumber'] = $arr;
			}
			$result = $orderParent -> where($data) -> select();
			/*子订单*/
			$ress = array();
			foreach ($result as &$key) {
				$res = $orders -> where('pid = '.$key['id']) -> select();
				foreach ($res as &$k) {
					$key['addtime'] = date('Y-m-d H:i:s',$k['addtime']);
	 				$number['ordernumber'] = $k['ordernumber'];
					$re = $orderInfo -> where($number) -> find();
					$k['address'] = mb_substr($k['address'], 1,16,'utf-8');
					$k['goodsid'] = $re['goodsid'];
					$k['img'] = $re['img'];
					$k['name'] = $re['name'];
					$k['num'] = $re['num'];
					$k['price'] = $re['price'];
					$key['buytype'] = $re['buytype'];
					$key['orr'][] = $k;
				}				
			}
			$str = ' <div class="seek">';
				foreach ($result as $key) {
					$str .= '<table class="zjorderbody2" style="border:1px solid #E3E3E3;" width="200" cellpadding="0" cellspacing="1"><colgroup><col width="571"><col width="106"><col width="153"></colgroup><thead style="border:1px solid #E3E3E3;"><tr><th colspan="3" style="border:1px solid #E3E3E3;"><span>主订单号：'.$key['ordernumber'].'</span><span>下单时间：'.$key['addtime'].'</span><span>支付方式：';
					if ($key['buytype'] == 0) {
			    		$str.= '在线支付';
					}        
					$str .='<!-- <font class="Gray">(未支付)</font></span> --></th></tr></thead><tbody style="border:1px solid #E3E3E3;">';
					foreach ($key['orr'] as $k) {
						$str .='<tr style="border:1px solid #E3E3E3;"><td style="border:1px solid #E3E3E3;"><!--子订单1 start--><div class="uc_goods_item uc_myorder_item relative clearfix"><p class="uc_goods_top"><span>子订单号：'.$k['ordernumber'].'</span><span>商品数量：'.$k['num'].'件</span><span>状态：<strong style="width:80px;" class="f_yellow">';
						if ($k['status'] == 0) {
							$str .= '等待发货';
						}
						if ($k['status'] == 1) {
							$str .= '<a class="take" style="width:80px;border:1px solid #ccc;height:50px;line-height:50px;">确认收货</a>';
							$str .= '<input class="num" type="hidden" value="'.$k['ordernumber'].'"/>';
						}	
						if ($k['status'] == 2) {
							$str .= '已收货';
						}
						if ($k['status'] == 3) {
							$str .= '已退货';
						}
						$str .= '</strong></span></p><div class="uc_goods_lt clearfix "><dl class="uc_goods_list relative clearfix"><dt class="info1 relative"><a href="/Info/index/id/'.$k['goodsid'].'" target="_blank"><img src="'.$k['img'].'" alt="'.$k['name'].'" title="'.$k['name'].'" height="60" width="60"></a></dt><dd class="info2"><p><a href="/Info/index/id/'.$k['goodsid'].'" target="_blank" class="f_blue">'.$k['name'].'</a></p><p><em class="Gray">收货地址：</em>'.$k['address'].'</p><p></p></dd><dd class="info3"><p><strong>¥</strong>'.$k['price'].'</p><p class="act_tips"><span><i></i></span>限时抢</p></dd><dd class="info4">'.$k['num'].'件</dd><dd class="info5 clearfix"></dd><dd class="infoReturn"></dd></dl></div><div class="uc_goods_lt clearfix "></div></div></td><td><div class="goodsmn"><p class="mncount">'.$k['price'].'元</p><!-- <p class="hui">已优惠510元</p> --><p class="hui">(免运费)</p></div></td><td><div class="pingjia"><p style="text-align:center"><a href="index.php/Lists" onclick="">继续购买</a></p></div></td></tr>';
					}
					$str .= '</tbody></table>';
				}
				$str .= '</div>';
				Echo $str;

			}
	}
	/*用户收货控制*/
	public function take(){
		if (!empty($_POST['num'])) {
			$orders = M('orders');
			$data['ordernumber'] = $_POST['num'];
			$save['status'] = 2;
			$result = $orders -> where($data) -> save($save);
			if ($result) {
				Echo 'Have the goods!';
			}
		}
	}
}