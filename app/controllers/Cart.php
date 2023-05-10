<?php
namespace app\controllers;

class Cart extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Customer]
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

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function checkCartExist() {
		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];

		if (!$order->isCurrentOrderExist()){
			$order->insert();
		}
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
    function addToCart() {
		$this->checkCartExist();

		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];
		$order_id = $order->getOrderId();

		$product = new \app\models\Product();
		$product = $product->getProduct($_POST['product_id']);

		$detail = new \app\models\OrderDetail();
		$detail->order_id = $order_id;
		$detail->product = $product;

		if (!$detail->isProductInCart()) {
			$detail->insert();
			echo 1;
		} else
		echo 0;
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function delete($product_id) {
		$order = new \app\models\Order();
		$order->user_id = $_SESSION['user_id'];
		$order_id = $order->getOrderId();

		$detail = new \app\models\OrderDetail();
		$detail->order_id = $order_id;
		$detail->delete(htmlentities($product_id));

		header('location:/Cart/index?error=Items Removed');
	}

	#[\app\filters\Login]
	#[\app\filters\Customer]
	function placeOrder() {
		$order = new \app\models\Order();
		$detail = new \app\models\OrderDetail();		
		
		foreach ($_POST['qty'] as $e) {
			$detail->order_id = $_POST['order_id'];
			$detail->product_id = $e['product_id'];
			$detail->getByProductId();
			$detail->quantity = $e['qty'];
			$detail->updateQuantity();
		}

		if (!$detail){
			echo 0;
			return;
		}

		$order->order_id = htmlentities($_POST['order_id']);
		$order->isDelivery = (bool)htmlentities($_POST['isDelivery']);
		$order->updateTotalPrice();

		$order->placeOrder();
		echo 1;
	}
}