<?php
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : 
	define('SITE_ROOT', 'C:'.DS.'xampp'.DS.'htdocs'.DS.'log'.DS.'form-3');

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');
require_once(LIB_PATH.DS.'database.php');
class OverallGPA{
	
	public $batch;
	public $course;
    public $id;
    public $id1;
    public $id2;
    public $id3;
    public $id4;
	public $id5;
	public $table1;
    
    public function calculate_OverallGPA(){
		global $database;
			$result = $database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50),classGPA float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysqli_num_rows($database->query("select * from `$this->id`"))==0){
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){

						$credits=0;
						$index_no=$student["index_no"];

						$sql1="SELECT classGPV,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["classGPV"]; 
						$credits+=$arr1["credits"];

						$sql2="SELECT classGPV,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["classGPV"]; 
						$credits+=$arr2["credits"];

						$sql3="SELECT classGPV,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["classGPV"]; 
						$credits+=$arr3["credits"]; 

						$sql4="SELECT classGPV,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["classGPV"]; 
						$credits+=$arr4["credits"];

						$gpa=($gpv1+$gpv2+$gpv3+$gpv4)/$credits;
						
						$sql5= "INSERT INTO `$this->id` (index_no,classGPA) VALUES('$student[index_no]','$gpa') ";
						$rslt=$database->query($sql5);

				}
						if($rslt){
									echo '<script language="javascript">';
									echo 'alert("GPA Calculated")';
									echo '</script>';
								}
						
			}else{
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){

						$credits=0;
						$index_no=$student["index_no"];

						$sql1="SELECT classGPV,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["classGPV"]; 
						$credits+=$arr1["credits"];

						$sql2="SELECT classGPV,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["classGPV"]; 
						$credits+=$arr2["credits"];

						$sql3="SELECT classGPV,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["classGPV"]; 
						$credits+=$arr3["credits"]; 

						$sql4="SELECT classGPV,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["classGPV"]; 
						$credits+=$arr4["credits"];

						$gpa=($gpv1+$gpv2+$gpv3+$gpv4)/$credits;
						
						$sql5= "UPDATE `$this->id` SET classGPA='$gpa' WHERE index_no='$student[index_no]' ";
						$database->query($sql5);
				}
				
				echo '<script language="javascript">';
				echo 'if(confirm("GPA Updated")==true){ window.location.assign("view_orl_gpa.php")}';
				echo '</script>';
				
			}

		}
	/////////////////////////////////////////////////////////////////////////////////////////////////////	
    public function cal_2nd_degree_GPA(){
		global $database;
		
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){

						$credits=0;
						$index_no=$student["index_no"];

						$sql1="SELECT gpv,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"];

						$sql2="SELECT gpv,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"];

						$sql3="SELECT gpv,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 

						$sql4="SELECT gpv,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];

						$gpa=($gpv1+$gpv2+$gpv3+$gpv4)/$credits;
						
						//echo "gpaaaaaaaaaaaaaaaaaaaaaa";
						$sql5= "UPDATE `$this->id` SET gpa='$gpa' WHERE index_no='$student[index_no]' ";
						$database->query($sql5);

				}
						
				

		}

		//////////////////////////////////////////////////////////////////////////////////////////////
		public function cs_4th_list(){
			global $database;
			$table=$this->batch.$this->course."overallgpa";
			$result = $database->query("SHOW TABLES LIKE '$table'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				echo '<script language="javascript">';
				echo 'if(confirm("Special selection GPA still not calculated!")==true){ window.location.assign("staff.php")}else{window.location.assign("staff.php")}';
				echo '</script>';
			}else{
				$sql="SELECT * FROM `$table` order by `classGPA` desc limit 40";
				global $database;
				$arr=$database->query($sql);
				return $arr;
			}
		}

		public function is_4th_list(){
			global $database;
			$table=$this->batch.$this->course."overallgpa";
			$result = $database->query("SHOW TABLES LIKE '$table'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				echo '<script language="javascript">';
				echo 'if(confirm("Special selection GPA still not calculated!")==true){ window.location.assign("staff.php")}else{window.location.assign("staff.php")}';
				echo '</script>';
			}else{		
				$sql="SELECT * FROM `$table` order by `classGPA` desc limit 20";
				global $database;
				$arr=$database->query($sql);
				return $arr;
			}
		}
		
		public function cs_4th_gpa(){
			global $database;
			$table=$this->batch.$this->course."4thyrlist";
			$result = $database->query("SHOW TABLES LIKE '$table'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				echo '<script language="javascript">';
				echo 'if(confirm("GPA still not calculated!")==true){ window.location.assign("staff.php")}else{window.location.assign("show_4th.php")}';
				echo '</script>';
			}else{
				$sql="SELECT * FROM `$table` order by `gpa` asc limit 40";
				global $database;
				$arr=$database->query($sql);
				return $arr;
			}
		}

		public function is_4th_gpa(){
			global $database;
			$table=$this->batch.$this->course."4thyrlist";
			$result = $database->query("SHOW TABLES LIKE '$table'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				echo '<script language="javascript">';
				echo 'if(confirm("GPA still not calculated!")==true){ window.location.assign("staff.php")}else{window.location.assign("show_4th.php")}';
				echo '</script>';
			}else{
				$sql="SELECT * FROM `$table` order by `gpa` asc limit 20";
				global $database;
				$arr=$database->query($sql);
				return $arr;
			}
		}
		
	public function get4thYrLst(){
		global $database;
		$result = $database->query("SHOW TABLES LIKE '$this->table1'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->table1 (index_no int(8) ,gpa float(50) ,PRIMARY KEY ( index_no))";
				$database->query($sql1);	
			}
		
		
        if($this->course=='CS'){
        $array=$this->cs_4th_list();
    	}else if($this->course=='IS'){
        $array=$this->is_4th_list();
    	}
		while($arr = mysqli_fetch_array($array,MYSQL_ASSOC)){
			$index=$arr["index_no"];
			$gpa=$arr["gpa"];
			$sql2= "INSERT INTO `$this->table1` (index_no,gpa) VALUES('$index','$gpa') ";
			$database->query($sql2);	
		}
	}

/////////////////cal final degree gpa/////////////////////////////////////////////////////////////////////////////////////////
    public function calculate_finalGPA(){
		global $database;
			$result = $database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50) ,classGPA float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysqli_num_rows($database->query("select * from `$this->id`"))==0){
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];
		
						$sql5="SELECT gpv,credits FROM `$this->id5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr5["gpv"]; 
						$credits+=$arr5["credits"];
						
						$sql6="SELECT gpv,credits FROM `$this->id6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6)/$credits;
							
						$sql= "INSERT INTO `$this->id` (index_no,gpa) VALUES('$student[index_no]','$gpa') ";
						$rslt=$database->query($sql);
						
				}
				
						if($rslt){
									echo '<script language="javascript">';
									echo 'alert("GPA Calculated")';
									echo '</script>';
								}
							
			}else{
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];
		
						$sql5="SELECT gpv,credits FROM `$this->id5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr5["gpv"]; 
						$credits+=$arr5["credits"];
						
						$sql6="SELECT gpv,credits FROM `$this->id6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6)/$credits;
						
						$sql5= "UPDATE `$this->id` SET gpa='$gpa' WHERE index_no='$student[index_no]' ";
						$rslt2=$database->query($sql);

				}
				
						if($rslt2){
							echo '<script language="javascript">';
							echo 'if(confirm("GPA Updated")==true){ window.location.assign("cal_final_gpa.php")}';
							echo '</script>';
						}
				
			}

		}

		
///////////////cal final class gpa////////////////////////////////////////////////////////////////////////////////////////
	public function cal_final_classGPA(){
		global $database;
			$result = $database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50) ,classGPA float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
				$sql="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT classGPV,credits FROM `$this->id1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["classGPV"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT classGPV,credits FROM `$this->id2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["classGPV"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT classGPV,credits FROM `$this->id3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["classGPV"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT classGPV,credits FROM `$this->id4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["classGPV"]; 
						$credits+=$arr4["credits"];
		
						$sql5="SELECT classGPV,credits FROM `$this->id5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr5["classGPV"]; 
						$credits+=$arr5["credits"];
						
						$sql6="SELECT classGPV,credits FROM `$this->id6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["classGPV"]; 
						$credits+=$arr6["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6)/$credits;
							
							
						$sql5= "UPDATE `$this->id` SET classGPA=$gpa WHERE index_no='$index_no' ";
						$database->query($sql5);

				}
						
				
			

		}

		
        
	}
	

?>