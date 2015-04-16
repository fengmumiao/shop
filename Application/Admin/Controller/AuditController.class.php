<?php
namespace Admin\Controller;

class AuditController extends PublicController{
/** 
 * @name   	  	index()   审核管理
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	//未审核商品列表   2 未审核   1 通过   3 失败
	public function goodsList(){
		$goods = M("goods");
		$count = $goods -> where('state=2') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $goods -> where('state=2') -> order('addtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//处理商品信息
	public function goods(){
		$id = $_GET['id'];
		$goods = M('goods');
		$row = $goods -> where("id={$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改商品状态
	public function editState(){
		if(isset($_POST['id'])){
			$id = $_POST['id'];
		}else{
			$id = $_GET['id'];
		}		
		$state = M('goods');
		$data['state'] = 1;
		$res = $state -> where("id = {$id}") -> save($data);
		if(isset($_POST['id'])){
			if($res){
				$this -> success("修改成功！",'../Audit/goodsList');
			}else{
				$this -> error("修改失败！");
			}
		}else{
			if($res){
				$this -> success("修改成功！",'../Audit/goodsList');
			}else{
				$this -> error("修改失败！");
			}
		}
		
	}
	//修改申请状态为不通过
	public function notPass(){
		$id = $_GET['id'];
		$state = M("goods");
		$data['state'] = 3;
		$res = $state -> where("id = {$id}") -> save($data);
		if($res){
			$this -> success("修改成功！",'../Audit/goodsList');
		}else{
			$this -> error("修改失败！");
		}
	}
	//未审核闪团列表
	public function groupList(){
		$chk = M();
		$row = $chk -> field('groups.id,groups.goodscode,groups.mapimg,groups.status,groups.addtime,goods.discount,goods.goods,groups.price,shop.shopname') -> table('sh_chkgroup groups,sh_goods goods,sh_saleuser shop') -> where('groups.goodscode = goods.goodsnumber and groups.saleid = shop.id and groups.status = 0') -> select();
		// var_dump($row);
		$this -> assign('row',$row);
		$this -> display();
	}

	//审核闪团处理
	public function groupDo(){
		$groups = M('chkgroup');
		$data['status'] = $_GET['state'];
		$res = $groups -> where("id = {$_GET['id']}") -> save($data);
		if($res){
			$this -> success('修改状态成功！','groupList');
		}else{
			$this -> error("修改状态失败!");
		}
	}

	//未审核商铺列表    state = 0
	public function shopList(){
		$user = M("saleuser");
		$count = $user -> where('state=0') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $user -> where('state=0') -> order('lasttime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}
	//未审核店铺详情
	public function shopInfo(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$row = $data -> where("id = {$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//店铺通过审核，修改状态
	public function editShopState(){
		if(!empty($_GET['id'])){
			$id = $_GET['id'];
		}else{
			$id = $_POST['id'];
		}		
		$data = M('saleuser');
		$data -> state = 1;
		$res = $data -> where("id = {$id}") -> save();
		if(!empty($_GET)){
			if($res){
				$this -> success("修改成功!",'../Audit/shopList');
			}else{
				$this -> error("修改失败！");
			}
		}else{
			if($res){
				$this -> success("修改成功!",'../Audit/shopList');
			}else{
				$this -> error("修改失败！");
			}
		}
	}
	//店铺不通过审核   state = 4
	public function notShopPass(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$data -> state = 4;
		$res = $data -> where("id = {$id}") -> save();
		if($res){
			$this -> success("修改成功！",'../Audit/shopList');
		}else{
			$this -> error('修改失败！');
		}
	}
}
?>