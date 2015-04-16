<?php
namespace Home\Controller;
use Think\Controller;
/**
* @param 筛选器
*/
class ScreenController extends PublicController
{	
	// 接受单选
	public function be(){	
		$goods = M('goods');
		$goodsInfo = M('goodsinfo');
		$goodsType = M('goodstype');
		$thisUrl = $_POST['url'];
		
		if (!empty($_POST['be']) or !empty($_POST['bes'])){	
			$url = explode('/',$thisUrl);
			if (in_array('zid',$url)) {		
				/* 一级分类 */ 
				$oneType['pid'] = $url[5];
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
								//dump($count);
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	
				// 分页显示输出
				if ($_POST['state'] == 1) {   //销量
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {	//新品
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();										
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);					
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();						
				}		
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bes']) && !empty($_POST['be'])) {
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3).')';
					$strAnd = $_POST['be'].' and (';
				}else{
					$likeStr = '';
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3);
					$strAnd = $_POST['be'];
				}	

	
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}	
				// dump($rs);			
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;

			}else if (in_array('pid', $url)) {	//对应二级
				
			/* 一级分类 */ 
				$oneType['pid'] = $url[5];
				$result = $goodsType -> where('pid = '.$url[5] ) -> select(); //遍历二级分类
				$oneArr = array();
				foreach ($result as $key) {
					$oneArr[] = $key['id'];
				}

				$threeType = 'typeid = '.implode(' or typeid = ', $oneArr); //三级条件
				$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['state'] == 1) {  //销量
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {	//新品
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bes']) && !empty($_POST['be'])) {
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3).')';
					$strAnd = $_POST['be'].' and (';

				}else{
					$likeStr = '';
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3);
					$strAnd = $_POST['be'];
				}	
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}		
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;
			}else if (in_array('ids', $url)) {	//对应三级
				/*内容*/
				$threeType = $url[5]; //三级条件
				$count = $goods -> where('state = 1 and typeid = '.$url[5]) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['state'] == 1) {
					$result = $goods -> where('state = 1 and  typeid = '.$url[5]) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bes']) && !empty($_POST['be'])) {
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3).')';
					$strAnd = $_POST['be'].' and (';
				}else{
					$likeStr = '';
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3);
					$strAnd = $_POST['be'];
				}	

				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}		
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();			
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;		
			}else{								//所有
				$count = $goods -> where('state=1') -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,200);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();

				// 分页显示输出
				if ($_POST['state'] == 1) {	//销量
					$result = $goods -> where('state = 1') 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {	//新品
					$result = $goods -> where('state = 1') 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1') 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1') 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1') 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				// dump($result);
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bes']) && !empty($_POST['be'])) {
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3).')';
					$strAnd = $_POST['be'].' and (';

				}else{
					$likeStr = '';
					$strOr  = $_POST['bes'];
					$newStr = explode(',', $strOr);
					$likeStr= substr(implode(' or ', $newStr), 0, -3);
					$strAnd = $_POST['be'];
				}			
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}				
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) { 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();	
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);
				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;	
			}	

		}
		/* 多选 */
		if (!empty($_POST['betwo']) or !empty($_POST['bestwo'])){	
			$url = explode('/',$thisUrl);
			if (in_array('zid',$url)) {		
				/* 一级分类 */ 
				$oneType['pid'] = $url[5];
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
								//dump($count);
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	
				// 分页显示输出
				if ($_POST['state'] == 1) {  //销量
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {  //新品
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}

				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}
				// like条件
				if (!empty($_POST['bestwo']) && !empty($_POST['betwo'])) {
					$likeStr = $_POST['bestwo'];
					$strAnd = '('.$_POST['betwo'].') and ';
				}else{
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'];
				}				
				// 遍历对应商品详情
				$rs = array();

				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}	

				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;

			}else if (in_array('pid', $url)) {	//对应二级			
			/* 一级分类 */ 
				$oneType['pid'] = $url[5];
				$result = $goodsType -> where($oneType) -> select(); //遍历二级分类
				$oneArr = array();
				foreach ($result as $key) {
					$oneArr[] = $key['id'];
				}

				$threeType = 'typeid = '.implode(' or typeid = ', $oneArr); //三级条件
				$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['state'] == 1) { //销量
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) { //新品
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}

				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bestwo']) && !empty($_POST['betwo'])) {
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'].' or ';
				}else{
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'];
				}			
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}		
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;
			}else if (in_array('ids', $url)) {	//对应三级
				/*内容*/

				$threeType = 'typeid = '.$url[5]; //三级条件
				$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['state'] == 1) {
					$result = $goods -> where('state = 1 and  typeid = '.$url[5]) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件
				if (!empty($_POST['bestwo']) && !empty($_POST['betwo'])) {
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'].' or ';
				}else{
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'];
				}			
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}		
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();			
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;		
			}else{								//所有
				$count = $goods -> where('state=1') -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,200);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();

				// 分页显示输出
				if ($_POST['state'] == 1) {
					$result = $goods -> where('state = 1') 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 2) {
					$result = $goods -> where('state = 1') 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['state'] == 3) {	//价格下降
					$result = $goods -> where('state = 1') 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['state'] == 4) {
					$result = $goods -> where('state = 1') 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if (!empty($_POST['starts']) && !empty($_POST['stops'])) {
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1') 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}

				// dump($result);
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}
				// like条件
				if (!empty($_POST['bestwo']) && !empty($_POST['betwo'])) {
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'].' or ';
				}else{
					$likeStr = $_POST['bestwo'];
					$strAnd = $_POST['betwo'];
				}			
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('(goodsid = '.$key['goodsid'].') and ('.$strAnd.$likeStr.')') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}	
			
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) { 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();	
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);
				}
				// dump(count($result));
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;	
			}	

		}
	if (!empty($_POST['default'])) {
			$url = explode('/',$thisUrl);
			if (in_array('zid',$url)) {		
				/* 一级分类 */ 
				$oneType['pid'] = $url[5];
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
								//dump($count);
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	
				// 分页显示输出
				if ($_POST['default'] == 1) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['default'] == 2) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 5 && !empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}
				// like条件			
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('goodsid = '.$key['goodsid'].'') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}					
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;

			}else if (in_array('pid', $url)) {	//对应二级
				
			/* 一级分类 */ 
				$oneType['pid'] = $url[5];
				$result = $goodsType -> where($oneType) -> select(); //遍历二级分类
				$oneArr = array();
				foreach ($result as $key) {
					$oneArr[] = $key['id'];
				}

				$threeType = 'typeid = '.implode(' or typeid = ', $oneArr); //三级条件
				$count = $goods -> where('state = 1 and '.$threeType) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['default'] == 1) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['default'] == 2) {
					$result = $goods -> where('state = 1 and '.$threeType) 
							 -> order('addtime desc') 
							 -> limit($Page->firstRow.','.$Page->listRows) 
							 -> select();			
				}else if ($_POST['default'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 4) {
					$result = $goods -> where('state = 1 and '.$threeType) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 5 && !empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and '.$threeType) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}			
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件	
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('goodsid = '.$key['goodsid'].'') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}	
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();
					
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;
			}else if (in_array('ids', $url)) {	//对应三级
				/*内容*/
				$threeType = $url[5]; //三级条件
				$count = $goods -> where('state = 1 and typeid = '.$url[5]) -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,100);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();	

				// 分页显示输出
				if ($_POST['default'] == 1) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['default'] == 2) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['default'] == 3) {	//价格下降
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 4) {
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 5 && !empty($_POST['starts']) && !empty($_POST['stops'])) {
					$thre = $threeType;
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1 and('.$thre.')';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1 and typeid = '.$url[5]) 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}
				
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}

				// like条件	
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('goodsid = '.$key['goodsid'].'') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}		
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				
				// 追加字段
				foreach ($result as &$keys) {
					// $condition['goodsid'] = $key['id']; 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();			
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);

				}
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;		
			}else{								//所有
				$count = $goods -> where('state=1') -> count();	// 查询满足要求的总记录数
				$Page  = new \Think\Pages($count,200);		// 实例化分页类 传入总记录数和每页显示的记录数(25)
				$show  = $Page -> show();

				// 分页显示输出
				if ($_POST['default'] == 1) {
					$result = $goods -> where('state = 1') 
									 -> order('sales desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();					
				}else if ($_POST['default'] == 2) {
					$result = $goods -> where('state = 1') 
									 -> order('addtime desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 3) {	//价格下降
					$result = $goods -> where('state = 1') 
									 -> order('discount asc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 4) {
					$result = $goods -> where('state = 1') 
									 -> order('discount desc') 
									 -> limit($Page->firstRow.','.$Page->listRows) 
									 -> select();
				}else if ($_POST['default'] == 5 && !empty($_POST['starts']) && !empty($_POST['stops'])) {
					$query = 'SELECT * FROM sh_goods WHERE (discount between '.$_POST['starts'].' and '.$_POST['stops'].') and state = 1';
					$result = $goods -> query($query);
				}else{
					$result = $goods -> where('state = 1') 
									-> order('addtime asc') 
									-> limit($Page->firstRow.','.$Page->listRows) 
									-> select();						
				}	
				// dump($result);
				$condition = array();
				foreach ($result as $key) {
					$condition[]['goodsid'] = $key['id']; 			
				}
				// 遍历对应商品详情
				$rs = array();
				foreach ($condition as $key) {
					$da =  $goodsInfo -> where('goodsid = '.$key['goodsid'].'') -> find();
					if (!is_null($da)) {
						$rs[] = $da;
					}
				}				
				$goodsArr = array(); 	//图片
				$price = array(); 		//打折计算
				$result = array();
				// 遍历商品
				foreach ($rs as $key) {
					$result[] = $goods -> where('id = '.$key['goodsid']) -> find();
				}
				// 追加字段
				foreach ($result as &$keys) { 
					$rs =  $goodsInfo -> where('goodsid = '.$keys['id']) -> find();	
					$keys['src'] = array_shift(explode(',',$rs['picname']));
					$keys['off'] = number_format($keys['discount']/$keys['price']*10,1);
				}
				// dump(count($result));
				// 返回ajax
				if ($result) {
					$str ='<ul class="proList new_prdlist" id="proList">';
					foreach ($result as $key) {
 		      			$str .=	'<li>
		      				<div class="srchlst-wrap">
			       			<div class="hd">            
			       			<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\'>            
			       		   	<sup no="100057138" class="mark_small_100057138 salepic"></sup>
			       			<img width="240" height="240" alt="'.$key['goods'].'" class="lazy_loading" src="/Public/Home/images/carousel/'.$key['src'].'" original="/Public/Home/images/carousel/'.$key['src'].'" /> 
			        		</a>
			        		</div>
			        		<div class="bd">
				        	<span class=\'nptt\'>         
				       		<a target=\'_blank\' href=\'/index.php/Info/index/id/'.$key['id'].'\' title="'.$key['goods'].$key['intro'].'">'.$key['goods'].$key['intro'].'</a></span>			   
                  		    <p class="price">		                     
					        <span class="fl Red price_no100057138">
							活动价:<em class="ygprc16">￥<i>'.$key['discount'].'</i></em>           
					        ('.$key['off'].'折)
					        </span>                
					        <span class="fr">市场价:<del>￥'.$key['price'].'</del></span>				        
                			</p>
			         		</div>
		        		    </div> 
		      			</li>';	
					}
					$str.='</ul>';
				}
				echo $str;	
			}
		}
	}
}