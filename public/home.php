<?php
    require_once("../includes/initialize.php");
    if(!$session->is_logged_in()){redirect_to("../index.php");}
	$priv=$_SESSION['privilege'];
	$priv.=".php";
    redirect_to("pages/".$priv);
?>