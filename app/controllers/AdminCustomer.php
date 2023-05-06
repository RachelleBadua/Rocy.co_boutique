<?php
namespace app\controllers;
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class AdminCustomer extends \app\core\Controller{

	public function index(){
		$customer = new \app\models\Profile();
		$customers = $customer->getAll();
		$this->view('AdminCustomer/index', $customers);
	}

	public function customerDetails($user_id){
		$customer = new \app\models\Profile();
		$customer = $customer->getAllByUserId($user_id);
		$this->view('AdminCustomer/customerDetails', $customer);
	}

	// public function sendPromotions(){
	// 	if (isset($_POST['action'])){
	// 		$mail = new PHPMailer(true);
	// 		$mail->isSMTP();
	// 		$mail->Host = 'smtp.gmail.com';  //gmail SMTP server
	// 		$mail->SMTPAuth = true;
	// 		//to view proper logging details for success and error messages
	// 		// $mail->SMTPDebug = 1;
	// 		// $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
	// 		$mail->Username = 'jkyooo1234@gmail.com';   //email
	// 		$mail->Password = 'epngjcswgxosvfoj' ;   //16 character obtained from app password created
	// 		$mail->Port = 587;                    //SMTP port
	// 		$mail->SMTPSecure = "tls";

	// 		//sender information
	// 		$mail->setFrom('jkyooo1234@gmail.com', 'JOYCE');

	// 		//receiver email address and name
	// 		$mail->addAddress('RachelleBadua04@outlook.com', 'Rachelle'); 

	// 		// Add cc or bcc   
	// 		// $mail->addCC('email@mail.com');  
	// 		// $mail->addBCC('user@mail.com');  
			 
	// 		$mail->isHTML(true);
			 
	// 		$mail->Subject = 'PHPMailer SMTP test';
	// 		$mail->Body    = "<h4> PHPMailer the awesome Package </h4>
	// 		<b>PHPMailer is working fine for sending mail</b>
	// 		    <p> This is so cool 👍</p>";

	// 		// Send mail   
	// 		if (!$mail->send()) {
	// 		    echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
	// 		    // header('location:/AdminCustomer/sendPromotions?error=There is an error');
	// 		} else {
	// 		    header('location:/AdminCustomer/sendPromotions?success=Email has been sent');
	// 		}

	// 		$mail->smtpClose();
			
	// 	} else {
	// 		$this->view('AdminCustomer/sendPromotions');
	// 	}
	// }

	public function sendPromotions(){
		if (isset($_POST['action'])){
			$mail = new PHPMailer(true);
			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';  //gmail SMTP server
			$mail->SMTPAuth = true;
			//to view proper logging details for success and error messages
			// $mail->SMTPDebug = 1;
			// $mail->Host = 'smtp.gmail.com';  //gmail SMTP server
			$mail->Username = 'jkyooo1234@gmail.com';   //email
			$mail->Password = 'epngjcswgxosvfoj' ;   //16 character obtained from app password created
			$mail->Port = 587;//"465";                    //SMTP port
			$mail->SMTPSecure = "tls";//"ssl";

			//sender information
			$mail->setFrom('jkyooo1234@gmail.com', 'JOYCE');

			//receiver email address and name
			$mail->addAddress('RachelleBadua04@outlook.com', 'Rachelle'); 

			// Add cc or bcc   
			// $mail->addCC('email@mail.com');  
			// $mail->addBCC('user@mail.com');  
			 
			$mail->isHTML(true);
			 
			$mail->Subject = 'PHPMailer SMTP test';
			$mail->Body    = "<h4> PHPMailer the awesome Package </h4>
			<b>PHPMailer is working fine for sending mail</b>
			    <p> This is so cool 👍</p>";

			// Send mail   
			if (!$mail->send()) {
			    echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
			    // header('location:/AdminCustomer/sendPromotions?error=There is an error');
			} else {
			    header('location:/AdminCustomer/sendPromotions?success=Email has been sent');
			}

			$mail->smtpClose();
			
		} else {
			$this->view('AdminCustomer/sendPromotions');
		}
	}
}