<?php
namespace app\controllers;

class Product extends \app\core\Controller{
    function index(){
		if (isset($_GET['search'])) {
			header('location:/Product/search/' . $_GET['search']);
//			$this->view('Product/index', $this->search($_GET['search']));
		} else {
			$products = new \app\models\Product();
			$products = $products->getAllOrderByCategory();
			$this->view('Product/index', $products);	
		}
	}

	function search($product_name) {
		$products = new \app\models\Product();
		$products = $products->getAllMatchName($product_name);
//		return $products;
		$this->view('Product/index', $products);
	}
}