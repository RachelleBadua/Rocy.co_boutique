<?php
namespace app\controllers;

class AdminCustomer extends \app\core\Controller{

	public function index(){
		$customer = new \app\models\Profile();
		$customers = $customer->getAll();
		$this->view('AdminCustomer/index', $customers);
	}

	public function customerDetails($user_id){
		$customer = new \app\models\Profile();
		$customer = $customer->getAllByUserId($user_id);
		$this->view('AdminCustomer/customerDetails', $customer);
	}
}