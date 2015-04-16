<?php 
namespace Home\Controller;
use Think\Controller;
class PersonalController extends PublicController{
/** 
 * @name   	  	Personal()   个人中心 - 修改密码 
 * @return 	  	display  
 * @version   	2014-11-17
 * @copyright	sh工作室
 */	
	public $newPwd = false;
	public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> cofine(); // 登录设置
		$this -> guide();  //导购设置
		$this -> event();  //更多
		
		$this -> newPwd = $this -> newPwd(); //密码全局使用
		if ($this -> newPwd) {
			Echo '<script>alert("修改成功");window.location.href="/index.php/Data"</script>';
		}
		$this -> assign('title','个人中心');
		$this -> display();
	}

	public function newPwd(){
		// 新密码判定
		if (!empty($_POST['newPwd']) && !empty($_SESSION[buyUser])) {
			$data['password'] = md5($_POST['newPwd']);
			$where['username'] = $_SESSION[buyUser];
			$user = M('buyuser');
			$result = $user -> where($where) -> save($data);
			if ($result) {
				return true;
			}
		}
	}
	public function oldPwd(){
		// 旧密码判断
		if (!empty($_POST['pwd']) && !empty($_SESSION[buyUser])) {
			$data['username'] = $_SESSION[buyUser];
			$data['password'] = md5($_POST['pwd']);
			$user = M('buyuser');
			$result = $user -> where($data) -> select();
			if (!$result) {
			 	echo '密码不正确！';
			} 
		}
	}


}

?>