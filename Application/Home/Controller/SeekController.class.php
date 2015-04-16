<?php 
namespace Home\Controller;
use Think\Controller;
/** 
 * @name   	  	智能搜索提示功能
 * @return 	  	String  
 * @version   	2014-11-13
 * @copyright	sh工作室
 */
class SeekController extends Controller{
	public function seek(){
		// 节省数据库操作
		if ($_POST['shopName'] == "") {
			return;
		}
		$shopNames = $_POST['shopName'];
		$shopName  = '%'.$shopNames.'%';
		$tableName = M('goodstype');
		$where['name']  = array('like',$shopName);
		$typeID  = $tableName -> where($where) -> select();
		$type = M('goods');

		$string = '<ul class="searchmenu" style="display: block;z-index:999999999;position: absolute;">';
		// 遍历搜索内容
		foreach ($typeID as $key) {
			$sum = 0;
			$sub = 0;
			$string .= '<li class="li-searchKey" style="background:#fff"><div class="search-item">'.$key["name"].'</div>';			
			$sumber  = $type -> where("typeid={$key['id']}") -> select();
			// 计算所有符合商品的集合
			$strings = array();
			foreach ($sumber as $k) {
				$sum = count($k['id']);
				$sub = $sub + $sum;
				$strings[] = '<div class="search-count" style="color:red">相关商品共('.$sub.')</div>';
			}
			$singular = count($strings);
			$string .= $strings[$singular - 1];
		}
		$string .= '</li>';
		$string .= '<div class="close">关闭</div>';
		$string .= '</ul>';
		echo $string;
	}
}
?>