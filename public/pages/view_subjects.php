<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
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
                               // $arr2=User::find_by_staff_id("UCSC001");
                        ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC-SMS-Staff-Home</title>

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
                         <i class="fa fa-book fa-fw"></i> Subjects <small> View Subjects</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-book"></i>  <a href="#" data-toggle="modal" data-target="#myModal1">View Subjects</a>
                            </li>
                        </ol>
                        
                    </div>
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                View Subjects
                            </div>
                            <div class="panel-body">
                                <div class="col-lg-12">
                                    <div class="col-lg-8">
                                <?php 
                                $str1="All subjects of ";
                                $str2=" degree programme.";

                                if($course=="CS"){
                                    echo "<h5>".$str1."<strong>computer science</strong>".$str2."</h5>";
                                }
                                else{
                                    echo "<h5>".$str1."<strong>information systems</strong>".$str2."</h5>";
                                }

                                ?>
                            </div>
                            <div class="col-lg-4">
                                <a href="#" data-toggle="modal" data-target="#myModal1" class="btn btn-default pull-right">Select Course</a>
                                </div>
                                </div>
                                <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Subject ID</th>
                                            <th>Subject Name</th>
                                            <th>Year</th>
                                            <th>Semester ID</th>
                                            <th>Lecturers</th>
                                            <th>Edit</th>
                                            <th>Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                            
                                            $arr=Subject::find_by_course($course);
                                            
                                                foreach ($arr as $sub){
                                                    echo "<tr><td id='tda'>";
                                                    $sem=$sub->sem_id;
                                                    $key=$sem%2;
                                                    $out="";
                                                    if($key==0){
                                                        $out="2nd Semester";
                                                    }else{
                                                        $out="1st Semester";
                                                    }
                                                    echo $sub->sub_id."</td>"."<td id='tda'>";
                                                     echo $sub->sub_name."</td><td id='tda'>";
                                                    echo $sub->year."</td><td id='tda'>";
                                                    echo $out."</td><td id='tda'>";
                                                    
                                                    echo "<a href='allocate_lec.php?sub_id=$sub->sub_id&course=$course' class='btn btn-default'>Allocate Lecturer</a></td>&nbsp<td id='tda'>";
                                                    echo "<a href='edit_subject.php?id=$sub->sub_id&course=$course' class='btn btn-default'>Edit</a></td><td id='tda'>";
                                                    echo "<a href='delete_subject.php?id=$sub->sub_id&course=$course' class='btn btn-default'>Delete</a></td id='tda'></tr>";
                                                  
                                                }
                                        ?>
                                    </tbody>
                                </table>
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
        <??>
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