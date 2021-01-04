<?php
		include_once("connect.php");
		
		$query="select * from contributorprofiledata";

		$table=mysqli_query($dbRef,$query);
				
		

		$ary=array();
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
				
			
			?> 