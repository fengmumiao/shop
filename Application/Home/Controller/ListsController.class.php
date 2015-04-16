<?php 
namespace Home\Controller;
use Think\Controller;
/**
* @param 列表页
*/
class ListsController extends PublicController
{	
	public $beTwo;
	public $zid = false;   //一级分类
	public $pid = false;   //二级分类
	public $ids = false;   //三级分类

	public function index(){
		$this -> beTwo = $this -> beTwo();	// 接受多选	
		$this -> zid = $this -> zid();      // 接受一级分类
		$this -> pid = $this -> pid();      // 接受二级分类
		$this -> ids = $this -> ids();		// 接受三级分类

		$this -> leftnav(); //左侧导航
		$this -> topnav(); //头部导航
		$this -> guide();  //导购设置
		$this -> event();  //更多
		$this -> assign('title','列表页');
		
		

		$goods = M('goods');
		$goodsInfo = M('goodsinfo');
		$goodsType = M('goodstype');
		// 逻辑树
		if (!empty($this -> zid)) {
			$leftNav['id'] = $this -> zid;
			$oneType['pid'] = $this -> zid;
			/* 左侧分栏 */
			$result = $goodsType -> where($leftNav) -> find();
			$this -> assign('leftNav',$result);
			$result = $goodsType -> where($oneType) -> select();
			$leftArr = array();
			foreach ($result as $key) {
				$leftArr[] = $key['id'];
			}
			$leftStr = 'pid = '.implode(' or pid = ', $leftArr);
			$result = $goodsType -> where($leftStr) -> select();
			$this -> assign('leftNavs',$result);

			/* 一级分类 */ 
			$oneType['pid'] = $this -> zid;
			$result = $goodsType -> where($oneType) -> select(); //遍历一级分类
			$oneArr = array();
			foreach ($result as $key) {
				$oneArr[] = $key['id'];
			}
			$twoTpye = 'pid = '.implode(' or pid = ', $oneArr);
			$res = $goodsType -> where($twoTpye) -> select(); //遍历二级分类			
			$twoArr = array();
			foreach ($res as $key){
				$twoArr[] = $key['id'];
			}
			$threeType = 'typeid = '.implode(' or typeid = ', $twoArr); //三级条件
			$count = $goods -> where('state = 1 and '.$threeType)
							-> count();	// 查询满足要求的总记录数
			$Page  = new \Think\Pages($count,32);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page -> show();		
			// 筛选器
			$sizer = $goods -> where('state = 1 and '.$threeType) 
							-> select();
			$sizerArr = array();
			foreach ($sizer as $key) {
				$sizerArr[] = $key['id'];
			}
			/*类别的选择器  品牌*/
			$goodsId = 'goodsid = '.implode(' or goodsid = ', $sizerArr);
			$info = $goodsInfo -> where($goodsId) -> select();
			$style = array(); //风格
			$color = array(); //颜色	
			$size  = array(); //尺码
			$brand = array(); //品牌
			$price = array(); //价格
			$type  = array(); //款式
			$popular = array(); //流行元素
			$season = array(); //季节
			$sex = array();  //性别
			foreach ($info as $key) {
				$style[$key['goodsid']] = $key['style'];
				$price[$key['goodsid']] = $key['price'];
				$brand[$key['goodsid']] = $key['brand'];
				$season[$key['goodsid']] = $key['season'];
				$sex[$key['goodsid']] = $key['sex'];
				$type[$key['goodsid']] = $key['type'];
				$popular[$key['goodsid']] = $key['popular'];
				$size[] = explode(',', $key['size']);
				$color[] = $key['color'];
			}

			$sizeArr_Size = array();
			foreach ($size as $key => $value) {				//尺码
				 foreach ($value as $key) {
				 	$sizeArr_Size[] = $key;
				 }
			}
			$sexArr   = array_count_values($sex);   		//性别
			$seasonArr= array_count_values($season);		//季节
			$typeArr  = array_count_values($type);			//款式
			$colorArr = array_count_values($color);			//颜色
			$sizeArr  = array_count_values($sizeArr_Size);	//尺码
			$priceArr = array_count_values($price);			//价格
			$brandArr = array_count_values($brand);			//brand 名
			$popularArr = array_count_values($popular); 	//流行元素
			$styleArr = array_count_values($style);  		//风格

			$arrKeys = array();
			$arrKey = array_keys($styleArr);				//风格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['style'] = $arrKey[$i];
			}
			
			$arrVal = array_values($styleArr);	//风格
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['stylenum'] = $arrVal[$i];
			}
			$this -> assign('style',$arrKeys);  //返回风格

			$arrKeys = array();
			$arrKey = array_keys($sexArr);				//性别	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sex'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sexArr);	//性别
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sexnum'] = $arrVal[$i];
			}
			$this -> assign('sex',$arrKeys);  //返回性别	


			$arrKeys = array();
			$arrKey = array_keys($seasonArr);				//季节	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['season'] = $arrKey[$i];
			}
			
			$arrVal = array_values($seasonArr);	//季节
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['seasonnum'] = $arrVal[$i];
			}
			$this -> assign('season',$arrKeys);  //返回季节	


			$arrKeys = array();
			$arrKey = array_keys($popularArr);				//流行元素	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popular'] = $arrKey[$i];
			}
			
			$arrVal = array_values($popularArr);	//流行元素
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popularnum'] = $arrVal[$i];
			}
			$this -> assign('popular',$arrKeys);  //返回流行元素	


			$arrKeys = array();
			$arrKey = array_keys($typeArr);				//款式	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['type'] = $arrKey[$i];
			}
			
			$arrVal = array_values($typeArr);	//款式
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['typenum'] = $arrVal[$i];
			}
			$this -> assign('type',$arrKeys);  //返回款式	

			$arrKeys = array();
			$arrKey = array_keys($colorArr);				//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['color'] = $arrKey[$i];
			}
			
			$arrVal = array_values($colorArr);	//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['colornum'] = $arrVal[$i];
			}
			$this -> assign('color',$arrKeys);  //返回颜色			
			// dump($arrKeys);

			$arrKeys = array();
			$arrKey = array_keys($sizeArr);		//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizes'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sizeArr);	//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizenum'] = $arrVal[$i];
			}
			$this -> assign('size',$arrKeys);  //返回尺码
		
			$arrKeys = array();
			$arrKey = array_keys($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brand'] = $arrKey[$i];
			}
	
			$arrVal = array_values($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brandnum'] = $arrVal[$i];
			}
			$this -> assign('brand',$arrKeys);  //返回品牌

			$arrKeys = array();
			$arrKey = array_keys($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['price'] = $arrKey[$i];
			}
	
			$arrVal = array_values($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['pricenum'] = $arrVal[$i];
			}
			$this -> assign('price',$arrKeys);  //返回价格
				
			// 分页显示输出
			$result = $goods -> where('state = 1 and '.$threeType) 
							 -> order('addtime asc') 
							 -> limit($Page->firstRow.','.$Page->listRows) 
							 -> select();
			$goodsArr = array(); 	//图片
			$price = array(); 		//打折计算

			foreach ($result as &$key) {
				$condition['goodsid'] = $key['id']; 
				$rs =  $goodsInfo -> where($condition) -> find();
				$key['src'] = array_shift(explode(',',$rs['picname']));
				$key['off'] = number_format($key['discount']/$key['price']*10,1);			
			}
			$this -> assign('page',$show);// 赋值分页输出
			$this -> assign('goods',$result);
		}else if (!empty($this -> pid)) {
			$leftPid['id'] = $this -> pid;
			/* 左侧分栏 */
			$result = $goodsType -> where($leftPid) -> find();
			$this -> assign('leftTwo',$result);

			$oneType['pid'] = $result['pid'];
			$leftNav['id'] = $result['pid'];
			
			$result = $goodsType -> where($leftNav) -> find();
			$this -> assign('leftNav',$result);

			$result = $goodsType -> where($oneType) -> select();
			$leftArr = array();
			foreach ($result as $key) {
				$leftArr[] = $key['id'];
			}
			$leftStr = 'pid = '.implode(' or pid = ', $leftArr);
			$result = $goodsType -> where($leftStr) -> select();
			$this -> assign('leftNavs',$result);

			/* 一级分类 */ 
			$oneType['pid'] = $this -> pid;
			$result = $goodsType -> where($oneType) -> select(); //遍历二级分类
			$oneArr = array();
			foreach ($result as $key) {
				$oneArr[] = $key['id'];
			}

			$threeType = 'typeid = '.implode(' or typeid = ', $oneArr); //三级条件
			$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
			$Page  = new \Think\Pages($count,32);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page -> show();	

			// 筛选器
			$sizer = $goods -> where('state = 1 and '.$threeType) 
							-> select();
			$sizerArr = array();
			foreach ($sizer as $key) {
				$sizerArr[] = $key['id'];
			}
			/*类别的选择器  品牌*/
			$goodsId = 'goodsid = '.implode(' or goodsid = ', $sizerArr);
			$info = $goodsInfo -> where($goodsId) -> select();
			$style = array(); //风格
			$color = array(); //颜色	
			$size  = array(); //尺码
			$brand = array(); //品牌
			$price = array(); //价格
			$type  = array(); //款式
			$popular = array(); //流行元素
			$season = array(); //季节
			$sex = array();  //性别
			foreach ($info as $key) {
				$style[$key['goodsid']] = $key['style'];
				$price[$key['goodsid']] = $key['price'];
				$brand[$key['goodsid']] = $key['brand'];
				$season[$key['goodsid']] = $key['season'];
				$sex[$key['goodsid']] = $key['sex'];
				$type[$key['goodsid']] = $key['type'];
				$popular[$key['goodsid']] = $key['popular'];
				$size[] = explode(',', $key['size']);
				$color[] = $key['color'];
			}

			$sizeArr_Size = array();
			foreach ($size as $key => $value) {				//尺码
				 foreach ($value as $key) {
				 	$sizeArr_Size[] = $key;
				 }
			}
			$sexArr   = array_count_values($sex);   		//性别
			$seasonArr= array_count_values($season);		//季节
			$typeArr  = array_count_values($type);			//款式
			$colorArr = array_count_values($color);			//颜色
			$sizeArr  = array_count_values($sizeArr_Size);	//尺码
			$priceArr = array_count_values($price);			//价格
			$brandArr = array_count_values($brand);			//brand 名
			$popularArr = array_count_values($popular); 	//流行元素
			$styleArr = array_count_values($style);  		//风格

			$arrKeys = array();
			$arrKey = array_keys($styleArr);				//风格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['style'] = $arrKey[$i];
			}
			
			$arrVal = array_values($styleArr);	//风格
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['stylenum'] = $arrVal[$i];
			}
			$this -> assign('style',$arrKeys);  //返回风格

			$arrKeys = array();
			$arrKey = array_keys($sexArr);				//性别	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sex'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sexArr);	//性别
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sexnum'] = $arrVal[$i];
			}
			$this -> assign('sex',$arrKeys);  //返回性别	


			$arrKeys = array();
			$arrKey = array_keys($seasonArr);				//季节	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['season'] = $arrKey[$i];
			}
			
			$arrVal = array_values($seasonArr);	//季节
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['seasonnum'] = $arrVal[$i];
			}
			$this -> assign('season',$arrKeys);  //返回季节	


			$arrKeys = array();
			$arrKey = array_keys($popularArr);				//流行元素	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popular'] = $arrKey[$i];
			}
			
			$arrVal = array_values($popularArr);	//流行元素
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popularnum'] = $arrVal[$i];
			}
			$this -> assign('popular',$arrKeys);  //返回流行元素	


			$arrKeys = array();
			$arrKey = array_keys($typeArr);				//款式	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['type'] = $arrKey[$i];
			}
			
			$arrVal = array_values($typeArr);	//款式
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['typenum'] = $arrVal[$i];
			}
			$this -> assign('type',$arrKeys);  //返回款式	

			$arrKeys = array();
			$arrKey = array_keys($colorArr);				//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['color'] = $arrKey[$i];
			}
			
			$arrVal = array_values($colorArr);	//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['colornum'] = $arrVal[$i];
			}
			$this -> assign('color',$arrKeys);  //返回颜色			
			// dump($arrKeys);

			$arrKeys = array();
			$arrKey = array_keys($sizeArr);		//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizes'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sizeArr);	//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizenum'] = $arrVal[$i];
			}
			$this -> assign('size',$arrKeys);  //返回尺码
		
			$arrKeys = array();
			$arrKey = array_keys($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brand'] = $arrKey[$i];
			}
	
			$arrVal = array_values($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brandnum'] = $arrVal[$i];
			}
			$this -> assign('brand',$arrKeys);  //返回品牌

			$arrKeys = array();
			$arrKey = array_keys($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['price'] = $arrKey[$i];
			}
	
			$arrVal = array_values($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['pricenum'] = $arrVal[$i];
			}
			$this -> assign('price',$arrKeys);  //返回价格

			// 分页显示输出
			$result = $goods -> where('state = 1 and '.$threeType) 
							 -> order('addtime asc') 
							 -> limit($Page->firstRow.','.$Page->listRows) 
							 -> select();
			$goodsArr = array(); 	//图片
			$price = array(); 		//打折计算
			foreach ($result as &$key) {
				$condition['goodsid'] = $key['id']; 
				$rs =  $goodsInfo -> where($condition) -> find();
				$key['src'] = array_shift(explode(',',$rs['picname']));
				$key['off'] = number_format($key['discount']/$key['price']*10,1);			
			}			
			$this -> assign('page',$show);// 赋值分页输出
			$this -> assign('goods',$result);	
		}else if (!empty($this -> ids)) {
			$leftIds['id'] = $this -> ids; 
			/* 左侧分栏 */
			$result = $goodsType -> where($leftIds) -> find(); //ids
			$this -> assign('leftThree',$result);
			
			$leftPid['id'] = $result['pid'];

			$result = $goodsType -> where($leftPid) -> find();  //pid
			$this -> assign('leftTwo',$result);

			$oneType['pid'] = $result['pid'];
			$leftNav['id'] = $result['pid'];
			
			$result = $goodsType -> where($leftNav) -> find(); //zid
			$this -> assign('leftNav',$result);

			$result = $goodsType -> where($oneType) -> select();
			$leftArr = array();
			foreach ($result as $key) {
				$leftArr[] = $key['id'];
			}
			$leftStr = 'pid = '.implode(' or pid = ', $leftArr); //idsArr
			$result = $goodsType -> where($leftStr) -> select();
			$this -> assign('leftNavs',$result);			
			/*内容*/
			$threeType = 'typeid = '.$this -> ids; //三级条件
			$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
			$Page  = new \Think\Pages($count,32);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page -> show();	

			// 筛选器
			$sizer = $goods -> where('state = 1 and '.$threeType) 
							-> select();
			$sizerArr = array();
			foreach ($sizer as $key) {
				$sizerArr[] = $key['id'];
			}
			/*类别的选择器  品牌*/
			/*类别的选择器  品牌*/
			$goodsId = 'goodsid = '.implode(' or goodsid = ', $sizerArr);
			$info = $goodsInfo -> where($goodsId) -> select();
			$style = array(); //风格
			$color = array(); //颜色	
			$size  = array(); //尺码
			$brand = array(); //品牌
			$price = array(); //价格
			$type  = array(); //款式
			$popular = array(); //流行元素
			$season = array(); //季节
			$sex = array();  //性别
			foreach ($info as $key) {
				$style[$key['goodsid']] = $key['style'];
				$price[$key['goodsid']] = $key['price'];
				$brand[$key['goodsid']] = $key['brand'];
				$season[$key['goodsid']] = $key['season'];
				$sex[$key['goodsid']] = $key['sex'];
				$type[$key['goodsid']] = $key['type'];
				$popular[$key['goodsid']] = $key['popular'];
				$size[] = explode(',', $key['size']);
				$color[] = $key['color'];
			}

			$sizeArr_Size = array();
			foreach ($size as $key => $value) {				//尺码
				 foreach ($value as $key) {
				 	$sizeArr_Size[] = $key;
				 }
			}
			$sexArr   = array_count_values($sex);   		//性别
			$seasonArr= array_count_values($season);		//季节
			$typeArr  = array_count_values($type);			//款式
			$colorArr = array_count_values($color);			//颜色
			$sizeArr  = array_count_values($sizeArr_Size);	//尺码
			$priceArr = array_count_values($price);			//价格
			$brandArr = array_count_values($brand);			//brand 名
			$popularArr = array_count_values($popular); 	//流行元素
			$styleArr = array_count_values($style);  		//风格

			$arrKeys = array();
			$arrKey = array_keys($styleArr);				//风格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['style'] = $arrKey[$i];
			}
			
			$arrVal = array_values($styleArr);	//风格
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['stylenum'] = $arrVal[$i];
			}
			$this -> assign('style',$arrKeys);  //返回风格

			$arrKeys = array();
			$arrKey = array_keys($sexArr);				//性别	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sex'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sexArr);	//性别
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sexnum'] = $arrVal[$i];
			}
			$this -> assign('sex',$arrKeys);  //返回性别	


			$arrKeys = array();
			$arrKey = array_keys($seasonArr);				//季节	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['season'] = $arrKey[$i];
			}
			
			$arrVal = array_values($seasonArr);	//季节
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['seasonnum'] = $arrVal[$i];
			}
			$this -> assign('season',$arrKeys);  //返回季节	


			$arrKeys = array();
			$arrKey = array_keys($popularArr);				//流行元素	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popular'] = $arrKey[$i];
			}
			
			$arrVal = array_values($popularArr);	//流行元素
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popularnum'] = $arrVal[$i];
			}
			$this -> assign('popular',$arrKeys);  //返回流行元素	


			$arrKeys = array();
			$arrKey = array_keys($typeArr);				//款式	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['type'] = $arrKey[$i];
			}
			
			$arrVal = array_values($typeArr);	//款式
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['typenum'] = $arrVal[$i];
			}
			$this -> assign('type',$arrKeys);  //返回款式	

			$arrKeys = array();
			$arrKey = array_keys($colorArr);				//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['color'] = $arrKey[$i];
			}
			
			$arrVal = array_values($colorArr);	//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['colornum'] = $arrVal[$i];
			}
			$this -> assign('color',$arrKeys);  //返回颜色			
			// dump($arrKeys);

			$arrKeys = array();
			$arrKey = array_keys($sizeArr);		//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizes'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sizeArr);	//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizenum'] = $arrVal[$i];
			}
			$this -> assign('size',$arrKeys);  //返回尺码
		
			$arrKeys = array();
			$arrKey = array_keys($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brand'] = $arrKey[$i];
			}
	
			$arrVal = array_values($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brandnum'] = $arrVal[$i];
			}
			$this -> assign('brand',$arrKeys);  //返回品牌

			$arrKeys = array();
			$arrKey = array_keys($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['price'] = $arrKey[$i];
			}
	
			$arrVal = array_values($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['pricenum'] = $arrVal[$i];
			}
			$this -> assign('price',$arrKeys);  //返回价格


			// 分页显示输出
			$result = $goods -> where('state = 1 and '.$threeType) 
							 -> order('addtime asc') 
							 -> limit($Page->firstRow.','.$Page->listRows) 
							 -> select();
			$goodsArr = array(); 	//图片
			$price = array(); 		//打折计算
			foreach ($result as &$key) {
				$condition['goodsid'] = $key['id']; 
				$rs =  $goodsInfo -> where($condition) -> find();
				$key['src'] = array_shift(explode(',',$rs['picname']));
				$key['off'] = number_format($key['discount']/$key['price']*10,1);			
			}			
			$this -> assign('page',$show);// 赋值分页输出
			$this -> assign('goods',$result);	
		}else{
			/*左侧分栏*/
			$leftNavs = array();
			$result = $goodsType -> where('pid = 0') -> select();
			foreach ($result as &$key) {
				$rs = $goodsType -> where('pid = '.$key['id']) -> select();
				foreach ($rs as &$k) {
					$res = $goodsType -> where('pid = '.$k['id']) -> limit(1) -> select();
					foreach ($res as &$keys) {
						$leftNavs[] = $keys;
					}
				}
			}			
			$this -> assign('leftNavs',$leftNavs);
			/*内容*/
			$data['state'] = 1;
			$count = $goods -> where('state=1') -> count();	// 查询满足要求的总记录数
			$Page  = new \Think\Pages($count,32);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
			$show  = $Page -> show();	

			// 筛选器
			$sizer = $goods -> where('state = 1') 
							-> select();
			$sizerArr = array();
			foreach ($sizer as $key) {
				$sizerArr[] = $key['id'];
			}
			/*类别的选择器  品牌*/
			$goodsId = 'goodsid = '.implode(' or goodsid = ', $sizerArr);
			$info = $goodsInfo -> where($goodsId) -> select();
			$style = array(); //风格
			$color = array(); //颜色	
			$size  = array(); //尺码
			$brand = array(); //品牌
			$price = array(); //价格
			$type  = array(); //款式
			$popular = array(); //流行元素
			$season = array(); //季节
			$sex = array();  //性别
			foreach ($info as $key) {
				$style[$key['goodsid']] = $key['style'];
				$price[$key['goodsid']] = $key['price'];
				$brand[$key['goodsid']] = $key['brand'];
				$season[$key['goodsid']] = $key['season'];
				$sex[$key['goodsid']] = $key['sex'];
				$type[$key['goodsid']] = $key['type'];
				$popular[$key['goodsid']] = $key['popular'];
				$size[] = explode(',', $key['size']);
				$color[] = $key['color'];
			}

			$sizeArr_Size = array();
			foreach ($size as $key => $value) {				//尺码
				 foreach ($value as $key) {
				 	$sizeArr_Size[] = $key;
				 }
			}
			$sexArr   = array_count_values($sex);   		//性别
			$seasonArr= array_count_values($season);		//季节
			$typeArr  = array_count_values($type);			//款式
			$colorArr = array_count_values($color);			//颜色
			$sizeArr  = array_count_values($sizeArr_Size);	//尺码
			$priceArr = array_count_values($price);			//价格
			$brandArr = array_count_values($brand);			//brand 名
			$popularArr = array_count_values($popular); 	//流行元素
			$styleArr = array_count_values($style);  		//风格

			$arrKeys = array();
			$arrKey = array_keys($styleArr);				//风格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['style'] = $arrKey[$i];
			}
			
			$arrVal = array_values($styleArr);	//风格
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['stylenum'] = $arrVal[$i];
			}
			$this -> assign('style',$arrKeys);  //返回风格

			$arrKeys = array();
			$arrKey = array_keys($sexArr);				//性别	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sex'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sexArr);	//性别
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sexnum'] = $arrVal[$i];
			}
			$this -> assign('sex',$arrKeys);  //返回性别	


			$arrKeys = array();
			$arrKey = array_keys($seasonArr);				//季节	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['season'] = $arrKey[$i];
			}
			
			$arrVal = array_values($seasonArr);	//季节
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['seasonnum'] = $arrVal[$i];
			}
			$this -> assign('season',$arrKeys);  //返回季节	


			$arrKeys = array();
			$arrKey = array_keys($popularArr);				//流行元素	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popular'] = $arrKey[$i];
			}
			
			$arrVal = array_values($popularArr);	//流行元素
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['popularnum'] = $arrVal[$i];
			}
			$this -> assign('popular',$arrKeys);  //返回流行元素	


			$arrKeys = array();
			$arrKey = array_keys($typeArr);				//款式	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['type'] = $arrKey[$i];
			}
			
			$arrVal = array_values($typeArr);	//款式
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['typenum'] = $arrVal[$i];
			}
			$this -> assign('type',$arrKeys);  //返回款式	

			$arrKeys = array();
			$arrKey = array_keys($colorArr);				//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['color'] = $arrKey[$i];
			}
			
			$arrVal = array_values($colorArr);	//颜色	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['colornum'] = $arrVal[$i];
			}
			$this -> assign('color',$arrKeys);  //返回颜色			
			// dump($arrKeys);

			$arrKeys = array();
			$arrKey = array_keys($sizeArr);		//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizes'] = $arrKey[$i];
			}
			
			$arrVal = array_values($sizeArr);	//尺码	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['sizenum'] = $arrVal[$i];
			}
			$this -> assign('size',$arrKeys);  //返回尺码
		
			$arrKeys = array();
			$arrKey = array_keys($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brand'] = $arrKey[$i];
			}
	
			$arrVal = array_values($brandArr);	//brand	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['brandnum'] = $arrVal[$i];
			}
			$this -> assign('brand',$arrKeys);  //返回品牌

			$arrKeys = array();
			$arrKey = array_keys($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['price'] = $arrKey[$i];
			}
	
			$arrVal = array_values($priceArr);	//价格	
			for($i=0;$i<count($arrKey);$i++){
				$arrKeys[$i]['pricenum'] = $arrVal[$i];
			}
			$this -> assign('price',$arrKeys);  //返回价格

			// 分页显示输出
			$result = $goods -> where($data) 
							 -> order('addtime asc') 
							 -> limit($Page->firstRow.','.$Page->listRows) 
							 -> select();
			$goodsArr = array(); 	//图片
			$price = array(); 		//打折计算
			foreach ($result as &$key) {
				$condition['goodsid'] = $key['id']; 
				$rs =  $goodsInfo -> where($condition) -> find();
				$key['src'] = array_shift(explode(',',$rs['picname']));
				$key['off'] = number_format($key['discount']/$key['price']*10,1);			
			}

			$this -> assign('page',$show);// 赋值分页输出
			$this -> assign('goods',$result);
		}
		$this -> display();
	}
   public function lists(){
      parent::lists;
   }	
	// 接受多选
	private function beTwo(){
/*	$b = 'brand like "%winter%" or brand like "%jeep%" or size like "%175%"';
	$a = 'goodsid = 6 or goodsid = 7';
	$gs = $goodsInfo -> where('('.$b.') and ('.$a.')') -> select();
	dump($gs);	*/	


		// arr接受所有多选的值
/*		if (!empty($_GET['pid'])) {
			$arr = array_keys($_GET);
			$str = implode('|', $arr);
			return $str;
		}
		return;*/
	} 


	// 一级分类
	protected function zid(){
		if (!empty($_GET['zid'])) {
			return  $_GET['zid'];
		}
		return false;
	}

	// 二级分类
	protected function pid(){
		if (!empty($_GET['pid'])) {
			return  $_GET['pid'];
		}
		return false;
	}
	
	// 三级分类
	protected function ids(){
		if (!empty($_GET['ids'])) {
			return $_GET['ids'];
		}
		return false;
	}


}
