<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}

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
            $errors['batch'] = "* Subject ID field cannot be empty.";
        }
        
        
        $batch=trim(mysql_prep($_POST['batch']));
        $course=trim(mysql_prep($_POST['course']));
        $id=$batch.$course."4thYrFinalGPA";
        $sem1="1";
        $sem2="2";
        $sem3="3";
        $sem4="4";
        $sem5="5";
        $sem6="6";
        $sem7="7";
        $sem8="8";
        $id9="gpa";
        $id1=$batch.$course.$sem1.$id9;
            global $database;
            $result =$database->query("SHOW TABLES LIKE '$id1'");
            $tableExist1 = mysqli_num_rows($result) > 0;
            
            
        $id2=$batch.$course.$sem2.$id9;
            $result =$database->query("SHOW TABLES LIKE '$id2'");
            $tableExist2 = mysqli_num_rows($result) > 0;
            
            
        $id3=$batch.$course.$sem3.$id9;
            $result =$database->query("SHOW TABLES LIKE '$id3'");
            $tableExist3 = mysqli_num_rows($result) > 0;
            
            
        $id4=$batch.$course.$sem4.$id9;
            $result =$database->query("SHOW TABLES LIKE '$id4'");
            $tableExist4 = mysqli_num_rows($result) > 0;

        $id5=$batch.$course.$sem5.$id9;
            $result =$database->query("SHOW TABLES LIKE '$id5'");
            $tableExist5 = mysqli_num_rows($result) > 0;

        $id6=$batch.$course.$sem6.$id9;
            $result = $database->query("SHOW TABLES LIKE '$id6'");
            $tableExist6 = mysqli_num_rows($result) > 0;

        $id7=$batch.$course.$sem7.$id9;
            $result = $database->query("SHOW TABLES LIKE '$id7'");
            $tableExist7 = mysqli_num_rows($result) > 0;

        $id8=$batch.$course.$sem8.$id9;
            $result =$database->query("SHOW TABLES LIKE '$id8'");
            $tableExist8 = mysqli_num_rows($result) > 0;
            
        if(empty($errors)&&$tableExist1&&$tableExist2&&$tableExist3&&$tableExist4&&$tableExist5&&$tableExist6&&$tableExist7&&$tableExist8){
            $new_4thYearFinalgpa=new FourthYearFinalGPA();
            $new_4thYearFinalgpa->batch=$batch;
            $new_4thYearFinalgpa->course=$course;
            $new_4thYearFinalgpa->id=$id;
            $new_4thYearFinalgpa->sem1=$id1;
            $new_4thYearFinalgpa->sem2=$id2;
            $new_4thYearFinalgpa->sem3=$id3;
            $new_4thYearFinalgpa->sem4=$id4;
            $new_4thYearFinalgpa->sem5=$id5;
            $new_4thYearFinalgpa->sem6=$id6;
            $new_4thYearFinalgpa->sem7=$id7;
            $new_4thYearFinalgpa->sem8=$id8;
            $new_4thYearFinalgpa->table1=$batch.$course."4thYrlist";
            $new_4thYearFinalgpa->calculate_4thYearGPA();
            $new_4thYearFinalgpa->calculate_4th_classGPA();
        }else{
            $tables="Following semesters' results has not been entered yet! \\n";
            if(!$tableExist1){
                $tables.="1st year 1st sem \\n";
            }
            if(!$tableExist2){
                $tables.="1st year 2nd sem \\n";               
            }
            if(!$tableExist3){
                $tables.="2nd year 1st sem \\n";     
            }
            if(!$tableExist4){
               $tables.="2nd year 2nd sem \\n";
            }
            if(!$tableExist5){
                $tables.="3st year 1st sem \\n";
            }
            if(!$tableExist6){
                $tables.="3rd year 2nd sem \\n";
            }
            if(!$tableExist7){
               $tables.="4th year 1st sem \\n";
            }
            if(!$tableExist8){
               $tables.="4th year 2nd sem \\n";
            }

            echo '<script type="text/javascript">alert("'.$tables.'");</script>';
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

    <title>UCSC-SMS-Staff-finalgpa</title>

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
                         <i class="fa fa-mortar-board fa-fw"></i> GPAs <small>Calculate GPA</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-mortar-board fa-fw"></i>  <a href="calculate4thYrFinalGPA.php">4th Year GPA</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Calculate Fourth Year GPA
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
                                        <form id="user_form" action="calculate4thYrFinalGPA.php" method="post" role="form">
                                            <div class="form-group">
                                                <label>Batch</label>
                                                <input class="form-control" type="text" name="batch" id="batch" placeholder="2014" title="Batch" required>
                                                <p class="help-block"><?php //if(isset($errors['batch'])) echo $errors['batch']; ?></p>
                                            </div>
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                    <select class="form-control"  name="course">
                                                        <option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                        <option name="course" value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                    </select>
                                            </div>
                                            <input class="btn btn-primary" type="submit" name="submit" value="Calculate"></input>
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
