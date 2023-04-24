<?php
namespace app\controllers;

class Product extends \app\core\Controller{
    function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('Product/index', $products);
	}

	
}