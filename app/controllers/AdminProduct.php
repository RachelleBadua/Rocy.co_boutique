<?php
namespace app\controllers;

class AdminProduct extends \app\core\Controller{

	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('AdminProduct/index', $products);
	}
}