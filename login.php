<?php

include "./config.php";
session_start();

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['query_id']));

   $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND query_id = '$pass'") or die('query failed');

   if(mysqli_num_rows($select) > 1){
      $row = mysqli_fetch_assoc($select);
      $_SESSION['query_id'] = $row['query_id'];
      header('location:userprofile.php');
   }else{
      $message[] = 'incorrect password or email!';
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
   <link rel="stylesheet" href="../css/css/profile.css">

</head>
<body>
<?php
 
 include"../indexx/header.html";
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
      <h3>login now</h3>
      <input type="email" name="email" required placeholder="enter email" class="box">
      <input type="query_id" name="query_id" required placeholder="enter queryid" class="box">
      <input type="submit" name="submit" class="btn" value="submit">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>
<?php
 
 include"../indexx/footer.html";
 ?>
</body>
</html>