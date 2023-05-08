<?php
namespace app\models;

class Profile extends \app\core\Model{
	public $user_id;
	public $subscription;
	public $name;
	public $phoneNo;
	public $address;
	public $city;
	public $province;
	public $postal;

	public function getByUserId($user_id){
		$SQL = 'SELECT * FROM profile WHERE user_id = :user_id';
		$STH = self::$connection->prepare($SQL);

		$STH->execute(['user_id'=>$user_id]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO profile (user_id, subscription, name, phoneNo, address, city, province, postal) VALUE (:user_id, :subscription, :name, :phoneNo, :address, :city, :province, :postal)";
		$STH = self::$connection->prepare($SQL);
		$data = [
			'user_id'=>$this->user_id,
			'subscription'=>$this->subscription,
			'name'=>$this->name,
			'phoneNo'=>$this->phoneNo,
			'address'=>$this->address,
			'city'=>$this->city,
			'province'=>$this->province,
			'postal'=>$this->postal,
		];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function update(){
		$SQL = "UPDATE profile SET subscription=:subscription, name=:name, phoneNo=:phoneNo, address=:address, city=:city, province=:province, postal=:postal WHERE product_id=:product_id";
		$STH = self::$connection->prepare($SQL);
		$data =[
			'subscription'=>$this->subscription,
			'name'=>$this->name,
			'phoneNo'=>$this->phoneNo,
			'address'=>$this->address,
			'city'=>$this->city,
			'province'=>$this->province,
			'postal'=>$this->postal,
		];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function getAll(){
		$SQL = "SELECT * FROM profile JOIN user ON profile.user_id = user.user_id ORDER BY user.user_id";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
		return $STH->fetchAll();
	}

	public function getAllByUserId($user_id){
		$SQL = 'SELECT * FROM profile JOIN user ON profile.user_id = user.user_id WHERE profile.user_id = :user_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$user_id]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Profile');
		return $STH->fetch();
	}

	public function getShippingInfo() {
		$SQL = 'SELECT phoneNo, `address`, city, province, postal FROM profile WHERE user_id = :user_id';
		$STH = self::$connection->prepare($SQL);
		$STH->execute(['user_id'=>$this->user_id]);
		$STH->setFetchMode(\PDO::FETCH_OBJ);
		return $STH->fetch();
	}

	public function updateName() {
		$SQL = "UPDATE profile
				SET name=:name
				WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$data =[
			'name'=>$this->name,
			'user_id'=>$this->user_id,
		];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function updatePhone() {
		$SQL = "UPDATE profile
				SET phoneNo=:phoneNo
				WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$data =[
			'phoneNo'=>$this->phoneNo,
			'user_id'=>$this->user_id,
		];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function updateAddress() {
		$SQL = "UPDATE profile
				SET `address`=:address,
					city=:city,
					province=:province,
					postal=:postal
				WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$data =[
			'address'=>$this->address,
			'city'=>$this->city,
			'province'=>$this->province,
			'postal'=>$this->postal,
			'user_id'=>$this->user_id,
		];
		$STH->execute($data);
		return $STH->rowCount();
	}
}