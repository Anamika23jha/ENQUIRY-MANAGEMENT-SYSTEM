<?php
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
     
    <title>query View</title>
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4> Reply Enquiry 
                            <a href="answered.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        
                        if(isset($_REQUEST['id']))
                        {
                           $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                           $id=$_REQUEST['id'];
                           


                            $query = "SELECT users1.Name,users1.query_id, users1.Email , u2.Query, u2.id FROM users1 INNER JOIN (select * from users2 where query_id='{$id}') as u2 ON users1.query_id=u2.query_id";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label> S.NO</label>
                                        <p class="form-control">
                                           
                                            <?=$id;?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Name</label>
                                        <p class="form-control">
                                            <?php echo $row['Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label> Email</label>
                                        <p class="form-control">
                                            <?php echo $row['Email'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Query</label>
                                        <p class="form-control">
                                            <?=$row['Query'];?>
                                        </p>
                                    </div>
                                    <form action="../adminView/answer.php" method="POST">
                                    <div class="user-input-box">
                        <label for="Answer">Answer</label>
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="text" id="Answer" name="Answer" placeholder="WRITE YOUR ANSWER HERE" style="width: 400px; height:80px">

                       <!-- <label for="Answer">Email</label>-->
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" id="Email" name="Email" placeholder="email" value="<?php echo $row['Email'];?>">

                        
                                    <div class="form submit-btn">
                                        <input type="submit" value="submit" name="enqsubmit" style="background-color: #0066A2; width:100px;height:40px;margin-left:350px;margin-top:20px";>
                                    </div>
                                        
                                    </form>
                    
                                        
                                    </div>

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