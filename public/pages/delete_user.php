<?php
    $id=$_GET['id'];
    //echo $id;
    
    require_once("../../includes/initialize.php");
    if(!$session->is_logged_in()){redirect_to("../../index.php");}
    if($_SESSION['privilege']!="admin"){redirect_to("../../index.php");}

    $del=User::del_user($id);
    if($del){
		
		redirect_to("view_users.php");
				}

?>

    
