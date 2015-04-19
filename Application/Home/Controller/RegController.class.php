<?php 
namespace Home\Controller;
use Think\Controller;
class RegController extends Controller
{


	public function index(){
		//添加用户


		if (!empty($_POST)) {
			$user = M('buyuser');
			$data['password'] = md5($_POST['password1']);
			$data['username'] = $_POST['username'];
			$data['email'] = $_POST['email'];
			$res = $user -> data($data) -> add();

            if($res){
                $_SESSION[buyUser] = $_POST['username'];
                $this->success('注册成功',U('Home/Index/index'),2);
            }

		}else{
            $this -> assign('title','注册');
            $this -> display();
        }

	}
	// 输出验证码
	public function code(){
		$config = array('fontSize' => 30,  // 验证码字体大小
		     			'length'   =>  4,  // 验证码位数 
		        		'useNoise' =>false,// 关闭验证码杂点
						);	
		$Verify = new \Think\Verify($config);
		$Verify -> fontttf = '5.ttf';
		$Verify -> entry();
	}
	// 验证验证码
	public function check_verify(){
   	   $code = $_POST['code']; //验证验证码
	   $verify = new \Think\Verify(); 
	   $result = $verify -> check($code);
	   if ($result) {
	   	  echo "验证码正确";
	   }else{
	   	  echo "验证码不正确!";
	   }
	}
	// 匹对用户名
	public function userName(){
		$userInfo = $_POST['name'];
		$user = M('buyuser');
		$result = $user -> where("username ='{$userInfo}'") -> find();
		if ($result) {
			echo "用户名已被注册!";
		}else{
			echo "用户名可用！";
		}
	}
}

?>