<?php
namespace app\controllers;

class AdminProduct extends \app\core\Controller{

	public function index(){
		$products = new \app\models\Product();
		$products = $products->getAll();
		$this->view('AdminProduct/index', $products);
	}

	public function create(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();

			// $product->category_id = $_POST['image'];
			$product->product_name = $_POST['product_name'];
			$product->category_id = $_POST['category_id'];
			$product->sellingPrice = $_POST['sellingPrice'];
			$product->quantity = $_POST['quantity'];
			$product->description = $_POST['description'];

			$uploadedPicture = $this->uploadPicture();

			if(isset($uploadedPicture['target_file']))
                $product->image = $uploadedPicture["target_file"];

            $uploadMessage = $uploadedPicture["upload_message"] == 'success' ? '' : '&error=Something went wrong '.$uploadedPicture["upload_message"];

			$success = $product->insert();
			if($success)
				header('location:/AdminProduct/index?success=Profile modified.');
			else
				header('location:/AdminProduct/index?error=Something went wrong.');

		} else {
			$category = new \app\models\Category();
			$categories = $category->getAll();

			$this->view('AdminProduct/create', $categories);
		}
	}

	public function uploadPicture(){
		// echo "add picture";
		$uploadedFile = array();

		if(isset($_FILES['image']) && ($_FILES['image']['error'] == UPLOAD_ERR_OK)){

			$info = getimagesize($_FILES['image']['tmp_name']);

			$allowedTypes = ["jpg", "png", "gif"];

			$fileName = basename($_FILES["image"]["name"]);

            $fileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

			if($info == false){

                $uploadedFile["upload_message"] = "Bad image file format!";
                $uploadedFile["target_file"] = null;

            }else if(!in_array($fileType, $allowedTypes)){//File uploaded, but check the image file type

                $uploadedFile["upload_message"] = "The image file type is not accepted!";
                $uploadedFile["target_file"] = null;

            }else{
                // Save the image in the images folder
                $path = 'resources'. DIRECTORY_SEPARATOR . 'productImages' . DIRECTORY_SEPARATOR;

                $targetFileName = uniqid().'.'.$fileType;

                move_uploaded_file($_FILES["image"]["tmp_name"], $path.$targetFileName);

                $uploadedFile["upload_message"] = "success";

                $uploadedFile["target_file"] = $targetFileName;

                return $uploadedFile;

            }

        }else{

            $uploadedFile["upload_message"] = "Image not specified or not uploaded successfully.";

            $uploadedFile["target_file"] = null;
        }

        return $uploadedFile;
    }
}
