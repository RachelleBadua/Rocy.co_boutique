<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
    function index(){
		$this->checkCartExist();

		$cart = new \app\models\Order();
		$cart->user_id = $_SESSION['user_id'];
		$cart = $cart->getCartByUser();

		$detail = new \app\models\OrderDetail();
		$detail = $detail->getProductsByOrderId($cart->order_id);

		$address = new \app\models\Profile();
		$address->user_id = $_SESSION['user_id'];
		$address = $address->getShippingInfo();

		$data = ['cart'=>$cart, 'detail'=>$detail, 'address'=>$address];

		$this->view('Cart/index', $data);
	}

	function checkCartExist() {
		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];

		if (!$order->isCurrentOrderExist()){
			$order->insert();
		}
	}

    function addToCart($product_id) {
		$this->checkCartExist();

		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];
		$order_id = $order->getOrderId($user_id);

		$product = new \app\models\Product();
		$product = $product->getProduct($product_id);

		$detail = new \app\models\OrderDetail();
		$detail->order_id = $order_id;
		$detail->product = $product;

		$detail->insert();
		$order->order_id = $order_id;
		$order->updateTotalPrice();
	}

	function delete($product_id) {
		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];
		$order_id = $order->getOrderId();

		$detail = new \app\models\OrderDetail();
		$detail->order_id = $order_id;
		$detail->delete(htmlentities($product_id));

		$order->order_id = $order_id;
		$order->updateTotalPrice();

		header('location:/Cart/index?error=Items Removed');
	}

	function placeOrder() {
		$order = new \app\models\Order();
		$order->order_id = htmlentities($_GET['order_id']);
		$order->isDelivery = (bool)htmlentities($_GET['isDelivery']);

		$order->placeOrder();
	}
}