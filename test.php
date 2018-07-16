<?php 
error_reporting(0);
require("DBConnection.php");
session_start();
$id=$_SESSION['isbn'];
$to=$_POST['email'];
require('/bsb/phpmailer/PHPMailerAutoload.php');
//Create a new PHPMailer instance
$mail = new PHPMailer;
// Set PHPMailer to use the sendmail transport
$mail->isSMTP();
$mail->SMTPDebug =4;
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
$query = "select * from book_info where ISBN=$id "; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

$row=mysqli_fetch_assoc($result);
if(mysqli_error()){echo mysqli_error();}
 $echo1=$row["ISBN"]; 
$echo2 =$row["TITLE"]; 
$echo3 =$row["EDITION"]; 
$echo4 =$row["PUBLICATION"];
$echo5 =$row["AUTHOR"];
$echo6 =$row["price"]; 
$echo7=$row["email"];
echo $echo1; 

$b="<div><div align='center'>"."<div align='center' style='border:#95bee6 1px solid;    background:linear-gradient(#d1e8ff,#95bee6);    border-radius:4px;    max-width:800px;	padding:20px 30px 30px;	text-align:center;'>"."
<p style='padding: 10px 20px;
    background: linear-gradient(grey,black);
    border: #d1e8ff 1px solid;
    color: #FFF;
	border-radius:4px;'>ISBN<i>  :$echo1</i></p>
<p>TITLE<i>  :$echo2.</i></p>
<p>EDITION<i>  :$echo3</i></p>
<p>PUBLICATION<i>  :$echo4</i></p>
<p>AUTHOR<i>  :$echo5.</i></p>
<p>PRICE<i>  :$echo6.</i></p>
<p>CONTACT<i>  :$echo7</i></p>
</div></div></div>";
ech0 $b;
/*

$mail->Host = 'smtp.gmail.com';              // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username ='gopal.yedida@gmail.com' ;                 // SMTP username
$mail->Password = 'dob06121997*Y';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =587;                                    // TCP port to connect to

//Set who the message is to be sent from
$mail->SetFrom('donotreply@book.com');
$mail->addReplyTo('gopal.yedida@gmail.com', 'admin');
//Set an alternative reply-to address

//Set who the message is to be sent to
$mail->addAddress($to);
//Set the subject line
$mail->Subject = 'Book Details';
$mail->IsHTML(true);
$mail->Body = $b;
//send the message, check for errors
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {

   include('success.php');
} 

*/?>
