<?php
namespace Admin\Controller;
use Think\Controller;
//1.规则表：定义可以访问的规则
//2.组表：组表里要放着规则的ID，就是给组的权限
//3.组表要和用度表进行关联。如果用户属于某个组，那么这个用户就有了组的权限
class PublicController extends Controller{
    public function _initialize(){
        $user = session('username');
        if($user == false){
            $this -> error('您尚未登录！',U('Login/login'));
        }
        $uid = session('id');
        if($uid == 1){
           return true;
        } 
        $rule = CONTROLLER_NAME.'/'.ACTION_NAME;   
     
        static $Auth;
        if(!$Auth){
            $Auth = new \Think\Auth();
        }

        if(!$Auth -> check($rule,$uid)){
            $this -> error("你没有权限",U('Index/right'));
        }

      
    }
}
