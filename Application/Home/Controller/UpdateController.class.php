<?php 
namespace Home\Controller;
use Think\Controller;
class UpdateController extends Controller{
	static $filePath;
	public function upload(){
		$Path = $_FILES['photo']['name'];
		$this -> filePath = implode(',', $Path);
		$upload = new \Think\Upload();	// 实例化上传类    
		$upload -> maxSize   =  3145728 ;	// 设置附件上传大小   
		$upload -> exts      =  array('jpg', 'gif', 'png', 'jpeg');	// 设置附件上传类型    
		$upload -> rootPath  = 'Public';
		$upload -> savePath  =  '/Uploads/'; 	// 设置附件上传目录    // 上传文件     
		$info   =   $upload->upload();    
		if(!$info) {				// 上传错误提示错误信息        
		   $this->error($upload->getError());    
		}else{						// 上传成功        
		   $this->success('上传成功！');
		}	
	}
	public function index(){

		$this -> assign('title',time());
		$this -> display();	
	}
}

?>