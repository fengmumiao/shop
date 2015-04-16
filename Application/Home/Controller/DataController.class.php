<?php 
namespace Home\Controller;
use Think\Controller;
class DataController extends PublicController{
	public function index(){
	/** 
	 * @name   	  	Data()   个人资料 
	 * @return 	  	display  
	 * @version   	2014-11-17
	 * @copyright	sh工作室
	 */
		$this -> guide();  //导购设置
		$this -> leftnav();// 左侧导航
		$this -> topnav(); // 头部导航
		$this -> cofine(); // 登录设置 
		$this -> event();  //更多

		if (!empty($_POST['email']) && !empty($_SESSION['buyUser'])) {
			$data['email']    = $_POST['email'];
			$data['phone']    = $_POST['phone'];
			$data['name'] 	  = $_POST['name'];
			$data['sex'] 	  = $_POST['memberSex'];
			$data['regtime']  = $_POST['year'].'-'.$_POST['month'].'-'.$_POST['date'];
			$data['address']  = $_POST['are'];
			$data['postcode'] = $_POST['zipcode'];
			$buyUser = M('buyuser');
			$where['username'] = $_SESSION['buyUser'];
			$result = $buyUser ->  where($where) -> save($data);
			if ($result) {
				ECHO '<script>alert("修改成功!");</script>';	
			}			
		}
		$buyUser = M('buyuser');
		$where['username'] = $_SESSION['buyUser'];
		$userInfo = $buyUser -> where($where) -> select();
		$this -> assign('name',$userInfo);

		$this -> assign('title','个人资料');
		$this -> display();
	}
}

?>