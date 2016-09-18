<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff" && $_SESSION['privilege']!="academic"){redirect_to("../../index.php");}

?>

<?php
                                //echo "You have logged in as: ";
                                //echo $session->privilege." user"."<br/><br/>";
                                //print_r(User::find_by_id($session->user_id));
                                $arr=User::find_by_id($session->user_id);
                                //echo "Name: ";
                                //echo $arr->name."<br/><br/>";
                                //echo "Staff_id:";
                                //echo $arr->staff_id."<br/><br/>";
                                //echo "email:";
                                //echo $arr->email."<br/>";
                                
                        ?>

<?php

    if(isset($_POST['submit'])){
        
        if(empty($_POST['batch'])){
            $errors['batch'] = "* Please enter a valied batch ID !";
        }elseif(!preg_match("/^[0-9]{4}$/",$_POST['batch'])){
            $errors['batch'] = "* Invalied  batch ID.";
        }
        if(strlen($_POST['batch'])!=4){
            $errors['batch'] = "* Invalied  batch ID !";
        }
        
        $batch=trim(mysql_prep($_POST['batch']));
        $course=trim(mysql_prep($_POST['course']));
        $id=$batch.$course;
        $id.="overallgpa";
        if(empty($errors)){

            global $database;
            $result =$database->query("SHOW TABLES LIKE '$id'");
            $tableExist = mysqli_num_rows($result) > 0;
            if(!$tableExist){
                echo '<script language="javascript">';
                echo 'alert("error!GPA Still not calculated!")';
                echo '</script>';
                
            }else{
                redirect_to("view_gpa_list.php?id=$id");
            }
            
            
            
        
        }else{
            if(count($errors)==1){
                //$message="There was 1 error in the form.";
            }else{
                //$message="There were ". count($errors)." errors in the form.<br/>";
            }
        }
            
            
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

    <title>UCSC-SMS-Staff-viewsemesterGpa</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

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
        <?php
            if($_SESSION['privilege']=="staff"){
                require_once("headers/staff_menu.php");
            }else{
                require_once("headers/aca_menu.php");
            }
        ?>

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
                         <i class="fa fa-mortar-board fa-fw"></i> GPAs <small>View GPA</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-mortar-board fa-fw"></i>  <a href="view_orl_gpa.php">2nd Year GPA</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View 2nd Year GPA
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <form role="form">
                                            <div class="form-group">
                                               <!-- <label>Text Input</label>
                                                <input class="form-control">
                                                <p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-6">
                                        <div class="well">
                                        <form id="user_form" action="view_orl_gpa.php" method="post" role="form">
                                            <div class="form-group">
                                                <label>Batch</label>
                                                <input class="form-control" type="text" name="batch" id="batch" placeholder="2014" title="Batch" required>
                                                <p class="help-block"><?php if(isset($errors['batch'])) echo $errors['batch']; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                    <select class="form-control"  name="course">
                                                        <option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                        <option name="course" value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                    </select>
                                            </div>
                                            <input class="btn btn-primary" type="submit" name="submit" value="View 2nd Year GPA"></input>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </form>
                                        </div>
                                    </div>
                                
                                    <div class="col-lg-3">
                                        <form role="form">
                                            <div class="form-group">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="form-group">
                                                <p class="help-block"></p>
                                            </div>
                                        </form>
                                    </div>
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
