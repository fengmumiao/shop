<?php
namespace Admin\Controller;
use Think\Controller;

class homePageController extends Controller{
/** 
 * @name   	  	index()   主页效果
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	//首页轮播图
	public function carouselPhoto(){
		$photo = M('carousel');
		$row = $photo -> where('sequence > 0') -> order('sequence ASC') -> select();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改轮播图
	public function editCarousel(){
		$id = $_GET['id'];
		$edit = M('carousel');
		$row = $edit -> where("id = {$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改轮播图处理
	public function editCarouselDo(){
		$config = array(    
		'maxSize'    =>    3145728,    
		'rootPath'   =>    './Public/Home/images/carousel/',    
		'saveName'   =>    array('uniqid',''),    
		'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),    
		'autoSub'    =>    true 
		//'subName'    =>    array('date','Ymd'),
		);
		$upload = new \Think\Upload($config);// 实例化上传类
		$info   =   $upload->upload();  
		// if(!$info) {// 上传错误提示错误信息        
		// 	$this->error($upload->getError());
		// }else{// 上传成功       
		// 	// $this->success('上传图片成功！');    
		// }

		//组合数组，提交更新
		$data['sequence'] = $_POST['sequence'];
		$data['title'] = $_POST['title'];
		if(!empty($info)){
			$data['photo'] = $info['photo']['savename'];
		}
		
		$photo = M('carousel');
		$res = $photo -> where("id = {$_POST['id']}") -> save($data);
		
		if($res){
			$this -> success('修改成功！','../HomePage/carouselPhoto');
		}else{
			$this -> error('修改失败！');
		}
	}

	//所有资讯
	public function information(){
		$news = M('news');
		$row = $news -> order('addtime DESC') -> select();
		$this -> assign('row',$row);
		$this -> display();
	}
	//增加资讯
	public function addInformation(){
		$this -> display();
	}
	//将新添加的资讯加入数据库
	public function addInformationDo(){
		$addNews = M('news');
		$_POST['addtime'] = time();
		$res = $addNews -> add($_POST);
		if($res){
			$this -> success('添加资讯成功！','../HomePage/information');
		}else{
			$this -> error('添加资讯失败！');
		}
	}

	//修改资讯
	public function editInformation(){
		$news = M('news');
		$row = $news -> where("id = {$_GET['id']}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改资讯处理
	public function editInformationDo(){
		$id = $_POST['id'];
		unset($_POST['id']);
		$_POST['addtime'] = time();
		$news = M('news');
		$res = $news -> where("id = {$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功！','../HomePage/information');
		}else{
			$this -> error('修改失败！');
		}
	}

	//删除资讯
	public function deleteInformation(){
		$news = M('news');
		$res = $news -> where("id = {$_GET['id']}") -> delete();
		if(!$res){
			$this -> success('删除成功！','../HomePage/information');
		}else{
			$this -> error('删除失败！');
		}
	}

	//首页四张特效拼图
	public function photoShow(){
		$photo = M('puzzle');
		$row = $photo -> select();
		$this -> assign('row',$row);
		$this -> display();
	}
	//拼图修改页
	public function editPhotoShow(){
		$photo = M('puzzle');
		$row = $photo -> where("id = {$_GET['id']}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//拼图修改页处理
	public function editPhotoShowDo(){
		$config = array(    
		'maxSize'    =>    3145728,    
		'rootPath'   =>    './Public/Home/images/carousel/',    
		'saveName'   =>    array('uniqid',''),    
		'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),    
		'autoSub'    =>    true 
		//'subName'    =>    array('date','Ymd'),
		);
		$upload = new \Think\Upload($config);// 实例化上传类
		$info   =   $upload->upload();  
		// if(!$info) {// 上传错误提示错误信息        
		// 	$this->error($upload->getError());
		// }else{// 上传成功       
		// 	$this->success('上传图片成功！');    
		// }
		$id = $_POST['id'];
		unset($_POST['id']);
		$_POST['uploadimg'] = $info['uploadimg']['savename'];
		$_POST['addtime'] = time();
		$photo = M('puzzle');
		$res = $photo -> where("id = {$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功','./photoShow');
		}else{
			$this -> error('修改失败！');
		}
	}

	//热门品牌推荐
	public function hotRecommend(){
		$hots = M('hots');
		$row = $hots -> select();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改热门品牌推荐
	public function editHotRecommend(){
		$hots = M('hots');
		$row = $hots -> where("id = {$_GET['id']}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//处理修改后的热门品牌推荐
	public function editHotRecommendDo(){
		$config = array(    
		'maxSize'    =>    3145728,    
		'rootPath'   =>    './Public/Home/images/carousel/',    
		'saveName'   =>    array('uniqid',''),    
		'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),    
		'autoSub'    =>    true 
		//'subName'    =>    array('date','Ymd'),
		);
		$upload = new \Think\Upload($config);// 实例化上传类
		$info   =   $upload->upload();  

		// if(!$info) {// 上传错误提示错误信息        
		// 	$this->error($upload->getError());
		// }else{// 上传成功       
		// 	$this->success('上传图片成功！');    
		// }

		
		$hots = M('hots');
		$id = $_POST['id'];
		unset($_POST['id']);
		$_POST['uploadimg'] = $info['uploadimg']['savename'];
		$_POST['addtime'] = time();
		$res = $hots -> where("id={$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功！','./HotRecommend');
		}else{
			$this -> error('修改失败！');
		}
	}

}
?>