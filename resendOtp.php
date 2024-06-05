<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'studyabroad');
$otp = $_SESSION['otp'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';  



if ($_GET['email']) {
  $email = $_GET['email'];

  $randomNumber = rand(1000, 9999);
  $_SESSION['otp'] = $randomNumber;

  $mail = new PHPMailer(true);
					
  try {

      $mail->isSMTP();                                         
      $mail->Host       = 'smtp.gmail.com';                    
      $mail->SMTPAuth   = true;                              
      $mail->Username   = 'munshibejoy@gmail.com';                 
      $mail->Password   = 'hpnx ijdo sbmm slpi';                               
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
      $mail->Port       = 465;                                   

      //Recipients
      $mail->setFrom('munshibejoy@gmail.com', 'Education World');
      $mail->addAddress($email);     


      //Content
      $mail->isHTML(true);                                
      $mail->Subject = 'Account verification';
      $mail->Body    = "Dear user your new OPT code is $randomNumber</b>";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();
  
  } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
  

  echo "<script>window.location.href = 'passwordOtp.php';</script>";

//   $sql6 = "SELECT * FROM abroad WHERE ID = $INFO_id";
//   $result = $conn->query($sql6);

//   while ($data = $result->fetch_assoc()) {
//     $ID = $data['ID'];
//     $COUNTRY_NAME = $data['COUNTRY_NAME'];
 
//   }
}

?>