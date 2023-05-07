<?php
namespace app\controllers;

class MyAccount extends \app\core\Controller{
    function index(){
		$this->view('MyAccount/index');
	}

	function myOrders() {
		$order = new \app\models\Order();
		$order = $order->getAllOrdersByUser($_SESSION['user_id']);
		$this->view('MyAccount/my_order', $order);
	}

	function profileSecurity() {
		$this->view('MyAccount/profile_security');
	}

	function shipAddress() {
		$this->view('MyAccount/shipping_address');
	}

	function orderDetail($order_id) {
		$order = new \app\models\Order();
		$order = $order->getAllOrdersByUser($_SESSION['user_id']);
		$this->view('MyAccount/my_order', $order);
	}
}