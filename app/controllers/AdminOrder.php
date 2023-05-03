<?php
namespace app\controllers;

class AdminOrder extends \app\core\Controller{

	public function index(){
		$order = new \app\models\Order();
		$orders = $order->getAllAdminOrders();
		$this->view('AdminOrder/index', $orders);
	}

	public function orderDetails($order_id){
		// $order = new \app\models\Order();
		// $order = $order->getOrderByUser($user_id);
		// 

		$detail = new \app\models\OrderDetail();
		$details = $detail->getProductsByOrderId($order_id); 

		$data = ['order'=>$order, 'products'=>$details];
		$this->view('AdminOrder/orderDetails', $data);
	}

	public function edit(){

	}
}