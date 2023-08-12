<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$a =$_POST['Answer'] ;
$b = $_POST['id'];
$Email=$_POST['Email'];
//mail
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server = $_POST['Answer']settings
                         //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'anamikaanand37@gmail.com';                     //SMTP username
    $mail->Password   = 'xxsioxrunmetdgsk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('anamikaanand37@gmail.com', 'Mailer');
    $mail->addAddress($_POST["Email"]);     //Add a recipient

//Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'message regarding your enquiry';
    $mail->Body    = "Answer:".$a."\n Thanks & regards,\n NIELIT PAtna";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}



$connection_enquiry=mysqli_connect("localhost","root","","enquiry");
$query_enquiry="UPDATE `users2` SET `Answer`='{$a}', status=0 WHERE `id` ='{$b}'";

if(mysqli_query($connection_enquiry,$query_enquiry))
{
    header("location:../adminview/answered.php");

}
else{
    echo"data insertion not successful";
}
mysqli_close($connection_enquiry);
?>
