
<?php 
       include "./delet.php";
      
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
    <a href="./answered.php"  onclick="showQueries()" ><i class="fa fa-users"></i> NewQueries</a>
    <a href="./Reports.php"   onclick="Report()" ><i class="fa fa-th-large"></i> Report</a>
    <a href="./viewnewqueries.php"   onclick="OldQueries()" ><i class="fa fa-th-list"></i> AllQueries</a>    
    <a href="./allqueries.php"   onclick="Deactivate()" ><i class="fa fa-th"></i> AnsweredQueries</a>
    
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>

<div id="ordersBtn" >
  <h2>All Queries</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Query</th>
        <th>Date</th>
        <th>Status</th>
        <th></th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT nd.*,st.Email, st.Name  from users1 st, users2 nd where st.query_id = nd.query_id";
      $result=mysqli_query($conn,$sql);
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 1){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["Name"]?></td>
          <td><?=$row["Email"]?></td>
          <td><?=$row["Query"]?></td>
          <td><?=$row["registered_at"]?></td>
          
         
           <?php 
           
                if($row["status"]==1){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeQueryStatus('<?=$row['Query']?>')">Pending </button></td>
            <?php
                        
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeQueryStatus('<?=$row['Query']?>')">Answered</button></td>
        
            <?php
            
                }
              ?>
       
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>

<!-- Modal -->

<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
       
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Enquiry Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="enquiry-view-modal modal-body">
        
        </div>
      </div>/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
  
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.enquiry-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>