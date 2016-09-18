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

    include("../../includes/validation.php");
    
    if(isset($_POST['submit'])){
        $index_no=trim(mysql_prep($_POST['index']));
        $reg_no=trim(mysql_prep($_POST['reg_no']));
        $nic=trim(mysql_prep($_POST['nic']));
        $name=trim(mysql_prep($_POST['name']));
        $nwi=trim(mysql_prep($_POST['nwi']));
        $batch=trim(mysql_prep($_POST['batch']));
        $course=trim(mysql_prep($_POST['course']));
        $gender=trim(mysql_prep($_POST['r1']));
        $email=trim(mysql_prep($_POST['email']));
        $address=trim(mysql_prep($_POST['address']));
        $contac_no=trim(mysql_prep($_POST['contact_no']));
        $dob=trim(mysql_prep($_POST['dob']));
        
        global $database;
        $rows = $database->mysqli_result($database->query("SELECT COUNT(*) FROM students WHERE index_no='{$index_no}' OR reg_no='{$reg_no}'"), 0,0);

                if ($rows) {
                    echo '<script language="javascript">';
                    echo 'alert("Student has already registered. Try with different index or Reg no. !")';
                    echo '</script>';
                }else{
        
        //Student::create();
        if(empty($errors)){
            
            $new_student=new Student();
            
            $new_student->index_no=$index_no;
            $new_student->reg_no=$reg_no;
            $new_student->nic=$nic;
            $new_student->full_name=$name;
            $new_student->nwi=$nwi;
            $new_student->batch=$batch;
            $new_student->course=$course;
            $new_student->address=$address;
            $new_student->contact_no=$contac_no;
            $new_student->email=$email;
            $new_student->gender=$gender;
            $new_student->dob=$dob;

            
            $result=$new_student->create();
            echo '<script language="javascript">';
            echo 'alert("The student was succesfully registered to the '.$batch.' '.$course.' batch !")';
            echo '</script>';
            if($result){
                
                $message="Student was succesfully added to the database";
            }else{
                $message="The student could not be created.";
                $message.="<br/>".mysqli_error($result);
            }

            
        }else{
            if(count($errors)==1){
                $message="There was 1 error in the form.";
            }else{
                $message="There were ". count($errors)."errors in the form.";
            }
        }
    }
    
    }else{//form has not been submitted
        $index_no="";
        $reg_no="";
        $nic="";
        $name="";
        $nwi="";
        $batch="";
        $course="";
        $gender="";
        $email="";
        $address="";
        $contac_no="";
        $dob="";
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

    <title>UCSC-SMS-Staff-StudentRegistration</title>

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
                         <i class="fa fa-users fa-fw"></i> Students <small> Registration</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-users"></i>  <a href="st_reg.php">Register Students</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Student Registration Form
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <form  id="stud_reg" action="st_reg.php" method="post" name="login" role="form">
                                        <div class="col-lg-12">

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Personal Details
                                                </div>
                                                <div class="panel-body">


                                            <div class="well">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name With Initials</label>
                                                        <input class="form-control" placeholder="D S L Nimal" id="nwi" type="text" name="nwi" value="<?php
                                        echo htmlentities($nwi); ?>" data-placement="bottom" title="Name with Initials" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['nwi'])) echo $errors['nwi']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIC</label>
                                                        <input class="form-control" placeholder="933373642V" id="nic" type="text" name="nic" value="<?php
                                        echo htmlentities($nic); ?>" data-placement="bottom" title="NIC" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['nic'])) echo $errors['nic']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" placeholder="No 45,&#10;Baker Street,&#10;London,&#10;England." id="address" name="address" rows="4" value="<?php
                                        echo htmlentities($address); ?>" data-placement="bottom" title="Address" required></textarea>
                                                        <p class="help-block"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input class="form-control" placeholder="07XXXXXXXX" id="contact_no" type="postcode" name="contact_no" value="<?php
                                        echo htmlentities($contac_no); ?>" data-placement="bottom" title="Mobile No" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['contact_no'])) echo $errors['contact_no']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name In Full</label>
                                                        <input class="form-control" placeholder="Don Seenigama Liyanage Nimal" id="Name" type="text" name="name" value="<?php
                                        echo htmlentities($name); ?>" data-placement="bottom" title="Full Name" required>
                                                         <p class="help-block" style="color: red"><?php if(isset($errors['name'])) echo $errors['name']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input class="form-control" id="dob" type="date" name="dob" value="<?php
                                        echo htmlentities($dob); ?>" data-placement="bottom" title="Birthday" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['dob'])) echo $errors['dob']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" placeholder="nimalliyanage@gmail.com" id="email" type="email" name="email" value="<?php
                                        echo htmlentities($email); ?>" data-placement="bottom" title="email" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <div class="radio">
                                                            <label>
                                                                <input id="r1" type="radio" name="r1" value ="<?php echo htmlentities($gender="male"); ?>" checked>Male
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input id="r1" type="radio" name="r1" value ="<?php echo htmlentities($gender="female"); ?>">Female
                                                            </label>
                                                        </div>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['r1'])) echo $errors['r1']; ?></p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    Academic Details
                                                </div>
                                                <div class="panel-body">

                                            <div class="well">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Batch Year</label>
                                                        <input class="form-control" placeholder="2013" id="batch" type="text" name="batch" value="<?php echo htmlentities($batch); ?>" data-placement="bottom" title="Batch" required>
                                                        <p class="help-block" style="color: red"><?php //if(isset($errors['nic'])) echo $errors['nic']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Index</label>
                                                        <input class="form-control"  placeholder="13001234" id="index" type="text" name="index" value="<?php
                                        echo htmlentities($index_no); ?>" data-placement="bottom" title="Index No" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['index'])) echo $errors['index']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Course Name</label>
                                                        <select class="form-control"  name="course">
                                                            <option name="course" selected="selected" value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                            <option name="course" value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Reg No</label>
                                                        <input class="form-control" placeholder="2013CS123" id="reg_no" type="text" name="reg_no" value="<?php
                                        echo htmlentities($reg_no); ?>" data-placement="bottom" title="Registration No" required>
                                                        <p class="help-block" style="color: red"><?php if(isset($errors['reg_no'])) echo $errors['reg_no']; ?></p>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                            <input class="btn btn-primary" type="submit" name="submit" value="Submit"></input>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        
                                        
                                        </div>
                                     </div>   
                                </form> 
                                   
                                    
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
