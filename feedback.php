
<?php

include_once("connect.php");

$email1=$_GET["email1"];
$message=$_GET["message"];







    




 $query="insert into feedback values('$email1','$message')";
    mysqli_query($dbRef,$query);
    	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "feedback given";
     
	else
			echo "e-mail already exist"; 
    
?>
