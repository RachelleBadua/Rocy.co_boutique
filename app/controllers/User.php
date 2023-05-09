<?php
namespace app\controllers;



class User extends \app\core\Controller{
    function index(){
    	if(!isset($_SESSION['user_id']))
    	{
	    	if(isset($_POST['action']))
	    	{
				// process the input
				$user = new \app\models\User();
				$user = $user->getByEmail($_POST['email']);
				if($user)
				{
					if(password_verify($_POST['password'], $user->password))
					{
						// the user is correct!
						// user can login
						$_SESSION['user_id'] = $user->user_id;
						$_SESSION['email'] = $user->email;
						$_SESSION['roleType'] = $user->roleType;
						// $_SESSION['secret_key'] = $user->secret_key;
						// $this->view('location:/User/setup2fa');

						// if(!$user->secret_key){
						// 	header('location:/User/profile?error=Your Account is not safe, please make your 2 factor authentication');
						// } else {
							// header('location:/User/profile');
						// }
						if ($_SESSION['roleType'] == 'admin')
							header('location:/MainAdmin/index?success=Logged in');
						else if ($_SESSION['roleType'] == 'customer')
							header('location:/Main/index?success=Logged in');
					}else{
						// the user is no correct
						// echo "string2";
						header('location:/User/index?error=Bad username/password combination');
					}
				}else{
					// no such user so redirect
					// echo "string1";
					header('location:/User/index?error=Bad username/password combination');
				}
			}else{
				// echo "string";
				$this->view('User/index'); 		
			}
		}else{
			header('location:/User/index?error=You are already logged in.');
		}
	}

	
	function create(){
		$defaultRoleType = 'customer';
		if(isset($_SESSION['user_id'])){
			header('location:/Main/index?error=You must log out first to create an account');
			return;
		}
		if(isset($_POST['action'])){
			// echo "string";
			$user = new \app\models\User();
			$checkUser = $user->getByEmail($_POST['email']);

			if(!$checkUser){
				$user->email = htmlentities($_POST['email']);
				$user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
				$user->roleType = $defaultRoleType;
				$success = $user->insert();
				echo $user->email;
				echo $success->user_id;
				if($success){
					$profile = new \app\models\Profile();
					$profile->user_id = $user->user_id;
					$profile->subscription = htmlentities($_POST['subscription']);
					$profile->name = htmlentities($_POST['name']);
					$profile->phoneNo = htmlentities($_POST['phoneNo']);
					$profile->address = htmlentities($_POST['address']);
					$profile->city = htmlentities($_POST['city']);
					$profile->province = htmlentities($_POST['province']);
					$profile->postal = htmlentities($_POST['postal']);
					$profile->insert();
					header('location:/User/index?success=Your account has been succesfully created');
				}else {
					header('location:/User/index?error=User cannot be created');
				}

			} else {
				header('location:/User/index?error=User already exists');
			}

		} else {
			$this->view('User/create');
		}
	}

	#[\app\filters\Login]
	public function logout(){
		session_destroy();
		header('location:/User/index?success=Signed out');
	}
}