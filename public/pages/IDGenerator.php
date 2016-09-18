<?php
	
	function generateID ($prefix, $tableName, $columnName){
		require 'DBConnection.php';
		
		$sql="SELECT $columnName FROM $tableName ORDER BY $columnName desc LIMIT 1 ";
		
		//echo $sql;
		
		$query=mysqli_query($con,$sql);
		
		$lastId;
		$newId;
		
		if(mysqli_num_rows($query)>0){
			while($row= mysqli_fetch_assoc($query)){
				$lastId= $row[$columnName];
			}
			
			$splittedVal=explode($prefix,$lastId);
		
			$intVal= (int)$splittedVal[1];
			
			$newInt= $intVal+1;
			
			$formattedValue= str_pad($newInt, 4, '0', STR_PAD_LEFT);
			
			$newId= $prefix.(string)$formattedValue;
			
			//echo $intVal;
			//echo $newInt;
			//echo $formattedValue;
			//echo $newId;
			
			return $newId;
			
		}else{
			return $prefix."0001";
		}
		
		
	}


//echo generateID("Tou","tourist","Tourist_ID");
?>
