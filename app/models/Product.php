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
		// $this->client_id = self::$connection->lastInsertId();
		return $STH->rowCount();
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
		return $STH->rowCount();
	}


	public function getAll(){
		$SQL = "SELECT * FROM product";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function getProduct($product_id){
		$SQL = 'SELECT * FROM product WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$data = ['product_id'=>$product_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetch();
	}

	public function getAllOrderByProduct(){
		$SQL = 'SELECT * FROM product JOIN category ON product.category_id = category.category_id ORDER BY product.product_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();		
	}

	public function getAllOrderByCategory(){
		$SQL = 'SELECT * FROM product JOIN category ON product.category_id = category.category_id ORDER BY product.category_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function getProductCategory($product_id){
		$SQL = 'SELECT * FROM product JOIN category ON product.category_id = category.category_id WHERE product_id=:product_id';
		$STH = self::$connection->prepare($SQL);
		$data = ['product_id'=>$product_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetch();		
	}

	public function getAllMatchName($product_name){
		$SQL = "SELECT * FROM product JOIN category ON product.category_id = category.category_id HAVING product_name LIKE '%$product_name%' ORDER BY product.category_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function getProductsByCategory($category_id) {
		$SQL = 'SELECT * FROM product WHERE category_id=:category_id';
		$STH = self::$connection->prepare($SQL);
		$data = ['category_id'=>$category_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}

	public function getAllDesc() {
		$SQL = 'SELECT * FROM `product` ORDER BY product_id DESC';
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Product');
		return $STH->fetchAll();
	}
}