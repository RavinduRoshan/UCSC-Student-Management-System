<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if(!(($_SESSION['privilege']=="staff") || ($_SESSION['privilege']=="lecturer"))){redirect_to("../../index.php");}
$id=$_GET['id'];
$sub_id=$_GET['sub_id'];
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

 ?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UCSC-SMS-Staff-semesterGpa</title>

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
                    
                    <div class="col-lg-12">
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
                                <i class="fa fa-mortar-board fa-fw"></i> <a href="view_results_list.php?id=<?php echo $id;?>&sub_id=<?php echo $sub_id;?>">View Results</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php 
                                    echo "Results of ".substr($id, 0, -3)." ".substr($id, -3, -1)." Batch";                                   
                                ?>
                                <?php
                                                    $sem=$sm->sem_id;
                                                    $key=$sem%2;
                                                    $out="";
                                                    if($key==0){
                                                        $out="2nd Semester";
                                                    }else{
                                                        $out="1st Semester";
                                                    }?>
                                <div class="pull-right"><?php echo $sub_id." ".$sm->sub_name." ".$sm->year." ".$out; ?></div>
                            </div>
                            <div class="panel-body">
                                <div class="col-sm-12">
                                    <div class="row">
                                <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Index No</th>
                                            <!--<th class="text-center">Reg No</th>-->
                                            <th class="text-center">1st Attempt</th>
                                            <th class="text-center">2nd Attempt</th>
                                            <th class="text-center">3rd Attempt</th>
                                            <th class="text-center">4th Attempt</th>
                                            <th class="text-center">5th Attempt</th>
                                            <th class="text-center">6th Attempt</th>
                                        </tr>
                                        
                    
                                    </thead>
                                    <tbody>
                                        <?php
                                                
                                                $sql1="SELECT * FROM {$id} WHERE sub_id='{$sub_id}'";
                                                $result1=$database->query($sql1);
                                                
                                                    while($arr = mysqli_fetch_array($result1,MYSQL_ASSOC)){
                                                        echo "<tr><td class='text-center'>";
                                                        echo $arr["index_no"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade2"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade3"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade4"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade5"]."</td>"."<td class='text-center'>";
                                                        echo $arr["grade6"]."</td></tr>";
                                                      
                                                    }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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
