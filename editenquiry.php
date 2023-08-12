<?php
session_start();
require "../config/dbconnect.php";

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Query Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Edit Enquiry
                            <a href="answered.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_REQUEST['id']))
                        
                        {
                            $id=$_REQUEST['id'];
                           // $id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM users1 st ,users2 nd WHERE st.id=nd.id and id='{$id}' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">

                                    <div class="mb-3">
                                        <label> Name</label>
                                        <input type="text" name="Name" value="<?=$row['Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label> Email</label>
                                        <input type="Email" name="Email" value="<?=$row['Email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Query</label>
                                        <input type="text" name="Query" value="<?=$row['Query'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>user_id</label>
                                        <input type="text" name="id" value="<?=$row['id'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Answer</label>
                                        <input type="text" name="user_id" value="<?=$row['Answer'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_enquiry" class="btn btn-primary">
                                            Edit enquiry
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>