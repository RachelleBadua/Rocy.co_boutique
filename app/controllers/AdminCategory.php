<?php
namespace app\controllers;

class AdminCategory extends \app\core\Controller{
	public function index(){
		if(isset($_POST['addAction'])){
			$category = new \app\models\Category();

			$category->category = htmlentities($_POST['category']);
			$success = $category->insert();
			header('location:/AdminCategory/index');
		} else {
			$category = new \app\models\Category();
			$categories = $category->getAll();

			// $default = 2;
			$editCategory = new \app\models\Category();
			$editCategory->getCategory(1);
			$data = ['categories'=>$categories, 'editCategory'=>$editCategory];
			$this->view('AdminCategory/index', $data);
		}
	} 

	public function delete($category_id){
		$product = new \app\models\Product();
		$products = $product->getProductsByCategory($category_id);
		if (empty($products)){
			$category = new \app\models\Category();
			$success = $category->delete($category_id);
			if ($success){
				header('location:/AdminCategory/index?success=Category deleted');
			} else {
				header('location:/AdminCategory/index?error=Something went wrong');
			}
		} else {
			header('location:/AdminCategory/index?error=There are products with this category');
		}
	}

	public function edit($category_id){
		$category = new \app\models\Category();
		$categories = $category->getAll();

		$editCategory = new \app\models\Category();
		$editCategory->getCategory($category_id);
		$data = ['categories'=>$categories, 'editCategory'=>$editCategory];
		$this->view('AdminCategory/index', $data);
		// header('location:/AdminCategory/index');

	}

	
}