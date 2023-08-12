<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$a = $_POST['Name'];
$b = $_POST['Email'];
$c= $_POST['Query'];
//$query_id= $_POST['query_id'];
$connection_swiss_collection=mysqli_connect("localhost","root","","swiss_collection");
$q1="SELECT max(`user_id`) as maxsl FROM `users`";
$slrset=mysqli_query($connection_swiss_collection ,$q1);
$slrow= mysqli_fetch_assoc($slrset);
 $id1= $slrow['maxsl']+1;
 $id2= sprintf("%04d",$id1);
 $Eid_final="EQ".date("ym").$id2;
 $query_id=$Eid_final;

 
$query_swiss_collection="INSERT INTO `users`(`Name`,`Email`,`query`,`query_id`) VALUES('{$a}','{$b}','{$c}','{$query_id}')";
if(mysqli_query($connection_swiss_collection,$query_swiss_collection))
{
    echo"your query is submitted successfylly";
    echo" Your Enquiry ID is $Eid_final";
    

}
else{
    echo"data insertion not successful";
}
mysqli_close($connection_swiss_collection);

//mail
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
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
    $mail->addAddress($b);     //Add a recipient

    
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'anamikaanand37@gmail.com';
    $mail->Body    = 'query_id :'.$query_id;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}

// Generate a unique enquiry ID


?>