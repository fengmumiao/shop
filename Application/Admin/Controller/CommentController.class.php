<?php
namespace Admin\Controller;
use Think\Controller;

class CommentController extends Controller{
/** 
 * @name   	  	index()   查看评论与回复
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */

	//查看最新评论
	public function selectNewComment(){
		$review = M("review");
		$count = $review -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $review -> order('score DESC,addtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}
	//查看好评
	public function selectPraiseComment(){
		$review = M("review");
		$count = $review  -> where('score > 5') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $review -> where('score > 5') -> order('score DESC,addtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}
	//查看差评
	public function selectPoorComment(){
		$review = M("review");
		$count = $review -> where('score < 5') -> count();
		$page = new \Think\Page($count,10);
		$show = $page -> show();
		$row = $review -> where('score < 5') -> order('score DESC,addtime DESC') ->limit($page->firstRow.','.$page->listRows) -> select();
		$this -> assign('page',$show);
		$this -> assign('row',$row);
		$this -> display();
	}

	//删除评论
	public function deleteComment(){
		$review = M('review');
		$res = $review -> where("id = {$_GET['id']}") -> delete();
		if(!$res){
			$this -> success('删除成功！','../Comment/selectNewComment');
		}else{
			$this -> error("修改失败！");
		}
	}
}
?>