<?php
namespace app\models;

use PDO;

class Order extends \app\core\Model{
	public $order_id;
	public $user_id;
	public $status;
	public $total_price;
	public $isDelivery;

	public function insert(){
		$SQL = "INSERT INTO `order` (user_id, status, total_price) 
                value (:user_id, :status, :total_price)";
		$STH = self::$connection->prepare($SQL);
		$data = [
                'user_id'=>$this->user_id,
                'status'=>'cart',
                'total_price'=>0,
                ];
		$STH->execute($data);
	}

	public function update(){
		$SQL = "UPDATE `order`
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
		$SQL = "DELETE FROM `order` WHERE order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['order_id'=>$order_id];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function placeOrder() {
		$SQL = "UPDATE `order` 
				SET status=:status, 
					order_date=CURRENT_TIMESTAMP(),
					isDelivery=:isDelivery
				WHERE order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$data=['status'=>'ordered',
				'isDelivery'=>$this->isDelivery,
				'order_id'=>$this->order_id
		];
		$STH->execute($data);
		return $STH->rowCount() > 0;
	}

	public function getAll(){
		$SQL = "SELECT * FROM `order`";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Order');
		return $STH->fetchAll();
	}

	public function isCurrentOrderExist()  {
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id AND status=:status";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$this->user_id, 'status'=>'cart']);
		return $STH->rowCount() > 0;
	}

	public function getOrderId() {
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id AND status=:status";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$this->user_id, 'status'=>'cart']);
		return $STH->fetch(PDO::FETCH_COLUMN);
	}

	public function getAllOrders($user_id){
		$SQL = "SELECT * FROM `order` o JOIN user u 
				ON o.user_id = u.user_id
				JOIN profile p
				ON u.user_id = p.user_id
				WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id]);
		$STH->setFetchMode(\PDO::FETCH_OBJ);
		return $STH->fetchAll();
	}

	public function getOrderByUser($user_id, $order_id){
		$SQL = "SELECT * FROM `order` o JOIN user u 
				ON o.user_id = u.user_id
				JOIN profile p
				ON u.user_id = p.user_id
				WHERE o.user_id=:user_id AND o.order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id, 'order_id'=>$order_id]);
		$STH->setFetchMode(\PDO::FETCH_OBJ);
		return $STH->fetchAll();
	}

	public function getAllAdminOrders(){
		$SQL = "SELECT * FROM `order` o JOIN user u 
				ON o.user_id = u.user_id
				JOIN profile p
				ON u.user_id = p.user_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_OBJ);
		return $STH->fetchAll();
	}

	public function getUserByOrderId($order_id){
		$SQL = "SELECT * FROM `order` WHERE order_id=:order_id";
		$STH = self::$connection->prepare($SQL);
		$data = ['order_id'=>$order_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Order');
		return $STH->fetch();
	}

	public function getCartByUser() {
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id AND status = 'cart'";
		$STH = self::$connection->prepare($SQL);
		$data = ['user_id'=>$this->user_id];
		$STH->execute($data);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Order');
		return $STH->fetch();
	}

}