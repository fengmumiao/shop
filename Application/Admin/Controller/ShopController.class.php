<?php
namespace Admin\Controller;

class ShopController extends PublicController{
/** 
 * @name   	  	index()   商铺管理
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	//查看优质商铺
	public function selectAllShop(){
		$user = M("saleuser");
		$count = $user -> where('state=1') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $user -> where('state=1') -> order('visitors DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//查看低访问商铺   正常用户   state = 1
	public function selectPoorShop(){
		$user = M("saleuser");
		$count = $user -> where('state=1') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $user -> where('state=1') -> order('visitors') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//查看禁用商铺       禁用   state = 2
	public function selectForbiddenShop(){
		$user = M("saleuser");
		$count = $user -> where('state=2') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $user -> where('state=2') -> order('visitors DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//查看店铺信息
	public function findShop(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$res = $data -> where("id={$id}") -> select();
		$this -> assign('row',$res);
		$this -> display();
	}
	//修改店铺信息
	public function editShop(){
		$data = M('saleuser');
		$id = $_POST['id'];
		$res = $data -> where("id={$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功！','../Shop/selectAllShop');
		}else{
			$this -> error('修改失败！');
		}
	}

	//删除店铺
	public function delete(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$res = $data -> where("id = {$id}") -> delete();
		if($res){
			$this -> success("删除成功！",'../Shop/selectAllShop');
		}else{
			$this -> error("删除失败！");
		}
	}

	//商铺状态管理  ：禁用
	public function forbidden(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$data -> state = 2;
		$res = $data -> where("id = {$id}") -> save();
		if($res){
			$this -> success("更改状态成功！",'../Shop/selectAllShop');
		}else{
			$this -> error("更改状态失败！");
		}
	}

	//商铺状态 ： 启用
	public function start(){
		$id = $_GET['id'];
		$data = M('saleuser');
		$data -> state = 1;
		$res = $data -> where("id = {$id}") -> save();
		if($res){
			$this -> success("更改状态成功！",'../Shop/selectAllShop');
		}else{
			$this -> error("更改状态失败！");
		}
	}
}
?>