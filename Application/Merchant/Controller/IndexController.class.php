<?php
	namespace Merchant\Controller;
	use Think\Controller;
	
	class IndexController extends Controller{

		//主页
		public function index(){
			$sale=M('Saleuser');
			$dat=$sale->where("username='{$_SESSION['salename']}'")->select();	
			$Goods=M('Goods');
			$data=$Goods->where("shopid={$dat[0]['id']}")->limit(4)->order('clicknum desc')->select();
			$Goodsinfo=M('Goodsinfo');

			

			//得到首页幻灯片
			foreach($data as $key){
			
				$bb=$Goodsinfo->where("goodsid={$key['id']}")->limit(1)->select();
				$arr=explode(',',$bb[0]['picname']);
				$picarr[]=$arr;
			}
			$str='';
			foreach($picarr as $key){
				$str.=$key[0].',';
				
			}

			$pic=explode(',',$str);
			array_pop($pic);
			$this->assign('picarr',$pic);
			$this->assign('data',$data); 
			
			$this -> display();

		}
		//小游戏
		public function ourgroup(){
			
			$this -> display();
		}

		//新消息提醒

		public function Newmessage(){

            $orders = M('Orders');
            $saleuser = M('Saleuser');
            $sale_id = $saleuser -> field('id,shopname') -> where("username = '{$_SESSION['salename']}'") -> select();
            $order_count = $orders ->where('status = 0 and shopid = '.$sale_id[0]['id']) -> count();
            $review = M('Review');
            $review_count = $review -> where('replay = "" and color ="'.$sale_id[0]['shopname'].'"') ->count();
            $count_str='{"order_count":'.$order_count.',"review_count":'.$review_count.'}';
            echo $count_str;
		}
	}
?>