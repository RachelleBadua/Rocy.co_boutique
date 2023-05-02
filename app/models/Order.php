<?php
namespace app\models;

class Order extends \app\core\Model{
	public $order_id;
	public $user_id;
	public $order_date;
	public $status;
	public $total_price;

	public function insert(){
		$SQL = "INSERT INTO order (user_id, order_date, status, total_price) 
                value (:user_id, :order_date, :status, total_price)";
		$STH = self::$connection->prepare($SQL);
		$data = [
                'user_id'=>$this->product_name,
                'order_date'=>$this->image,
                'status'=>$this->sellingPrice,
                'total_price'=>$this->description,
                ];
		$STH->execute($data);
		// $this->client_id = self::$connection->lastInsertId();
	}

	public function update(){
		$SQL = "UPDATE order 
                SET user_id=:user_id, order_date=:order_date, status=:status, total_price=:total_price WHERE order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$data = [
                'user_id'=>$this->product_name,
                'order_date'=>$this->image,
                'status'=>$this->sellingPrice,
                'total_price'=>$this->description,
            	];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function delete($order_id){
		$SQL = "DELETE FROM order WHERE order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['order_id'=>$order_id];
		$STH->execute($data);
		return $STH->rowCount();
	}


	public function getAll(){
		$SQL = "SELECT * FROM order";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Order');
		return $STH->fetchAll();
	}
}