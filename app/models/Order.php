<?php
namespace app\models;

use PDO;

class Order extends \app\core\Model{
	public $order_id;
	public $user_id;
	public $status;
	public $total_price;

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

	public function updateStatus() {
		
	}

	public function getAll(){
		$SQL = "SELECT * FROM `order`";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Order');
		return $STH->fetchAll();
	}

	public function isCurrentOrderExist($user_id)  {
		//user_id should be $_SESSION['user_id'], however, for now, testing so set to 1
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id AND status=:status";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id, 'status'=>'cart']);
		return $STH->rowCount() > 0;
	}

	public function getOrderId($user_id) {
		//user_id should be $_SESSION['user_id'], however, for now, testing so set to 1
		$SQL = "SELECT * FROM `order` WHERE user_id=:user_id AND status=:status";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id, 'status'=>'cart']);
		return $STH->fetch(PDO::FETCH_COLUMN);
	}

	public function getOrderByUser($user_id){
		$SQL = "SELECT * FROM `order` o JOIN user u 
				ON o.user_id = u.user_id
				JOIN profile p
				ON u.user_id = p.user_id
				WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id]);
		$STH->setFetchMode(\PDO::FETCH_OBssJ);
		return $STH->fetchAll();
	}

}