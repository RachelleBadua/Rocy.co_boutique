<?php
namespace app\controllers;

class AdminAboutUs extends \app\core\Controller{
	#[\app\filters\Login]
	#[\app\filters\Admin]
	public function index() {
		$aboutUsObj = new \app\models\aboutUs();
		$aboutUsObj = $aboutUsObj->getAboutUs();
		if(isset($_POST['action'])){
			if($_POST['text'] != '' 
				&& $_POST['text'] != null){
				$aboutUsObj->text = htmlentities($_POST['text']);
				$uploadedPicture = $this->uploadPicture();
				if(isset($uploadedPicture['target_file']))
	                $aboutUsObj->image = htmlentities($uploadedPicture["target_file"]);

	            $uploadMessage = $uploadedPicture["upload_message"] == 'success' ? '' : '&error=Something went wrong '.$uploadedPicture["upload_message"];

				$success = $aboutUsObj->update();
				if($success) {
					header('location:/AdminAboutUs/index?success=successfully updated' );
				} else {
					header('location:/AdminAboutUs/index?error=There was an error updating');
				}
			}else{
				header('location:/AdminAboutUs/index?error=Fill up all criterias');
			}
		}else {
			// $aboutUs = new \app\models\AboutUs();
		// $aboutUs = $aboutUs->getAboutUs();
		$this->view('AdminAboutUs/index', $aboutUsObj);
		}
	}

	// public function edit(){
	// 	$aboutUs = new \app\models\AboutUs();
	// 	$aboutUs = $aboutUs->getAboutUs();
	// 	if ($_POST['text'] != '' 
	// 			&& $_POST['text'] != null) {
	// 			// && $_POST['image'] != '' 
	// 			// && $_POST['image'] != null
	// 		// $aboutUs->image = $_POST['image'];
	// 		$aboutUs->text = $_POST['text'];

	// 		$uploadedPicture = $this->uploadPicture();

	// 		if(isset($uploadedPicture['target_file'])) 
 //                $aboutUs->image = htmlentities($uploadedPicture["target_file"]);
	// 		// } else {
	// 		// 	$aboutUs->image = $_POST['image'];
	// 		// }

 //            $uploadMessage = $uploadedPicture["upload_message"] == 'success' ? '' : '&error=Something went wrong '.$uploadedPicture["upload_message"];

	// 		$success = $aboutUs->update();
	// 		if($success) {
	// 			header('location:/AdminAboutUs/index?success=Successfully updated');
	// 		} else {
	// 			header('location:/AdminAboutUs/index?error=There was an error');
	// 		}
	// 	} else {
	// 		header('location:/AdminAboutUs/index?error=Fill up criteria');
	// 	}
	// }

	#[\app\filters\Login]
	#[\app\filters\Admin]
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
                $path = 'resources'. DIRECTORY_SEPARATOR . 'images' . DIRECTORY_SEPARATOR;

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