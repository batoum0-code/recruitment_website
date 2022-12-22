<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0; //0 or 2 

//Set PHPMailer to use SMTP.
$mail->isSMTP();

//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Provide username and password     
$mail->Username = "fstefste.test@gmail.com";
$mail->Password = "dqsigocbolxkmztf";

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";

//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "fstefste.test@gmail.com";
$mail->FromName = "FSTE";

$mail->addAddress("fstefste.test@gmail.com", "FSTE");

$mail->isHTML(true);
$mail->Subject = "Contact Form Email";

$message = "
<table>
	<tr><td>Name: </td><td>" . $_POST["name"] . "</td></tr>
	<tr><td>Objet: </td><td>" . $_POST["subject"] . "</td></tr>
	<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
	<tr><td>Message: </td><td>" . $_POST["message"] . "</td></tr>
</table>
";

$mail->Body = $message;

     
if(isset($_POST['contact'])) 
{

     require_once("Connexion.php");

     $name=$_POST['name'];
     $subject=$_POST['subject'];
     $message=$_POST['message'];
     $email=$_POST['email'];
    

     $sql = "INSERT INTO `contact`(`nom`, `message`, `email`, `objet`) VALUES ('$name','$message','$email','$subject')";
$m->query($sql);
$m->close();}

try {
    $mail->send();
 $_SESSION['success'] = "success";
  
//   echo" <div class='alert alert-warning alert-dismissible fade show' role='alert'>
//   <strong>Hey !</strong> 
//   <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
// </div>";
 header('Location: contact.php');
} catch (Exception $e) {
    // echo "Mailer Error: " . $mail->ErrorInfo;
}

?>



























?>