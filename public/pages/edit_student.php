<?php
 $id=$_GET['id'];
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

    $find=Student::find_by_index($id);
    include("../../includes/validation.php");
    
    if(isset($_POST['submit'])){
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
        
        $updated_student=new Student();
        
            $updated_student->id=$id;
            $updated_student->reg_no=$reg_no;
            $updated_student->nic=$nic;
            $updated_student->full_name=$name;
            $updated_student->nwi=$nwi;
            $updated_student->batch=$batch;
            $updated_student->course=$course;
            $updated_student->address=$address;
            $updated_student->contact_no=$contac_no;
            $updated_student->email=$email;
            $updated_student->gender=$gender;
            $updated_student->dob=$dob;
            
            $update_result=$updated_student->update();
            if($update_result){
                echo '<script language="javascript">';
                echo 'alert("The Student has succesfully updated !")';
                echo '</script>';
            }else{
                    echo '<script language="javascript">';
                echo 'alert("error! The student could not be updated !")';
                echo '</script>';
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
                        <h1 class="page-header">
                         Students<small> Edit Student Details</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li>
                                <i class="fa fa-users"></i>  <a href="view_students.php">View Students</a>
                            </li>
                            <li class="active">
                                <i class="glyphicon glyphicon-edit"></i>  <a href="#">Edit Students</a>
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
                                    <form  id="stud_reg" action="edit_student.php?id=<?php echo $id; ?>" method="post" name="login" role="form">
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
                                                        <input class="form-control" placeholder="D S L Nimal" id="nwi" type="text" name="nwi" value="<?php echo $find->nwi; ?>" data-placement="bottom" title="Name with Initials">
                                                        <p class="help-block"><?php if(isset($errors['nwi'])) echo $errors['nwi']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>NIC</label>
                                                        <input class="form-control" placeholder="933373642V" id="nic" type="text" name="nic" value="<?php echo $find->nic; ?>" data-placement="bottom" title="NIC">
                                                        <p class="help-block"><?php if(isset($errors['nic'])) echo $errors['nic']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea class="form-control" placeholder="No 45,&#10;Baker Street,&#10;London,&#10;England." id="address" name="address" rows="4" value="<?php
                                        echo htmlentities($address); ?>" data-placement="bottom" title="Address"><?php
                                         echo $find->address; ?></textarea>
                                                        <p class="help-block"></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Contact</label>
                                                        <input class="form-control" placeholder="07XXXXXXXX" id="contact_no" type="postcode" name="contact_no" value="<?php
                                         echo $find->contact_no; ?>" data-placement="bottom" title="Mobile No">
                                                        <p class="help-block"><?php if(isset($errors['contact_no'])) echo $errors['contact_no']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Name In Full</label>
                                                        <input class="form-control" placeholder="Don Seenigama Liyanage Nimal" id="Name" type="text" name="name" value="<?php echo $find->full_name; ?>" data-placement="bottom" title="Full Name">
                                                         <p class="help-block"><?php if(isset($errors['name'])) echo $errors['name']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Date of Birth</label>
                                                        <input class="form-control" id="dob" type="date" name="dob" value="<?php
                                         echo $find->dob; ?>" data-placement="bottom" title="Birthday">
                                                        <p class="help-block"><?php if(isset($errors['dob'])) echo $errors['dob']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input class="form-control" placeholder="nimalliyanage@gmail.com" id="email" type="email" name="email" value="<?php
                                         echo $find->email; ?>" data-placement="bottom" title="email">
                                                        <p class="help-block"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Gender</label>
                                                        <?php
                                                            if($find->gender=="male"){
                                                                $ifmale="checked='checked'";
                                                                $iffemale="";
                                                            }elseif($find->gender=="female"){
                                                                $ifmale="";
                                                                $iffemale="checked='checked'";
                                                            }else{
                                                                $ifmale="";
                                                                $iffemale="";
                                                            }
                                                        ?>
                                                        <div class="radio">
                                                            <label>
                                                                <input <?php echo $ifmale; ?> id="r1" type="radio" name="r1" value ="<?php echo htmlentities($gender="male"); ?>" checked>Male
                                                            </label>
                                                        </div>
                                                        <div class="radio">
                                                            <label>
                                                                <input <?php echo $iffemale; ?> id="r1" type="radio" name="r1" value ="<?php echo htmlentities($gender="female"); ?>">Female
                                                            </label>
                                                        </div>
                                                        <p class="help-block"><?php if(isset($errors['r1'])) echo $errors['r1']; ?></p>
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
                                                        <input class="form-control" placeholder="2013" id="batch" type="text" name="batch" value="<?php echo $find->batch; ?>" data-placement="bottom" title="Batch">
                                                        <p class="help-block"><?php //if(isset($errors['nic'])) echo $errors['nic']; ?></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Index</label>
                                                        <input class="form-control"  placeholder="13001234" id="index" type="text" name="index" value="<?php
                                         echo $find->index_no; ?>" data-placement="bottom" title="Index No" disabled>
                                                        <p class="help-block"><?php if(isset($errors['index'])) echo $errors['index']; ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Course Name</label>
                                                        <select class="form-control"  name="course">
                                                            <?php
                                            if($find->course=="CS"){
                                                $select="selected='selected'";
                                            }elseif($find->course=="IS"){
                                                $select="";
                                            }else{
                                                $select="";
                                            }
                                        ?>
                                                            <option name="course" <?php echo $select?> selected="selected" value="<?php echo htmlentities($course="CS"); ?>" data-placement="bottom" title="BSc in Computer Science">Computer Science</option>
                                                            <option name="course" value="<?php echo htmlentities($course="IS"); ?>" data-placement="bottom" title="BSc in Information Systems">Information Systems</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Reg No</label>
                                                        <input class="form-control" placeholder="2013CS123" id="reg_no" type="text" name="reg_no" value="<?php echo $find->reg_no; ?>" data-placement="bottom" title="Registration No">
                                                        <p class="help-block"><?php if(isset($errors['reg_no'])) echo $errors['reg_no']; ?></p>
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
