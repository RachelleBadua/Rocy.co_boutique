<?php
namespace app\controllers;

class AdminProduct extends \app\core\Controller{

	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('AdminProduct/index', $products);
	}

	public function create(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();

			$product->category_id = $_POST['image'];
			$product->category_id = $_POST['product_name'];
			$product->category_id = $_POST['category_id'];
			$product->category_id = $_POST['sellingPrice'];
			$product->category_id = $_POST['quantity'];
			$product->category_id = $_POST['description'];


		} else {
			$category = new \app\models\Category();
			$categories = $category->getAll();

			$this->view('AdminProduct/create', $categories);
		}
		
	}
}