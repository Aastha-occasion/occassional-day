<?php
session_start();
include_once("connect.php");



$uidd=$_GET["name"];
$pwwd=$_GET["pass"];

$query="select * from admin where name='$uidd' and password='$pwwd'";
$table = mysqli_query($dbRef,$query);
$count=mysqli_num_rows($table);
if($count>=1)
{
    while($row=mysqli_fetch_array($table))
    {
        
       $_SESSION["name"]=$uidd;
        
        echo "correct";
    }
    
    
}
  
    

else
    echo "invalid username or password";

?>