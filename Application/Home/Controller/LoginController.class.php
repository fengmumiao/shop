<?php 
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
/** 
 * @name   	  	index()   Login页 
 * @return 	  	display  
 * @version   	2014-11-16
 * @copyright	sh工作室
 */
    public function index(){
  		if (!empty($_POST['email'])) {
  			$_SESSION[buyUser] = $_POST['email'];
            $this->success('登录成功',U('Home/Index/index'),2);
  		}
    	$this -> assign('title','登录');
		$this -> display();
	}

	public function Uname(){
		if (!empty($_POST['Uname'])) {
			$user = M('buyuser');
			$username['username'] = $_POST['Uname'];
			$result = $user -> where($username) -> find();
			if (!$result) {
				echo "用户名不存在";
			}
			if ($result['disable'] == 1) {
				echo '该用户已被禁用,请联系管理员!';
				exit();
			}

		}
		if (!empty($_POST['Upwd'])) {
			$user = M('buyuser');
			$username['password'] = md5($_POST['Upwd']);
			$username['username'] = $_POST['Uname'];
			$result = $user -> where($username) -> select();
			if (!$result) {
				echo "密码不正确";
			}
		}
	}
	public function ex(){
		unset($_SESSION[buyUser]);
        $this->success('确认退出',U('Home/Login/index'),2);
	}
}

?>