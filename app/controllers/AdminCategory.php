<?php
namespace app\controllers;

class AdminCategory extends \app\core\Controller{
	public function index(){
		$category = new \app\models\Category();
		$categories = $category->getAll();
		$this->view('AdminCategory/index', $categories);
	} 
}