<?php
namespace Admin\Controller;

class ManagerController extends PublicController{
/** 
 * @name   	  	index()   管理员入口
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */

	//修改密码
	public function editPwd(){
		$manager = M('manager');
		$id = $_SESSION['id'];
		$row = $manager -> where("id={$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改密码处理
	public function editPwdDo(){
		$manager = M('manager');
		$data['password'] = md5($_POST['rePassword']);
		$res = $manager -> where("id = {$_POST['id']}") -> save($data);
		if($res){
			$this -> success('修改成功！','../Manager/editPwd');
		}else{
			$this -> error("修改失败！");
		}
	}

	//增加管理员
	public function addManager(){
		$this -> display();
	}

	//ajax验证用户是否存在
	public function addManagerajax(){
		$username = $_POST['username'];
		$user = M('manager');
		$data = $user -> where("username = '{$username}'") -> find();
		if(empty($data)){
			echo "success";
		}else{
			echo "error";
		}
	}
	//增加管理员处理
	public function addManagerDo(){
		$manager = M('manager');
		$auth['group_id'] = $_POST['auth'];
		unset($_POST['auth']);
		$_POST['password'] = md5($_POST['password']);
		$_POST['state'] = 1;
		$res = $manager -> add($_POST);
		$auth['uid'] = $res;
		// var_dump($auth);
		$access = M('auth_group_access');
		$access -> add($auth);
		// var_dump($res);
		if($res){
			$this -> success("添加管理员成功",'../Manager/addManager');
		}else{
			$this -> error("添加失败！");
		}
	}

	//管理员状态
	public function managerState(){
		$manager = M();
		$row = $manager -> field('sh_manager.lastlogtime,sh_manager.username,sh_manager.email,sh_manager.phone,sh_auth_group.title,sh_auth_group.id') -> table('sh_manager,sh_auth_group_access,sh_auth_group') -> where("sh_manager.id=sh_auth_group_access.uid and sh_auth_group_access.group_id = sh_auth_group.id and sh_manager.id!=1") -> select();
		
		$this -> assign('row',$row);
		$this -> display();
	}

	//获取管理组权限
	public function getAuth(){

		$group = M('auth_group');
		$data = $group -> where("id={$_GET['id']}") -> find();
		$this -> assign('arr',$data);
		$this -> display();
	}
	//设置管理组权限
	public function setAuth(){
		$arr = $_POST['auth'];
		$id = $_POST['id'];
		$str = implode(',',$arr);
		$data['rules'] = $str;
		$group = M("auth_group");
		$auth = $group -> where("id = {$id}") -> save($data);
		if($auth){
			$this -> success("修改权限成功！",'../Manager/managerState');
		}else{
			$this -> error("修改权限失败！");
		}
	}
}
?>