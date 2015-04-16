<?php
namespace Admin\Controller;

class MemberController extends PublicController{
/** 
 * @name   	  	index()   会员管理
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	//增加会员
	public function add(){
		$this -> display();
	}
	//ajax判断用户是否已存在
	public function addUserDo(){
		$username = $_POST['username'];
		$user = M('buyuser');
		$data = $user -> where("username = '{$username}'") -> find();
		if(empty($data)){
			echo "success";
		}else{
			echo "error";
		}
	}
	//增加会员处理
	public function addDo(){
		$buyuser = M('buyuser');
		$_POST['regtime'] = time();
		$_POST['disable'] = 0;
		$_POST['password'] = md5($_POST['password']);
		$row = $buyuser -> add($_POST);
		if($row){
			$this -> success("增加会员成功！","../Member/add");
		}else{
			$this -> error("增加会员失败，请重新填写！");
		}
	}
	//查看会员
	public function check(){
		$check = M('buyuser');
		$count = $check -> where('disable=0') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $check -> where('disable=0') -> order('regtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//会员状态修改
	public function forbidden(){
		$id = $_GET['id'];
		$state = $_GET['state'];
		if($state == 0){
			$user = M('buyuser');
			$user -> disable = 1;
			$res = $user -> where("id={$id}") -> save();
			if($res){
				$this -> success('修改成功！','../Member/check');
			}else{
				$this -> error("修改失败！");
			}
		}
		if($state == 1){
			$user = M('buyuser');
			$user -> disable = 0;
			$res = $user -> where("id={$id}") -> save();
			if($res){
				$this -> success('修改成功！','../Member/check');
			}else{
				$this -> error("修改失败！");
			}
		}
	}

	//修改会员资料
	public function editMessage(){
		$id = $_GET['id'];
		$user = M('buyuser');
		$row = $user -> where("id={$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}

	//处理会员资料修改
	public function editMessageDo(){
		$user = M('buyuser');
		if(!empty($_POST['password'])){	
			$_POST['password'] = md5($_POST['password']);
			$res = $user -> where("id={$_POST['id']}") -> save($_POST);
			if($res){
				$this -> success("修改成功！",'../Member/check');
			}else{
				$this -> error("修改失败！");
			}
		}else{
			unset($_POST['password']);
			$res = $user -> where("id={$_POST['id']}") -> save($_POST);
			if($res){
				$this -> success("修改成功！",'../Member/check');
			}else{
				$this -> error("修改失败！");
			}
		}
	}

	//删除会员
	public function delete(){
		$id = $_GET['id'];
		$user = M('buyuser');
		$res = $user -> where("id={$id}") -> delete();
		if($res){
			$this -> success("修改成功!",'../Member/check');
		}else{
			$this -> error("修改失败！");
		}
	}

	//查看已禁用会员
	public function selectForbidden(){
		$check = M('buyuser');
		$count = $check -> where('disable=1') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $check -> where('disable=1') -> order('regtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//已禁用会员修改状态
	public function editForbidden(){
		$id = $_GET['id'];
		$user = M('buyuser');
		$user -> disable = 0;
		$res = $user -> where("id={$id}") -> save();
		if($res){
			$this -> success('修改成功！','../Member/selectForbidden');
		}else{
			$this -> error("修改失败！");
		}
		
	}
}