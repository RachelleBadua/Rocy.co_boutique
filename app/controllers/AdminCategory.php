<?php
namespace app\controllers;

class AdminCategory extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Admin]
	public function index(){
		if(isset($_POST['addAction'])){
			if($_POST['category'] != '' && $_POST['category'] != null) {
				$category = new \app\models\Category();

				$category->category = htmlentities($_POST['category']);
				$success = $category->insert();
				header('location:/AdminCategory/index');
			} else {
				header('location:/AdminCategory/index?error=Fill up the criteria');
			}
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
	
	#[\app\filters\Login]
	#[\app\filters\Admin]
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

	#[\app\filters\Login]
	#[\app\filters\Admin]
	public function edit(){
		if($_POST['categoryName'] != '' && $_POST['categoryName'] != null) {
			$category = new \app\models\Category();
			$category->category_id = htmlentities($_POST['categoryId']);
			$category->category = htmlentities($_POST['categoryName']);

			$success = $category->update();
			if ($success) {
				header('location:/AdminCategory/index?success=Succesfully updated');
			} else {
				header('location:/AdminCategory/index?error=Something went wrong');
			}
		} else {
			header('location:/AdminCategory/index?error=Enter criteria');
		}
	}
}