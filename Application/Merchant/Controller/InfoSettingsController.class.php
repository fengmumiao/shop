<?php
	namespace Merchant\Controller;
	use Think\Controller;
	class InfoSettingsController extends Controller{
		//基本信息
		public function basicInformation(){
			$Saleuser=M('Saleuser');
			$condition['username']=$_SESSION['salename'];
			$data=$Saleuser->where($condition)->select();

			// 查询订单数
			$order=M('Orders');
			$da=$order->where("shopid={$data[0]['id']} and status=2")->count();
			

			//查看店铺商品总数

			$goods=M('Goods');
			$goodscount=$goods->where("shopid={$data[0]['id']}")->count();
			$goodssale=$goods->where("shopid={$data[0]['id']}")->field('sales')->find();
			$sales+=$goodssale['sales'];

			//基本信息显示
			$this->assign('goods',$goodscount);
			$this->assign('sales',$sales);
			$this->assign('da',$da);
			$this->assign('data',$data);
			$this->display();
			
		}
		//基本信息修改
		public function modifyInfo(){
			$Saleuser=M('Saleuser');
			$condition['username']=$_SESSION['salename'];
			$modify=$Saleuser->where($condition)->save($_POST);
			if($modify){
				$this->success('修改成功','basicInformation');
			}else{
				$this->error('修改失败');
			}
		}

		
		//店铺介绍
		public function shopInfo(){
			$Saleuser=M('Saleuser');
			$condition['username']=$_SESSION['salename'];
			$data=$Saleuser->where($condition)->select();


				// 查询订单数
			$order=M('Orders');
			$da=$order->where("shopid={$data[0]['id']} and status=2")->count();
			

			//查看店铺商品总数

			$goods=M('Goods');
			$goodscount=$goods->where("shopid={$data[0]['id']}")->count();
			$goodssale=$goods->where("shopid={$data[0]['id']}")->field('sales')->find();
			$sales+=$goodssale['sales'];

			//基本信息显示
			$this->assign('goods',$goodscount);
			$this->assign('sales',$sales);
			$this->assign('da',$da);

			
			$this->assign('data',$data);
			$this->display();
		}
		//修改店铺介绍
		public function modifyShop(){
			$Saleuser=M('Saleuser');
			$condition['username']=$_SESSION['salename'];
			$data=$Saleuser->where($condition)->save($_POST);
			if($data){
				$this->success('修改成功','shopInfo');
			}else{
				$this->error('修改失败');
			}

		}

		//商家公告
		public function merchantsAnnou(){
			$this->display();
		}
		//商品分类
		public function goodsClassify(){
			$this->display();
		}
		//修改密码
		public function changePass(){
			$this->display();
		}
		//检测原信息并执行修改密码
		public function check(){
			
			$Saleuser=M('Saleuser');
			$newpass=md5($_POST['newpassword']);
			unset($_POST['newpassword']);
			$d=$Saleuser->where("username='{$_SESSION['salename']}'")->field('password')->select();			
			if($d[0]['password']=md5($_POST['password'])){
				$data['password']=$newpass;
				$s=$Saleuser->where("username='{$_SESSION['salename']}'")->save($data);
				if($s){
					$this->success('密码修改成功','changePass');
				}else{
					$this->error('修改失败');
				}
				
			}else{
				$this->error('信息不匹配');
			}

			

		}
		//友情链接
		public function friendLink(){
			$this->display();
		}

		//店铺logo
		public function shopLogo(){
			//查出上传logo
			$Saleuser=M('Saleuser');
			
			$con['username']=$_SESSION['salename'];
			$d=$Saleuser->where($con)->field('upic')->select();
			$this->assign('photo',$d);
			$this->display();
		}
		

		public function upload(){    
			$config = array(    
				'maxSize'    =>    3145728,    
				'rootPath'   =>    './Public/Home/images/carousel/',    
				'saveName'   =>    array('uniqid',''),    
				'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),    
				'autoSub'    =>    true,    
				// 'subName'    =>    array('date','Ymd'),
				);
			$upload = new \Think\Upload($config);// 实例化上传类      
			$info   =   $upload->upload(); 
		 
			if(!$info) {         
				$this->error($upload->getError());    // 上传错误提示错误信息
			}else{
				//图片名存入数据库 
			$Saleuser=M('Saleuser');
			$picname=$info['photo']['savename'];
			
			$con['username']=$_SESSION['salename'];
			
			  /*图片缩略*/
			$image = new \Think\Image(); 
			$image->open("./Public/Home/images/carousel/{$picname}");
			// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg

			$dat['upic']=$picname;
			$Saleuser->where($con)->save($dat);

			$cc=$Saleuser->where($con)->select();
			$image->thumb(150, 60,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/Home/images/carousel/{$cc[0]['upic']}");	
			$this->success('上传成功！','shopLogo');    // 上传成功
			}


			

			

		}
	}
?>
