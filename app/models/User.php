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

	public function getByUserId() {
		$SQL = 'SELECT * FROM User WHERE user_id=:user_id';
		$STH = self::$connection->prepare($SQL);

		$STH->execute(['user_id'=>$this->user_id]);
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

	public function updatePassword() {
		$SQL = "UPDATE user SET password=:password WHERE user_id=:user_id";
		$STH = self::$connection->prepare($SQL);
		$data=['password'=>$this->password,
				'user_id'=>$this->user_id
		];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function getUsersWithSubcription() {
		$SQL = 'SELECT * FROM user u 
				JOIN profile p 
				On u.user_id = p.user_id
				WHERE subscription=:subscription';
		$STH = self::$connection->prepare($SQL);
		$subscription = 0;
		$STH->execute(['subscription'=>$subscription]);
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\User');
		return $STH->fetchAll();
	}
}