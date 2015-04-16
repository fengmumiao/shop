<?php 
namespace Home\Controller;
use Think\Controller;
class CartController extends Controller
{
 /** 
 * @name  		 cart()    购物车content 
 * @param  		 array     接收 $.Ajax({type:'POST'})  
 * @return 		 String     返回 String
 * @version      2014-11-11
 * @copyright    sh工作室 
 */  
 	public function cartInsert(){
 		if ($_POST['id'] && $_POST['name'] && $_POST['img'] && $_POST['size'] && $_POST['shopid'] && $_POST['color'] && $_POST['price'] && $_POST['goodsNumber'] && $_POST['num'] && $_POST['favo'] && $_POST['minor']) {
			/*匹对商品*/
			$array = array(
					'time'	 => time(),
					'id'     => $_POST['id'],
					'name'   => $_POST['name'],
					'src'    => $_POST['img'],
					'size'   => $_POST['size'],
					'shopid' => $_POST['shopid'],
					'color'  => $_POST['color'],
					'price'  => $_POST['minor'],
					'former' => $_POST['price'],
					'goodsNumber' => $_POST['goodsNumber'],
					'num'	 => $_POST['num'],
					'favo'	 => $_POST['favo']);
			$_SESSION['iscart'][$_POST['id']] = $array;
			if (!empty($_SESSION['iscart'][$_POST['id']])) {
				echo 1;
			}
		}
 	}
 	/*直接购买*/
 	public function cartIns(){
 		if ($_POST['id'] && $_POST['name'] && $_POST['img'] && $_POST['size'] && $_POST['shopid'] && $_POST['color'] && $_POST['price'] && $_POST['goodsNumber'] && $_POST['num'] && $_POST['favo'] && $_POST['minor']) {
			/*匹对商品*/
			$array = array(
					'time'	 => time(),
					'id'     => $_POST['id'],
					'name'   => $_POST['name'],
					'src'    => $_POST['img'],
					'size'   => $_POST['size'],
					'shopid' => $_POST['shopid'],
					'color'  => $_POST['color'],
					'price'  => $_POST['minor'],
					'former' => $_POST['price'],
					'goodsNumber' => $_POST['goodsNumber'],
					'num'	 => $_POST['num'],
					'favo'	 => $_POST['favo']);
			$_SESSION['order'][$_POST['id']] = $array;
			if (!empty($_SESSION['order'][$_POST['id']])) {
				echo 1;
			}
		}
 	}	

	public function cart(){
		// param 商品的增加和减少
		if (!empty($_POST['id'])) {
			$_SESSION[iscart][$_POST['id']][num] = $_POST['num'];
			$_SESSION[iscart][$_POST['id']][price] = ($_SESSION[iscart][$_POST['id']][former] - $_SESSION[iscart][$_POST['id']][favo]) * $_POST['num'];
			echo '1';
		}
		// param 删除商品
		if (!empty($_POST['did'])) {
			unset($_SESSION[iscart][$_POST['did']]);
		}
		// 总数
		$count = count($_SESSION[iscart]);
		// 返回Ajax
		$string = '<script>
					$("#pordcount").text("'.$count.'");
					</script>
					<!--我的购物车 start-->
					<div class="mycart_pop abs" style="display:block;">
					<div class="bd rel">
					<ul class="mycart_pro_list">
					<!--我的购物车 start-->';
		// 遍历SESSION
		foreach ($_SESSION[iscart] as $key) {
				$string .='<li class="clearfix">
							<div class="img fl rel">
								<a href="" target="_blank">
								<img onerror="this.src=\'../../../Public/Home/images/index/99995416_01_t.jpg\'" src="'.$key['src'].'" width="42" height="42" alt="" />
								</a>
							</div>
							<div class="info fl">
								<p class="name"><a href="/index.php/Info/index/id/'.$key['id'].'" target="_blank">'.$key['name'].'</a></p>
								<p class="choose cgray">颜色：<em>'.$key['color'].'</em>尺码：<em>'.$key['size'].'</em></p>
							</div>
							<div class="prc fl">
								<em class="ygprc">&yen;<i>'.$key['price'].'</i></em>
							</div>
							<div class="num_cz fr">
								<div class="dec_add">
									<a class="dec dec_no" href="javascript:void(0);" pNo="99938353003" pid="a02205bee4bc4362a14f22470e5d87a9"></a>
									
									<input class="num" type="text" name="oldNum_99938353003" id="oldNum_1" value="'.$key['num'].'" readonly="readonly" />
									
									<input type="hidden" id="productId_1" value="'.$key['id'].'"/>
									<input type="hidden" id="productNo_1" pNo="99938353003" value="99938353003"/>
									
									<input type="hidden" id="minCanBuyNum_1" value="1"/>
									<input type="hidden" id="maxCanBuyNum_1" value="10"/>
									
									<a class="add" href="javascript:void(0);" onclick="add()"></a>
								
								</div>
								<p class="cz cgray">
								<a href="javascript:void(0);" class="JsRemoveGood" pNo="99938353003" pid="a02205bee4bc4362a14f22470e5d87a9">删除该商品</a>
								</p>
							</div>
						</li>';	
		}						
		$string .= '<!--我的购物车 start-->
				</ul>
				</div>
				<ul>
					<div class="ft rel">
						<a target="_blank" href="/index.php/Car/index" class="go_js fr">去购物车结算</a>
						<span>共 <em class="corg">'.$count.'</em> 件商品</span>
					</div>
				</ul>
			</div>';

		echo $string;
	}
}