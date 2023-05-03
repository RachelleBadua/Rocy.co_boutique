<?php
namespace app\models;

use PDO;

class OrderDetail extends \app\core\Model{
    // public $order_id;
    // public $product;
    public $deatil_id;
    public $order_id;
    public $product_id;
    public $unit_price;
    public $quantity;

    public function insert(){
        if ($this->isProductInCart()) {
            $this->updateQuantity();
            return;
        }
		$SQL = "INSERT INTO detail (order_id, product_id, unit_price, quantity) 
                value (:order_id, :product_id, :unit_price, :quantity)";
		$STH = self::$connection->prepare($SQL);
		$data = [
                'order_id'=>$this->order_id,
                'product_id'=>$this->product->product_id,
                'unit_price'=>$this->product->sellingPrice,
                'quantity'=>1,
                ];
		$STH->execute($data);
	}

    //increase by 1
    public function updateQuantity() {
        $SQL = "SELECT quantity FROM  detail 
                WHERE product_id=:product_id AND order_id=:order_id";
        $STH = self::$connection->prepare($SQL);
        $data = [
            'order_id'=>$this->order_id,
            'product_id'=>$this->product->product_id
        ];
        $STH->execute($data);
        $currentQuantity = $STH->fetch(PDO::FETCH_COLUMN);

        $SQL = "UPDATE detail 
                SET quantity = :quantity
                WHERE product_id=:product_id AND order_id=:order_id";
        $data = [
            'quantity'=>$currentQuantity + 1,
            'order_id'=>$this->order_id,
            'product_id'=>$this->product->product_id
        ];
		$STH = self::$connection->prepare($SQL);
		$STH->execute($data);
    }

    public function isProductInCart() {
        $SQL = "SELECT * FROM  detail 
                WHERE product_id=:product_id AND order_id=:order_id";
        $STH = self::$connection->prepare($SQL);
        $data = [
            'order_id'=>$this->order_id,
            'product_id'=>$this->product->product_id,
        ];
        $STH->execute($data);
        return $STH->rowCount() > 0;
    }

    public function delete($product_id) {

    }


}