<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
    function index(){
		$this->view('Cart/index');
	}

    function addToCart($product_id) {
		$order = new \app\models\Order();
		$user_id = $_SESSION['user_id'];
		if (!$order->isCurrentOrderExist($user_id)){
			$order->user_id = $user_id;
			$order->insert();
		}
		
		$product = new \app\models\Product();
		$product = $product->getProduct($product_id);

		$detail = new \app\models\OrderDetail();
		$detail->order_id = $order->getOrderId($user_id);
		$detail->product = $product;

		return $detail->insert();
	}

	
}