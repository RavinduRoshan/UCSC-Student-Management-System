<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="lecturer"){redirect_to("../../index.php");}
$table=$_GET['table'];
$staff_id=$_SESSION['staff_id'];
$sub_id=$_GET['sub_id'];
$sem_id=$_GET['sem_id'];
$batch=$_GET['batch'];
$course=$_GET['course'];
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
$sm=Subject::find_by_id($sub_id);
    if(isset($_POST['submit'])){    
        
        $arr=Student::find_students($batch,$course);
        global $database;
        foreach ($arr as $st){
            $index=$st->index_no;
            $mark=$_POST[$index];
            $grade;  
    if ($mark<=100 && $mark>89)
                                    {$grade = 'A+';}
                                else if ($mark<90 && $mark>79)
                                    {$grade = 'A';}
                                else if ($mark<80 && $mark>74)
                                    {$grade = 'A-';}
                                else if ($mark<75 && $mark>69)
                                    {$grade = 'B+';}
                                else if ($mark<70 && $mark>64)
                                    {$grade = 'B';}
                                else if ($mark<65 && $mark>59)
                                    {$grade = 'B-';}
                                else if ($mark<60 && $mark>54)
                                    {$grade = 'C+';}
                                else if ($mark<55 && $mark>49)
                                    {$grade = 'C';}
                                else if ($mark<50 && $mark>44)
                                    {$grade = 'C-';}
                                else if ($mark<45 && $mark>39)
                                    {$grade = 'D+';}
                                else if ($mark<40 && $mark>29)
                                    {$grade = 'D';}
                                else if ($mark<30 && $mark>19)
                                    {$grade = 'D-';}
                                else if ($mark<20 && $mark>=0)
                                    {$grade = 'E';}
                                else {$grade = 'F';}
                                


            $sql = "INSERT INTO `ucsc_sms`.`$table` (";
            $sql.="`index_no` ,";
            $sql.="`sub_id` ,";
            $sql.="`mark` ,"; 
            $sql.="`grade`";
            $sql.=")";
            $sql.="VALUES (";
            $sql.="'{$index}', '{$sub_id}','{$mark}','{$grade}'";
            $sql.=") ";
            
            $query="SELECT * FROM `$table` WHERE `sub_id` = '{$sub_id}' AND `index_no`='{$index}'";
            if(mysqli_num_rows($database->query($query))==0){
                $database->query($sql);
                echo '<script language="javascript">';
                echo 'if(confirm("Results entered to the database!")==true){ window.location.assign("view_lec_sub.php")}';
                echo '</script>';
            }else{
                echo '<script language="javascript">';
                echo 'if(confirm("Results has been already entered for this subject!")==true){ window.location.assign("view_lec_sub.php")}';
                echo '</script>';
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

    <title>UCSC-SMS-Lecturer-Home</title>

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
        <?php require_once("headers/lec_menu.php");?>

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
                            <i class="fa fa-trophy fa-fw"></i> Student Results <small> Enter Results</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-trophy"></i>  <a href="view_lec_sub.php">Enter Results</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bank"></i>  <a href="input_batch.php?sub_id=<?php echo $sub_id;?>">Input Batch</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i>  
                                <?php echo "<a href='view_st_list.php?table=$table&staff_id=$staff_id&sub_id=$sub_id&sem_id=$sem_id&batch=$batch&course=$course'>View Students</a>";?>
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
                                <i class="fa fa-book"></i><?php echo " All Students of ".$batch." ".$course." batch";?><div class="pull-right"><?php echo $sub_id." ".$sm->sub_name." ".$sm->year." ".$out; ?></div>
                            </div>
                            <div class="panel-body">
                                <div class="dataTable_wrapper table-responsive">
                                    <form id="enter_res" action="view_st_list.php?table=<?php echo $table;?>&staff_id=<?php echo $staff_id;?>&sub_id=<?php echo $sub_id;?>&sem_id=<?php echo $sem_id;?>&batch=<?php echo $batch;?>&course=<?php echo $course;?>" method="post" >
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Index No</th>
                                            <th class="text-center">Marks</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                
                                            $arr=Student::find_students($batch,$course);
                                                foreach ($arr as $st){
                                                    echo "<tr><td class='text-center'>";
                                                     echo $st->index_no."</td><td class='text-center'>";
                                                    $idn=$st->index_no;
                                                    echo "<input type=\"number\" name=\"$idn\"  min=\"0\" max=\"100\" size=\"5\" maxlength=\"3\" required>";
                                    }
                                
                                ?>
                                    </tbody>
                                </table>
                                <input type="submit" name="submit" class="btn btn-primary" value="Enter Results" />
                                <button type="reset" class="btn btn-default">Reset</button>
                            </form>
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

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>
