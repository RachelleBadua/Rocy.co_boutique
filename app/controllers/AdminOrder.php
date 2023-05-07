<?php
namespace app\controllers;

class AdminOrder extends \app\core\Controller{

	public function index(){
		$order = new \app\models\Order();
		$orders = $order->getAllAdminOrders();
		$this->view('AdminOrder/index', $orders);
	}

	public function orderDetails($order_id){
		$order = new \app\models\Order();
		$order = $order->getUserByOrderId($order_id);
		$user_id = $order->user_id;

		$clientInfo = new \app\models\Order();
		$clientInfo = $clientInfo->getOrderByUser($user_id, $order_id);

		$detail = new \app\models\OrderDetail();
		$details = $detail->getProductsByOrderId($order_id); 

		$data = ['clientInfo'=>$clientInfo, 'products'=>$details];
		$this->view('AdminOrder/orderDetails', $data);
	}

	// public function edit($order_id){
	// 	$order = new \app\models\Order();
	// 	$order = $order->getUserByOrderId($order_id);
	// 	$order
	// }
}