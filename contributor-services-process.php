
<?php

include_once("connect.php");

$email=$_GET["email"];
$functions=$_GET["funct"];



$selservice=$_GET["selservice"];




 $query="insert into selectedservice values('$email','$functions','$selservice')";
    mysqli_query($dbRef,$query);
    	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo $email." succsessfully  selected their services";
     
	else
			echo "data already saved"; 
    
?>