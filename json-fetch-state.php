<?php
		include_once("connect.php");
		
		$query="select distinct state from contributorprofiledata";

		$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$ary=array();
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);
        
				
?>