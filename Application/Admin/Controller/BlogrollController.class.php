<?php
namespace Admin\Controller;

class BlogrollController extends PublicController{
/** 
 * @name   	  	index()   友情链接
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */

	//查看所有友情链接
	public function selectBlogroll(){
		$data = M('blogroll');
		$count = $data -> where('status = 0') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $data -> order('addtime DESC') -> where('status = 0')  -> limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改友情链接
	public function editBlogroll(){
		$data = M('blogroll');
		$row = $data -> where("id = {$_GET['id']}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	//修改的处理页
	public function editBlogrollDo(){
		$id = $_POST['id'];
		//清空传递的id，以防更新进数据库
		unset($_POST['id']);
		$data = M('blogroll');
		$res = $data -> where("id = {$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功！','../Blogroll/selectBlogroll');
		}else{
			$this -> error('修改失败！');
		}
	}

	//删除友情链接
	public function deleteBlogroll(){
		$data = M('blogroll');
		$res = $data -> where("id = {$_GET['id']}") -> delete();
		if($res){
			$this -> success('删除成功！','../Blogroll/selectBlogroll');
		}else{
			$this -> error('删除失败！');
		}
	}
	//增加友情链接
	public function addBlogroll(){
		$this -> display();
	}
	public function addBlogrollDo(){
		$data = M('blogroll');
		// var_dump($_POST);
		$_POST['addtime'] = time();
		$res = $data -> add($_POST);
		// var_dump($res);
		if(!empty($res)){
			$this -> success('增加链接成功！','../Blogroll/addBlogroll');
		}else{
			$this -> error('增加链接失败！');
		}
	}
}
?>