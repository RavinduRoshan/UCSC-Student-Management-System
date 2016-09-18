<?php

?>
<?php
if(isset($_POST['submit1'])){
require_once("../../includes/OverallGPA.php");

$course= $_POST['course'];
$batch=$_POST['batch'];
    if($_POST['course']=='CS'){
            $batch=$_POST['batch'];
            $course=$_POST['course'];
            $new_overallgpa=new OverallGPA();
            $new_overallgpa->batch=$batch;
            $new_overallgpa->course=$course;
            
            $arr=$new_overallgpa->cs_4th_list();
        }
        
            if($_POST['course']=='IS'){
            $batch=$_POST['batch'];
            $course=$_POST['course'];
            $new_overallgpa=new OverallGPA();
            $new_overallgpa->batch=$batch;
            $new_overallgpa->course=$course;
            
            $arr=$new_overallgpa->is_4th_list();

        }
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

$pdf->Write(.2, '4th Year Selection List:'.$batch.' Batch '.',course '.$course, '', 0, '', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

$pdf->SetCreator(PDF_CREATOR);
$i=1;
$con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"mydb");
        $query="select * from users";
        $result=mysqli_query($con,$query);
        $stri="";
        /*
        foreach ($arr as $st){
            $str='<tr>';
            $str.= '<td>'.$i.'</td>';
            $str.= '<td>'.$st->index_no.'</td>';
            $str.= '<td>'.$st->nwi.'</td>';
             $str.= '<td></td>';
            $str.= '</tr>';
            
            $i++;
            $stri.=$str;
        }
        */
        while($array = mysqli_fetch_array($arr,MYSQL_ASSOC)){
                $str="<tr>";
                $str.= '<td>'.$i.'</td>';
                $str.='<td>'.$array["index_no"].'</td>';
                $str.='<td>'.$array["gpa"].'</td>';
                $str.= '</tr>';
                $i++;
                $stri.=$str;
            }
        
    $tbl = "
    <table cellspacing=\"0\" cellpadding=\"1\" border=\"1\">
        <thead>
            <tr>
              <th scope=\"col\" width=35% style=\"text-align:left\" > </th>
              <th scope=\"col\"  style=\"text-align:left\" >Index No</th>
              <th scope=\"col\"  style=\"text-align:left\" >GPA</th>
            </tr>";
            $tbl.=$stri;
            $tbl.="</thead></table>";

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output('activity_log_for_acs.pdf', 'I');
}
?>