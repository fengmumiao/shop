<?php 
namespace Home\Controller;
use Think\Controller;
class InfoController extends PublicController{
	public $info;
	public function index(){
		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置
		$this -> event();  //更多
		if (!empty($_GET['number'])) {
			$data['goodsnumber'] = $_GET['number'];
			$goods = M('goods');
			$goNumber = $goods -> where($data) -> find();
			if ($goNumber) {
				$_GET['id'] = $goNumber['id'];
			}	
		}
		if (!empty($_GET['id'])) {
			$goods = M('goods');
			$goodsInfo = M('goodsinfo');
			/*点击次数*/
			$clickId['id'] = $_GET['id'];
			$click = $goods -> where($clickId) -> find();
			$clickNum['clicknum'] = $click['clicknum'] + 1;
			$clickRes = $goods -> where($clickId) -> save($clickNum);
			/*End*/
			$data['state'] = 1;
			$data['id'] = $_GET['id'];
			$result = $goods -> where($data) -> select();
			// 剥去html转义
			$result[0]['content'] = stripcslashes($result[0]['content']);
			$this -> assign('goods',$result);
			$goodsArr = array(); 	//图片
			$price = array(); 		//打折计算
			foreach ($result as $key) {
				$condition['goodsid'] = $key['id']; 
				$rs =  $goodsInfo -> where($condition) -> select();

				$price[]['off'] = number_format($key['discount']/$key['price']*10,1);
 				/*店家部分*/				
 				$saleuser = M('saleuser');
 				$saleId['id'] = $key['shopid']; 
 				$res = $saleuser -> where($saleId) -> find();	
 				$this -> assign('sale',$res);
 				/*详情部分*/
 				$num = array();
 				$arrs = array();
 				$thisSize = array();
 				$thisColor = array();
 				foreach ($rs as $k) {
 				 	$arr = explode(',', $k['picname']);  //图片转换为数组
 				 	$arrs[] = explode(',', $k['picname']); //默认图片大图
 				 	$thisSize[] = explode(',', $k['size']); //尺码转换为数组
 				 	$thisColor[] = explode(',', $k['color']); //默认颜色
 				 	$size = count($arr);
					$arr[$size] = $k['id'];
 					$goodsArr[]['src'] = $arr;
 					$num[] = $size+1;			//传输指定图片Id
 				}
 				// dump($thisColor);
 				/*默认颜色*/
 				$oneColor = array(); //转换二维 默认颜色
 				for ($i=0; $i < count($thisColor[0]); $i++) { 
 					$oneColor[]['color'] = $thisColor[0][$i];
 				}	
 				/*默认尺码*/
 				$oneSize = array();  //转换二维 默认尺码
 				for($i=0;$i < count($thisSize[0]);$i++){
 					$oneSize[]['size'] = $thisSize[0][$i]; 
 				}		
 				/*图片部分*/
 				$ajax = array(); //转换三维 默认放大镜图
 				for($i = 0;$i < count($goodsArr);$i++){
 					$ajax[]['id'][] = $goodsArr[$i]['src'][$num[$i]-1];
 				}
 				// 默认图片
 				if (count($arrs) > 1) {
 					array_pop($arrs);
 				}				
 				$num = array(); // 转换二维 默认选择图片
 				for ($i=0; $i < count($arrs[0]); $i++) { 
 					$num[]['id'] = $arrs[0][$i];
 				}
			}
			$this -> assign('color',$oneColor); //默认颜色
			$this -> assign('size',$oneSize); 	//默认尺码
			$this -> assign('default',$num);  //默认选择图片
			$this -> assign('nums',$ajax);	  //默认小图
			$this -> assign('off',$price);	  //打折计算
			$this -> assign('src',$goodsArr); //默认大图

		}else{
			/*权限控制*/
			Echo '<script>window.location.href="/index.php"</script>';
		}
		$result = $this -> page($_GET['id']);   //评论

		$this -> assign('title','详情');
		$this -> assign('page',$result['result']); //评论
		$this -> assign('count',$result['count']); //总评价数
		$this -> assign('score',$result['score']); //总评价比列
		$this -> assign('nfit',$result['nfit']); //不适合
		$this -> assign('fit',$result['fit']); //适合

		$this -> display();
	}

	public function imgOver(){
		/*ajax图片切换部分*/
			if (!empty($_POST['id'])) {
				$goodsInfo = M('goodsinfo');
				$infoId['id'] = $_POST['id'];
				$imgOver = $goodsInfo -> where($infoId) -> find();
				$imgArr = explode(',', $imgOver['picname']); //异步放大镜小图
				$size = explode(',', $imgOver['size']); 	 //异步尺码
				$color = explode(',', $imgOver['color']);	 //异步颜色
				$colorStr = '';	//遍历颜色部分
				foreach ($color as $key) {
					$colorStr .= '<strong class="color">'.$key.'</strong>';
				}
				$string = '';  //遍历小图部分
				foreach ($imgArr as $key) {
					$string .= '<li class="sImg"><img src="/Public/Home/images/carousel/'.$key.'" width="68" height="68" alt=""/></li>';
				}
				$sizeStr = ''; // 遍历尺码部分
				foreach ($size as $key) {
					$sizeStr .= '<a data-value="size_s350" id="onSize" class="onSize" data-name="'.$key.'">'.$key.'<i></i></a>';
				}
				$newStr = '<ul class="tp">'.$string.'</ul>';
				$ajaxArr = array();
				$ajaxArr['colo'] = $colorStr;  //json 返回颜色部分
				$ajaxArr['newStr'] = $newStr;  	//json 返回小图部分
				$ajaxArr['bigImg'] = '/Public/Home/images/carousel/'.$imgArr[0].''; //json 返回大图部分
				$ajaxArr['sizeStr'] = '<span class="fl prodSpec size" id="size">'.$sizeStr.'</span>'; //json 返回当前尺码部分
				echo json_encode($ajaxArr);
			}

	}
	/*页面评论处理*/
	public function page($getId){
			$review = M('review');
			$data['goodsid'] = $getId;
			$result = $review -> where($data) -> select();
			$count = count($result);
			$page['result'] = $result;
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
			return $page;	
	} 

}

?>