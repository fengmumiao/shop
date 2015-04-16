<?php 
namespace Home\Controller;
use Think\Controller;
class NewsController extends PublicController {
/** 
 * @name   	  	index()   首页资讯 
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	public function news(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置

		$news = M('news');
		$row = $news -> where("id = {$_GET['id']}") -> select();
		// var_dump($row);
		$this -> assign('row',$row);

		$this -> display();
	}
}