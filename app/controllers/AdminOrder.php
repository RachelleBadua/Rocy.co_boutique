<?php
namespace app\controllers;

class AdminOrder extends \app\core\Controller{

	public function index(){
		$order = new \app\models\Order();
		$orders = $order->getAllAdminOrders();
		$this->view('AdminOrder/index');
	}

	public function orderDetails(){
		
	}

	public function edit(){

	}
}