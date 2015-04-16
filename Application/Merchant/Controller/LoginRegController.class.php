<?php
	namespace Merchant\Controller;
	use Think\Controller;

	class LoginRegController extends Controller{
		//登录页面
		public function login(){
			$this -> display();	
		} 
		//检测登录信息
		public function check_log(){

			$Saleuser=M('Saleuser');
			$_POST['password']=md5($_POST['password']);
			$d=$Saleuser->where($_POST)->select();
			
			if($d){
				
				//商家注册完登录前要 后台审核
				switch($d[0]['state'])
				{
					case 1:
					$_SESSION['salename']=$_POST['username'];
					$this->success('登录成功',U('Index/index'));
					break;
					case 3:
					$this->success('您正在审核状态,最多3-5个工作日,请耐心等待',U('Home/Index/index'),4);
					break;
					case 4:
					$this->success('审核失败,请重新填写',U('Home/Index/index'),4);
					break;
					default:
					$this->success('请到主页看一看吧',U('Home/Index/index'),4);
				}
			}else{
				$this -> error("登录失败，请重新填写！");
			}
		}



		//验证码
		public function verify(){
			$config = array(
							'fontSize'=>16,   // 验证码字体大小    
							'length' =>4,     // 验证码位数    
							'useNoise'=>false, // 关闭验证码杂点
							'imageW'=> 120,   //宽
							'imageH'=> 36     //高
							);
			$Verify = new \Think\Verify($config);
			$Verify -> entry();
		}
		
		// 检测输入的验证码是否正确，$code为用户输入的验证码字符串
		function check_verify($code){    
			$verify = new \Think\Verify();    
			return $verify->check($code);
		}

		//注册
		public function register(){


			$this -> display();

		}
		//添加注册信息
		public function addreg(){
			// 验证码判断
			if(!$this -> check_verify($_POST['verify'])){
				$this -> error('验证码错误！');
			}
			//向saleuser表里添加注册信息
			unset($_POST['repass']);
			unset($_POST['verify']);
			$Saleuser=M('Saleuser');
			$_POST['lasttime']=mktime();
			$_POST['password']=md5($_POST['password']);
			$d=$Saleuser->add($_POST);
			
			if ($d) {
				$this->success('注册成功,请等待审核','login');
			}

		}
		//注销操作
		public function logout(){
			session(null);
			$this->success("注销成功!",U('LoginReg/login'));
		}
	}
?>