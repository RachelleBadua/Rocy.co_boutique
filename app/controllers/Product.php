<?php
namespace app\controllers;

class Product extends \app\core\Controller{
    function index() {
		$products = new \app\models\Product();
		$products = $products->getAllOrderByCategory();
		$this->view('Product/index', $products);	
	}

	function search() {
		$product_name = htmlentities($_GET['value']);
		$products = new \app\models\Product();
		$products = $products->getAllMatchName(htmlentities($product_name) == '\'' ? htmlentities("\\$product_name") : htmlentities($product_name));
		$this->view('Product/index', $products);
	}

	function productDetail($product_id) {
		$products = new \app\models\Product();
		$products = $products->getProduct(htmlentities($product_id));

		$this->view('Product/product_detail', $products);
	}
}