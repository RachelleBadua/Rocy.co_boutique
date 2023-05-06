<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
    function index(){
		$cart = new \app\models\Order();
		$cart->user_id = $_SESSION['user_id'];
		$cart = $cart->getCartByUser();

		$detail = new \app\models\OrderDetail();
		$detail = $detail->getProductsByOrderId($cart->order_id);

		$address = new \app\models\Profile();
		$address->user_id = $_SESSION['user_id'];
		$address = $address->getAddress();

		$data = ['cart'=>$cart, 'detail'=>$detail, 'address'=>$address];

		$this->view('Cart/index', $data);
	}

    function addToCart($product_id) {
		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];

		if (!$order->isCurrentOrderExist()){
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