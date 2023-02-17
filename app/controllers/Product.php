<?php
namespace app\controllers;

class Product extends \app\core\Controller{
    function index(){
		$this->view('Product/index');
	}
}