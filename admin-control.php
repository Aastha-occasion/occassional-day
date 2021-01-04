<?php
session_start();
echo $_SESSION["name"];
if(!isset($_SESSION["name"]))
{
    header("location:event-manager.php");
}
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x:hidden">

<head>
    <meta charset="UTF-8">
    <title>admin-control</title>
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
        .card {
            float: left;
            padding: 10px;
            border-radius: 10px;
            margin: 20px;
            
        }
        .row
        {
            padding-bottom: 4%;
            padding: 150px;
            padding-top: 0px;
        }
       .btn:hover
        {
            background-color: red;
            transform: scale(1.2);
            transition: ease all .5s;
        }
    </style>
</head>

<body>
   
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

    
        
            <h6 style="display:flex;justify-content:flex-end">welcome: <?php echo $_SESSION["name"]?></h6>
        
    
    <h3 style="display:flex;justify-content:center;color:red">Admin-Control</h3><hr>
    <br>
    <!--cards-->
    <div class="container">
    <div class="form-row" style="display:flex;justify-content:center">

        <div class="card col-md-2" style="width: 18rem;">
            <img src="images/ed%20(1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">contributor-control</h5>
                <p class="card-text">Delete Contributor Data if needed</p>
                <a href="admin-contributor-client-table-record.php" class="btn btn-primary btn-block">Go on</a>
            </div>
        </div>
        <div class="card col-md-2" style="width: 18rem;">
            <img src="images/ed%20(1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Client-control</h5>
                <p class="card-text">Delete Client Data if needed</p><br>
                <a href="admin-client-table-record.php" class="btn btn-primary btn-block">Go on</a>
            </div>

        </div>
        <div class="card col-md-2" style="width: 18rem;">
            <img src="images/ed%20(1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">feedback</h5>
                <p class="card-text">Read user's feedback quickly</p><br>
                <a href="admin-feedback-table-record.php" class="btn btn-primary btn-block">Go on</a>
            </div>

        </div>
        <!--signup-->
         <div class="card col-md-2" style="width: 18rem;">
            <img src="images/ed%20(1).png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Signup-Controls</h5>
                <p class="card-text">Delete Signup Data if needed</p>
                <a href="signup-data.php" class="btn btn-primary btn-block">Go on</a>
            </div>
        </div>
    </div>
    </div>
    <nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:50px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;event day.com | Designed by banglore computer educations
            </div>
        </nav>
</body>

</html>
