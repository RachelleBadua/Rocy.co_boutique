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

			$category2 = new \app\models\Category();
			$category2->getCategory(1);
			$data = ['categories'=>$categories, 'editCategory'=>$category2];
			$this->view('AdminCategory/index', $data);
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

	public function edit($category_id){
		$category = new \app\models\Category();
		$categories = $category->getAll();

		$category2 = new \app\models\Category();
		$category2->getCategory($category_id);
		$data = ['categories'=>$categories, 'editCategory'=>$category2];
		$this->view('AdminCategory/index', $data);

	}
}