<?php
		include_once("connect.php");
		$state=$_GET["state"];
		$query="select distinct city from contributorprofiledata where state='$state'";

		$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$ary=array();
		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);
        
				
?>