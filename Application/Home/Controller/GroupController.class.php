<?php 
namespace Home\Controller;
use Think\Controller;
class GroupController extends PublicController{
/** 
 * @name   	  	Group()   闪团页 
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
    public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
    	$this -> guide();  //导购设置
        $this -> event();  //更多
        

    	$data['status'] = 1;
    	$Group = M('chkgroup');
    	$result = $Group -> where($data) -> select();
    	$this -> assign('group',$result);
    	$this -> assign('title','闪团');
		$this -> display();
	}
}