<?php
	namespace Merchant\Controller;
	use Think\Controller;
	class AccessoryController extends Controller{
		//未回复留言
		public function notMessage(){
			$sale=M('Saleuser');
			$dat=$sale->where("username='{$_SESSION['salename']}'")->field('shopname')->select();
			$Review=M('Review');
			//分页显示
			
			$count      = $Review->where("replay='' and color='{$dat[0]['shopname']}'")->count();// 查询满足要求的总记录数
			$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show       = $Page->show();// 分页显示输出// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$model=M();
			
			$list = $model->field('goods.goodsnumber,goods.id,review.goodsid,review.color,review.uname,review.addtime,review.size,review.score,review.color,review.review,review.replay,review.replaytime')->table('sh_goods goods,sh_review review')->where("review.replay='' and goods.id=review.goodsid and review.color='{$dat[0]['shopname']}'")->order('addtime DESC' )->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('data',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this -> display();

		}

		//进行回复操作
		public function review(){

			$Review=M('Review');
			
			$dat=$Review->where("goodsid={$_GET['id']}")->select();
			$this->assign('dat',$dat);
			$this -> display();
		}

		//保存回复内容

		public function doreview(){

			$Review=M('Review');
			$uname=$_POST['uname'];
			unset($_POST['uname']);
			$_POST['replaytime']=time();
			$data=$Review->where("uname='{$uname}'")->save($_POST);
			
			if($data){
				$this->success('回复成功','searchMessage');
			}else{
				$this->error('回复失败');
			}
		}


		//留言查询
		public function searchMessage(){

			$sale=M('Saleuser');
			$dat=$sale->where("username='{$_SESSION['salename']}'")->field('shopname')->select();


			$Review=M('Review');
			//分页显示
			$count= $Review->where("color='{$dat[0]['shopname']}'")->count();// 查询满足要求的总记录数
			$Page= new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show= $Page->show();// 分页显示输出

			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$model=M();
			$list = $model->field('goods.goodsnumber,goods.id,review.goodsid,review.uname,review.color,review.addtime,review.size,review.score,review.color,review.review,review.replay,review.replaytime')->table('sh_goods goods,sh_review review')->where("goods.id=review.goodsid and review.color='{$dat[0]['shopname']}'")->order('addtime DESC' )->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('data',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this -> display();
		}

		
		
	}
?>