<?php 
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
/** 
 * @name   	  	index()   主页 
 * @return 	  	display  
 * @version   	2014-11-11
 * @copyright	sh工作室
 */
  public function index(){
    	$this -> leftnav();   //导航部分
    	$this -> topnav();    //头部导航
      $this -> softRock();  //热门品牌推荐
      $this -> guide();     //导购
      $this -> Shuffling(); //轮播图
      $this -> puzzle();    //四方图
      $this -> randGoods(); //随机读取
      $this -> hotsRank();  //随机推广
      $this -> event();     //更多设置
      $this -> news();

    	$this->assign('name','优购首页');
		  $this->display();
	}

	private function leftnav(){
    	$men = M('goodstype');    	
    	// 导航男鞋/女鞋
    	$menContent = $men -> where('pid = 12 or pid = 13') -> limit(2) -> select();
    	$this -> assign('menContent',$menContent);
   		$manArr = array();
   		$womanArr = array();
   		$menContents = $men -> where('pid = 12 or pid = 13') -> select();
   		foreach ($menContents as $key) {

   			if ($key['pid'] == 12) {
   				$manArr[] = $key['id'];
   			}
   			if ($key['pid'] == 13) {
   				$womanArr[] = $key['id']; 
   			}
   		}

   		$pid = implode(' or pid = ',$manArr);  //3级女鞋
   		$pid = 'pid = '.$pid;
   		$man = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('mann',$man);

   		$pids = 'pid = '.implode(' or pid = ',$womanArr); //3级男鞋
   		$woman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('womann',$woman); //	导航男鞋/女鞋 End

   		// 导航男装/女装
   		$clothing = $men -> where('pid = 14 or pid = 15') -> limit(2) -> select();
    	$this -> assign('clContent',$clothing);
   		$clArr = array();
   		$clsArr = array();
   		$clContents = $men -> where('pid = 14 or pid = 15') -> select();
   		foreach ($clContents as $key) {

   			if ($key['pid'] == 14) {
   				$clArr[] = $key['id'];
   			}
   			if ($key['pid'] == 15) {
   				$clsArr[] = $key['id']; 
   			}
   		}

   		$pid = implode(' or pid = ',$clArr);  //3级女装
   		$pid = 'pid = '.$pid;
   		$clman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('clman',$clman);

   		$pids = 'pid = '.implode(' or pid = ',$clsArr); //3级男装
   		$clwoman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('clwoman',$clwoman); //	导航男装/女装 End	

   		// 导航童鞋/童装
   		$child = $men -> where('pid = 16 or pid = 17') -> limit(2) -> select();
    	$this -> assign('chContent',$child);
   		$chArr = array();
   		$chsArr = array();
   		$chContents = $men -> where('pid = 16 or pid = 17') -> select();
   		foreach ($chContents as $key) {

   			if ($key['pid'] == 16) {
   				$chArr[] = $key['id'];
   			}
   			if ($key['pid'] == 17) {
   				$chsArr[] = $key['id']; 
   			}
   		}

   		$pid = implode(' or pid = ',$chArr);  //3级童鞋
   		$pid = 'pid = '.$pid;
   		$chman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('chman',$chman);

   		$pids = 'pid = '.implode(' or pid = ',$chsArr); //3级童装
   		$chwoman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('chwoman',$chwoman); //	导航童鞋/童装 End	


   		// 导航家居/内衣
   		$underwear = $men -> where('pid = 18 or pid = 19') -> limit(3) -> select();
    	$this -> assign('unContent',$underwear);
   		$unArr = array();
   		$unsArr = array();
   		$unsContents = $men -> where('pid = 18 or pid = 19') -> select();
   		foreach ($unsContents as $key) {

   			if ($key['pid'] == 18) {
   				$unArr[] = $key['id'];
   			}
   			if ($key['pid'] == 19) {
   				$unsArr[] = $key['id']; 
   			}
   		}

   		$pid = implode(' or pid = ',$unArr);  //3级家居
   		$pid = 'pid = '.$pid;
   		$unman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('unman',$unman);

   		$pids = 'pid = '.implode(' or pid = ',$unsArr); //3级内衣
   		$unwoman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('unwoman',$unwoman); //	导航家居/内衣 End

   		// 导航箱包/配饰
   		$bag = $men -> where('pid = 20 or pid = 21') -> limit(3) -> select();
    	$this -> assign('bagContent',$bag);
   		$bagArr = array();
   		$bagsArr = array();
   		$bagsContents = $men -> where('pid = 20 or pid = 21') -> select();
   		foreach ($bagsContents as $key) {

   			if ($key['pid'] == 20) {
   				$bagArr[] = $key['id'];
   			}
   			if ($key['pid'] == 21) {
   				$bagsArr[] = $key['id']; 
   			}
   		}

   		$pid = implode(' or pid = ',$bagArr);  //3级箱包
   		$pid = 'pid = '.$pid;
   		$bagman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('bagman',$bagman);

   		$pids = 'pid = '.implode(' or pid = ',$bagsArr); //3级配饰
   		$bagwoman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('bagwoman',$bagwoman); //	导航箱包/配饰 End	   		

   		// 导航运动鞋
   		$motion = $men -> where('pid = 22') -> limit(2) -> select();
    	$this -> assign('moContent',$motion);
   		$moArr = array();
   		$mosContents = $men -> where('pid = 22') -> select();
   		foreach ($mosContents as $key) {
   			if ($key['pid'] == 22) {
   				$moArr[] = $key['id'];
   			}
   		}

   		$pid = implode(' or pid = ',$moArr);  //3级运动
   		$pid = 'pid = '.$pid;
   		$moman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('moman',$moman); //	导航运动鞋   		


   		// 导航户外
   		$outdoors = $men -> where('pid = 23') -> limit(2) -> select();
    	$this -> assign('outContent',$outdoors);
   		$outArr = array();
   		$outContents = $men -> where('pid = 23') -> select();
   		foreach ($outContents as $key) {
   			if ($key['pid'] == 23) {
   				$outArr[] = $key['id'];
   			}
   		}

   		$pid = implode(' or pid = ',$outArr);  //3级户外
   		$pid = 'pid = '.$pid;
   		$outman = $men -> where($pid) -> limit(20) -> select();
   		$this -> assign('outman',$outman); //	导航户外
	}

	private function topnav(){
		// 头部导航
  		$top = M('goodstype');
  		$result = $top -> where('pid = 0') -> select();
  		$this -> assign('topnav',$result); 
	}

  private function softRock(){
    // 热卖品牌推荐
      $soft = M('hots');
      $result = $soft -> where() -> order('id desc') -> limit(6) -> select();
      $this -> assign('soft',$result);
  }

  private function guide(){
    // 导购
      $guide = M('saleuser');
      $result = $guide -> where('state = 1') -> order('id desc') -> select();
      $this -> assign('guide',$result); 
  }

  private function Shuffling(){
    // 轮播图
    $Shuffling = M('carousel');
    $result = $Shuffling -> where() -> order('sequence asc') -> select();
    $this -> assign('shuffling',$result); 
  }

  private function puzzle(){
    // 四方图
    $puzzle = M('puzzle');
    $result = $puzzle -> where() -> select();
    $this -> assign('puzzle',$result);
  }

  public function randGoods(){
        // 随机读取 男装
        $rand = M('saleuser');
        $randGoods = $rand -> where() -> select();
        $goodsNum = array();
        foreach ($randGoods as $key) {
             $goodsNum[] = $key['id'];
        }
        $num = count($goodsNum);
        $rands =  mt_rand(1,count($goodsNum)-3);
        $randGoods = $rand -> where() -> limit($rands.' , '.$num) -> select();
        $this -> assign('rand',$randGoods);
        // 取出6个
        if (count($randGoods) > 6) {
           $randGoods = array_splice($randGoods,5,$num);
        }
        $this -> assign('rands',$randGoods);
        // 头部导航
        $topCon = M('goodstype');
        $top = $topCon -> where('pid = 29') -> limit(15) -> select();
        $this -> assign('top',$top);        

        // 随机女装
        $randGoods = $rand -> where() -> select();
        $goodsNum = array();
        foreach ($randGoods as $key) {
             $goodsNum[] = $key['id'];
        }
        $num = count($goodsNum);
        $rands =  mt_rand(1,count($goodsNum)-3);
        $randGoods = $rand -> where() -> limit($rands.' , '.$num) -> select();
        $this -> assign('rand_Woman',$randGoods);
        // 取出6个
        if (count($randGoods) > 6) {
           $randGoods = array_splice($randGoods,5,$num);
        }
        $this -> assign('rands_Woman',$randGoods);
        // 头部导航
        $topCon = M('goodstype');
        $top = $topCon -> where('pid = 32 or pid = 33 or pid = 34') -> limit(15) -> select();
        $this -> assign('tops',$top);        

        // 随机鞋包
        $randGoods = $rand -> where() -> select();
        $goodsNum = array();
        foreach ($randGoods as $key) {
             $goodsNum[] = $key['id'];
        }
        $num = count($goodsNum);
        $rands =  mt_rand(1,count($goodsNum)-3);
        $randGoods = $rand -> where() -> limit($rands.' , '.$num) -> select();
        $this -> assign('rand_Box',$randGoods);
        // 取出6个
        if (count($randGoods) > 6) {
           $randGoods = array_splice($randGoods,5,$num);
        }
        $this -> assign('rands_Box',$randGoods);
        // 头部导航
        $topCon = M('goodstype');
        $top = $topCon -> where('pid = 24 or pid = 25') -> limit(15) -> select();
        $this -> assign('topB',$top);        


        // 随机户外运动
        $randGoods = $rand -> where() -> select();
        $goodsNum = array();
        foreach ($randGoods as $key) {
             $goodsNum[] = $key['id'];
        }
        $num = count($goodsNum);
        $rands =  mt_rand(1,count($goodsNum)-3);
        $randGoods = $rand -> where() -> limit($rands.' , '.$num) -> select();
        $this -> assign('rand_Door',$randGoods);
        // 取出6个
        if (count($randGoods) > 6) {
           $randGoods = array_splice($randGoods,5,$num);
        }
        $this -> assign('rands_Door',$randGoods);
        // 头部导航
        $topCon = M('goodstype');
        $top = $topCon -> where('pid = 69 or pid = 71 or pid = 72') -> limit(15) -> select();
        $this -> assign('topD',$top);       


        // 随机童鞋童装
        $randGoods = $rand -> where() -> select();
        $goodsNum = array();
        foreach ($randGoods as $key) {
             $goodsNum[] = $key['id'];
        }
        $num = count($goodsNum);
        $rands =  mt_rand(1,count($goodsNum)-3);
        $randGoods = $rand -> where() -> limit($rands.' , '.$num) -> select();
        $this -> assign('rand_Shoes',$randGoods);
        // 取出6个
        if (count($randGoods) > 6) {
           $randGoods = array_splice($randGoods,5,$num);
        }
        $this -> assign('rands_Shoes',$randGoods);
        // 头部导航
        $topCon = M('goodstype');
        $top = $topCon -> where('pid = 40 or pid = 41 or pid = 42') -> limit(15) -> select();
        $this -> assign('topS',$top);
  } 
  public function hotsRank(){
    // 热门推广(女鞋)
    $hots = M('goods'); 
    $pid = M('goodstype');
    $hotsInfo = M('goodsinfo');
    $result = $pid -> where('pid = 12') -> select(); //一级id
    $hotsArr = array();
    foreach ($result as $key) {
      $hotsArr[] = $key['id'];
    }
    $strHots = 'pid = '.implode(' or pid = ', $hotsArr); //二级id
    $res = $pid -> where($strHots) -> select();
    $rankArr = array();
    foreach ($res as $key){             
      $rankArr[] = $key['id'];
    } 
    $strRank = 'typeid = '.implode(' or typeid = ', $rankArr); //三级id
    //随机推广
    $hot = $hots -> where($strRank) -> select();
    $hotRand = mt_rand(1,count($hot)-6).',6';
    $hotRands = $hots -> where($strRank) -> limit($hotRand) -> select();
    $arr = array();
    foreach ($hotRands as $k) {
        $goodsid['goodsid'] = $k['id'];
        // $arr[]['reduction'] = number_format($k['discount']/$k['price']*10,1);
        $goodsinfo = $hotsInfo -> where($goodsid) -> find();
        $arr[]['picname'] = array_shift(explode(',', $goodsinfo['picname']));
    }
    for($i=0;$i<count($hotRands);$i++){
        $hotRands[$i]['cid'] = $i;
        $hotRands[$i]['picname'] = $arr[$i]['picname'];
        // $hotRands[$i]['ction'] = $arr[$i]['reduction'];
    }
    $this -> assign('footwear',$hotRands);

    //男鞋
    $hots = M('goods'); 
    $pid = M('goodstype');
    $hotsInfo = M('goodsinfo');
    $result = $pid -> where('pid = 13') -> select(); //一级id
    $hotsArr = array();
    foreach ($result as $key) {
      $hotsArr[] = $key['id'];
    }
    $strHots = 'pid = '.implode(' or pid = ', $hotsArr); //二级id
    $res = $pid -> where($strHots) -> select();
    $rankArr = array();
    foreach ($res as $key){             
      $rankArr[] = $key['id'];
    } 
    $strRank = 'typeid = '.implode(' or typeid = ', $rankArr); //三级id
    //随机推广
    $hot = $hots -> where($strRank) -> select();
    $hotRand = mt_rand(1,count($hot)-6).',6';
    $hotRands = $hots -> where($strRank) -> limit($hotRand) -> select();
    $arr = array();
    foreach ($hotRands as $k) {
        $goodsid['goodsid'] = $k['id'];
        // $arr[]['reduction'] = number_format($k['discount']/$k['price']*10,1);
        $goodsinfo = $hotsInfo -> where($goodsid) -> find();
        $arr[]['picname'] = array_shift(explode(',', $goodsinfo['picname']));
    }
    for($i=0;$i<count($hotRands);$i++){
        $hotRands[$i]['cid'] = $i;
        $hotRands[$i]['picname'] = $arr[$i]['picname'];
        // $hotRands[$i]['ction'] = $arr[$i]['reduction'];
    }
    $this -> assign('manwear',$hotRands);
    // dump($hotRands);

    //男装
    $hots = M('goods'); 
    $pid = M('goodstype');
    $hotsInfo = M('goodsinfo');
    $result = $pid -> where('pid = 14') -> select(); //一级id
    $hotsArr = array();
    foreach ($result as $key) {
      $hotsArr[] = $key['id'];
    }
    $strHots = 'pid = '.implode(' or pid = ', $hotsArr); //二级id
    $res = $pid -> where($strHots) -> select();
    $rankArr = array();
    foreach ($res as $key){             
      $rankArr[] = $key['id'];
    } 
    $strRank = 'typeid = '.implode(' or typeid = ', $rankArr); //三级id
    //随机推广
    $hot = $hots -> where($strRank) -> select();
    $hotRand = mt_rand(1,count($hot)-6).',6';
    $hotRands = $hots -> where($strRank) -> limit($hotRand) -> select();
    $arr = array();
    foreach ($hotRands as $k) {
        $goodsid['goodsid'] = $k['id'];
        // $arr[]['reduction'] = number_format($k['discount']/$k['price']*10,1);
        $goodsinfo = $hotsInfo -> where($goodsid) -> find();
        $arr[]['picname'] = array_shift(explode(',', $goodsinfo['picname']));
    }
    for($i=0;$i<count($hotRands);$i++){
        $hotRands[$i]['cid'] = $i;
        $hotRands[$i]['picname'] = $arr[$i]['picname'];
        // $hotRands[$i]['ction'] = $arr[$i]['reduction'];
    }
    $this -> assign('man',$hotRands);
    // dump($hotRands);

    //女装
    $hots = M('goods'); 
    $pid = M('goodstype');
    $hotsInfo = M('goodsinfo');
    $result = $pid -> where('pid = 15') -> select(); //一级id
    $hotsArr = array();
    foreach ($result as $key) {
      $hotsArr[] = $key['id'];
    }
    $strHots = 'pid = '.implode(' or pid = ', $hotsArr); //二级id
    $res = $pid -> where($strHots) -> select();
    $rankArr = array();
    foreach ($res as $key){             
      $rankArr[] = $key['id'];
    } 
    $strRank = 'typeid = '.implode(' or typeid = ', $rankArr); //三级id
    //随机推广
    $hot = $hots -> where($strRank) -> select();
    $hotRand = mt_rand(1,count($hot)-6).',6';
    $hotRands = $hots -> where($strRank) -> limit($hotRand) -> select();
    $arr = array();
    foreach ($hotRands as $k) {
        $goodsid['goodsid'] = $k['id'];
        // $arr[]['reduction'] = number_format($k['discount']/$k['price']*10,1);
        $goodsinfo = $hotsInfo -> where($goodsid) -> find();
        $arr[]['picname'] = array_shift(explode(',', $goodsinfo['picname']));
    }
    for($i=0;$i<count($hotRands);$i++){
        $hotRands[$i]['cid'] = $i;
        $hotRands[$i]['picname'] = $arr[$i]['picname'];
        // $hotRands[$i]['ction'] = $arr[$i]['reduction'];
    }
    $this -> assign('woman',$hotRands);


   //童鞋
    $hots = M('goods'); 
    $pid = M('goodstype');
    $hotsInfo = M('goodsinfo');
    $result = $pid -> where('pid = 16') -> select(); //一级id
    $hotsArr = array();
    foreach ($result as $key) {
      $hotsArr[] = $key['id'];
    }
    $strHots = 'pid = '.implode(' or pid = ', $hotsArr); //二级id
    $res = $pid -> where($strHots) -> select();
    $rankArr = array();
    foreach ($res as $key){             
      $rankArr[] = $key['id'];
    } 
    $strRank = 'typeid = '.implode(' or typeid = ', $rankArr); //三级id
    //随机推广
    $hot = $hots -> where($strRank) -> select();
    $hotRand = mt_rand(1,count($hot)-6).',6';
    $hotRands = $hots -> where($strRank) -> limit($hotRand) -> select();
    $arr = array();
    foreach ($hotRands as $k) {
        $goodsid['goodsid'] = $k['id'];
        // $arr[]['reduction'] = number_format($k['discount']/$k['price']*10,1);
        $goodsinfo = $hotsInfo -> where($goodsid) -> find();
        $arr[]['picname'] = array_shift(explode(',', $goodsinfo['picname']));
    }
    for($i=0;$i<count($hotRands);$i++){
        $hotRands[$i]['cid'] = $i;
        $hotRands[$i]['picname'] = $arr[$i]['picname'];
        // $hotRands[$i]['ction'] = $arr[$i]['reduction'];
    }
    $this -> assign('shoes',$hotRands);
  }
  /*更多*/
  protected function event(){
    // 时尚运动
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 22') -> limit(6) -> select();
    $this -> assign('move',$result);    

    // 流行男装
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 13') -> limit(6) -> select();
    $this -> assign('ln',$result);
    
    // 潮流女鞋
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 12') -> limit(6) -> select();
    $this -> assign('lv',$result);

    // 童鞋童装
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 16 or pid = 17') -> limit(6) -> select();
    $this -> assign('tx',$result);

    // 童鞋童装
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 15') -> limit(6) -> select();
    $this -> assign('mv',$result);

    // 户外休闲
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 23') -> limit(6) -> select();
    $this -> assign('hx',$result);

    // 精品男装
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 14') -> limit(6) -> select();
    $this -> assign('jz',$result);

    // 高档箱包
    $goodsType = M('goodstype');
    $result = $goodsType -> where('pid = 20') -> limit(6) -> select();
    $this -> assign('db',$result);

  }
  public function news(){
    $news = M('news');
    $row = $news -> field('id,title') -> order('addtime DESC') -> limit(6) -> select();
    $this -> assign('news',$row);
  }

}