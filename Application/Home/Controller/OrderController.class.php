<?php 
namespace Home\Controller;
use Think\Controller;
/**
* @param  订单页*/
class OrderController extends Controller
{
	public function index(){
		if (!empty($_SESSION[order])) {
			$count = '';
			foreach ($_SESSION[order] as $key) {
				$count = $count + $key['price'];
			}
			$this -> assign('res',$_SESSION[order]);
			$this -> assign('count',$count);
		}
		// dump($_SESSION[order]);

		$this -> cofine(); //登录设置
		$this -> assign('name','订单详情');
		$this -> display();
	}

	public function cofine(){ 
      if (empty($_SESSION['buyUser'])) {
         echo "<script>alert('你还未登录');location.href='/Login'</script>";
      }
   }

}
?>