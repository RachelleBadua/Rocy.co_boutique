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

	public function edit(){
		// if(isset($_POST['editAction'])){
			$category = new \app\models\Category();
			$category->category_id = htmlentities($_POST['categoryId']);
			$category->category = htmlentities($_POST['categoryName']);

			$success = $category->update();
			if ($success) {
				header('location:/AdminCategory/index?success=Succesfully updated');
			} else {
				header('location:/AdminCategory/index?success=Something went wrong');
			}

			
		// } 
		

	}
}