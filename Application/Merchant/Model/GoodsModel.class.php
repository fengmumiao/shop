<?php
	namespace Merchant\Model;
	use Think\Model;
	class GoodsModel extends Model{
		
		 protected $_validate = array(        
		 	array('goods','','商品已存在！',2,'unique',1), // 在新增的时候验证name字段是否唯一     
		 	array('intro','(5,20)','长度为5-20！',2,'length',1),
		 	array('price','/\d/','必须为数字！',2,'regex',1),
		 	array('discount','/\d/','必须为数字！',2,'regex',1),
		 	array('content','(20,100)','长度为20-0！',2,'length',1),
		 	   
		 );


	
	}