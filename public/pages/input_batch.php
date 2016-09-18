<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="lecturer"){redirect_to("../../index.php");}

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
    $staff_id=$_SESSION['staff_id'];
    $sub_id=$_GET['sub_id'];
    $sm=Subject::find_by_id($sub_id);
    $sem_id=$sm->sem_id;

    
    if(isset($_POST['submit'])){
        
        if(empty($_POST['batch'])){
            $errors['batch'] = "* Please enter the Batch.!";
        }
        
        /*if(empty($_POST['sem_id'])){
            $errors['sem_id'] = "* Semster ID field cannot be empty.!";
        }*/
        
        $batch_id=trim(mysql_prep($_POST['batch']));
        //$sem_id=trim(mysql_prep($_POST['sem_id']));
        $course=trim(mysql_prep($_POST['course']));
        $table=$batch_id.$course.$sem_id;
        if(empty($errors)){
            global $database;
            $result = $database->query("SHOW TABLES LIKE '$table'");
            $tableExist = mysqli_num_rows($result) > 0;
            if($tableExist){
                redirect_to("view_st_list.php?table=$table&staff_id=$staff_id&sub_id=$sub_id&sem_id=$sem_id&batch=$batch_id&course=$course");
            }else{
                echo '<script language="javascript">';
                echo 'alert("Semester has not been started yet!")';
                echo '</script>';
            }
                
        }else{
            if(count($errors)==1){
                //$message="There was 1 error in the form.";
            }else{
                //$message="There were ". count($errors)." errors in the form.<br/>";
            }
        }
            
            
    }else{
        $batch="";
        $sem_id="";
        $course="";
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

    <title>UCSC-SMS-Lecturer-Home</title>

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
        <?php require_once("headers/lec_menu.php");?>

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
                            <i class="fa fa-trophy fa-fw"></i> Student Results <small> Enter Results</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-trophy"></i>  <a href="view_lec_sub.php">Enter Results</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bank"></i>  <a href="input_batch.php?sub_id=<?php echo $sub_id;?>">Input Batch</a>
                            </li>
                            
                            
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php
                                                    $sem=$sm->sem_id;
                                                    $key=$sem%2;
                                                    $out="";
                                                    if($key==0){
                                                        $out="2nd Semester";
                                                    }else{
                                                        $out="1st Semester";
                                                    }?>
                                <i class="fa fa-book"></i> Batch Details <div class="pull-right"><?php echo $sub_id." ".$sm->sub_name." ".$sm->year." ".$out; ?></div>
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
                                        <form id="input_batch" action="input_batch.php?sub_id=<?php echo $sub_id;?>" method="post" role="form">
                                            <div class="form-group">
                                                <label>Batch</label>
                                                <input class="form-control" type="text" name="batch" id="batch" placeholder="2014" title="Batch" required>
                                                <p class="help-block"><?php //if(isset($errors['batch'])) echo $errors['batch']; ?></p>
                                            </div>
                                            <!--<div class="form-group">
                                                <label>Semester ID</label>
                                                <input class="form-control" type="text" name="sem_id" id="sem_id" placeholder="5" title="1,2,3,4,5...,8" required>
                                                <p class="help-block"><?php //if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></p>
                                            </div>-->
                                            <div class="form-group">
                                                <label>Course Name</label>
                                                    <select class="form-control"  name="course">
                                                        <option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                        <option name="course" value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                    </select>
                                            </div>
                                            <input class="btn btn-primary" type="submit" name="submit" value="View Students"></input>
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
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        

    </div>
    <!-- /#wrapper -->

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
