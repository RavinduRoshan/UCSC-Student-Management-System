<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
$subject_id=$_GET['sub_id'];
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
        
        
        if(empty($_POST['staff_id'])){
            $errors['staff_id'] = "* Please enter staff id of lecturer.";
        }
        
        
        $staff_id=trim(mysql_prep($_POST['staff_id']));
        
         
        if(empty($errors)){
            $sub_lec=new Subject();
            $sub_lec->staff_id=$staff_id;
            $sub_lec->sub_id=$subject_id;
            $rslt=$sub_lec->allocate_lec();
        
            if($rslt){
                //redirect_to("assign_lec.php?sub_id=$subject_id");
            }else{
                echo '<script language="javascript">';
                echo 'alert("error! The subject could not be created !")';
                echo '</script>';
                }
            
        
        }else{
            if(count($errors)==1){
                $message="There was 1 error in the form.";
            }else{
                $message="There were ". count($errors)." errors in the form.<br/>";
            }
        }
            
            
    }else{
        $staff_id="";
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

    <title>UCSC-SMS-Staff-assignlecturers</title>

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
                         <i class="fa fa-book fa-fw"></i> Subjects <small> Assign Lecturers</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-book"></i>  <a href="add_subject.php">Add subject</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i>  <a href="assign_lec.php">Assign Lecturers</a>
                            </li>

                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Assign Lecturers
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <form role="form">
                                            <div class="form-group">
                                               <!-- <label>Text Input</label>
                                                <input class="form-control">
                                                <p class="help-block">Example block-level help text here.</p>-->
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="col-lg-8">
                                        <div class="well">
                                            <div class="row">
                                                <form id="assign_lec" action="assign_lec.php?sub_id=<?php echo $subject_id; ?>" method="post" role="form">
                                                    <p class="help-block"><?php if(isset($errors['sub_id'])) echo $errors['sub_id']; ?></p>
                                                <div class="alert alert-info">
                                                    <?php
                                                        if(isset($_GET['sub_id'])){
                                                            echo "<strong>". $_GET['sub_id']."</strong>";
                                                            $nm=Subject::find_by_id($_GET['sub_id']);
                                                            echo "     <strong>".$nm->sub_name."</strong>";
                                                        }
                                                    ?>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                    <input class="form-control" type="text" name="staff_id" id="staff_id" placeholder="UCSC015" title="Lecturer Staff ID" value="<?php
                                                    //echo htmlentities($full_name); ?>" required>
                                                    <p class="help-block"><?php if(isset($errors['staff_id'])) echo $errors['staff_id']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                           <!-- <label>Text Input</label>-->
                                                            
                                                            <input class="btn btn-primary" type="submit"  class="button_example" name="submit" value="Assign Lecturer"></input>
                                                            
                                                        </div>
                                                    

                                                </div>
                                                </form>
                                            </div>
                                            <div class="row">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <caption class="text-center"><strong>Allocated Lecturers for <?php
                                                        if(isset($_GET['sub_id'])){
                                                            echo "<strong>". $_GET['sub_id']."</strong>";
                                                            $nm=Subject::find_by_id($_GET['sub_id']);
                                                            echo "     <strong>".$nm->sub_name."</strong>";
                                                        }
                                                    ?></strong></caption>
                                                                <th class="text-center">Staff ID</th>
                                                                <th class="text-center">Name</th>
                                                                <th class="text-center">Username</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if(isset($_GET['sub_id'])){
                                                                    $subject_id=$_GET['sub_id'];
                                                                
                                                                $arr=Subject::find_lec_by_sub($_GET['sub_id']);

                                                                
                                                                foreach ($arr as $sub){
                                                                    $bn=User::find_by_staff_id('UCSC001');
                                                                    $name=User::find_by_sql("SELECT * FROM users WHERE staff_id='$sub->staff_id' LIMIT 1");
                                                                    echo "<tr><td class='text-center'>$sub->staff_id</td>";
                                                                    echo "<td class='text-center'>".array_shift($name)->name."</td><td class='text-center'>";
                                                                    echo "<a href='unallocate.php?staff_id=$sub->staff_id&sub_id=$subject_id'  class='btn btn-default'>Unallocate</a></td></tr>";
                                                                  
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
                                    
                                
                                    <div class="col-lg-2">
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
