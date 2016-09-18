<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff" && $_SESSION['privilege']!="academic"){redirect_to("../../index.php");}
$id=$_GET['id'];
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
                                <i class="fa fa-mortar-board fa-fw"></i> <?php 
                                    if(strlen($id)==10){
                                        echo "<a href='view_gpa.php'>Semester GPA</a>";
                                    }else if(strlen($id)==16){
                                        echo "<a href='view_orl_gpa.php'>2nd Year GPA</a>";
                                    }else if(strlen($id)==14){
                                        echo "<a href='view_final_gpa.php'>3rd Year GPA</a>";
                                    }else{
                                        echo "<a href='view_4thyr_gpa.php'>4th Year GPA</a>";
                                    }

                                ?>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading">
                                <?php 
                                    if(strlen($id)==10){
                                        $dm=$id[6];
                                        $year=ceil($dm/2);
                                        $key=$dm%2;
                                                    $out="";
                                                    if($key==0){
                                                        $out="2nd Semester";
                                                    }else{
                                                        $out="1st Semester";
                                                    }
                                        
                                        echo "Year ".$year." ".$out." GPA of ".substr($id, 0, -6)." ".substr($id, -6, -4)." batch.";
                                    }else if(strlen($id)==16){
                                        echo "Second Year Final GPA of ".substr($id, 0, -12)." ".substr($id, -12, -10)." batch.";
                                    }else if(strlen($id)==14){
                                        echo "Third Year Final GPA of ".substr($id, 0, -10)." ".substr($id, -10, -8)." batch.";
                                    }else{
                                        echo "Fourth Year Final GPA of ".substr($id, 0, -15)." ".substr($id, -15, -13)." batch.";
                                    }

                                ?>
                            </div>
                            
                            <div class="panel-body">
                                
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="pull-right" style="margin-bottom: 4px">
                                <a href='gpa_pdfA.php?id=<?php echo $id; ?>'  class='btn btn-danger'><i class="fa fa-print fa-fw"></i> PDF Version</a>
                            </div>
                                <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th class="text-center">Index No</th>
                                            <!--<th class="text-center">Reg No</th>-->
                                            <th class="text-center">GPA</th>
                                            <th class="text-center">Class GPA</th>
                                            <?php
                                                if(strlen($id)==14 || strlen($id)==19){
                                                    echo "<th class='text-center'>Award</th>";
                                                }
                                            ?>
                                        </tr>
                                        
                    
                                    </thead>
                                    <tbody>
                                        <?php
                                                
                                                $sql1="SELECT * FROM ".$id;
                                                $result1=$database->query($sql1);
                                                
                                                    while($arr = mysqli_fetch_array($result1,MYSQL_ASSOC)){
                                                        echo "<tr><td class='text-center'>";
                                                        echo $arr["index_no"]."</td>"."<td class='text-center'>";
                                                        //echo $arr["reg_no"]."</td>"."<td class='text-center'>";
                                                        echo $arr["gpa"]."</td>"."<td class='text-center'>";
                                                        echo $arr["classGPA"]."</td>";
                                                        
                                                            if(strlen($id)==14 || strlen($id)==19){
                                                                if($arr["classGPA"]>=3.50){
                                                                    echo "<td class='text-center'>1st Class</td></tr>";
                                                                }else if($arr["classGPA"]>=3.25){
                                                                    echo "<td class='text-center'>2nd Class(Upper)</td></tr>";
                                                                }else if($arr["classGPA"]>=3.00){
                                                                    echo "<td class='text-center'>2nd Class(Lower)</td></tr>";
                                                                }else{
                                                                    echo "<td class='text-center'> - </td></tr>";
                                                                }
                                                               
                                                            }else{
                                                                echo "</tr>";
                                                            }
                                                    
                                                      
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
