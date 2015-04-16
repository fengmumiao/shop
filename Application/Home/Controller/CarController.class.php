<?php 
namespace Home\Controller;
use Think\Controller;
class CarController extends Controller{
	/*页面显示*/
	public function index(){
		$this -> assign('title','购物车');
		$orderGoods = $this -> traverse($_SESSION[iscart]);
		$count = '';
		foreach ($orderGoods as $key) {
			$count += $key['price'];
		}
		$this -> assign('rand',$this -> rands());
		$this -> assign('count',$count);
		$this -> assign('order',$orderGoods);
		$this -> display();
	}
	/*接受SESSION || 获得该商品的数量*/
	protected function traverse($order){
		$goods = M('goodsinfo');
		if (!empty($order)) {
			foreach ($order as &$key) {
				$data['goodsid'] = $key['id'];
				$data['color'] = $key['color'];
				$result = $goods -> where($data) -> find();
				$key['goodsnum'] = $result['num'];
			}
			return $order;
		}
	}
	/*购物车数据操作*/
	public function operation(){
		/*增/加商品*/
		if (!empty($_POST['id']) && !empty($_POST['num'])) {
			$_SESSION[iscart][$_POST['id']]['num'] = $_POST['num'];
			if (!empty($_POST['price'])) {
				$_SESSION[iscart][$_POST['id']]['price'] = $_POST['price'];
			}
		}
		/*删除单个商品*/
		if (!empty($_POST['did'])) {
			unset($_SESSION[iscart][$_POST['did']]);
		}
		/*清空购物车*/
		if (!empty($_POST['didel'])) {
			unset($_SESSION[iscart]);
		}
	}
	/*猜你喜欢*/
	public function rands(){
		$goods = M('goods');
		$goodsInfo = M('goodsinfo');
		$result = $goods -> where('state = 1') -> select();
		/*初始位置*/
		$rand = mt_rand(1,count($result)-10);
		$result = $goods -> where('state = 1') ->limit($rand,10) -> select();
		$condition = array();
		/*拼接图片和打折*/
		foreach ($result as &$keys) { 
			$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();	
			$keys['src'] = array_shift(explode(',',$rs['picname']));
			$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);
		}
		return $result;
	}
	/*判断用户是否登录*/
	public function isUser(){
		if (!empty($_POST['user'])) {
			if (!empty($_SESSION[buyUser])) {
				Echo 'The user does not exist!';
			}else{
				Echo 'The user does exist';
			}			
		}
	}
	/*封装订单提交页面*/
	public function isOrder(){
		if (!empty($_POST['ids'])) {
			$order = $_POST['ids'];
			$orderArr = explode(',', $order);
			array_pop($orderArr);
			/*被选中的提交订单*/
			$orderNew = array();
			foreach ($orderArr as $key) {
				$_SESSION[order][$key] = $_SESSION[iscart][$key];
			}
			/*订单完成*/
			if (!empty($_SESSION[order])) {
				Echo 'have been done,having fulfilled!';
			}
		}
	}

}
?>