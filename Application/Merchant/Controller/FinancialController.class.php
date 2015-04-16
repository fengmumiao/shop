<?php
	namespace Merchant\Controller;
	use Think\Controller;
	class FinancialController extends Controller{
		//账户余额
		public function remainMoney(){
			$this->display();
		}
		//银行账户
		public function bankAcount(){
			$this->display();
		}
		//提现申请
		public function withdrowApplication(){
			$this->display();
		}
		//财务明细
		public function financialDetail(){
			$this->display();
		}
	}
?>