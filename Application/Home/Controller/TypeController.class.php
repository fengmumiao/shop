<?php 
namespace Home\Controller;
use Think\Controller;
class TypeController extends Controller{
	public function index(){
		$goods = M('goodstype');
		$rs = $goods -> where('pid=0') -> select();
		$op1 = array();
		$op2 = array();
		$op3 = array();
		foreach ($rs as $key) {	//1级
			$op1[] .= '<option value="'.$key['id'].'">'.$key['name'].'</option>';
			$res = $goods -> where('pid='.$key['id']) -> select();
			foreach ($res as $key) {	//2级
				$op2[] .= '<option value="'.$key['id'].'">'.$key['name'].'</option>';
				$ress = $goods -> where('pid='.$key['id']) -> select();
				foreach ($ress as $key) {	//3级
					$op3[] .= '<option value="'.$key['id'].'">'.$key['name'].'</option>';
				}
			}
		}
		$select1 = '';  //1级
		$select1 .= '<select name="one">';
		foreach ($op1 as $key) {
			$select1 .= $key;
		}
		$select1 .= '</select>';
		$select2 = '';	//2级	
		$select2 = '<select name="two">';
		foreach ($op2 as $key) {
			$select2 .= $key;
		}
		$select2 .= '</select>';
		$select3 = '';	//3级	
		$select3 = '<select name="three">';
		foreach ($op3 as $key) {
			$select3 .= $key;
		}
		$select3 .= '</select>';
		$this -> assign('select1',$select1);  //1级
		$this -> assign('select2',$select2);  //2级
		$this -> assign('select3',$select3);  //3级
		$this -> display();
	}
}

?>