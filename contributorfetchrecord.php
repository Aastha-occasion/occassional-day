<?php
		include_once("connect.php");
		$name=$_GET["name"];
		$query="select * from contributorprofiledata where name='$name'";

		$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$ary=array();
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);	
				
			
			?>