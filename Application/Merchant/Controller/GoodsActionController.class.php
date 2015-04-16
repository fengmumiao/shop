<?php
	namespace Merchant\Controller;
	use Think\Controller;

	class GoodsActionController extends Controller{

		public function addGoods(){
			$sort = M('goodstype');
			$row = $sort -> where('pid=0') -> select();
			$this -> assign('row',$row);

			$Saleuser=M('Saleuser');
			$brand=$Saleuser->where("username='{$_SESSION['salename']}'")->field('brand')->select();
			
			$this->assign('brand',$brand);
			$this -> display();
		}


		//通过ajax传递一级分类的pid 获取第二级分类
		public function selectSecond(){
			$pid = $_POST['pid'];
			$datas = M("goodstype");
			$rows = $datas -> where("pid = {$pid}") -> select();
			echo json_encode($rows);
		}

		
		// 添加商品 插入数据
		public function goodsadd(){
				$Goods=M('Goods');
				unset($_POST['first']);
				unset($_POST['second']);
			//添加时间
				$_POST['addtime']=time();
			//添加商品编号,通过时间     
				$curtime=date('mdHis',mktime());	
				$_POST['goodsnumber']=$curtime;
				$Saleuser=M('Saleuser');
				$con['username']=$_SESSION['salename'];
				$id=$Saleuser->where($con)->field('id,brand')->select();
				$_POST['brand']=$id[0]['brand'];
				$_POST['shopid']=$id[0]['id'];

				$data=$Goods->add($_POST);
				if($data){
			
				$condition['intro']=$_POST['intro'];
				$d=$Goods->where($condition)->select();
			
				$this->success('添加成功',"goodsAttr?goodsid={$d[0]['id']}");
					
				}else{
					$this->error('添加失败');
					$this -> display();
				}


		}

		
		//添加商品属性页面
		public function goodsAttr(){
			$this -> display();
			
		}

		//添加商品属性
		public function attrgoods(){
			// dump($_POST);
		
			//图片上传		
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
		
			//遍历把所有图片名遍历出来用逗号拼接
			foreach ($info as $key ) {
				//缩放到480*480

				$image = new \Think\Image(); 
				$image->open("./Public/Home/images/carousel/{$key['savename']}");
				// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
				$image->thumb(480, 480,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/Home/images/carousel/{$key['savename']}");


				// 加水印
				// $image = new \Think\Image(); 
				// 在图片左上角添加水印（水印文件位于./logo.png） 水印图片的透明度为50 并保存为water.jpg
				$saleuser=M('Saleuser');
				$da=$saleuser->where("username='{$_SESSION['salename']}'")->field('upic')->select();

				$image->open("./Public/Home/images/carousel/{$key['savename']}")->water("./Public/Home/images/carousel/{$da[0]['upic']}",\Think\Image::IMAGE_WATER_SOUTHEAST)->save("./Public/Home/images/carousel/{$key['savename']}");

				$str.=$key['savename'].',';
				
			}
		
			$this->assign('key',$key);

			$picname=rtrim($str,',');

			if(!$info) {				// 上传错误提示错误信息        
			   $this->error($upload->getError());    
			}

			// //添加商品详情
			$Goodsinfo=M('Goodsinfo');
			$_POST['picname']=$picname;
			//获取价格
			$Goods=M('Goods');
			$bb=$Goods->where("id={$_POST['goodsid']}")->field('price')->select();
		
			$_POST['price']=$bb[0]['price'];
			//获取品牌
			$Saleuser=M('Saleuser');
			$cc=$Saleuser->where("username='{$_SESSION['salename']}'")->field('brand')->select();
		
			$_POST['brand']=$cc[0]['brand'];
		

			

			$d=$Goodsinfo->add($_POST);	
			if(!$d){
				$this->error('添加失败');
			}else{
				$this->success('添加成功',"goodsCont?goodsid={$_POST['goodsid']}");
			}
			
		}
		//继续添加

		public function goodsCont(){
			$this->display();

		}
		//操作商品
		public function goodsMana(){
			$Goods=M('Goods');
			$Saleuser=M('Saleuser');
			$username=session('salename');

			$data=$Saleuser->where("username='{$username}'")->field('id')->select();
			$con['shopid']=$data[0]['id'];
			//分页方法
			$count      = $Goods->where($con)->count();// 查询满足要求的总记录数

			
			$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $Goods->where($con)->order ('addtime DESC' )->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this -> display();
		}

		//查询商品
		public function searchGoods(){
			$Goods=M('Goods');
			$search['goodsnumber']=$_POST['search'];
			$data=$Goods->where($search)->select();
			$this->assign('data',$data);
			
			$this->display();
		}

		//商品详情
		public function goodsIntro(){
			//获取品牌与店铺名
			$Saleuser=M('Saleuser');
			$condition['username']=$_SESSION['salename'];
			$data=$Saleuser->field('brand,shopname')->where($condition)->select();
			$this->assign('data',$data);

			//获取商品表信息
			$Goods=M('Goods');
			$con['id']=$_GET['id'];
			$good=$Goods->where($con)->select();
			$this->assign('good',$good);

			//获取商品详情表信息
			$Goodsinfo=M('Goodsinfo');
			$cond['goodsid']=$_GET['id'];
			$goodsinfo=$Goodsinfo->where($cond)->select();
			
			foreach ($goodsinfo as $key) {

				//图片拼接路径转换成数组
				$string=$key['picname'];
				$picarr[]=explode(',', $string);

				
			}

		
			
			$this->assign('goodsinfo',$goodsinfo);
			$this->assign('picarr',$picarr);
			$this -> display();
			
		}

		//保存商品修改
		public function saveIntro(){
			
			//更新goods表
			$Goods=M('Goods');
			$da=$Goods->where("id={$_POST['id']}")->save($_POST);
			
			
			if($da){
				
					$this->success('修改成功',"goodsIntro?id={$_POST['id']}");
				}else{
				$this->error('修改失败');
			}
			
		}

		//商品详情页面
		public function attrMana(){
			
			$Goodsinfo=M('Goodsinfo');
			$data=$Goodsinfo->where("id={$_GET['id']}")->select();
			
			$arr=explode(',',$data[0]['picname']);
			$this->assign('arr',$arr);
			$this->assign('data',$data);
			$this->display();

		}

		//保存商品详情
		public function saveAttr(){
			//修改商品详情
			$Goodsinfo=M('Goodsinfo');
			if($_FILES['photo']['error']['0'] == 4){

				$d=$Goodsinfo->save($_POST);

				if($d){
					$this->success('修改成功');
				}else{
					$this->error('修改失败');
				}
			}else{
			
			//图片上传		
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

			

			// dump($info);
			//遍历把所有图片名遍历出来用逗号拼接
			foreach ($info as $key ) {

				//缩放到480*480

				$image = new \Think\Image(); 
				$image->open("./Public/Home/images/carousel/{$key['savename']}");
				// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
				$image->thumb(480, 480,\Think\Image::IMAGE_THUMB_FIXED)->save("./Public/Home/images/carousel/{$key['savename']}");
				// 加水印
				// $image = new \Think\Image(); 
				// 在图片左上角添加水印（水印文件位于./logo.png） 水印图片的透明度为50 并保存为water.jpg
				$saleuser=M('Saleuser');
				$da=$saleuser->where("username='{$_SESSION['salename']}'")->field('upic')->select();

				$image->open("./Public/Home/images/carousel/{$key['savename']}")->water("./Public/Home/images/carousel/{$da[0]['upic']}",\Think\Image::IMAGE_WATER_SOUTHEAST)->save("./Public/Home/images/carousel/{$key['savename']}");
				$str.=$key['savename'].',';
			}
			$picname=rtrim($str,',');

			if(!$info) {				// 上传错误提示错误信息        
			   $this->error($upload->getError());    
			}

			
			$_POST['picname']=$picname;

			$d=$Goodsinfo->save($_POST);

			if($d){
				$this->success('修改成功');
			}else{
				$this->error('修改失败');
			}

		}
		}


		// 删除商品
		public function delGoods(){
			$Goods=M('Goods');
			$con['id']=$_GET['id'];
			$da=$Goods->where($con)->delete();
			
			if($da==0){
				$Goodsinfo=M('Goodsinfo');
				$cond['goodsid']=$_GET['id'];
				$db=$Goodsinfo->where($cond)->delete();
				if($db==0){
					$this->success('删除商品及详情成功','goodsMana');
				}else{
					$this->error('删除失败');
				}
			}
		}

		//删除商品详情
		public function delGoodsinfo(){
			$Goodsinfo=M('Goodsinfo');
			$data=$Goodsinfo->where("id={$_GET['id']}")->delete();
			if($data==0){
				$this->success('删除详情成功','goodsIntro');
			}else{
				$this->error('删除失败');
			}
		}

		
	}
?>