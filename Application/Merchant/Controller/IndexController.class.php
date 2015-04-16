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
		//开发组宣传
		public function ourgroup(){
			
			$this -> display();
		}

		//新消息提醒

		public function newmessage(){
			
			$model=M();
			$list=$model->field('goods.state,orders.status,review.review,sale.username')->table('sh_goods goods,sh_orders orders,sh_review review,sh_saleuser sale')->where("sale.id=goods.shopid and sale.id=orders.shopid and review.color=sale.shopname")->select();
			dump($list);
			foreach($list as $key){
   				echo $key['state'].$key['status'].$key['review'].'<br>';
			}

			$this->display();
		}
	}
?>