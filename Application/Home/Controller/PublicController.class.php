<?php 
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller{
	public function lists(){
		$this -> leftnav();
		$this -> topnav();
		$this -> display();
    $this -> guide(); // 导购
    $this -> event();  //更多
	}

   public function cofine(){ 
      if (empty($_SESSION['buyUser'])) {
         echo "<script>alert('你还未登录');location.href='/Login'</script>";
      }
   }

  public function guide(){
    // 导购
      $guide = M('saleuser');
      $result = $guide -> where('state = 1') -> order('id desc') -> select();
      $this -> assign('guide',$result); 
  }
  public function event(){
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

	public function leftnav(){
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
   		$this -> assign('man',$man);

   		$pids = 'pid = '.implode(' or pid = ',$womanArr); //3级男鞋
   		$woman = $men -> where($pids) -> limit(20) -> select();
   		$this -> assign('woman',$woman); //	导航男鞋/女鞋 End

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

	public function topnav(){
		// 头部导航
		$top = M('goodstype');
		$result = $top -> where('pid = 0') -> select();
		$this -> assign('topnav',$result); 
	}

}

?>