<?php
namespace app\controllers;

class MyAccount extends \app\core\Controller{
    function index(){
		$this->view('MyAccount/index');
	}
}