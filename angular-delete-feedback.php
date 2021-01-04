<?php
		include_once("connect.php");
		$email1=$_GET["email1"];
		$query="delete  from feedback where email1='$email1'";

		mysqli_query($dbRef,$query);
$msg=mysqli_error($dbRef);
				
		if(mysqli_affected_rows($dbRef)==0)
        
            echo "Invalid id";

        
		else
			echo "Record Deleted";	
?>