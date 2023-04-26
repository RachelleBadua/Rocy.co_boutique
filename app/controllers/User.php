<?php
namespace app\controllers;

class User extends \app\core\Controller{
    function index(){
		$this->view('User/index');
	}

	
}