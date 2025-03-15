<?php
   $nom = $_POST['name'];
   $email = $_POST['email'];
   $message = $_POST['message'];


$message = "Nom : ".$nom."\n"." Email : ".$email."\n"." message : ".$message;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'camaramedoune51@gmail.com'; //obligé de mettre l'émail du propriétaire du portfolio  //SMTP username
    $mail->Password   = 'ymqg irfr zpiv byfv';  //générer un mdp pour le propriétaire du portfolio depuis son compte google  //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', '');
    $mail->addAddress('camaramedoune51@gmail.com'); //obligé de mettre l'émail du propriétaire du portfolio    //Add a recipient
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Voici le sujet';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message envoyé avec succès';
} catch (Exception $e) {
    echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
}