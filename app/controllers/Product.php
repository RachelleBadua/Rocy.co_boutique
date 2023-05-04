<?php
namespace app\controllers;

class Product extends \app\core\Controller{
    function index(){
		if (isset($_GET['search']) && $_GET['search'] != null) {
			header('location:/Product/search/' . $_GET['search']);
		} else {
			$products = new \app\models\Product();
			$products = $products->getAllOrderByCategory();
			$this->view('Product/index', $products);	
		}
	}

	function search() {
		$product_name = $_GET['value'];
		$products = new \app\models\Product();
		$products = $products->getAllMatchName($product_name == '\'' ? "\\$product_name" : $product_name);
		$this->view('Product/index', $products);
	}

	function productDetail($product_id) {
		$products = new \app\models\Product();
		$products = $products->getProduct($product_id);

		$this->view('Product/product_detail', $products);
	}
}