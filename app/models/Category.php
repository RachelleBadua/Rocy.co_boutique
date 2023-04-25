<?php
namespace app\models;

class Category extends \app\core\Model{
	public $category_id;
	public $category;

	public function insert(){
		$SQL = "INSERT INTO category (category) 
                value (:category)";
		$STH = self::$connection->prepare($SQL);
		$data = ['category'=>$this->category];
		$STH->execute($data);
		$this->client_id = self::$connection->lastInsertId();
	}

	public function getAll(){
		$SQL = "SELECT * FROM category";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Category');
		return $STH->fetchAll(); // gets the branches from database with an array
	}
}