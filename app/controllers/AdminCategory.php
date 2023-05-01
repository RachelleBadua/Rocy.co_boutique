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
			$this->view('AdminCategory/index', $categories);
		}
	} 

	public function delete($category_id){
		$category = new \app\models\Category();
		$success = $category->delete($category_id);
		if ($success){
			header('location:/AdminCategory/index?success=Category deleted');
		} else {
			header('location:/AdminCategory/index?error=Something went wrong');
		}
	}
}