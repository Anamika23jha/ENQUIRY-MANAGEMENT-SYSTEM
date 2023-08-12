
<!doctype html>
<html lang="en"><?php
    session_start();
    error_reporting(0);
    require '../config/dbconnect.php';
    if(strlen($SESSION))
?>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Enquiry CRUD</title>
</head>
<body>
<?php 
       include "./delet.php";
    ?>
    <!--sidebar-->
    <div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="../assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>
<hr style="border:1px solid; background-color:yellow; border-color:yellow;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="./answered.php"  onclick="showQueries()" ><i class="fa fa-users"></i> NewQueries</a>
    <a href="./report.php"   onclick="Report()" ><i class="fa fa-th-large"></i> Report</a>
    <a href="./viewnewqueries.php"   onclick="OldQueries()" ><i class="fa fa-th-list"></i> AllQueries</a>    
    <a href="./allqueries.php"   onclick="Deactivate()" ><i class="fa fa-th"></i> AnsweredQueries</a>
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>
 <div class="container mt-4">
<div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Enquiry Details
                            <a href="student-create.php" class="btn btn-primary float-end">Enquiry</a>
                        </h4>
                    </div>
                    <div class="cards-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr style="color: black;">
                                    <th >Sl.No.</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Query</th>
                                    <th>Course</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                include_once "../config/dbconnect.php";
                               $sql="SELECT nd.*,st.Email,st.Name  from (select * from users2 where status=1) as nd LEFT JOIN users1 st on st.query_id= nd.query_id ";
            
                                $result=$conn-> query($sql);
                                $count=1;
                                if ($result-> num_rows > 1){
                                  while ($row=$result-> fetch_assoc()) {
                                     
                                $id1=$row['query_id'];
                                  
                                            ?>
                                            <tr>
                                            
                                            <td><?= $id1; ?></td>
                                                <td><?= $row['Name']; ?></td>
                                                <td><?= $row['Email']; ?></td>
                                                <td><?= $row['Query']; ?></td>
                                                <td><?= $row['Courses']; ?></td>
                                                <td><?= $row['registered_at']; ?></td>
                                                <td>
                                                    <a href="viewenquiry.php?id=<?= $id1; ?>" class="btn btn-info btn-sm">Reply</a>
                                                    
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                </tbody>
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>