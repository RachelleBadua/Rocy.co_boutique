<?php
namespace app\models;

class User extends \app\core\Model{
	public $user_id;
	public $email;
	public $password;
	public $roleType;

	public function getByEmail($email){
		$SQL = 'SELECT * FROM User WHERE email = :email';
		$STH = self::$connection->prepare($SQL);

		$STH->execute(['email'=>$email]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetch();
	}

	public function insert(){
		$SQL = "INSERT INTO user (email, password, roleType) VALUE (:email, :password, :roleType)";
		$STH = self::$connection->prepare($SQL);
		$data = [
			'email'=>$this->email,
			'password'=>$this->password,
			'roleType'=>$this->roleType
		];
		$STH->execute($data);
		$this->user_id = self::$connection->lastInsertId();
		return $STH->rowCount();
	}

	public function update(){
		$SQL = "UPDATE user SET email=:email, password=:password, roleType=:roleType WHERE product_id=:product_id";
		$STH = self::$connection->prepare($SQL);
		$data=['email'=>$this->email,
				'password'=>$this->password,
				'roleType'=>$this->roleType
		];
		$STH->execute($data);
		return $STH->rowCount();
	}
}