<?php
    $id=$_GET['id'];
    //echo $id;
    
    require_once("../../includes/initialize.php");
    if(!$session->is_logged_in()){redirect_to("../../index.php");}
    if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
    //include_layout_template('header.php');

    $del=Student::del_student($id);
        if($del){
				echo '<script language="javascript">';
				echo 'alert("The student has succesfully deleted !")';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'alert("error! The student could not be deleted !")';
				echo '</script>';
				}

		redirect_to("view_students.php");

?>

    
