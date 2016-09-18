<?php
require_once("../../includes/OverallGPA.php");
$id=$_GET['id'];
$sql1="SELECT * FROM ".$id;
$result1=$database->query($sql1);

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

$pdf->Write(.2, 'GPA Values: '.$id, '', 0, '', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

$pdf->SetCreator(PDF_CREATOR);
$i=1;
$con=mysql_connect("localhost","root","");
        mysql_select_db("mydb",$con);
        $query="select * from users";
        $result=$database->query($query);
        $stri="";
        
        while($array = mysqli_fetch_array($result1,MYSQL_ASSOC)){
                $str="<tr>";
                $str.= '<td>'.$i.'</td>';
                $str.='<td>'.$array["index_no"].'</td>';
                $str.='<td>'.$array["gpa"].'</td>';
                $str.='<td>'.$array["classGPA"].'</td>';
                $str.= '</tr>';
                $i++;
                $stri.=$str;
            }
    /*     
    while($arr = mysql_fetch_array($result1,MYSQL_ASSOC)){
                $str="<tr>";
                $str='<td>'.$arr["index_no"].'</td>'."<td class='text-center'>";
            //echo $arr["reg_no"]."</td>"."<td class='text-center'>";
            echo $arr["gpa"]."</td>"."<td class='text-center'>";
            echo $arr["classGPA"]."</td>";
                                                        
            if(strlen($id)==14 || strlen($id)==19){
                if($arr["classGPA"]>=3.50){
                    echo "<td class='text-center'>1st Class</td></tr>";
                }else if($arr["classGPA"]>=3.25){
                    echo "<td class='text-center'>2nd Class(Upper)</td></tr>";
                }else if($arr["classGPA"]>=3.00){
                    echo "<td class='text-center'>2nd Class(Lower)</td></tr>";
                }else{
                    echo "<td class='text-center'> - </td></tr>";
                }
            }else{
                echo "</tr>";
            }
    }
    */
    $tbl = "
    <table cellspacing=\"0\" cellpadding=\"1\" border=\"1\">
        <thead>
            <tr>
              <th scope=\"col\" width=35% style=\"text-align:left\" > </th>
              <th scope=\"col\"  style=\"text-align:left\" >Index No</th>
              <th scope=\"col\"  style=\"text-align:left\" >GPA</th>
              <th scope=\"col\"  style=\"text-align:left\" >Class GPA</th>
            </tr>";
            $tbl.=$stri;
            $tbl.="</thead></table>";

$pdf->writeHTML($tbl, true, false, false, false, '');
$pdf->Output('activity_log_for_acs.pdf', 'I');

?>