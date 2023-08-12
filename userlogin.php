<?php 

$host= "localhost";
$user= "root";
$password="";
$db_name="enquiry";

session_start();
	 
		
		
		$connection_enquiry=mysqli_connect("$host","$user","$password","$db_name");
		
			if($connection_enquiry==false)
			{
				die("connection_error");
			}
			if(isset($_POST['username']))
			
			{
				$username=$_POST["username"];
				$password=$_POST["password"];
		
	
$sql="SELECT* FROM registration WHERE username='".$username."' AND password='".$password."'";

$result=mysqli_query($connection_enquiry,$sql);
$row=mysqli_fetch_array($result);
            if($row>0)
             {
				 $_SESSION['username']=$username;
			
				header("location:contact.php");
				
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
	<meta name="viewport" content="width=<div style=" border:2px solid blue;height:300px;>
		<title>user login</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	   <link rel="stylesheet" href="../css/userlogin.css">
	</head>

	<body>
	<?php 
       include"../indexx/header.html";
    ?>
         <div class="style">
			<form class="align" method="post" action="userlogin.php">
				<h1><i>LOGIN</i></h1>
				<div class= "left-container">
					<div class="input-box-container">
						<div class="input-box">
							<input type="text" name="username" placeholder="username">
</div>
<div class="input-box">
	<input type="password" name="password" placeholder="password">
</div>
</div>
<div class="password-settings">
	<div class="remember-box">
<input type="checkbox" id="remember_checkbox">
<label for="remember_checkbox">Remember</label>
	</div>
<a href="../indexx/forgotpassword.php" class="forgot-password">forgot password?</a>

</div>
</div>
<div class="right-container">
	<div class="btn-container">
		<button type="submmit" class="sign-in">Sign In</button>
       <button type="button" class="sign-up" button onclick="window.location.href='userregistration.php'">SignUp</button>
	</div>
	<div class="right-container-footer">
		<div class="horizontal-line"><h3>Continue With</h3></div>
		<div class="login-methods">
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-google"></i></a>
			

	</div>
</div>
</form>
		 </div>
<?php
    include"../indexx/footer.html";
    ?>
	</body>

</html>
