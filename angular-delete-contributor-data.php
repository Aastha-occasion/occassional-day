<?php
		include_once("connect.php");
		$name=$_GET["name"];
		$query="delete  from profiledata where name='$name'";

		mysqli_query($dbRef,$query);
				$msg=mysqli_error($dbRef);
		if(mysqli_affected_rows($dbRef)==0)
			echo $msg;
		else
			echo "Record Deleted";	
?>