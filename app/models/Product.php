<?php
namespace app\models;

class Product extends \app\core\Model{
	public $product_id;
	public $category_id;
	public $product_name;
	public $image;
	public $sellingPrice;
	public $description;
	public $quantity;

	public function insert(){
		$SQL = "INSERT INTO product (category_id, product_name, image, sellingPrice, description, quantity) 
                value (:category_id, :product_name, :image, :sellingPrice, :description, :quantity)";
		$STH = self::$connection->prepare($SQL);
		$data = [
                'category_id'=>$this->category_id,
                'product_name'=>$this->product_name,
                'image'=>$this->image,
                'sellingPrice'=>$this->sellingPrice,
                'description'=>$this->description,
                'quantity'=>$this->quantity
                ];
		$STH->execute($data);
		$this->client_id = self::$connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE product 
                SET category_id=:category_id, product_name=:product_name, image=:image, sellingPrice=:sellingPrice, description=:description, quantity=:quantity
                WHERE product_id=:product_id";
		$STH = self::$connection->prepare($SQL);
		$data = [
            'category_id'=>$this->category_id,
            'product_name'=>$this->product_name,
            'image'=>$this->image,
            'sellingPrice'=>$this->sellingPrice,
            'description'=>$this->description,
            'quantity'=>$this->quantity,
            'product_id'=>$this->product_id
            ];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function delete($product_id){
		$SQL = "DELETE FROM product WHERE product_id=:product_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['product_id'=>$product_id];
		$STH->execute($data);
	}


	public function getAll(){
		$SQL = "SELECT * FROM product";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function get($product_id){
		$SQL = 'SELECT * FROM product WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$data = ['product_id'=>$product_id];
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetch();
	}

	public function getProductCategory(){
		$SQL = 'SELECT * FROM product JOIN category ON product.category_id = category.category_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();		
	}

}