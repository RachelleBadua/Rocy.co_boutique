<?php
namespace app\models;

class AboutUs extends \app\core\Model{
	public $about_us_Id;
	public $image;
	public $text;

	// public function insert() {
	// 	$SQL = "INSERT INTO about_us (image, `text`) VALUE (:image, :`text`)";
	// 	$STH = self::$connection->prepare($SQL);
	// 	$data =['image'=>$this->image,
	// 			'text'=>$this->text,
	// 		];
	// 	$STH->execute($data);
	// 	return $STH->rowCount();
	// }

	public function update(){
		$SQL = "UPDATE about_us 
                SET image=:image, `text`=:aboutUsText
                WHERE about_us_Id=:about_us_Id";
		$STH = self::$connection->prepare($SQL);
		$data = [
			'image'=>$this->image,
            'aboutUsText'=>$this->text,
            'about_us_Id'=>1,
            ];
		$STH->execute($data);
		return $STH->rowCount();
	}

	public function getAboutUs(){
		$SQL = "SELECT * FROM about_us WHERE about_us_Id=1";
		$STH = self::$connection->prepare($SQL);
		$STH->execute();
		$STH->setFetchMode(\PDO::FETCH_CLASS, 'app\\models\\Category');
		return $STH->fetch(); // gets the branches from database with an array
	}
}