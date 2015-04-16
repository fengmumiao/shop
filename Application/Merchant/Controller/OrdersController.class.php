<?php
	namespace Merchant\Controller;
	use Think\Controller;
	class OrdersController extends Controller{
		//会员订单
		public function effectiveOrder(){
			// 查询当前店铺
			$sale = M('saleuser');
			$name['username'] = $_SESSION['salename'];
			$re = $sale -> where($name) -> select();

			$order = M('orders');
			$count = $order-> where("shopid={$re[0]['id']} and status !=2") ->count();	// 查询满足要求的总记录数
			$Page  = new \Think\Page($count,5);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page->show();	

			$model=M();				// 分页显示输出
			$res = $model -> field('parent.buyuser,orders.ordernumber,orders.id,orders.status,orders.addtime,orders.total,orders.phone,orders.linkname,orders.address') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and shopid={$re[0]['id']} and orders.status != 2")->order('orders.addtime desc')->limit($Page->firstRow.','.$Page->listRows)-> select();
			$str=$Page->firstRow;
			foreach($res as &$key){
				$str+=1;
				$key['str']=$str;
			}
			$this -> assign('list',$res);
			$this -> assign('page',$show);// 赋值分页输出
			$this -> display();
		}	
		//订单详情
		public function introOrder(){
			$order=M('Orders');
			$res=$order->where("ordernumber='{$_GET['number']}'")->select();

			$orderinfo=M('Orderinfo');
			$result=$orderinfo->where("ordernumber='{$_GET['number']}'")->select();

			$orderparent=M('Orderparent');
			$resu=$orderparent->where("id={$res[0]['pid']}")->select();

			$this->assign('resu',$resu);
			$this->assign('res',$res);
			$this->assign('result',$result);
			$this->display();
		}

		//发货
		public function sendGoods(){
			$Order=M('Orders');
			$state['status']=1;
			$Order->where("id={$_GET['id']}")->save($state);
			$this->success('发货成功');
		}

		//搜索订单

		public function searchorders(){
			
			$model=M();				
			$res = $model -> field('parent.buyuser,orders.ordernumber,orders.id,orders.status,orders.addtime,orders.total,orders.phone,orders.linkname,orders.address') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and orders.ordernumber='{$_POST['ordernumber']}'")-> select();
			
			$this->assign('list',$res);
			$this->display();
			
		}
		//已完成订单
		public function finishedOrder(){



			// 查询当前店铺
			$sale = M('saleuser');
			$name['username'] = $_SESSION['salename'];
			$re = $sale -> where($name) -> select();
			$order = M('orders');
			$count = $order-> where("shopid={$re[0]['id']} and status=2") ->count();	// 查询满足要求的总记录数
			$Page  = new \Think\Page($count,5);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page->show();	

			$model=M();				// 分页显示输出
			$res = $model -> field('parent.buyuser,orders.ordernumber,orders.id,orders.status,orders.addtime,orders.total,orders.phone,orders.linkname,orders.address') -> table('sh_orderparent parent,sh_orders orders') -> where("orders.pid = parent.id and orders.status=2 and shopid={$re[0]['id']}")->limit($Page->firstRow.','.$Page->listRows)-> select();
			

			
			foreach($res as &$key){
				$str+=1;
				$key['str']=$str;
			}
			$this -> assign('list',$res);
			$this -> assign('page',$show);// 赋值分页输出
			$this -> display();
		}

		public function totalorders(){

			$sale = M('saleuser');
			$name['username'] = $_SESSION['salename'];
			$re = $sale -> where($name) -> select();
			$order = M('orders');
			//输出日期内订单收入
			if(!empty($_POST['start']) && !empty($_POST['end'])){
				$start=strtotime($_POST['start']);
				$end=strtotime($_POST['end']);
				
				$da=$order-> where("shopid={$re[0]['id']} and status=2 and addtime<{$end} and addtime>{$start}")->field('total')->select();
				
				$str='';
				foreach($da as $key){
					$str=$str+$key['total'];
				}
				echo $str;
				
			}
		}
	}
?>