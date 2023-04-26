<?php
namespace app\controllers;

class AdminProduct extends \app\core\Controller{

	public function index(){
		$product = new \app\models\Product();
		$products = $product->getAllOrderByProduct();

		// $category = new \app\models\Category();
		// $categories = $category->getAll();
		$this->view('AdminProduct/index', $products);
	}

	public function create(){
		if(isset($_POST['action'])){
			$product = new \app\models\Product();

			// $product->category_id = $_POST['image'];
			$product->product_name = htmlentities($_POST['product_name']);
			$product->category_id = htmlentities($_POST['category_id']);
			$product->sellingPrice = htmlentities($_POST['sellingPrice']);
			$product->quantity = htmlentities($_POST['quantity']);
			$product->description = htmlentities($_POST['description']);

			$uploadedPicture = $this->uploadPicture();

			if(isset($uploadedPicture['target_file']))
                $product->image = htmlentities($uploadedPicture["target_file"]);

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
echo "first IF";
			$info = getimagesize($_FILES['image']['tmp_name']);

			$allowedTypes = ["jpg", "png", "gif"];

			$fileName = basename($_FILES["image"]["name"]);

            $fileType = strtolower(pathinfo($fileName,PATHINFO_EXTENSION));

			if($info == false){
echo "Second IF";
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

    public function edit($product_id){
		// modify a client record
		$product = new \app\models\Product();
		$product = $product->getProduct($product_id);
		// form is submitted
		if(isset($_POST['action'])){
			// TODO: save the data
			$product->product_name = htmlentities($_POST['product_name']);
			$product->category_id = htmlentities($_POST['category_id']);
			$product->sellingPrice = htmlentities($_POST['sellingPrice']);
			$product->quantity = htmlentities($_POST['quantity']);
			$product->description = htmlentities($_POST['description']);
			$uploadedPicture = $this->uploadPicture();

            if(isset($uploadedPicture['target_file']))
                $product->image = htmlentities($uploadedPicture["target_file"]);

            $uploadMessage = $uploadedPicture["upload_message"] == 'success' ? '' : '&error=Something went wrong '.$uploadedPicture["upload_message"];

			$success = $product->update();
			if($success) {
				header('location:/AdminProduct/index' );
			} else {
				header('location:/AdminProduct/index?error=There was an error deleting product ID:' . $product_id );
			}
		} else {
			$category = new \app\models\Category();
			$categories = $category->getAll();
			$data = ['categories'=>$categories, 'product'=>$product];
			$this->view('AdminProduct/edit', $data);
		}
	}

	public function delete($product_id){ // PK value
		$product = new \app\models\Product();

		$success = $product->delete($product_id); // deletes
			// proceed with deletion
		if($success) {
			header('location:/AdminProduct/index' );
		
		} else {
			// echo "string";
			header('location:/AdminProduct/index?error=There was an error deleting product ID:' . $product_id );
		}
	}

	public function productDetails($product_id){
		$product = new \app\models\Product();
		$product = $product->getProductCategory($product_id);
		$this->view('AdminProduct/productDetails', $product);
	}
}
