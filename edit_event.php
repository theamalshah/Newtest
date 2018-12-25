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
?>             <!--sidebar end-->
            <!--main content start-->
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Edit Event</h2>  
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                  <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Event
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">            
                <section id="main-content">
                <section class="wrapper">
                    <div class="form-w3layouts">
                        <!-- page start-->
                        <div class="row">
                            <div class="col-lg-6">
                                <section class="panel">
                                    <header class="panel-heading">
                                        EDIT EVENT
                                    </header>
                                    <div class="panel-body">
                                        <form class="form-horizontal" id="ct_form" action="update_event.php" method="post">
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Event Name</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="event_name" value="<?php echo $row['event_name']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-4 control-label">Event Description</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="event_description" value="<?php echo $row['event_description']; ?>">
                                            </div>
                                        </div>   
                                         <div class="form-group">
                                            <label class="col-lg-4 control-label">Event Time</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="event_timestamp" value="<?php echo $row['event_timestamp']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-4 control-label">Event Venue</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="event_venue" value="<?php echo $row['event_venue']; ?>">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="col-lg-4 control-label">Maximum Team Members</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="max_team_member" value="<?php echo $row['max_team_member']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Student Category</label>
                                            <div class="col-lg-6">
                                                <input type="hidden" name="event_id" value="<?php echo $event_id; ?>">
                                                <input class="form-control" type="text" name="student_category" value="<?php echo $row['student_category']; ?>">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                                </div>
                                        </div>
                                            
                                        </form>
                                    </div>
                                </section>
                            </div>
                            <div class="col-lg-5">
                                <section class="panel">
                                    <header class="panel-heading">
                                        Edit Event Image
                                    </header>
                                    <div class="panel-body">
                                       <form class="form-horizontal" id="ct_form" action="update_event.php" method="post" enctype="multipart/form-data">
                                          
                                            <div class="form-group">
                                                <label class="col-lg-5 control-label">Event Image-1</label>
                                                <div class="col-lg-6">
                                    
                                                    <input class="form-control" type="file" name="image">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary"  name="btn_sb2" type="submit">Submit</button>
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <!-- page end-->
                </div>
            </section>
            <!-- footer -->
           <?php
require "common/footer.php";
?>