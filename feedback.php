
<?php
  if(isset($_POST['submit']))
  {
  $a = $_REQUEST['name'];
  $b = $_POST['message'];
  $connection_enquiry=mysqli_connect("localhost","root","","enquiry");
  $query_enquiry="INSERT INTO `feedback`(`Rate`,`message`) VALUE('{$b}','{$a}')";



  
  if(mysqli_query($connection_enquiry,$query_enquiry))    
{
   echo" thanks for your feedback";
   header('location:profileuser.php');
}
else{
    echo "data not submitted";
}
  }
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="../css/feedback.css">
</head>
<body>
    <div class="wrap">
    <table>
        <form method="Post" action="feedback.php">
            <h1>Help us improve</h1>
            <tr>
                <td><label>How do you name the overall expericence</label><br>
                    <input type="radio" name="name" value="Bad" required>Bad
                    <input type="radio" name="name" value="Average" required>Average
                    <input type="radio" name="name" value="Good" required>Good
                </td>
            </tr>
            <tr>
                <td>
                    <label>What would you like to see improved the most?</label><br>
                    <textarea class="txt" value="message" name="message" required> Please write your message here</textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" class="btn" name="submit" onclick="return confirm('Thanks For your feedback');">Submit feedback</button>
                
                </td>
            </tr>
        </form>
    </table>
</div>
</body>
</html>