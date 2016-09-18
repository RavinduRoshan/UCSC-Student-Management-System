<?php
require_once(LIB_PATH.DS.'database.php');
class FourthYearFinalGPA{
	
	public $batch;
	public $course;
    public $id;
    public $sem1;
    public $sem2;
    public $sem3;
    public $sem4;
	public $sem5;
	public $sem6;
	public $sem7;
	public $sem8;
	public $table1;

    
    public function calculate_4thYearGPA(){
		global $database;
			$result = $database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50), classGPA float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
			if(mysqli_num_rows($database->query("select * from `$this->id`"))==0){
				$sql="SELECT * FROM `$this->table1`";
				$result=$database->query($sql);
				while($student = mysql_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->sem1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->sem2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->sem3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->sem4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];

						$sql5="SELECT gpv,credits FROM `$this->sem5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr4["gpv"]; 
						$credits+=$arr5["credits"];

						$sql6="SELECT gpv,credits FROM `$this->sem6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];

						$sql7="SELECT gpv,credits FROM `$this->sem7` WHERE index_no=$index_no";
						$result7=$database->query($sql7);
						$arr7 = mysqli_fetch_array($result7);
						$gpv7=$arr7["gpv"]; 
						$credits+=$arr7["credits"];

						$sql8="SELECT gpv,credits FROM `$this->sem8` WHERE index_no=$index_no";
						$result8=$database->query($sql8);
						$arr8 = mysqli_fetch_array($result8);
						$gpv8=$arr8["gpv"]; 
						$credits+=$arr8["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6+$gpv7+$gpv8)/$credits;
										
						$sql9= "INSERT INTO `$this->id` (index_no,gpa) VALUES('$student[index_no]','$gpa') ";
						$database->query($sql9);
				}
					echo '<script language="javascript">';
					echo 'if(confirm("GPA Calculated")==true){ window.location.assign("calculate4thYrFinalGPA.php")}';
					echo '</script>';
			}else{
				$sql="SELECT * FROM `$this->table1`";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT gpv,credits FROM `$this->sem1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["gpv"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT gpv,credits FROM `$this->sem2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["gpv"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT gpv,credits FROM `$this->sem3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["gpv"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT gpv,credits FROM `$this->sem4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["gpv"]; 
						$credits+=$arr4["credits"];

						$sql5="SELECT gpv,credits FROM `$this->sem5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr4["gpv"]; 
						$credits+=$arr5["credits"];

						$sql6="SELECT gpv,credits FROM `$this->sem6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["gpv"]; 
						$credits+=$arr6["credits"];

						$sql7="SELECT gpv,credits FROM `$this->sem7` WHERE index_no=$index_no";
						$result7=$database->query($sql7);
						$arr7 = mysqli_fetch_array($result7);
						$gpv7=$arr7["gpv"]; 
						$credits+=$arr7["credits"];

						$sql8="SELECT gpv,credits FROM `$this->sem8` WHERE index_no=$index_no";
						$result8=$database->query($sql8);
						$arr8 = mysqli_fetch_array($result8);
						$gpv8=$arr8["gpv"]; 
						$credits+=$arr8["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6+$gpv7+$gpv8)/$credits;
							
						$sql9= "UPDATE `$this->id` SET gpa='$gpa' WHERE index_no='$student[index_no]' ";
						$database->query($sql9);

				}
				echo '<script language="javascript">';
				echo 'if(confirm("GPA Updated")==true){ window.location.assign("calculate4thYrFinalGPA.php")}';
				echo '</script>';
			}

		}

/////////////////////////////4th year class gpa///////////////////////////////////////////////////////////////////
		public function calculate_4th_classGPA(){
		global $database;
			$result = $database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id (index_no int(8) ,gpa float(50), classGPA float(50) ,PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);	
			}
			
				$sql="SELECT * FROM `$this->table1`";
				$result=$database->query($sql);
				while($student = mysqli_fetch_array($result,MYSQL_ASSOC)){
						
						$credits=0;
						$index_no=$student["index_no"];
		
						$sql1="SELECT classGPV,credits FROM `$this->sem1` WHERE index_no=$index_no";
						$result1=$database->query($sql1);
						$arr1 = mysqli_fetch_array($result1);
						$gpv1=$arr1["classGPV"]; 
						$credits+=$arr1["credits"]; 
		
						$sql2="SELECT classGPV,credits FROM `$this->sem2` WHERE index_no=$index_no";
						$result2=$database->query($sql2);
						$arr2 = mysqli_fetch_array($result2);
						$gpv2=$arr2["classGPV"]; 
						$credits+=$arr2["credits"]; 
		
						$sql3="SELECT classGPV,credits FROM `$this->sem3` WHERE index_no=$index_no";
						$result3=$database->query($sql3);
						$arr3 = mysqli_fetch_array($result3);
						$gpv3=$arr3["classGPV"]; 
						$credits+=$arr3["credits"]; 
		
						$sql4="SELECT classGPV,credits FROM `$this->sem4` WHERE index_no=$index_no";
						$result4=$database->query($sql4);
						$arr4 = mysqli_fetch_array($result4);
						$gpv4=$arr4["classGPV"]; 
						$credits+=$arr4["credits"];

						$sql5="SELECT classGPV,credits FROM `$this->sem5` WHERE index_no=$index_no";
						$result5=$database->query($sql5);
						$arr5 = mysqli_fetch_array($result5);
						$gpv5=$arr4["classGPV"]; 
						$credits+=$arr5["credits"];

						$sql6="SELECT classGPV,credits FROM `$this->sem6` WHERE index_no=$index_no";
						$result6=$database->query($sql6);
						$arr6 = mysqli_fetch_array($result6);
						$gpv6=$arr6["classGPV"]; 
						$credits+=$arr6["credits"];

						$sql7="SELECT classGPV,credits FROM `$this->sem7` WHERE index_no=$index_no";
						$result7=$database->query($sql7);
						$arr7 = mysqli_fetch_array($result7);
						$gpv7=$arr7["classGPV"]; 
						$credits+=$arr7["credits"];

						$sql8="SELECT classGPV,credits FROM `$this->sem8` WHERE index_no=$index_no";
						$result8=$database->query($sql8);
						$arr8 = mysqli_fetch_array($result8);
						$gpv8=$arr8["classGPV"]; 
						$credits+=$arr8["credits"];
		
						$gpa=($gpv1+$gpv2+$gpv3+$gpv4+$gpv5+$gpv6+$gpv7+$gpv8)/$credits;
										
						$sql9= "UPDATE `$this->id` SET classGPA='$gpa' WHERE index_no='$student[index_no]' ";
						$database->query($sql9);

				}

			

		}


}
	

?>