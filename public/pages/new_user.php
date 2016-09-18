<?php
require_once("../../includes/initialize.php");
if(!$session->is_logged_in()){redirect_to("../../index.php");}
if($_SESSION['privilege']!="admin"){redirect_to("../../index.php");}

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
        
        require_once("../../includes/user_validation.php");
                
        $name=trim(mysql_prep($_POST['nwi']));
        $full_name=trim(mysql_prep($_POST['name']));
        $staff_id=trim(mysql_prep($_POST['staff_id']));
        $email=trim(mysql_prep($_POST['email']));
        $contact_no=trim(mysql_prep($_POST['contact_no']));
        $username=trim(mysql_prep($_POST['username']));
        $privilege=trim(mysql_prep($_POST['privilege']));
        $password=trim(mysql_prep($_POST['password']));
        
        $hashed_password=sha1($password);

        global $database;
        $rows = $database->mysqli_result($database->query("SELECT COUNT(*) FROM users WHERE username='{$username}' OR staff_id='{$staff_id}'"), 0,0);

                if ($rows) {
                    echo '<script language="javascript">';
                    echo 'alert("Sorry! Username is already used. Try again with different username or staff ID.")';
                    echo '</script>';
                }else{
                    
                


        
        //User::create_user($name,$staff_id,$emai,$username,$privilege,$password);
        if(empty($errors)){
            
            $new_user=new User();
            
            $new_user->username=$username;
            $new_user->password=$hashed_password;
            $new_user->name=$name;
            $new_user->full_name=$full_name;
            $new_user->email=$email;
            $new_user->privilege=$privilege;
            $new_user->staff_id=$staff_id;
            
            $result=$new_user->create();
            if($result){
                echo '<script language="javascript">';
                echo 'alert("The user account successfully added!")';
                echo '</script>';
                //$message="The user account successfully added!";
            }else{
                $message="The user could not be created.";
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
        
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                if(!empty($_FILES["fileToUpload"]["name"])){
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    if($check !== false) {
                        //echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        //echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                //echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 900000) {
                //echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                $sql="UPDATE users SET `image`='user.jpg' WHERE `staff_id`='{$staff_id}' ";
                $database->query($sql);
                //echo "Sorry, your file was not uploaded.";
                //echo '<script language="javascript">';
                //echo 'alert("The image can\'t uploaded.\n")';
                //echo '</script>';
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    //echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                    $file_name=basename( $_FILES["fileToUpload"]["name"]);
                    $sql="UPDATE users SET `image`='{$file_name}' WHERE `staff_id`='{$staff_id}' ";
                    $database->query($sql);
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
            }
        

    
    }else{//form has not been submitted
        $name="";
        $staff_id="";
        $email="";
        $username="";
        $priviledge="";
        $password="";
        $contact_no="";
        $full_name="";
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

    <title>UCSC-SMS-administrator-home</title>

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
        <?php require_once("headers/admin_menu.php");?>

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
                            <i class="fa fa-users fa-fw"></i> System Users <small> Add User</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="admin.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i>  <a href="new_user.php">Add User</a>
                            </li>
                            
                            
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                
                <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            User Registration Form
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <form id="user_form" action="new_user.php" method="post" role="form" enctype="multipart/form-data">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name With Initials</label>
                                            <input class="form-control" type="text" name="nwi" id="nwi" value="<?php echo htmlentities($name); ?>" placeholder="N Perera">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['nwi'])) echo $errors['nwi']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Staff ID</label>
                                            <input class="form-control" id="staff_id" type="text" name="staff_id" value="<?php echo htmlentities($staff_id); ?>" placeholder="UCSC222">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['staff_id'])) echo $errors['staff_id']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input class="form-control" type="text" name="contact_no" id="contact_no" value="<?php echo htmlentities($contact_no); ?>" placeholder="07XXXXXXXX">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['contact_no'])) echo $errors['contact_no']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" id="username" type="text" name="username" value="<?php echo htmlentities($username); ?>" placeholder="Perera">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['username'])) echo $errors['username']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Select image to upload:</label>                                            
                                            <input type="file" name="fileToUpload" id="fileToUpload">
                                        </div>
                                        <input class="btn btn-primary" type="submit" name="submit"></input>
                                        <button type="reset" class="btn btn-default">Reset</button>
                                    
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Name In Full</label>
                                            <input class="form-control" type="text" name="name" id="name" value="<?php
                                    echo htmlentities($full_name); ?>" placeholder="Nimal Perera">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['name'])) echo $errors['name']; ?></p>
                                        </div>
                                        <!--<div class="form-group">
                                            <label>NIC</label>
                                            <input class="form-control" id="nic" type="text" name="nic" value="<?php //echo htmlentities($nic); ?>">
                                            <p class="help-block"><?php //if(isset($errors['nic'])) echo $errors['nic']; ?></p>
                                        </div>-->
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" id="email" type="email" name="email" value="<?php echo htmlentities($email); ?>" placeholder="perera@gmail.com">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['email'])) echo $errors['email']; ?></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Privilege</label>
                                            <select class="form-control"  name="privilege">
                                                <option value="<?php
                                                        echo htmlentities($privilege='admin'); ?>" name="privilege">Administrator</option>
                                                <option value="<?php
                                                        echo htmlentities($privilege='lecturer'); ?>" name="privilege">Lecturer</option>
                                                <option value="<?php
                                                        echo htmlentities($privilege='staff'); ?>" name="privilege">Examination Dept</option>
                                                <option value="<?php
                                                        echo htmlentities($privilege='academic'); ?>" name="privilege">Academic & Pub: Dept</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" type="password" name="password" value="<?php echo htmlentities($password); ?>" placeholder="">
                                            <p class="help-block" style="color: red"><?php if(isset($errors['password'])) echo $errors['password']; ?></p>
                                        </div>
                                        
                                        
                                       
                                    </div>
                                </form>                                 
                            </div>
                        </div>
                    </div>
                </div>
 
                </div>
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

    <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
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




