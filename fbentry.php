<?php
session_start();

include_once("connect.php");

$email1=$_GET["email1"];
//$rd1=$_POST["rd"];
//$rd2=$_GET["op2"];
$rate=$_GET["rad"];

$message1=$_GET["message"];

    $btn=$_GET["btn"];



if($btn=="submit")
{
        $to = $email1;
        $to="sajalgarg2628@gmail.com";
    $subject = "Feedback";
    $message = "thankyou for feedback\n".$email1."\n".$rate."\n".$message1;
    $headers = "From: goonsg28@gmail.com";
    if(mail($to,$subject,$message,$headers))
    {
        echo "sent succsessfully";
    }
    else
        echo "sorry for inconvinience";
    
    $query="INSERT INTO fb VALUES('$email1','$rate','$message1')";
    
  
   	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
    //echo "pahunch gaya";
	if($msg1=="")
    {
       // $_SESSION["name"]=$name;
        $_SESSION["email1"]=$email1;
			echo "Record Saved....,.,.,.,.,.";
    }
	else
			echo $msg1;  
    
}

?>
