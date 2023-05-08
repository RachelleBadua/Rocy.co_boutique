<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	function index(){
		$products = new \app\models\Product();
		$products = $products->getAllDesc();
		$this->view('Main/index', $products);
	}

	function about_us(){
		$this->view('Main/about_us');
	}

}