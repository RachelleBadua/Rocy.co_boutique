<?php
namespace app\filters;

#[\Attribute]
class Customer implements \app\core\AccessFilter{
	public function execute(){
        if($_SESSION['roleType'] != 'customer'){
			header('location:/MainAdmin/index');
		 	return true;
		}
		return false;
	}
}