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
		$user = new \app\models\User();
		$user->user_id = $_SESSION['user_id'];
		$user = $user->getByUserId();

		$profile = new \app\models\Profile();
		$profile = $profile->getByUserId($_SESSION['user_id']);

		$this->view('MyAccount/profile_security', ['user'=>$user,'profile'=>$profile]);
	}

	function shipAddress() {
		$this->view('MyAccount/shipping_address');
	}

	function orderDetail($order_id) {
		$order = new \app\models\Order();
		$order = $order->getByOrderId($order_id);

		$detail = new \app\models\OrderDetail();
		$detail = $detail->getProductsByOrderId($order_id);

		$this->view('MyAccount/orderDetail', ['order'=>$order, 'detail'=>$detail]);
	}

	function updateAccount() {
		$profile = new \app\models\Profile();
		$profile->user_id = $_SESSION['user_id'];

		if (!empty($_POST['name'])) {
			$profile->name = htmlentities($_POST['name']);
			$profile->updateName();
		}

		if (!empty($_POST['phoneNo'])) {
			$profile->phoneNo = htmlentities($_POST['phoneNo']);
			$profile->updatePhone();
		}

		if (!empty($_POST['password'])) {
			$user = new \app\models\User();
			$user->user_id = $_SESSION['user_id'];
			$user->password = htmlentities($_POST['password']);
			$user->updatePassword();
		}
	}
}