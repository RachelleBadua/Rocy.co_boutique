<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	function index(){
		$this->view('Main/index');
	}

	function about_us(){
		$this->view('Main/about_us');
	}

}