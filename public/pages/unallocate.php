<?php
    require_once("../../includes/initialize.php");
    if(!$session->is_logged_in()){redirect_to("../../index.php");}
    if($_SESSION['privilege']!="staff"){redirect_to("../../index.php");}
    $lec_id= $_GET['staff_id'];
    $sub_id= $_GET['sub_id'];
    
    Subject::unallocate_lec($lec_id,$sub_id);
    redirect_to("allocate_lec.php?sub_id=$sub_id");
?>