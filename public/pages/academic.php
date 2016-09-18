<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="academic"){redirect_to("../../index.php");}

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
<?php
    if(isset($_POST['post'])){
        $errors = array();
        if(trim(mysql_prep($_POST['inq']))==""){
            $errors['inq'] = "Please write something to post..";
        }
        else{
            $inqry=mysql_prep($_POST['inq']);
            global $database;
            $dt = date("D M d, Y G:i");
            $result = $database->query("INSERT INTO inquiry(writer,msg,date) VALUES('$session->user_id','$inqry','$dt')");

            if($result){
                echo '<script language="javascript">';
                echo 'alert("The user has succesfully created !")';
                echo '</script>';
            }
            else{
                echo '<script language="javascript">';
                echo 'alert("The user cannot be created !")';
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

    <title>UCSC-SMS-academic-Home</title>

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

       <?php require_once("headers/aca_menu.php");?>

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
                         <i class="fa fa-home fa-fw"></i> Home <small> News feeds</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                        </ol>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit"></i>  Write Inquiry <div class="pull-right"><?php echo date("D M d, Y G:i");?></div>
                            </div>
                            <div class="panel-body">
                                <form  id="" action="staff.php" method="post" name="inquiry" role="form">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Write a post..." id="" name="inq" rows="4" value="<?php
                                        //echo htmlentities($address); ?>" data-placement="bottom" title="Write Inquiry"></textarea>

                                    </div>
                                    <button type="submit" name="post" class="btn btn-primary pull-right"><i class="fa fa-send"></i> Post</button>
                                </form>
                            </div>

                        </div>
                        <?php
                        global $database;
                        $result_set = $database->query("SELECT * FROM inquiry ORDER BY id DESC");
                        $object_array = array();
                        while ($row = $database->fetch_array($result_set)) {
            
                            $nm=User::find_by_id($row['writer']);
                            echo "<div class='panel panel-default'>";
                                echo "<div class='panel-heading'>";
                                    echo "<i class='fa fa-user'></i> ". $nm->name."<div class='pull-right'>".$row['date']."</div>";
                                echo "</div>"   ;
                                echo "<div class='panel-body'>";
                                    echo "<p>".$row['msg']."</p>";
                                echo "</div>";
                            echo "</div>";
                        }
                        ?>
                    </div>
                
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        

    </div>
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

    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <script>
    // tooltip demo
    $('.tooltip-demo').tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body"
    })

    // popover demo
    $("[data-toggle=popover]")
        .popover()
    </script>

</body>
</html>