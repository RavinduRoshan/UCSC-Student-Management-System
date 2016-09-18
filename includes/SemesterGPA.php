
<?php
require_once(LIB_PATH.DS.'database.php');

class SemesterGPA{
	
	public $batch;
	public $sem_id;
	public $course;
    public $id;
    public $id1;
	
    
    public function calculate() {
		global $database;

			//check table already not created and create table
			$result =$database->query("SHOW TABLES LIKE '$this->id'");
			$tableExist = mysqli_num_rows($result) > 0;
			if(!$tableExist){
				$sql1="CREATE TABLE $this->id ( index_no int(8) ,
												gpa float(50) ,
												classGPA float(50),
												gpv float(50),
												classGPV float(50),
												credits int(2),
												PRIMARY KEY ( index_no))";
        		$result1=$database->query($sql1);			
			}
			
			
			if(mysqli_num_rows($database->query("select * from `$this->id`"))==0){//check if there any data
				$sql4="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result4=$database->query($sql4);
				while($student = mysqli_fetch_array($result4,MYSQL_ASSOC)){
						
						$sql1="SELECT sub_id FROM `$this->id1` WHERE index_no=$student[index_no]";
						$result1=$database->query($sql1);
						
						$credits=0;
						$gpv=0;
						$gpa;
						while($arr = mysqli_fetch_array($result1,MYSQL_ASSOC)){
		
							$su=$arr["sub_id"] ;
							$sql3="SELECT sub_id,Credits FROM subjects WHERE sub_id='$su' ";
							$result3=$database->query($sql3);
							$sub=mysqli_fetch_array($result3,MYSQL_ASSOC);
							
							$sql6="SELECT mark,mark2,mark3,mark4,mark5,mark6 FROM `$this->id1` WHERE index_no=$student[index_no] AND sub_id='$su'";
							$result6=$database->query($sql6);
							$arr1 = mysqli_fetch_array($result6,MYSQL_ASSOC);
							$array=array($arr1['mark'],$arr1['mark2'],$arr1['mark3'],$arr1['mark4'],$arr1['mark5'],$arr1['mark6']);
							$mark=max($array);
							
							if ($mark<=100 && $mark>89)
									{$grade = 'A+';}
								else if ($mark<90 && $mark>79)
									{$grade = 'A';}
								else if ($mark<80 && $mark>74)
									{$grade = 'A-';}
								else if ($mark<70 && $mark>64)
									{$grade = 'B+';}
								else if ($mark<65 && $mark>59)
									{$grade = 'B-';}
								else if ($mark<60 && $mark>54)
									{$grade = 'C+';}
								else if ($mark<55 && $mark>49)
									{$grade = 'C';}
								else if ($mark<50 && $mark>44)
									{$grade = 'C-';}
								else if ($mark<45 && $mark>39)
									{$grade = 'D+';}
								else if ($mark<40 && $mark>29)
									{$grade = 'D';}
								else if ($mark<30 && $mark>19)
									{$grade = 'D-';}
								else if ($mark<20 && $mark>=0)
									{$grade = 'E';}
								else {$grade = 'F';}
							/////////////////////////////
							
							if ($grade=='A+'){
								$gpv+=4.25*$sub["Credits"];
								$credits+=$sub["Credits"]; 
							}
							if ($grade=='A'){
								$gpv+=4*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
							 
							if ($grade=='A-'){
								$gpv+=3.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B+'){
								$gpv+=3.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B'){
								$gpv+=3*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B-'){
								$gpv+=2.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C+'){
								$gpv+=2.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C'){
								$gpv+=2*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C-'){
								$gpv+=1.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D+'){
								$gpv+=1.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D'){
								$gpv+=1*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D-'){
								$gpv+=0.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='E'){
								$credits+=$sub["Credits"];
							}
							if ($grade=='F'){
								$credits+=$sub["Credits"];
							}
								
						}
		
							$gpa=$gpv/$credits;
							
							
							
							$sql5= "INSERT INTO `$this->id` (index_no,gpa,gpv,credits) VALUES('$student[index_no]','$gpa','$gpv','$credits') ";
							$database->query($sql5);

				}
					echo '<script language="javascript">';
					echo 'if(confirm("GPA successfully calculated")==true){ window.location.assign("gpaCalculate.php")}';
					echo '</script>';
			}else{
				$sql4="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result4=$database->query($sql4);
				while($student = mysqli_fetch_array($result4,MYSQL_ASSOC)){
						
						$sql1="SELECT sub_id FROM `$this->id1` WHERE index_no=$student[index_no]";
						$result1=$database->query($sql1);

						$credits=0;
						$gpv=0;
						$gpa;
						while($arr = mysqli_fetch_array($result1,MYSQL_ASSOC)){
		
							$su=$arr["sub_id"] ;
							$sql3="SELECT sub_id,Credits FROM subjects WHERE sub_id='$su' ";
							$result3=$database->query($sql3);
							$sub=mysqli_fetch_array($result3,MYSQL_ASSOC);
							
							$sql6="SELECT mark,mark2,mark3,mark4,mark5,mark6 FROM `$this->id1` WHERE index_no=$student[index_no] AND sub_id='$su'";
							$result6=$database->query($sql6);
							$arr1 = mysqli_fetch_array($result6,MYSQL_ASSOC);
							$array=array($arr1['mark'],$arr1['mark2'],$arr1['mark3'],$arr1['mark4'],$arr1['mark5'],$arr1['mark6']);
							$mark=max($array);
							if ($mark<=100 && $mark>89)
									{$grade = 'A+';}
								else if ($mark<90 && $mark>79)
									{$grade = 'A';}
								else if ($mark<80 && $mark>74)
									{$grade = 'A-';}
								else if ($mark<70 && $mark>64)
									{$grade = 'B+';}
								else if ($mark<65 && $mark>59)
									{$grade = 'B-';}
								else if ($mark<60 && $mark>54)
									{$grade = 'C+';}
								else if ($mark<55 && $mark>49)
									{$grade = 'C';}
								else if ($mark<50 && $mark>44)
									{$grade = 'C-';}
								else if ($mark<45 && $mark>39)
									{$grade = 'D+';}
								else if ($mark<40 && $mark>29)
									{$grade = 'D';}
								else if ($mark<30 && $mark>19)
									{$grade = 'D-';}
								else if ($mark<20 && $mark>=0)
									{$grade = 'E';}
								else {$grade = 'F';}
							/////////////////////////////
							
							if ($grade=='A+'){
								$gpv+=4.25*$sub["Credits"];
								$credits+=$sub["Credits"]; 
							}
							if ($grade=='A'){
								$gpv+=4*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
							 
							if ($grade=='A-'){
								$gpv+=3.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B+'){
								$gpv+=3.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B'){
								$gpv+=3*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B-'){
								$gpv+=2.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C+'){
								$gpv+=2.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C'){
								$gpv+=2*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C-'){
								$gpv+=1.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D+'){
								$gpv+=1.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D'){
								$gpv+=1*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D-'){
								$gpv+=0.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='E'){
								$credits+=$sub["Credits"];
							}
							if ($grade=='F'){
								$credits+=$sub["Credits"];
							}
								
						}
		
							$gpa=$gpv/$credits;
			
							$sql5= "UPDATE `$this->id` SET gpa='$gpa',gpv='$gpv',credits='$credits' WHERE index_no='$student[index_no]' ";
							$database->query($sql5);

				}
				
			}
	}		
//////////////////class gpa calculation////////////////////////////////////////////////////////////////////////////
			
	public function calculate_class_gpa() {
				global $database;
				$sql4="SELECT index_no FROM `students` WHERE batch=$this->batch AND course='$this->course'";
				$result4=$database->query($sql4);
				while($student = mysqli_fetch_array($result4,MYSQL_ASSOC)){
						
						$sql1="SELECT sub_id FROM `$this->id1` WHERE index_no=$student[index_no]";
						$result1=$database->query($sql1);
						
						
						//$sql3="SELECT sub_id,Credits FROM subjects WHERE course='$this->course' AND sem_id='$this->sem_id'";
						//$result3=$database->query($sql3);
						$credits=0;
						$gpv=0;
						$gpa;
						while($arr = mysqli_fetch_array($result1,MYSQL_ASSOC)){
		
							$su=$arr["sub_id"] ;
							$sql3="SELECT sub_id,Credits FROM subjects WHERE sub_id='$su' ";
							$result3=$database->query($sql3);
							$sub=mysqli_fetch_array($result3,MYSQL_ASSOC);
							
							$sql6="SELECT mark,mark2,mark3,mark4,mark5,mark6 FROM `$this->id1` WHERE index_no=$student[index_no] AND sub_id='$su'";
							$result6=$database->query($sql6);
							$arr1 = mysqli_fetch_array($result6,MYSQL_ASSOC);
							
							$array=array($arr1['mark'],$arr1['mark2'],$arr1['mark3'],$arr1['mark4'],$arr1['mark5'],$arr1['mark6']);
							//$mark=max($array);
							if($arr1['mark']<50){
								if($arr1['mark2']>50||$arr1['mark3']>50||$arr1['mark4']>50||$arr1['mark5']>50||$arr1['mark6']>50){
									$grade='C';
								}else{
									$mark=max($array);
									if ($mark<=100 && $mark>89)
									{$grade = 'A+';}
								else if ($mark<90 && $mark>79)
									{$grade = 'A';}
								else if ($mark<80 && $mark>74)
									{$grade = 'A-';}
								else if ($mark<70 && $mark>64)
									{$grade = 'B+';}
								else if ($mark<65 && $mark>59)
									{$grade = 'B-';}
								else if ($mark<60 && $mark>54)
									{$grade = 'C+';}
								else if ($mark<55 && $mark>49)
									{$grade = 'C';}
								else if ($mark<50 && $mark>44)
									{$grade = 'C-';}
								else if ($mark<45 && $mark>39)
									{$grade = 'D+';}
								else if ($mark<40 && $mark>29)
									{$grade = 'D';}
								else if ($mark<30 && $mark>19)
									{$grade = 'D-';}
								else if ($mark<20 && $mark>=0)
									{$grade = 'E';}
								else {$grade = 'F';}
								}
							}else{
								$mark=$arr1['mark'];
								
								//get grade from mark
								if ($mark<=100 && $mark>89)
									{$grade = 'A+';}
								else if ($mark<90 && $mark>79)
									{$grade = 'A';}
								else if ($mark<80 && $mark>74)
									{$grade = 'A-';}
								else if ($mark<70 && $mark>64)
									{$grade = 'B+';}
								else if ($mark<65 && $mark>59)
									{$grade = 'B-';}
								else if ($mark<60 && $mark>54)
									{$grade = 'C+';}
								else if ($mark<55 && $mark>49)
									{$grade = 'C';}
								else if ($mark<50 && $mark>44)
									{$grade = 'C-';}
								else if ($mark<45 && $mark>39)
									{$grade = 'D+';}
								else if ($mark<40 && $mark>29)
									{$grade = 'D';}
								else if ($mark<30 && $mark>19)
									{$grade = 'D-';}
								else if ($mark<20 && $mark>=0)
									{$grade = 'E';}
								else {$grade = 'F';}
							
							}
							/////////////////////////////
							
							//calculate gpa
							if ($grade=='A+'){
								$gpv+=4.25*$sub["Credits"];
								$credits+=$sub["Credits"]; 
							}
							if ($grade=='A'){
								$gpv+=4*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
							 
							if ($grade=='A-'){
								$gpv+=3.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B+'){
								$gpv+=3.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B'){
								$gpv+=3*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='B-'){
								$gpv+=2.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C+'){
								$gpv+=2.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C'){
								$gpv+=2*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='C-'){
								$gpv+=1.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D+'){
								$gpv+=1.25*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D'){
								$gpv+=1*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='D-'){
								$gpv+=0.75*$sub["Credits"];
								$credits+=$sub["Credits"];
							}
		
							if ($grade=='E'){
								$credits+=$sub["Credits"];
							}
							if ($grade=='F'){
								$credits+=$sub["Credits"];
							}
								
						}
		
							$gpa=$gpv/$credits;
							
							$index_no=$student['index_no'];
							$sql5= "UPDATE `$this->id` SET classGPA={$gpa},classGPV={$gpv} WHERE index_no='{$index_no}' ";
							$database->query($sql5);

				}
					echo '<script language="javascript">';
					echo 'if(confirm("GPA updated")==true){ window.location.assign("gpaCalculate.php")}';
					echo '</script>';
				
				}

		
        
	}

?>
