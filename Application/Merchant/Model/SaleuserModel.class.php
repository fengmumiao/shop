<?php
	namespace Merchant\Model;
	use Think\Model;
	class SaleuserModel extends Model{
		  
		
		 protected $_validate = array(     
		 	// array('verify','require','验证码必须！'),  // 都有时间都验证     
		 	array('username','checkName','帐号错误！',1,'function',4),  // 只在登录时候验证     
		 	array('password','password','密码错误！',1,'function',4), // 只在登录时候验证   
		 	);


	
	}