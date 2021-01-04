<?php
session_start();
include_once("connect.php");

$name=$_POST["name"];
$dob=$_POST["txtdob"];



$address=$_POST["txtadress"];
$address2=$_POST["txtadress2"];
$city=$_POST["txtcity"];
$state=$_POST["inputState"];
$zip=$_POST["zip"];
$email=$_POST["EMAIL"];
$officeno=$_POST["office"];
$estd=$_POST["estd"];
$mobile=$_POST["mobile"];


  $btn=$_POST["btn"];
    

$occupation=$_POST['occupation'];

    $picname=$_FILES["ppic"]["name"];
	$hdn=$_POST["hdn"];
	
	//$size=$_FILES["ppic"]["size"];
	$temp_name=$_FILES["ppic"]["tmp_name"];
	
	if($picname=="")
		$picname=$hdn;
	else
		move_uploaded_file($temp_name,"uploads/".$picname);
	//echo "<h2>File Uploaded..</h2>";


  


    
    $query="update contributorprofiledata set dob='$dob',address='$address',occupation='$occupation',mobile=$mobile,address2='$address2',email='$email',officeno='$officeno',estd='$estd',city='$city',state='$state',zip='$zip',picname='$picname' where name='$name'";
    
  
   	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
			echo "";
	else
			echo $msg1;  
    


?>
<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;">
<head>
    <meta charset="UTF-8">
    <title>client-data</title>
     <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#595959,#333333)">
        <a class="navbar-brand" href="images/eventday.png" style="margin-top:10px;">
            <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
            <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
              Ocassional Day</font>
            <br>
            <p style="margin-left:82px;margin-top:-10px;font-size:12px;color:white">With You Everytime</p>
        </a>
         <ul class="navbar-nav ml-auto" style="margin-right:15px;">
        <li class="nav-item">
            <div style="text-align:top;"> <a class="nav-link text-white" href="log-out.php">
                    <font style="margin-top:-10px; color:gold;">log-out</font>
                </a></div>
        </li>
            </ul>
    </nav>
<br><br><br><br><br><br>
<div class="row">
<div class="col-md-12">
<center><h3><font color="red">You have succsessfully Updated your profile <hr style="width:400px;"></font></h3></center><br><br>
   <div class="container">
      <center>
       <p>
           Now its easy for you to contact with different clients without any difficulty.
       </p>
       <p>
           we at Event day help you find different clients.
       </p>
       <p>click on back button to go back to your dashboard </p>
     </center>  <a href="contributor-dash.php"><center><div class="btn btn-primary" value="back">back</div></center></a>
     <style>
       .btn:hover
         {cursor: pointer;}
       </style>
   </div>
    </div></div>
<!---->
<br><br><br><br><br>
<nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:150px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;occassinal day.com | Designed by Aastha
            </div>
        </nav>
</body>
</html>