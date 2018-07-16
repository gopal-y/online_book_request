<?php 


require('F:/wamp64/www/PHPMailer/PHPMailerAutoload.php');
//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->SMTPDebug =0;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username ='gopal.yedida@gmail.com' ;                 // SMTP username
$mail->Password = 'dob06121997*Y';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =587;                                    // TCP port to connect to

//Set who the message is to be sent from
$mail->setFrom('gopal.yedida@gmail.com', 'First Last');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress('subbug12@gmail.com', 'Suresh');
//Set the subject line
$mail->Subject = 'Test Mail';

$mail->Body = 'This is suresh';


//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
} 

?>