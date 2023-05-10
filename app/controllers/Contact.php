<?php
namespace app\controllers;
//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Contact extends \app\core\Controller{

    public function index(){
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
			$mail->setFrom('jkyooo1234@gmail.com', 'ROCY.CO BUSINESS');

			//receiver email address and name
			$mail->addAddress('jkyooo1234@gmail.com', 'User');
			// to be sent to admin  
			// $mail->addAddress('baduar0110@gmail.com', 'Rachelle'); 


			// Add cc or bcc   
			// $mail->addCC('email@mail.com');  
			// $mail->addBCC('user@mail.com');  
			 
			$mail->isHTML(true);
			 
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			$email = $_POST['email'];
			$mail->Subject = 'CONTACT US';
			$mail->Body    = "<h3> $subject </h3>
				<b> From User: $email </b>
				<p> $message </p>
			    <p> Rocy.co Boutique </p>";

			// Send mail   
			if (!$mail->send()) {
			    echo _('Email not sent an error was encountered: ') . $mail->ErrorInfo;
			    // header('location:/AdminCustomer/sendPromotions?error=There is an error');
			} else {
			    header('location:/Contact/index?success=Message sent!');
			}

			$mail->smtpClose();
			
		} else {
			$this->view('Contact/index');
		}
	}

}