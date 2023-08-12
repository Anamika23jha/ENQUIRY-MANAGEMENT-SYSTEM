
<?php
session_start();
require "./dbconnect.php";

?>

<?php 
$a = $_POST['fullname'];
$username = $_POST['username'];
$c = $_POST['email'];
$d = $_POST['phone'];
$password = $_POST['password'];
$f = $_POST['confirmpassword'];
$i = $_REQUEST['gender'];
  

$checkUsers= "SELECT * from registration where email='$c'";
$result=mysqli_query($conn,$checkUsers);
$count = mysqli_num_rows($result);
if($count>0){
    echo"email id already exist";
}
else{
$connection_enquiry=mysqli_connect("localhost","root","","enquiry");
$query_enquiry="INSERT INTO `registration`(`Fullname`,`Username`,`Email`,`Phoneno`,`Password`,`confirmation`,`Gender`)
VALUE('{$a}','{$username}','{$c}','{$d}','{$password}','{$f}','{$i}')";
if(mysqli_query($connection_enquiry,$query_enquiry))
{
    header("location:../adminView/login.php");
    

}
else{
    echo"data insertion not successful";
}}
mysqli_close($conn);
?>
