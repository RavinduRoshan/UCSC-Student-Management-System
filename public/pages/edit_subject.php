<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
$s_id=$_GET['id'];
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
    $find_sub=Subject::find_by_id($s_id);
    
    if(isset($_POST['submit'])){
        
        if(empty($_POST['s_name'])){
            $errors['s_name'] = "* Subject name field cannot be empty.";
        }
        
        if(empty($_POST['credits'])){
            $errors['credits'] = "* Enter number of credits for the subject";
        }
        
        $sub_name=trim(mysql_prep($_POST['s_name']));
        $year=trim(mysql_prep($_POST['year']));
        $sem_id=trim(mysql_prep($_POST['sem_id']));
        $course=trim(mysql_prep($_POST['course']));
        $credits=trim(mysql_prep($_POST['credits']));

        if(empty($errors)){
        $updated_sub=new Subject();
        
        $updated_sub->sub_id=$s_id;
        $updated_sub->sub_name=$sub_name;
        $updated_sub->year=$year;
        $updated_sub->sem_id=$sem_id;
        $updated_sub->course=$course;
        $updated_sub->credits=$credits;
                
        $update_sub_res=$updated_sub->update();
        $address="view_subjects.php?course=".$course;
            if($update_sub_res){
                if($course=='CS'){
                echo '<script language="javascript">';
                echo "if(confirm(\"The subject has succesfully Updated!\")==true){window.location.assign(\"view_subjects.php?course=CS\")}";
                echo '</script>';
            }
            if($course=='IS'){
                echo '<script language="javascript">';
                echo "if(confirm(\"The subject has succesfully Updated!\")==true){window.location.assign(\"view_subjects.php?course=IS\")}";
                echo '</script>';
            }

            }else{
                echo '<script language="javascript">';
                echo 'alert("error! The subject could not be updated !")';
                echo '</script>';
                }
            
        
        }else{
            if(count($errors)==1){
                $message="There was 1 error in the form.";
            }else{
                $message="There were ". count($errors)." errors in the form.<br/>";
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

    <title>UCSC-SMS-Staff-addSubject</title>

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
                         <i class="fa fa-book fa-fw"></i> Subjects <small> Edit subject</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li>
                                <?php echo "<i class='fa fa-book'></i> <a href='view_subjects.php?course=$course'> View Subjects</a>";?>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i>  <?php echo "<a href='edit_subject.php?id=$s_id&course=$course'>Edit subject</a>";?>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Edit Subject
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
                                    <form id="user_form" action="edit_subject.php?id=<?php echo $s_id;?>&course=<?php echo $course;?>" method="post" role="form">
                                    <div class="col-lg-8">
                                        <div class="well">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Subject ID</label>
                                                    <input class="form-control" type="text" name="s_id" id="s_id"  placeholder="SCS1001" title="Type subject ID" value="<?php
                                    echo $s_id; ?>" required disabled>
                                                    <p class="help-block"></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Year</label>
                                                        <select class="form-control"  name="year">
                                                            <option name="year" selected="selected" value="<?php echo htmlentities($year="1st year"); ?>" data-placement="bottom" title="1st year">1st year</option>
                                                            <option name="year" value="<?php echo htmlentities($year="2nd year"); ?>" data-placement="bottom" title="2nd year">2nd year</option>
                                                            <option name="year" value="<?php echo htmlentities($year="3rd year"); ?>" data-placement="bottom" title="3rd year">3rd year</option>
                                                            <option name="year" value="<?php echo htmlentities($year="4th year"); ?>" data-placement="bottom" title="4th year">4th year</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Credits</label>
                                                    <input class="form-control" type="text" name="credits" id="credits" placeholder="5" value="<?php
                                    echo $find_sub->credits; ?>" title="1,2,3,4" required>
                                                    <p class="help-block"><?php if(isset($errors['credits'])) echo $errors['credits']; ?></p>
                                                </div>
                                                <input class="btn btn-primary" type="submit" class="button_example" name="submit" value="Save Changes"></input>
                                                <button type="reset" class="btn btn-default">Reset</button>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label>Subject Name</label>
                                                    <input class="form-control" type="text" name="s_name" id="s_name" placeholder="Software Engineering I" value="<?php
                                    echo $find_sub->sub_name; ?>" title="Type subject name" required>
                                                    <p class="help-block"><?php if(isset($errors['s_name'])) echo $errors['s_name']; ?></p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Name</label>
                                                        <select class="form-control"  name="course">
                                                            <?php
                                                            $selectcs="";
                                                            $selectis="";
                                                                if($course=="CS"){
                                                                    $selectcs="selected='selected'";
                                                                    //$selectis="";
                                                                }elseif($course=="IS"){
                                                                    $selectis="selected='selected'";
                                                                    //$selectcs="";
                                                                }else{
                                                                    $selectcs="";
                                                                    $selectis="";
                                                                }
                                                            ?>
                                                            
                                                            <option name="course" <?php echo $selectis?> value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                            <option name="course"  <?php echo $selectcs?> value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                        </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Semester ID</label>
                                                    <input class="form-control" type="text" name="sem_id" id="sem_id" placeholder="5" value="<?php
                                    echo $find_sub->sem_id; ?>" title="1,2,3,4,5...,8" required>
                                                    <p class="help-block"><?php if(isset($errors['sem_id'])) echo $errors['sem_id']; ?></p>
                                                </div>
                                            </div>
                                            </div>
                                        
                                        
                                        </div>
                                    </div>
                                    </form>
                                
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

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>