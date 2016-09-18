<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if(!(($_SESSION['privilege']=="staff") || ($_SESSION['privilege']=="lecturer"))){redirect_to("../../index.php");}

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
    global $database;
    $result_set = $database->query("SELECT * FROM subjects");
    //$result=Subject::find_by_sql("SELECT * FROM subjects");

    if(isset($_POST['submit'])){
        
        if(empty($_POST['batch'])){
            $errors['batch'] = "* Subject ID field cannot be empty.";
        }

        $batch=trim(mysql_prep($_POST['batch']));
        $sub_id=trim(mysql_prep($_POST['sub_id']));

        $sb=Subject::find_by_id($sub_id);

        $course=$sb->course;
        $sem_id=$sb->sem_id;
        $year=$sb->year;
        $id=$batch.$course.$sem_id;
        //echo $id;
        if(empty($errors)){
            global $database;
            $result = $database->query("SHOW TABLES LIKE '$id'");
            $tableExist = mysqli_num_rows($result) > 0;
            if(!$tableExist){
                echo '<script language="javascript">';
                echo 'alert("Semester is not started yet!")';
                echo '</script>';
                
            }else{
                redirect_to("view_results_list.php?id=$id&sub_id=$sub_id");
                
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

    <title>UCSC-SMS-viewresults</title>

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
            }
            if($_SESSION['privilege']=="lecturer"){
                 require_once("headers/lec_menu.php");
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
                    
                    <div class="col-sm-12">
                        <h3 class="page-header">
                         <i class="fa fa-trophy fa-fw"></i> Student Results <small>View Results</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <?php 
                                                                if($_SESSION['privilege']=="staff"){
                                                                    echo "<a href='staff.php'>Home</a>";
                                                                }
                                                                if($_SESSION['privilege']=="lecturer"){
                                                                     echo "<a href='lecturer.php'>Home</a>";
                                                                }
                                                            ?>
                            </li>
                            <li class="active">
                                <i class="fa fa-trophy fa-fw"></i>  <a href="view_results.php">View Results</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-sm-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View Student Results 
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
                                        <form id="user_form" action="view_results.php" method="post" role="form">
                                            <div class="form-group">
                                                <label>Batch</label>
                                                <input class="form-control" type="text" name="batch" id="batch" placeholder="2014" title="Batch" required>
                                                <p class="help-block"><?php //if(isset($errors['batch'])) echo $errors['batch']; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Subject</label>
                                                    <select class="form-control"  name="sub_id" onfocus='this.size=5;' 
                                                                                                                        onblur='this.size=1;' 
                                                                                                                        onchange='this.size=1; this.blur();'>
                                                        <?php
                                                            while ($row = mysqli_fetch_array($result_set,MYSQL_ASSOC)) {
                                                                echo "<option name='sub_id' value=".$row["sub_id"]." data-placement='bottom' >".$row["sub_id"]." ".$row["sub_name"]."</option>";
                                                            }
                                                        ?>
                                                        
                                                    </select>
                                            </div>
                                            
                                            <input class="btn btn-primary" type="submit" name="submit" value="View Results"></input>
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
