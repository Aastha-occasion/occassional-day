<?php
session_start();
echo $_SESSION["name"];
if(!isset($_SESSION["name"]))
{
    header("location:index.php");
}
?>



<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden;">

<head>
    <meta charset="UTF-8">
    <title>client-dash</title>
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
     <style>
    #cards
         {
             text-align: center;
             /*margin-left: 8%;*/
             display: flex;
             justify-content: center;
             
             
         }
         .card
         {
             filter: grayscale(100%);
             margin: 20px;
           
             
         }
         .card:hover
         {
             filter: grayscale(0%);
             transform: scale(1.1);
             transition: ease all .5s;
            
         }
         .cards:hover .card
         {
             filter: blur(6px) grayscale(100%);
             opacity: 0.5;
            
         }
         .cards .card:hover
         {
             filter: blur(0px);
             cursor: pointer;
             opacity: 1;
         }
         
    </style>
    
</head>

<body >
        <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#595959,#333333)">
        <a class="navbar-brand" href="images/eventday.png" style="margin-top:10px;">
            <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
            <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
                Event Day</font>
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
<br><br><br><br><br>

<div class="row">
    <div class="col-md-12">
        <h6 class="text-primary" id="session" style="padding-top:5px;font-size:15px;text-align: end;"><font color="red">welcome:</font> <?php echo $_SESSION["name"];?> </h6>
        
    </div>
</div>



    <div style="display:flex;justify-content:center;margin-top:20px;font-size:30px;color:black;"><b>
            <font face="Times New Roman" style="color:Red;">CLIENT DASHBOARD</font>
        </b></div>

    <!--/////////////////-->
    <div class="container">
    <div id="cards" class="form-row cards">
        
            <div class="card col-md-3 form-group" style="width: 50rem;margin-top:50px;display:flex; float:left;justify-content: space-around;padding:20px;" >
                <img src="images/20190704_131946_0000.png" class="card-img-top" alt="..."style="padding-top:15px;">
                <div class="card-body">
                    <h5 class="card-title">Create Profile</h5>
                    <p class="card-text">Here you can create your profile, so that we can inform you on different occassion and give us the chance to enjoy your precious birthday with us.</p>
                    <p>so create your profile.<img src="images/download%20(3).jpg" height="20" width="30"></p>
                    <a href="client-profile.php" class="btn btn-primary">Create it now!</a>
                </div>
            </div>
            <!--/////////////////////////////////-->
            <div class="card col-md-3  form-group" style="width: 50rem;margin-top:50px;display:flex;justify-content: space-around; padding:20px;" >
                <img src="images/20190704_131946_0000.png" class="card-img-top" alt="..." style="padding-top:15px;">
                <div class="card-body">
                    <h5 class="card-title text-primary">Update Profile</h5>
                    <p class="card-text">Here you can update your profile, so that we can inform you on different occassion and give us the chance to enjoy your precious birthday with us.</p>
                    <p>so update your profile.<img src="images/download%20(3).jpg" height="20" width="30"></p>
                    <a href="client-profile-fetch.php" class="btn btn-primary">Update it now!</a>
                </div>
            </div>
            <!--////////////////////////////-->
            <div class="card col-md-3 form-group" style="width: 50rem;margin-top:50px;display:flex;justify-content: space-around; padding:20px;" >
                <img src="images/20190704_131946_0000.png" class="card-img-top" alt="..." style="padding-top:15px;">
                <div class="card-body">
                    <h5 class="card-title text-danger">Find Contributor</h5>
                    <p class="card-text">Here you can find the suitable contributor in your locality, its simple and easy to use so try now.</p><br>
                    <p>so Find the Contributor.<img src="images/download%20(3).jpg" height="20" width="30"></p>
                    <a href="plan-a-function.php" class="btn btn-primary">Find the Best one now!</a>
                </div>
            </div>
        </div>
    
</div>
<!---->

<nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:50px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;event day.com | Designed by banglore computer educations
            </div>
        </nav>
</body>

</html>
