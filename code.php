<?php
session_start();
require "../config/dbconnect.php";
/*
if(isset($_POST['delete_query']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['delete_query']);

    $query = "DELETE FROM users1 WHERE id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "query Deleted Successfully";
        header("Location: answered.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "query Not Deleted";
        header("Location: answered.php");
        exit(0);
    }
}
*/
if(isset($_POST['update_query']))
{
    $student_id = mysqli_real_escape_string($conn, $_POST['id']);

    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Query = mysqli_real_escape_string($conn, $_POST['Query']);
    $user_id = mysqli_real_escape_string($conn, $_POST['id']);

    $query = "UPDATE users SET name='$Name', email='$Email', phone='$Query',  WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Query Updated Successfully";
        header("Location: answered.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Query Not Updated";
        header("Location: answered.php");
        exit(0);
    }

}



?>
