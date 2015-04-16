<?php 
namespace Home\Controller;
use Think\Controller;
/** 
 * @name   	  	Total  个人积分
 * @return 	  	String  
 * @version   	2014-11-18
 * @copyright	sh工作室
 */
class TotalController extends PublicController{
	public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> cofine(); // 登录设置
		$this -> guide();  //导购设置
		$this -> event();  //更多

		$this -> assign('title','个人积分');
		$this -> display();		
	}

}

?>