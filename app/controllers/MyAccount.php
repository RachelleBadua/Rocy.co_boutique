<?php
namespace app\controllers;

class MyAccount extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Customer]
    function index(){
		$this->view('MyAccount/index');
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function myOrders() {
		$order = new \app\models\Order();
		$order = $order->getAllOrdersByUser($_SESSION['user_id']);
		$this->view('MyAccount/my_order', $order);
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function profileSecurity() {
		$user = new \app\models\User();
		$user->user_id = $_SESSION['user_id'];
		$user = $user->getByUserId();

		$profile = new \app\models\Profile();
		$profile = $profile->getByUserId($_SESSION['user_id']);

		$this->view('MyAccount/profile_security', ['user'=>$user,'profile'=>$profile]);
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function shipAddress() {
		$address = new \app\models\Profile();
		$address->user_id = $_SESSION['user_id'];
		$address = $address->getShippingInfo();
		$this->view('MyAccount/shipping_address', $address);
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function updateAddress() {
		$address = new \app\models\Profile();
		$address->getByUserId($_SESSION['user_id']);
		$address->user_id = $_SESSION['user_id'];

		if (!empty($_POST['address'])) {
			$address->address = htmlentities($_POST['address']);
		}
		if (!empty($_POST['city'])) {
			$address->city = htmlentities($_POST['city']);
		}
		if (!empty($_POST['province'])) {
			$address->province = htmlentities($_POST['province']);
		}
		if (!empty($_POST['postal'])) {
			$address->postal = htmlentities($_POST['postal']);
		}

		$address->updateAddress();
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function orderDetail($order_id) {
		$order = new \app\models\Order();
		$order = $order->getByOrderId($order_id);

		$detail = new \app\models\OrderDetail();
		$detail = $detail->getProductsByOrderId($order_id);

		$this->view('MyAccount/orderDetail', ['order'=>$order, 'detail'=>$detail]);
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
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
			$user->password = password_hash(htmlentities($_POST['password']), PASSWORD_DEFAULT);
			$user->updatePassword();
		}
	}
}