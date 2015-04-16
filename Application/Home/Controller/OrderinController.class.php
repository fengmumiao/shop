<?php 
namespace Home\Controller;
use Think\Controller;
/**
* @param  订单页 - 成功*/
class OrderinController extends Controller
{
	public function index(){
		header('content-type:text/html;charset=utf-8');
		$orderParent = M('orderparent');
		$orderInfo = M('orderinfo');
		$orders = M('orders');
		/*通过用户找到当前订单*/
		$data['buyuser'] = $_SESSION[buyUser];	
		$res = $orderParent -> where($data) -> select();
		$count = count($res);
		$da['pid'] = $res[$count-1]['id'];
		/*返回订单编号*/
		$this -> assign('ordernumber',$res[$count-1]['ordernumber']);
		/*查询子订单*/
		$result = $orders -> where($da) -> select();
		$price = 0;
		foreach ($result as &$key) {
			$price = $price + $key['total'];
			$address = $key['address'];
			$linkname = $key['linkname'];
			$pay = $key['pay'];
			$ordernumber['ordernumber'] = $key['ordernumber'];
			$rs = $orderInfo -> where($ordernumber) -> find();
			$key['goodsname'] = $rs['name'];
			/*在购物车删除被选中的商品*/
			unset($_SESSION[iscart][$rs['goodsid']]);
			unset($_SESSION[order][$rs['goodsid']]);
		}

		/*返回商品名称*/
		$this -> assign('goodsname',$result);
		/*返回总价格*/
		$this -> assign('price',$price);
		/*返回地址*/
		$this -> assign('address',$address);
		/*返回用户名*/
		$this -> assign('linkname','('.$linkname.')');
		/*返回支付方式*/
		$this -> assign('pay',$pay);

		$this -> assign('name','订单提交成功');
		$this -> cofine();
		$this -> display();
	}
	/*登录控制*/
	public function cofine(){ 
      if (empty($_SESSION['buyUser'])) {
         echo "<script>alert('你还未登录');location.href='/Login'</script>";
      }
   	}
   	/*隐藏控制订单信息*/
   	public function order(){
   		if (!empty($_POST['user'])) {
			$orderParent = M('orderparent');
			$order = M('orders');
			$orderInfo = M('orderinfo');
			$buyUser = M('buyuser');
			$goodsInfo = M('goodsinfo');
			/*大订单*/
			$da['ordernumber'] = uniqid(time());
			$da['buyuser'] = $_SESSION[buyUser];
			$result = $orderParent -> add($da);
			$re = $orderParent -> where($da) -> find();
			/*二级订单*/		
			foreach ($_SESSION[order] as $key) {
				$rand = mt_rand(1,999);
				$user['username'] = $_SESSION[buyUser];
				$userId = $buyUser -> where($user) -> getField('id');
				$data['uid'] = $userId;
				$data['linkname'] = $_POST['user'];
				$data['address'] = $_POST['address'].$_POST['ress'];
				$data['phone'] = $_POST['iphone'];
				$data['addtime'] = time();
				$price = '';
				$price = $price + $key['price'];
				$data['total'] = $price;
				$data['status'] = 0;
				$data['shopid'] = $key['shopid'];
				$data['pid'] = $re['id'];
				$data['pay'] = $_POST['bankImg'];
				$data['ordernumber'] = $re['ordernumber'].'_'.$rand;
				$datas['orderid'] =  $re['ordernumber'].'_'.$key['shopid'];
				$datas['goodsid'] = $key['id'];
				$datas['name'] = $key['name'];
				$datas['price'] = $key['price'];
				$datas['num'] = $key['num'];
				$datas['shopid'] = $key['shopid'];
				$datas['ordernumber'] = $re['ordernumber'].'_'.$rand;
				$datas['buytype'] = 0;
				$datas['img'] = $key['src'];
				$res = $order -> add($data);
				$reus = $orderInfo -> add($datas);
				/*减少商品数量*/
				$numWhere['goodsid'] =  $key['id'];
				$numWhere['color'] = $key['color'];		
				$numData = $goodsInfo -> where($numWhere) -> find();
				$num['num'] = $numData['num'] - $key['num'];
				$numData = $goodsInfo -> where($numWhere) -> save($num); 
			}
			Echo '<script>window.location.href="/index.php/Orderin"</script>';
		}
   	}
}
?>