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

require_once("../../includes/student.php");
if(!empty($_POST['submit1'])){
    $arr=array();
    $sele_batch="";
    $sele="";
    
    $batch=trim($_POST['batch']);
    $course=trim($_POST['course']);
        
    if($course=="All"){
        $arr=Student::find_students_batch($batch);
        $sele="all";
        
    }elseif($course=="CS"){
        $arr=Student::find_students($batch,$course);
        $sele="cs";
    }elseif($course=="IS"){
        $arr=Student::find_students($batch,$course);
        $sele="is";
    }
    $sele_batch=$batch;
    
}else{
    $index_no="";
    $batch="";
    $course="";
    $arr=array();
    $sele="";
    $sele_batch="";
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

    <title>UCSC-SMS-Staff-overallgpa</title>

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
                         <i class="fa fa-file-text fa-fw"></i> Reports <small>Class Lists</small>
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i>  <a href="staff.php">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file-text fa-fw"></i>  <a href="class_lists.php">Class Lists</a>
                            </li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12">
                        <?php
                            //echo $_POST['data'];
                            require_once('../tcpdf/config/lang/eng.php');
                            require_once('../tcpdf/tcpdf.php');
                            // create new PDF document
                            $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

                            // set header and footer fonts
                            $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
                            $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

                            // set default monospaced font
                            $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

                            //set margins
                            $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
                            $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
                            $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

                            //set auto page breaks
                            $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

                            //set image scale factor
                            $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

                            //set some language-dependent strings
                            $pdf->setLanguageArray($l);
                            // set document information
                            // set font
                            $pdf->SetFont('helvetica', 'B', 20);

                            // add a page
                            $pdf->AddPage();

                            $pdf->Write(0, 'Batch :'.$batch.'Course :'.$course, '', 0, 'L', true, 0, false, false, 0);

                            $pdf->SetFont('helvetica', '', 8);

                            $pdf->SetCreator(PDF_CREATOR);
                            $i=1;
                            $con=mysql_connect("localhost","root","");
                                    mysql_select_db("mydb",$con);
                                    $query="select * from users";
                                    $result=mysql_query($query);
                                    $stri="";
                                    foreach ($arr as $st){
                                        $str='<tr>';
                                        $str.= '<td>'.$i.'</td>';
                                        $str.= '<td>'.$st->index_no.'</td>';
                                        $str.= '<td>'.$st->nwi.'</td>';
                                         $str.= '<td></td>';
                                        $str.= '</tr>';
                                        
                                        $i++;
                                        //echo $str;
                                        $stri.=$str;
                                    }
                                    
                                $tbl = "
                                <table cellspacing=\"0\" cellpadding=\"1\" border=\"1\">
                                    <thead>
                                        <tr>
                                          <th scope=\"col\" width=35% style=\"text-align:left\" > </th>
                                          <th scope=\"col\"  style=\"text-align:left\" >Index No</th>
                                          <th scope=\"col\"  style=\"text-align:left\" >Name</th>
                                          <th scope=\"col\"  style=\"text-align:left\" ></th>
                                        </tr>";
                                        $tbl.=$stri;
                                        $tbl.="</thead></table>";

                            $pdf->writeHTML($tbl, true, false, false, false, '');
                            $pdf->Output('activity_log_for_acs.pdf', 'I');
                            ?>
                            <?php
                            /*
                            echo "<table><tr><td id='tda'>";
                            echo "<h4>Index No </h4>"."<br/>"."</td>"."<td  id='tda'>";
                            echo "<h4>Reg: No </h4>"."<br/>"."</td>"."<td  id='tda'>";
                            echo "<h4>Name with Initials </h4>"."<br/>"."</td>"."<td  id='tda'>";
                            echo "<h4>Course </h4>"."<br/>"."</td><td  id='tda'>";
                            echo "<h4>Date of Birth </h4>"."<br/>"."</td><td  id='tda'>";
                            echo "<h4>Email </h4>"."<br/>"."</td><td  id='tda'>";
                                                            
                            foreach ($arr as $st){
                                echo "<tr><td id='tda'>";
                                echo $st->index_no."</td><td id='tda'>";
                                echo $st->reg_no."</td><td id='tda'>";
                                echo $st->nwi."</td><td id='tda'>";
                                echo $st->course."</td><td id='tda'>";
                                echo $st->dob."</td><td id='tda'>";
                                echo $st->email."</td><td id='tda'>";
                            }
                            echo "</table>";
                            */
                            ?>
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
























