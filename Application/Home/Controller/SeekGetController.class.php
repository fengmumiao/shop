<?php 
namespace Home\Controller;
use Think\Controller;
/** 
 * @name   	  	智能搜索提示功能(转换数据)
 * @return 	  	Array($_GET)  
 * @version   	2014-11-13
 * @copyright	sh工作室
 */
class SeekGetController extends Controller
{
	public function index(){
		if (!empty($_POST['keyword'])) {
			$goodsType = M('goodstype');
			$typeName['name'] = $_POST['keyword'];
			$result = $goodsType -> where($typeName) -> find();
			// 判断结果集一级分类
			if ($result['path'] == 1) {   
				Echo '<script>location.href = "/index.php/Lists/index/zid/'.$result['id'].'"</script>';
			}else if ($result['path'] == 2) {
				Echo '<script>location.href = "/index.php/Lists/index/pid/'.$result['id'].'"</script>';
			}else if ($result['path'] == 3) {
				Echo '<script>location.href = "/index.php/Lists/index/ids/'.$result['id'].'"</script>';
			}else{
				Echo '<script>location.href = "/index.php/Lists/"</script>';
			}
		}else{
			Echo '<script>location.href = "/index.php"</script>';
		}
	}
}

?>