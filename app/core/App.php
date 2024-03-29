<?php
namespace app\core;

class App{

	function __construct(){
		//this is where we want to route the requests to the appropriate classes/methods
		// we wish to route requests to /controller/method
		$request = $this->parseUrl($_GET['url'] ?? '');
//		var_dump($request);

		//default controller and method
		$controller = 'Main';
		$method = 'index';
		$params = [];

		//is the requested controller in our controllers folder?
		if(file_exists('app/controllers/' . $request[0] . '.php'))
		{
			$controller = $request[0];
			//$controller = new Main();
			//remove the $request[0] element
			unset($request[0]);
		}
		$controller = 'app\\controllers\\' . $controller;
		$controller = new $controller;

		if(isset($request[1]) && method_exists($controller, $request[1])){
			$method = $request[1];
			//remove the $request[1] element
			unset($request[1]);
		}

		$params = array_values($request);

		if($this->filter($controller, $method, $params))
			return; 

		//Call the controller method with parameters
		call_user_func_array([$controller, $method], $params);
	}

	public function filter($controller, $method, $params){
		// we want to read the class and method attributes
		// build the reflection object to read the methods, properties, attruibutes
		$reflection = new \ReflectionObject($controller);
		$classAttributes = $reflection->getAttributes(
			\app\core\AccessFilter::class, // base class
			\ReflectionAttribute::IS_INSTANCEOF // checking if it is an instance
		);
		$methodAttributes = $reflection->getMethod($method)->getAttributes(
			\app\core\AccessFilter::class,
			\ReflectionAttribute::IS_INSTANCEOF
		);
		$attributes = array_values(array_merge($classAttributes, $methodAttributes)); // putting all attributes in one single list
		// run through all the conditions
		foreach ($attributes as $attribute) {
			// for an attribute, get the class instance (object)
		 	// take the attiribute and the take the instance of a class and then use it
			$filter = $attribute->newInstance();
			if($filter->execute())
				return true;
		}
		return false; 
	}

	function parseUrl($url){
		return explode('/', trim($url, '/'));
	}
}