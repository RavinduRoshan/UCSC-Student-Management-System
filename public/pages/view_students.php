<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}

?>

<?php
                                //echo "You have logged in as: ";
                                //echo $session->privilege." user"."<br/><br/>";
                                //print_r(User::find_by_id($session->user_id));
                                $arry=User::find_by_id($session->user_id);
                                //echo "Name: ";
                                //echo $arr->name."<br/><br/>";
                                //echo "Staff_id:";
                                //echo $arr->staff_id."<br/><br/>";
                                //echo "email:";
                                //echo $arr->email."<br/>";
                                
                        ?>
<?php

if(isset($_POST['submit2'])){
    $arr=array();
    $sele_batch="";
    $sele="";
    $batch="";
    $course="";
    $errors = array();
    if(trim(mysql_prep($_POST['index_no']))==""){
        $errors['index_no'] = "Please enter an index number to search!";
    }
    
    $index_no=trim(mysql_prep($_POST['index_no']));
    if(empty($errors)){
    $arr=Student::find_by_id($index_no);
    if(!$arr){
        $errors['index_no'] = "* No Records!";
        redirect_to("view_students.php");
    }
    }
}elseif(!empty($_POST['submit1'])){
    $arr=array();
    $sele_batch="";
    $sele="";
    
    $batch=trim(mysql_prep($_POST['batch']));
    $course=trim(mysql_prep($_POST['course']));
        
    if($course=="All"){
        $arr=Student::find_students_batch($batch);
        $sele="all";
        
    }elseif($course=="CS"){
        $arr=Student::find_students($batch,$course);
        $sele="cs";
    }elseif($course=="IS"){
        $arr=Student::find_students($batch,$course);
        $sele="is";
    }
    $sele_batch=$batch;
    
}else{
    $index_no="";
    $batch="";
    $course="";
    $arr=array();
    $sele="";
    $sele_batch="";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC-SMS-Staff-View_students</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php require_once("headers/staff_menu.php");?>

                <div class="col-sm-2"  style="float: right; width:250px; margin-top: 18px;">
                    <?php require_once("headers/login_info.php");?>
                    <?php require_once("headers/calender.php");?>
                </div>


        <!-- Page Content -->
        <div id="page-wrapper" >
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <h3 class="page-header">
                         <i class="fa fa-users fa-fw"></i> Students <small> View Students</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i>  <a href="view_students.php">View Students</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Search Students
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form  action="view_students.php" method="post" name="submit1" role="form">
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="form-group">
                                                    <!--<label>Selects</label>-->
                                                    <select class="form-control" title="Select Batch" name="batch">
                                                        <option name="batch" value="<?php echo htmlentities($batch="2012"); ?>" <?php if($sele_batch == "2012"){ print "selected='selected'"; } ?>>2012</option>
                                                        <option name="batch" value="<?php echo htmlentities($batch="2013"); ?>" <?php if($sele_batch == "2013"){ print "selected='selected'"; } ?>>2013</option>
                                                        <option name="batch" value="<?php echo htmlentities($batch="2014"); ?>" <?php if($sele_batch == "2014"){ print "selected='selected'"; } ?>>2014</option>
                                                        <option name="batch" value="<?php echo htmlentities($batch="2015"); ?>" <?php if($sele_batch == "2015"){ print "selected='selected'"; } ?>>2015</option>
                                                        <option name="batch" value="<?php echo htmlentities($batch="2016"); ?>" <?php if($sele_batch == "2016"){ print "selected='selected'"; } ?>>2016</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <!--<label>Selects</label>-->
                                                    <select class="form-control" title="Select Course" name="course">
                                                        <option name="course" value="<?php echo htmlentities($course="All"); ?>" <?php if($sele == "all"){ print "selected='selected'"; } ?>>All Students</option>
                                                        <option name="course" value="<?php echo htmlentities($course="IS"); ?>" <?php if($sele == "is"){ print "selected='selected'"; } ?>>Information Systems</option>
                                                        <option name="course" value="<?php echo htmlentities($course="CS"); ?>" <?php if($sele == "cs"){ print "selected='selected'"; } ?>>Computer Science</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <input id="submit1" name="submit1" class="btn btn-default fa-search" type="submit" value="Search">
                                                </div>
                                            </div>
                                        
                                            
                                        </div>
                                        
                                        

                                            
                                        
                                        
                                    </div>

                                   

                                    <div class="col-lg-3">
                                        <div class="form-group input-group">
                                            <input type="text" id="index_no" name="index_no" class="form-control" placeholder="Search by Index">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" id="submit2" name="submit2" type="submit"><i class="fa fa-search"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                     </form>
                                </div>
                                <p class="help-block"><div ><h5 class="alert alert-warning"><?php if(isset($errors['index_no'])) echo $errors['index_no']; ?></h5></div></p>

                                <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Index</th>
                                            <th>Reg No</th>
                                            <th>Name</th>
                                            <th>Course</th>
                                            <!--<th>Date of Birth</th>
                                            <th>Email</th>-->
                                            <th>Update</th>
                                            <th>Unregister</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                //echo "<h4>Students: </h4>"."<br/>";
                                /*echo "<tr><td id='tda'>";
                                        echo "<h4>Index No </h4>"."<br/>"."</td>"."<td  id='tda'>";
                                        echo "<h4>Reg: No </h4>"."<br/>"."</td>"."<td  id='tda'>";
                                        echo "<h4>Name with Initials </h4>"."<br/>"."</td>"."<td  id='tda'>";
                                        echo "<h4>Course </h4>"."<br/>"."</td><td  id='tda'>";
                                        echo "<h4>Date of Birth </h4>"."<br/>"."</td><td  id='tda'>";
                                        echo "<h4>Email </h4>"."<br/>"."</td><td  id='tda'>";*/
                                //$arr=Student::find_all();
                                    foreach ($arr as $st){
                                        echo "<tr><td id='tda'>";
                                        echo $st->index_no."</td><td id='tda'>";
                                        echo $st->reg_no."</td><td id='tda'>";
                                        echo $st->nwi."</td><td id='tda'>";
                                        echo $st->course."</td><td id='tda'>";
                                        //echo $st->dob."</td><td id='tda'>";
                                        //echo $st->email."</td><td id='tda'>";
                                
                                        $idn=$st->index_no;
                                        echo "<a href='edit_student.php?id=$idn'  class='btn btn-default'> Edit Info </a></td><td id='tda'>";
                                        //echo "<a href='delete_student.php?id=$idn'  class='btn btn-default'>Unregister</a></td></tr>";
                                        echo '<button class="btn btn-outline btn-danger" data-toggle="modal" data-target="#delete'.$idn.'">Unregister</button></td></tr>';
                                    }
                                
        
                                ?>
                                    </tbody>
                                </table>
                            </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php foreach ($arr as $st){ $idn=$st->index_no;?>
        <div class="modal fade" id="delete<?php echo $idn; ?>" tabindex="-1" role="dialog" aria-labelledby="jobModalLabel<?php echo $idn; ?>" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
                    <h4 class='modal-title' id='myModalLabel'>Delete Confirmation</h4>
                </div>
              <div class="modal-body">
                <p class="red">ARE YOU SURE YOU WANT TO DELETE THIS STUDENT?</p>
                <h5><?php echo $st->nwi?></h5>
              </div>
              <div class="modal-footer">
                <input class="btn btn-danger" type=button onClick="parent.location='delete_student.php?id=<?php echo $idn?>'" value='Yes'>
                <button type="button" class="btn " data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>


        

        <?php }?>
        

    </div>
    <!-- /#wrapper -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title" id="myModalLabel">Select course</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div style="text-align:center;">
                                                    <a href=view_subjects.php?course=CS class="btn btn-outline btn-primary btn-lg"><h4>Computer Science</h4></a>
                                                    <a href=view_subjects.php?course=IS class="btn btn-outline btn-primary btn-lg"><h4>Information System</h4></a>
                                                </div>
                                               </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>


    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
