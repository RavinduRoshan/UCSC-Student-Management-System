<?php
    $id=$_GET['id'];
    $course=$_GET['course'];
    //echo $id;
    
    
    echo '<script language="javascript">';
	echo 'if(confirm("Are you sure want to delete this!")==false){ window.location.assign("view_subjects.php?course=$course")}';
	echo '</script>';

    require_once("../../includes/initialize.php");
    if(!$session->is_logged_in()){redirect_to("../../index.php");}
    if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
    

    $del=Subject::del_subject($id);
    if($del){
			if($course=="CS"){    	
				echo '<script language="javascript">';
				echo 'if(confirm("The subject has successfully deleted !")==true){ window.location.assign("view_subjects.php?course=CS")}else{window.location.assign("view_subjects.php?course=CS")}';
				echo '</script>';
			}else{
				echo '<script language="javascript">';
				echo 'if(confirm("The subject has successfully deleted !")==true){ window.location.assign("view_subjects.php?course=IS")}else{window.location.assign("view_subjects.php?course=IS")}';
				echo '</script>';
		}
			}else{
				echo '<script language="javascript">';
				echo 'if(confirm("Error! The subject could not be deleted ")==true){ window.location.assign("view_subjects.php?course=CS")}else{window.location.assign("view_subjects.php?course=CS")}';
				echo '</script>';
				}
?>

    
