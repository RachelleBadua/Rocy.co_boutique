<?php
namespace app\controllers;

class AdminOrder extends \app\core\Controller{

	public function index(){
		$this->view('AdminOrder/index');
	}
}