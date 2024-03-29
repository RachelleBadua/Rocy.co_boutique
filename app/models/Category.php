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
		// $this->client_id = self::$connection->lastInsertId();
	}

	public function getAll(){
		$SQL = "SELECT * FROM category";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Category');
		return $STH->fetchAll(); // gets the branches from database with an array
	}

	public function delete($category_id){
		$SQL = "DELETE FROM category WHERE category_id=:category_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['category_id'=>$category_id];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function update(){
		$SQL = "UPDATE category 
                SET category=:category
                WHERE category_id=:category_id";
		$STH = self::$connection->prepare($SQL);
		$data = [
			'category'=>$this->category,
            'category_id'=>$this->category_id
            ];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function getCategory($category_id){
		$SQL = 'SELECT * FROM category WHERE category_id=:category_id';
		$STH = self::$connection->prepare($SQL);
		$data = ['category_id'=>$category_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Category');
		return $STH->fetch();
	}

	
}