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
                            
                            
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-book"></i>  Allocated Subjects
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Sub ID</th>
                                            <th class="text-center">Subject Name</th>
                                            <th class="text-center">Exam Results</th>
                                            <th class="text-center">Repeat Results</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            
                                            $staff_id=$_SESSION['staff_id'];
                                            $arr=Subject::find_sub_by_lec($staff_id);
                                            
                                                foreach ($arr as $sub){
                                                    echo "<tr><td class='text-center'>";
                                                    echo $sub->sub_id."</td>"."<td class='text-center'>";
                                                    $nm=Subject::find_by_id($sub->sub_id);
                                                    echo $nm->sub_name."</td>"."<td class='text-center'>";
                                                    echo "<a href='input_batch.php?sub_id=$sub->sub_id' class='btn btn-primary'>Enter Results</a></td><td class='text-center'>";
                                                    echo "<a href='enter_index.php?sub_id=$sub->sub_id' class='btn btn-default'>Enter Results</a></td></tr>";
                                                  
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
