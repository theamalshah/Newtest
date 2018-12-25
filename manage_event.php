<?php 
session_start();

require "dbconnect.php";
require "common/header.php";



$qry="SELECT * FROM event_table WHERE is_active!=0";

$rs=mysqli_query($conn,$qry);

?>
<div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Cyber Shade</a> 
            </div>
              <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
              </div>
      </nav>  
<?php
  require "common/navigation.php";
?> 
<!--sidebar end-->
<!--main content start-->
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Manage User</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             USER TABLE
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="">
                                    <thead>
          <tr>
            <th>ID</th>
            <th>Event Name</th>
            <th>Event Description</th>
            <th>Event Time</th>
            <th>Event venue </th>
            <th>Max Team members </th>
            <th>Student Category</th>
            
            <th>Image</th>
           
            <th>Is_Active</th>
            <th>Action</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <?php
            while($row=mysqli_fetch_assoc($rs))
                {

        ?>
        <tbody>
            
            <tr class="odd gradeX">
                                <td><?php echo $row['event_id']; ?></td>
                                <td><?php echo $row['event_name']; ?></td>
                                <td><?php echo $row['event_description']; ?></td>
                                <td><?php echo $row['event_timestamp']; ?></td>
                                <td><?php echo $row['event_venue']; ?></td>
                                <td><?php echo $row['max_team_member']; ?></td>
                                <td><?php echo $row['student_category']; ?></td>

                                <td><?php $path=$row['image']; ?><img src=<?php echo $path;?> width="90" height="70"/></td>

                                
                                 <td><b><?php if($row['is_active']==1){ echo "Active";}else { echo "Block";} ?></b></td>

                                 <td><a href="action_event.php?id=<?php echo $row['event_id']; ?>&
                                      status=<?php echo $row['is_active']; ?>">Change</a></td>

                                <td><a href="edit_event.php?event_id=<?php echo $row['event_id']; ?>"><span class="glyphicon glyphicon-pencil" style="color: green;"></a></td>

                                <td><a href="delete_event.php?event_id=<?php echo $row['event_id']; ?>"><span class="glyphicon glyphicon-trash" style="color: red;"></a></td>
          </tr> 
          
        </tbody>
        <?php } ?>
      </table>
     </div> 
    
  </div>
</div>
</section>
 <!-- footer -->
		  <?php
require "common/footer.php";
          ?>