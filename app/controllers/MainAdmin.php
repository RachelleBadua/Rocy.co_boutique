<?php
namespace app\controllers;

class MainAdmin extends \app\core\Controller{

	public function index(){
		$this->view('MainAdmin/index');
	}
}