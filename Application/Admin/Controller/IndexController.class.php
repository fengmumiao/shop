<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
/** 
 * @name        index()   后台首页 
 * @return      display  
 * @version     2014-11-11
 * @copyright   sh工作室
 */
    public function main(){
    	
        $this -> display();
    }
    //为首页上部分配值
    public function top(){
    	$ip = $_SERVER['REMOTE_ADDR'];	
    	$username = $_SESSION['username'];
        $state = $_SESSION['state'];
        $this -> assign('state',$state);
		$this -> assign('ip',$ip);
		$this -> assign('username',$username);
		$this -> display();
    }

    //为首页右侧分配值
    public function right(){
        // var_dump($_SESSION);exit;
        $ip = $_SERVER['REMOTE_ADDR'];  
        $username = $_SESSION['username'];
        $nowTime = $_SESSION['nowTime'];
        $lastLogTime = $_SESSION['lastLogTime'];
        //查询用户信息
        $user = M('manager');
        $row = $user -> where("username = '{$username}'") -> select();

        $this -> assign('lastLogTime',$lastLogTime);
        $this -> assign('nowTime',$nowTime);
        $this -> assign('row',$row);
        $this -> assign('ip',$ip);
        $this -> assign('username',$username);
        $this -> display();
    }

    //退出登录，进入前台首页
    public function exits(){
        session(null);
        $username = session('username');
        if(empty($username)){
            $this -> success('即将退出后台进入网站首页！','/index.php/Index/index');
        }else{
            $this -> error('退出失败！');
        }
    }
}