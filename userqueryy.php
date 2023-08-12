<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if(isset($_POST['submit']))
$a = $_POST['Name'];
$b = $_POST['Email'];
$c= $_POST['Query'];
$conn=mysqli_connect("localhost","root","","enquiry");



//mail
require '../admin_panel/PHPMailer/src/Exception.php';
require '../admin_panel/PHPMailer/src/PHPMailer.php';
require '../admin_panel/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'your Gmail';                     //SMTP username
    $mail->Password   = 'Gmail SMTP Password';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('Your Gmail', 'Mailer');
    $mail->addAddress($b);     //Add a recipient

    
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Your Gmail';
    $mail->Body    = 'query_id :'.$query_id;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}


//Email validation
   $submitted=isset($_POST['Email']);
     if($submitted){
        $b = $_POST['Email'];
        if(preg_match("/^[a-zAZ0-9-]+\.[a-zA.]{2,5}$/",$b)){
            echo "email is valid";
        }

     else{
        echo "invalid email";
     }}

// Generate a unique enquiry ID

$q1="SELECT max(`id`) as maxsl FROM `users1`";
$slrset=mysqli_query($conn ,$q1);
$slrow= mysqli_fetch_assoc($slrset);

 $id1= $slrow['maxsl']+1;
 $id2= sprintf("%04d",$id1);
 $Eid_final="EQ".date("ym").$id2;
 $query_id=$Eid_final;


$query_enquiry="INSERT INTO `users1`(`Name`,`Email`,`query_id`)

VALUE('{$a}','{$b}','{$query_id}')";
$fire=mysqli_query($conn ,$query_enquiry) or die('query one is failed'.mysqli_error($conn));
if ($fire==1){
$query_enquiry2 ="INSERT INTO `users2`(`Query`,`query_id`) VALUE('{$c}','{$query_id}' )";
$fire2 = mysqli_query($conn ,$query_enquiry2) or die('query two is failed'.mysqli_error($conn));
if($fire2)
 //if(mysqli_query($conn,$query_enquiry))
{
    echo"your query is submitted successfylly";
    echo" Your Enquiry ID is $Eid_final";
    

}
else{
    echo"data insertion not successful";
}
mysqli_close($conn);
}
?>