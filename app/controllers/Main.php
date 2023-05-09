<?php
namespace app\controllers;

class Main extends \app\core\Controller{

	function index(){
		$products = new \app\models\Product();
		$products = $products->getAllDesc();
		$this->view('Main/index', $products);
	}

	#[\app\filters\Admin]
	function about_us(){
		$aboutUsObj = new \app\models\AboutUs();
		$aboutUsObj = $aboutUsObj->getAboutUs();
		$this->view('Main/about_us', $aboutUsObj);
	}

}