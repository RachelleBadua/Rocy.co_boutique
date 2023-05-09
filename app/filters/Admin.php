<?php
namespace app\filters;

#[\Attribute]
class Admin implements \app\core\AccessFilter{
	public function execute(){
        if($_SESSION['roleType'] != 'admin'){
			header('location:/Main/index');
			return true; //not enough, we have to tell the router to do something
	   }
	   return false;
	}
}