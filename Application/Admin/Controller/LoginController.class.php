<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller{
/** 
 * @name   	  	index()   登录 
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	public function login(){
		$this -> display();
	}

	public function code(){
		$config =    array(    'fontSize'    =>    30,    // 验证码字体大小 
	   	'length'      =>    4,     // 验证码位数   
	    'useNoise'    =>    false, // 关闭验证码杂点
	    'imageW'    =>  90,
	    'imageH'   =>   28,
	    'fontSize'   => 13
	    );
		$Verify =     new \Think\Verify($config);
		$Verify->entry();
	}
	public function check_verify($code){
		   $verify = new \Think\Verify();
		   return $verify->check($code);
		}
	public function loginDo(){
		$manager = M('manager');
		$username = $_POST['user'];
		$password = md5($_POST['pwd']);
		$chknumber = $_POST['chknumber'];
		$data = $manager -> where("username = '{$username}' AND password='{$password}'") -> find();
		//判断用户名或密码是否为空
		if($username == null OR $password == null){
			$this -> error("用户名或密码为空！");
		}
		//判断验证码
		
		if(!$this -> check_verify($chknumber)){
			$this -> error('验证码错误！');
		}
		
		//如果为真，则登陆成功
		if($data){
			$nowTime = time();
			$lastLogTime = $data['lastlogtime'];
			session('username',$username);
			session('id',$data['id']);
			session('state',$data['state']);
	        session('nowTime',$nowTime);
			session('lastLogTime',$lastLogTime);
	        $data['lastlogtime'] = time();
	        $data['loginnum'] = $data['loginnum'] + 1;
        	//将最后登录时间和登录次数更新到数据库
       		$manager -> where("username = '{$username}'") -> save($data);
			$this -> success('登陆成功！','../Index/main');
		}else{
			$this -> error("用户名或密码不正确！");
		}
	}

	//退出登录
	public function exits(){
		session(null);
		$this -> redirect('/Login/login');
	}
}
?>