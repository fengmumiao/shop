<?php
namespace Admin\Controller;
use Think\Controller;
class SortController extends Controller{
/** 
 * @name   	  	index()   分类管理
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
	//添加一级分类
	public function addFirstSort(){
		$this -> display();
	}
	//处理以及分类添加
	public function addSortDo(){
		$data = M('goodstype');
		$row = $data -> add($_POST);
		if($row){
			$this -> success("添加分类成功！",'../Sort/selectSort');
		}else{
			$this -> error("添加分类失败");
		}
	}

	//添加二级分类
	public function addSecondSort(){
		$data = M("goodstype");
		$row = $data -> where('pid=0') -> select();
		$this -> assign('row',$row);
		$this -> display();
	}
	//二级分类处理
	public function addSecondSortDo(){
		$data = M("goodstype");
		$row = $data -> add($_POST);
		if($row){
			$this -> success("添加分类成功！",'../Sort/addSecondSort');
		}else{
			$this -> error("添加失败！");
		}
	}
	//添加三级分类
	public function addThirdSort(){
		$data = M("goodstype");
		$row = $data -> where('pid=0') -> select();
		$this -> assign('row',$row);
		
		$this -> display();
	}

	//通过ajax传递一级分类的pid 获取第二级分类
	public function selectSecond(){
		$pid = $_POST['pid'];
		$datas = M("goodstype");
		$rows = $datas -> where("pid = {$pid}") -> select();
		echo json_encode($rows);
	}

	//添加三级分类处理
	public function addThirdSortDo(){
		$data = M("goodstype");
		$row = $data -> add($_POST);
		if($row){
			$this -> success("添加三级分类成功！",'../Sort/addSecondSort');
		}else{
			$this -> error("添加分类成功！");
		}
	}
	

	//查看分类
	public function selectSort(){
		$goods = M('goodstype');
		$rs = $goods -> where('pid=0') -> select();
		$newString = "";
		foreach ($rs as $key) {
			$newString .= '<tr><td>|-'.$key['name'].'</td><td><a href="./editSort?id='.$key['id'].'"><button class="btn btn-warning">修改</button></a> <a href="./deleteSort?id='.$key['id'].' and pid=0" onclick="return del()"><button class="btn btn-danger">删除</button></a></td></tr>';
			$res = $goods -> where('pid='.$key['id']) -> select();
			foreach ($res as $key) {
				$newString .= '<tr><td>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|--'.$key['name'].'</td><td><a href="./editSort?id='.$key['id'].'"><button class="btn btn-warning">修改</button></a> <a href="./deleteSort?id='.$key['id'].'" onclick="return del()"><button class="btn btn-danger">删除</button></a></td></tr>';
				$ress = $goods -> where('pid='.$key['id']) -> select();
				foreach ($ress as $key) {
					$newString .= '<tr><td>|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|---'.$key['name'].'</td><td><a href="./editSort?id='.$key['id'].'"><button class="btn btn-warning">修改</button></a> <a href="./deleteSort?id='.$key['id'].'" onclick="return del()"><button class="btn btn-danger">删除</button></a></td></tr>';
				}
			}
		}
		$this -> assign('str',$newString);
		$this -> display();
	}
	public function editSort(){
		$id = $_GET['id'];
		$edit = M('goodstype');
		$row = $edit -> where("id = {$id}") -> find();
		$this -> assign('row',$row);
		$this -> display();
	}
	public function editSortDo(){
		$id = $_POST['id'] ;
		unset($_POST['id']);
		$edit = M('goodstype');
		$res = $edit -> where("id = {$id}") -> save($_POST);
		if($res){
			$this -> success('修改成功！','../Sort/selectSort');
		}else{
			$this -> error('修改失败！');
		}
	}
	public function deleteSort(){
		$id = $_GET['id'];
		$del = M('goodstype');
		$res = $del -> where("id = {$id} OR pid = {$id}") -> delete();
		if($res){
			$this -> success('删除成功！','../Sort/selectSort');
		}else{
			$this -> error('删除失败！');
		}
	}
}
