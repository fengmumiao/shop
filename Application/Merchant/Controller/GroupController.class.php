<?php 
namespace Merchant\Controller;
use Think\Controller;
class GroupController extends Controller{
	// 添加闪团信息
	public $src;
	public $ajax;
	public function add(){
		$this -> src = $this -> addMap();
		$this -> ajax = $this -> ajax();
		if (!empty($this -> src)) {
			$this -> assign('src',$this -> src);
		}
		if (!empty($this -> ajax)) {
			echo 'OK';
		}
		$this->display();
	}
	public function addMap(){
		if (!empty($_FILES)) {
			$upload = new \Think\Upload();// 实例化上传类    
		    $upload -> maxSize   =  3145728 ;// 设置附件上传大小   
		    $upload -> exts      =  array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型   
		   	$upload -> rootPath  =  './Public';
		    $upload -> savePath  =  '/Home/images/map/'; // 设置附件上传目录    // 上传文件   
		    $info   =  $upload -> upload();    
		    if(!$info) {		// 上传错误提示错误信息      
		   		$this->error($upload->getError());   
		    }else{
		    	return  $this -> src = $info['photo']['savename'];
		    }
		}
	}

	public function ajax(){
		if (!empty($_POST['path'])) {
			$condition['goodsnumber'] = $_POST['name'];
			// 商品id
			$Goods  = M('goods');
			$rs = $Goods -> where($condition) -> select();
			

			// 店铺id
			$User = M('saleuser');
			$da['username'] = $_SESSION['salename'];
			$result = $User -> where($da) -> select();
			$data['saleid'] = '';
			foreach ($result as $k) {
				$data['saleid'] = $k['id'];
			}
			// 更新闪团
			$Group = M("chkgroup"); // 实例化User对象
			$data['mapimg'] = $_POST['path'];
			$data['goodscode'] = $_POST['name'];
			$data['addtime']=time();
			$data['price']=($rs[0]['discount'])*0.8;
			$res = $Group -> add($data);
			if ($res) {
				return 'OK';
			}
		}
	}

	//闪团商品列表

	public function groupList(){
		
		$saleuser=M('Saleuser');
		$da=$saleuser->where("username='{$_SESSION['salename']}'")->find();

		$User = M('Chkgroup'); // 实例化User对象
		$count      = $User->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性

		// $list = $User->order('addtime')->limit($Page->firstRow.','.$Page->listRows)->select();
		$model=M();				// 分页显示输出
		$list = $model -> field('goods.goods,goods.id,goods.goodsnumber,shgroup.goodscode,goods.discount,shgroup.mapimg,shgroup.addtime,shgroup.status,shgroup.saleid') -> table('sh_chkgroup shgroup,sh_goods goods') ->where("goods.goodsnumber=shgroup.goodscode and shgroup.saleid={$da['id']}")->order('shgroup.addtime desc')->limit($Page->firstRow.','.$Page->listRows)-> select();
		
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板
	}

	//删除闪团商品
	public function delGroup(){

		$Chkgroup=M('Chkgroup');
		$d=$Chkgroup->where("goodscode={$_GET['goodscode']}")->delete();
		
		if($d==0){
			$this->success('删除成功','groupList');
		}else{
			$this->error('删除成功','groupList');
		}
	}

}
?>