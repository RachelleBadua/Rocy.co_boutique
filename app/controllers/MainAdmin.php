<?php
namespace app\controllers;

class MainAdmin extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Admin]
	public function index(){
		$this->view('MainAdmin/index');
	}
}