<?php
namespace Admin\Controller;
use Think\Controller;

class OrdersController extends Controller{
/** 
 * @name   	  	index()   订单
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */

	public function selectOrders(){
		$orderss = M("orders");
		$orders = M();

		
		
		if(!empty($_POST['key'])){
	
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$key = $_POST['key'];
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and orders.ordernumber = '{$key}'") -> limit($page->firstRow.','.$page->listRows) -> select();
		}else{
			//获取订单总数
			$count = $orderss -> count();
		
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone,orders.status') -> table('sh_orderparent parent,sh_orders orders')-> order('addtime DESC') -> where('orders.pid = parent.id') -> limit($page->firstRow.','.$page->listRows) -> select();

		}
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	public function selectInfo(){
		$info = M();
		$number = $_GET['number'];
		$row = $info -> field('parent.buyuser,info.img,orders.ordernumber,orders.linkname,orders.address,orders.total,info.name,info.num,shop.shopname') -> table('sh_saleuser shop,sh_orderparent parent,sh_orders orders,sh_orderinfo info') -> where("parent.id = orders.pid and orders.ordernumber = info.ordernumber and info.shopid = shop.id and orders.ordernumber = '{$number}'") -> select();
		// var_dump($row);
		$this -> assign('info',$row);
		$this -> display();
	}

	public function returnsOrders(){
		$orderss = M("orders");
		$orders = M();

		
		
		if(!empty($_POST['key'])){
	
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$key = $_POST['key'];
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and orders.ordernumber = '{$key}'") -> limit($page->firstRow.','.$page->listRows) -> select();
		}else{
			//获取订单总数
			$count = $orderss -> where('status = 3') -> count();
		
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone,orders.status') -> table('sh_orderparent parent,sh_orders orders')-> order('addtime DESC') -> where('orders.pid = parent.id and orders.status=3') -> limit($page->firstRow.','.$page->listRows) -> select();

		}
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	public function finishOrders(){
		$orderss = M("orders");
		$orders = M();

		
		
		if(!empty($_POST['key'])){
	
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$key = $_POST['key'];
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and orders.ordernumber = '{$key}'") -> limit($page->firstRow.','.$page->listRows) -> select();
		}else{
			//获取订单总数
			$count = $orderss -> where('status = 3') -> count();
		
			$page = new \Think\Page($count,10);
			$show = $page -> show();
			$row = $orders -> field('parent.buyuser,parent.ordernumber,orders.addtime,orders.ordernumber,orders.total,orders.phone,orders.status') -> table('sh_orderparent parent,sh_orders orders')-> order('addtime DESC') -> where('orders.pid = parent.id and orders.status=2') -> limit($page->firstRow.','.$page->listRows) -> select();

		}
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}
}
?>