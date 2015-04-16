<?php 
namespace Home\Controller;
use Think\Controller;
class SeckillController extends PublicController {
/** 
 * @name   	  	seckill()   秒杀页 
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
    public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置
		$this -> event();  //更多

    	$this -> assign('title','秒杀页');
		$this -> display();
	}
}