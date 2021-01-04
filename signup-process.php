
<?php

include_once("connect.php");

$name=$_GET["name"];
$password=md5($_GET["password"]);
//$password=$_GET["password"];



$mobile=$_GET["mobile"];



/*$picname=$_FILES["ppic"]["name"];
	//$size=$_FILES["ppic"]["size"];
	$temp_name=$_FILES["ppic"]["tmp_name"];
	
	move_uploaded_file($temp_name,'uploads/'.$picname);
	//echo "<h2>File Uploaded..</h2>";*/


    /*$btn=$_GET["btn"];*/
    

$category=$_GET["category"];

/*if($btn=="submit")
{
    
    $query="insert into signup values('$name','$password','$mobile','$category')";
    mysqli_query($dbRef,$query);
    	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "signup complete";
     
	else
			echo $msg; 
    
    
}*/
 $query="insert into signup values('$name','$password','$mobile','$category')";
    mysqli_query($dbRef,$query);
    	$msg=mysqli_error($dbRef);
	if($msg=="")
			echo "signup complete";
     
	else
			echo "e-mail already exist"; 
    
?>
