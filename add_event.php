<?php
  require "common/header.php";
?>
<!-- Menu  -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php">Cyber Shadez</a> 
            </div>
              <div style="color: white;padding: 15px 50px 5px 50px;float: right;font-size: 16px;">  
                <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> 
              </div>
      </nav>  
<?php
  require "common/navigation.php";
?> 
        <div id="page-wrapper" >
            <div id="page-inner">
                 <div class="row">
                    <div class="col-md-12">
                     <h2>Add Event</h2>   
                    </div>
                </div> 
                 <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel-body">
                        <form class="form-horizontal" action="add_event_insert.php" method="post" enctype="multipart/form-data">
                                        
                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Event Name</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="event_name" required placeholder=" Event Name">
                                                </div>
                                        </div>
                                         <div class="form-group">
                                                <label class="col-lg-3 control-label">Event Description</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="event_description" required placeholder=" Event Description">
                                                </div>
                                        </div>

                                        <div class="form-group">
                                                <label class="col-lg-3 control-label">Event Venue</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="event_venue" required placeholder="Event Venue">
                                                </div>
                                        </div>
                                         
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Maximum Team Members</label>
                                                <div class="col-lg-6">
                                                    <input class="form-control" type="text" name="max_team_member" required placeholder="Maximum Team Members">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Student Category</label>
                                                <div class="col-lg-6">
                                                    <input type="radio" name="student_category"  value="PG"> Post Graduate &nbsp &nbsp &nbsp
                                                    <input type="radio" name="student_category" value="UG">
                                                     Under Graduate  &nbsp &nbsp &nbsp
                                                     <input type="radio" name="student_category" value="ALL">
                                                     All
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-lg-3 control-label">Upload Image</label>
                                                <div class="col-lg-6">
                                                    <input type="file" class="form-control" name="image">
                                                </div>
                                            </div>
                                           
                                            <div class="form-group" >
                                                
                                                <div class="col-lg-6" align="center" >
                                                    
                                                    <button class="btn btn-primary" name="btn_sb" type="submit">Submit</button>
                                                </div>
                                            </div>
                        </form>
                    </div>
                 </div>
            </div>
        </div>   
           
<?php
require "common/footer.php";
?>

