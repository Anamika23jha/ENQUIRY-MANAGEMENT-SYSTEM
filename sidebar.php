<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;">Hello, Admin</h5>
</div>

<hr style="border:1px solid; background-color:yellow; border-color:yellow;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="./adminView/answered.php"  onclick="showQueries()" ><i class="fa fa-users"></i> NewQueries</a>
    <a href="./adminView/Reports.php"   onclick="Report()" ><i class="fa fa-th-large"></i> Report</a>
    <a href="./adminView/viewnewqueries.php"   onclick="OldQueries()" ><i class="fa fa-th-list"></i> AllQueries</a>    
    <a href="./adminView/allqueries.php"   onclick="Deactivate()" ><i class="fa fa-th"></i> AnsweredQueries</a>
    <a href="./adminView/userregistration.php"   onclick="Deactivate()" ><i class="fa fa-th"></i> Add Admin</a>
  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


