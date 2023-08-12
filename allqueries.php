<?php
    include"./delet.php";
?>



<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="../assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:yellow; border-color:yellow;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="../index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="../adminView/answered.php"  onclick="showQueries()" ><i class="fa fa-users"></i> NewQueries</a>
    <a href="../adminView/Reports.php"   onclick="Report()" ><i class="fa fa-th-large"></i> Report</a>
    <a href="../adminView/viewnewqueries.php"   onclick="OldQueries()" ><i class="fa fa-th-list"></i> AllQueries</a>    
    <a href="../adminView/allqueries.php"   onclick="Deactivate()" ><i class="fa fa-th"></i> AnsweredQueries</a>
    
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>





            
<div style="background-color:brown;background-color:brown; margin-left: 200px; margin-top:auto;">
<div>
  <h2>All answered queries</h2>
  <table class="table">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Query</th>
        <th class="text-center"> Answered at</th>
        <th class="text-center">Answer</th>
      </tr>
    </thead>
    
    <?php
    
     include_once "../config/dbconnect.php";
      $sql=

      $query = "SELECT nd.*,st.Email,st.Name  from (select * from users2 where status=0) as nd LEFT JOIN users1 st on st.query_id= nd.query_id ";
      $result=$conn-> query($sql);
      $count=0;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
         
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["Name"]?></td>
      <td><?=$row["Email"]?></td>
      <td><?=$row["Query"]?></td>
      <td><?=$row["registered_at"]?></td>
      <td><?=$row["Answer"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    
    ?>
  </table>
</div>
  </div>