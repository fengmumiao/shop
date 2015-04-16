<?php 
namespace Home\Controller;
use Think\Controller;
/**
 *  @name Blogroll() 友情链接
 *	@param String
 *	@return String
 */
class BlogrollController extends PublicController{
	public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置
		$this -> event();  //更多
		//数据库读友情链接列表
		$blogroll = M('blogroll');
		$row = $blogroll -> select();
		$this -> assign('row',$row);
		$this -> assign('title','友情链接');
		$this -> display();	
	}

}

?>