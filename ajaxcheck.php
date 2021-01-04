<?php
include_once("connect.php");
		$name=$_GET["name"];
		$query="select * from profiledata where `name`='$name'";
//echo $query;
		$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$count=mysqli_num_rows($table);
		if($count==1)	
			echo "data available";
		else
			echo "no data available";
			
				
			
			?>