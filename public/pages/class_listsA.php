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
$con=mysqli_connect("localhost","root","");
        mysqli_select_db($con,"mydb");
        $query="select * from users";
        $result=$database->query($query);
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