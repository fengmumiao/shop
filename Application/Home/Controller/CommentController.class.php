<?php 
namespace Home\Controller;
use Think\Controller;
 /** 
 * @name  		 Comment    评论控制器
 * @param  		 array      接收 $.Ajax({type:'POST'})  
 * @return 		 String     返回 String
 * @version      2014-11-29
 * @copyright    sh工作室 
 */  
class CommentController extends Controller{
	/*判断用户是否购买过此商品*/
	public function userExit(){
		if (!empty($_POST['user'])) {
			$orderParent = M('orderparent');
			$orderInfo   = M('orderinfo');
			$orders      = M('orders');
			$user        = M('buyuser');
			/*查询订单详情*/
			$data['goodsid'] = $_POST['user'];
			$result	= $orderInfo -> where($data) -> select();
			$number = array();
			foreach ($result as $key) {
				$number[] = $key['ordernumber'];
			}
			/*查询当前用的Id*/
			$data = array();
			$data['username'] = $_SESSION[buyUser];
			$result = $user -> where($data) -> find();
			/*查询订单*/
			$data = array();
			$data['uid'] = $result['id']; 
			$res = array();
			foreach ($number as $key) {
				$data['ordernumber'] = $key;
				$res[] = $orders -> where($data) -> select();
			}
			/*判断用户是否评论过*/
			$review = M('review');
			$uname['uname'] = $_SESSION[buyUser];
			$rev = $review -> where($uname) -> select();
	/*		if (!empty($rev)) {
				return;
			}*/
			/*判断该用户是否存在*/
			if (!empty($res)) {
				Echo 'Yes there is!';
			}
		}
	}

	/*处理评论*/
	public function handle(){
		if (!empty($_POST['id']) && !empty($_POST['score']) && !empty($_SESSION[buyUser])) {
			$review = M('review');
			$data['uname']   = $_SESSION[buyUser];
			$data['goodsid'] = $_POST['id'];
			$data['size']    = $_POST['size'];
			$data['score']   = $_POST['score'];
			$data['color']   = $_POST['name'];
			$data['review']  = $_POST['con'];
			$data['replay']  =  '';
			$data['addtime'] = time();
			$result = $review -> add($data);
			if ($result) {
				Echo 'Comment on success!';
			}
		}
	}

	/*更新中评论*/
	public function updates(){
		if (!empty($_POST['id'])) {
			$review = M('review');
			$data['goodsid'] = $_POST['id'];
			$result = $review -> where($data) -> select();

			$count = count($result);
			$page['count'] = $count;
			/*平均总分*/
			$score = '';
			foreach ($result as $key) {
				$score = $score + $key['score'];
			}
			$page['score'] = number_format($score / $page['count'],0);
			/*尺码合适比列*/
			$data['size'] = 1;
			$res = $review -> where($data) -> select();
			$page['nfit'] =  number_format(count($res) / $page['count'] * 100);
			$page['fit'] = 100 - $page['nfit'];	
			Echo json_encode($page);			
		}

	}

	/*更新评论内容*/
	public function update(){
		if (!empty($_POST['id'])) {
			$review = M('review');
			$data['goodsid'] = $_POST['id'];
			$result = $review -> where($data) -> select();

			$count = count($result);
			$page['count'] = $count;
			/*平均总分*/
			$score = '';
			foreach ($result as $key) {
				$score = $score + $key['score'];
			}
			$page['score'] = number_format($score / $page['count'],0);
			/*尺码合适比列*/
			$data['size'] = 1;
			$res = $review -> where($data) -> select();
			$page['nfit'] =  number_format(count($res) / $page['count'] * 100);
			$page['fit'] = 100 - $page['nfit'];			
			$String ='<div id="userCommentContainer-1"><input id="pageSize" value="10" type="hidden"><input id="pageNo" value="1" type="hidden"><input id="totalCount" value="26" type="hidden">';
    		foreach ($result as $key) {
   			$String.= '<div class="usercomm_content_box"><div class="member_info"><a href="javascript:void(0);" class="Blue"><img src="/Public/Home/images/index/SVIP.jpg"><br>'.$key['uname'].'</a></div><div class="comm"><p><span class="fl"><span class="Red">商品评分：</span>';
              if ($key['score'] == 10) {
              	 $String .= '<span class="rate_point_s point5s_0">';
              }             
              if ($key['score'] == 9) {
              	 $String .= '<span class="rate_point_s point4s_1">';
              }             
               if ($key['score'] == 8) {
              	 $String .= '<span class="rate_point_s point4s_0">';
              }             
               if ($key['score'] == 7) {
              	 $String .= '<span class="rate_point_s point3s_1">';
              }              
              if ($key['score'] == 6) {
              	 $String .= '<span class="rate_point_s point3s_0">';
              }              
              if ($key['score'] == 5) {
              	 $String .= '<span class="rate_point_s point2s_1">';
              }              
              if ($key['score'] == 4) {
              	 $String .= '<span class="rate_point_s point2s_0">';
              }             
              if ($key['score'] == 3) {
              	 $String .= '<span class="rate_point_s point1s_1">';
              }              
              if ($key['score'] == 2) {
              	 $String .= '<span class="rate_point_s point1s_0">';
              }              
              if ($key['score'] == 1) {
              	 $String .= '<span class="rate_point_s point1s_0">';
              }
              $String .='</span><span class="buytime">购买时间：'.date('Y-m-d H:i:s',$key['addtime']).'</span>　<span class="color">店铺:'.$key['color'].'</span></span></p><p class="clear"></p><p><span class="Red">尺码大小评价：</span>';
               if ($key['size'] == 0) {
               		$String .= '尺码适合';
               }
               if ($key['size'] == 1) {
                	$String .= '尺码不适合';
               }
 
          	  $String.='</p><p><span class="Red">点评内容：</span>'.$key['review'].'</p><p><span class="Red">店家回复：</span>'.$key['replay'].'</p><p class="line"></p><p class="comm_arr"></p><p class="clear"></p></div></div>';
        	}
          $String .='</div>';
          Echo $String;
		}	

	}
}
?>