<?php 
session_start();

			if(isset($_POST['query_id']))
			
			{
            $host= "localhost";
$user= "root";
$password="";
$db_name="enquiry";


	 
		
		
		$connection_enquiry=mysqli_connect($host,$user,$password,$db_name);
		
			if($connection_enquiry==false)
			{
				die("connection_error");
			}
				$query_id=$_POST["query_id"];
				$email=$_POST["email"];
		
	
$sql="SELECT * FROM users1 WHERE query_id='".$query_id."' AND email='".$email."'";

$result=mysqli_query($connection_enquiry,$sql);
//$row=mysqli_fetch_array($result);
$row=mysqli_num_rows($result);
            if($row>0)
             {
				 $_SESSION['query_id']=$query_id;
				 
				 header("location:profileuser.php");

			
				
				
			}
			else
				
				{
				echo "wrong credential";
				}
				

			}



?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/profile.css">

</head>
<body>
<?php
include"../indexx/header.html"
?>
<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>View Answer</h3>
      <input type="email" name="email" required placeholder="Enter email" class="box">
      <input type="query_id" name="query_id" required placeholder="Enter Enquiryid" class="box">
      <input type="submit" name="submit" class="btn" value="Submit">
      
   </form>

</div>
<?php
include"../indexx/footer.html"
?>
</body>
</html>