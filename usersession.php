<?php
session_start();
if(isset($_POST['username']))
{      
		$u=$_POST['username'];
		$p=$_POST['password'];
		
		//new code
		$conn=mysqli_connect("localhost","root","","enquiry");
$q="select * from login_user where username='{$u}' and password='{$p}'";
$result_set=mysqli_query($conn,$q);
$nrow=mysqli_num_rows($result_set);
            if($nrow>0)
             {
				 $_SESSION['user']=$u;
				 $_SESSION['sid']=session_id();
				header("location:user_home.php");
				
			}
			else
				
				{
				echo "wrong credential";
				}
				
	mysqli_close($conn);	
}


?>