<?php 
namespace Home\Controller;
use Think\Controller;
class FlagshipController extends PublicController {
/** 
 * @name   	  	FlagshipController()   旗舰店 
 * @return 	  	display  
 * @version   	2014-11-17
 * @copyright	sh工作室
 */
    public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置
		// $this -> event();  
		//通过详情页传递的id获取店铺信息
		$shop = M('saleuser');
		$info = M('goodsinfo');
		$row = $shop -> where("id={$_GET['id']}") -> find();
		$this -> assign('row',$row);

		//销售排行
		$rankList = M('goods');
		$list = $rankList -> where("shopid = {$_GET['id']}") -> order('sales DESC') -> limit(6) -> select();
		foreach($list as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$list[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $list[$key]['discount'] / $list[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$list[$key]['disnum'] = $disNum;
		}
		//商品推荐前4条
		$recommFirst = $rankList -> where("shopid = {$_GET['id']}") -> order('clicknum DESC') -> limit(4) -> select();		
		foreach($recommFirst as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$recommFirst[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $recommFirst[$key]['discount'] / $recommFirst[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$recommFirst[$key]['disnum'] = $disNum;
		}

		//商品推荐紧接8条
		$recomm = $rankList -> where("shopid = {$_GET['id']}") -> order('clicknum DESC') -> limit(4,8) -> select();		
		foreach($recomm as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$recomm[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $recomm[$key]['discount'] / $recomm[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$recomm[$key]['disnum'] = $disNum;
		}
		

		//新品上架
		$newShop = $rankList -> where("shopid = {$_GET['id']}") -> order('addtime DESC') -> limit(8) -> select();
		foreach($newShop as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$newShop[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $newShop[$key]['discount'] / $newShop[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$newShop[$key]['disnum'] = $disNum;
		}

		// var_dump($newShop);

		//断码清仓商品
		$clear = $rankList -> where("shopid = {$_GET['id']}") -> order('addtime ASC') -> limit(8) -> select();
		foreach($clear as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$clear[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $clear[$key]['discount'] / $clear[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$clear[$key]['disnum'] = $disNum;
		}
		
		//获取商铺商品的父级分类
		$type = M('goods');
		$goodstype = M('goodstype');
		$lists = $type -> field('typeid') -> where("shopid = {$_GET['id']}") -> select();
		// var_dump($lists);
		$fathname = "";
		foreach($lists as $key => $value){
			//得到商品的父级id
			$str = $lists[$key]['typeid'];
			$fathid = $goodstype -> field('id,name') -> where("id={$str}") -> select();
			//通过父级id得到爷爷辈的分类名
			
			foreach($fathid as $key => $val){
				$fathname .= $val['name'].',';
			}
		}

		//猜你喜欢
		$goods = M('goods');
		$guess = $goods -> order('clicknum DESC') -> limit(5) -> select();
		foreach($guess as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$guess[$key]['picname'] = $pic[0];
			//计算打折数
			$disNum = $guess[$key]['discount'] / $guess[$key]['price'] * 10;
			$disNum = number_format($disNum,1);
			$guess[$key]['disnum'] = $disNum;
		}
		//分配销售排行
		$this -> assign('list',$list);

		//分配商品推荐前4条
		$this -> assign('recommFirst',$recommFirst);
		//分配商品推荐紧接8条
		$this -> assign('recomm',$recomm);

		//分配商品上架
		$this -> assign('newshop',$newShop);

		//分配断码清仓
		$this -> assign('clear',$clear);

		//把爷爷辈的分类名分配到前台
		$arr = explode(',',$fathname);
		$arr = array_unique($arr);
		$this -> assign('arr',$arr);

		//猜你喜欢
		$this -> assign('guess',$guess);

    	$this->assign('name',$row['shopname']);
		$this -> event();  //更多

		$this->display();
	}

	//关键字搜索
	public function getGoods(){
		$key = $_POST['key'];
		$shopid = $_POST['shopid'];
		$goods = M("goods");
		$info = M('goodsinfo');
		$data['goods'] = array('like',"%{$key}%");
		$row = $goods -> field('id,goods,price,discount') -> where($data) -> where("shopid = {$shopid}") -> select();
		foreach($row as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$row[$key]['picname'] = $pic[0];
			

		}
		echo json_encode($row);
	}	

	//查找所有商品
	public function getAll(){
		$goods = M('goods');
		$info = M('goodsinfo');
		$row = $goods -> field('id,goods,price,discount') -> where("shopid = {$_POST['shopid']}") -> select();
		foreach($row as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$row[$key]['picname'] = $pic[0];
			

		}
		echo json_encode($row);
	}

	//查找分类下的商品
	public function getType(){
		$type = M('goodstype');
		$goods = M('goods');
		$info = M('goodsinfo');
		$res = $type -> where("name='{$_POST['type']}'") -> select();
		$row = $goods -> where("typeid = {$res[0]['id']}") -> select();
		foreach($row as $key => $value){

			//获取商品图片
			$picname = $info -> field('picname') -> where("goodsid = {$value['id']}") -> select();
			$pic = explode(',',$picname[0]['picname']);
			$row[$key]['picname'] = $pic[0];
			

		}
		echo json_encode($row);
		// echo $res[0]['id'];
	}

}