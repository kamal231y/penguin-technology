<?php
session_start();
$secNum = $_SESSION['secNum'];
session_regenerate_id();
    

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
// email Or Phone validation

if(!empty($_POST['email'])) {

if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    echo "Please provide a valid email-id";
    return;
}
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sub = $_POST['subject'];
$msg = $_POST['message'];
$security = $_POST['security'];
$phone = isset($_POST['phone']) ? $_POST['phone'] : 'UE Developer';

if(empty($security)){
    echo "Type Captcha";
    return;
 }
if($security!=$secNum){
    echo  "Captcha not matched";
    return;
 }

    
    
/********************Sending Email******************************************/

$mail = new PHPMailer(true);  // Passing `true` enables exceptions
try {
    //Server settings
    // $mail->SMTPDebug = 2;                                 // Enable verbose debug output
$mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = 'mail.penguin-technology.com';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                // Enable SMTP authentication
    $mail->Username = 'info@madoverfinance.com';        // SMTP username
    $mail->Password = 'madoverfinance@12345';                      // SMTP password
    $mail->SMTPSecure = 'tls';                             // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                     // TCP port to connect to
    //Recipients
    
    $mail->setFrom('sumitpal8285@gmail.com', 'UE Developer');
    $mail->addAddress('sumitpal8285@gmail.com');     // Add a recipient
    $mail->isHTML(true); 
    $mail->Body.='<html lang="en">';
    $mail->Body.='<head>';
    $mail->Body.='<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">';
    $mail->Body.='</head>';
    $mail->Body.='<body style="font-family: candara;height:auto;">';    
    $mail->Body.='<div style="background-color: #333;padding:1%;margin:0;border-radius:2px">';
    $mail->Body.='<p style="color: #b98e42; text-align: center; font-size: 45px;font-weight:600;margin:0">Welcome to <span style="font-size:55px">UE Developer</span></p>';
    $mail->Body.='</div>';
    $mail->Body.='<div style="border: 5px solid #b98e42;border-top: none;">';
    $mail->Body.='<div style="padding: 1% 3%;margin: 0 0 1% 0">';
    $mail->Body.='<p style="font-size: 25px;text-align: center;text-transform:capitalize;font-weight: 800;margin:0">Contact Form</p>';
    $mail->Body.='<p style="font-size: 16px;"><strong>Hello </strong>UE Developer,</p>';
    $mail->Body.='<p style="font-size: 16px;">Someone has tried to contact UE Developer team.</p>';
    $mail->Body.='<p style="font-size: 16px;">Name:'.@$name.'</p>';
    $mail->Body.='<p style="font-size: 16px;">Email:'.@$email.'</p>';
    $mail->Body.='<p style="font-size: 16px;">Phone:'.@$phone.'</p>';
    $mail->Body.='<p style="font-size: 16px;">Message Detail:'.@$sub.'</p>';
    $mail->Body.='<p style="font-size: 16px;">Message Detail:'.@$msg.'</p>';

    $mail->Body.='<p style="font-size: 16px;">Cheers!</p>';
    $mail->Body.='<p style="font-size: 16px;">UE Developer</p>';
    $mail->Body.='</div>';
    $mail->Body.='</div>';
    $mail->Body.='</body>';
    $mail->Body.='</html>';
    $mail->send();
    echo '1';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}

}
?>