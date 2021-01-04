<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
        <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
   
   <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" href="images/ed%20(1).png">
            <img src="images/ed%20(1).png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; margin-top:10px; justify-content:start;">
            <font face="Comic Sans MS" style="color:gold;font-size:50px;">
                Occassional Day</font>
        </a>
        <li class="nav-item">
            <div style="text-align:top;"> <a class="nav-link text-white" href="event-manager.php">
                    <font face="Comic Sans MS" style="margin-top:-10px; color:gold;">Home</font>
                </a></div>
        </li>


    </nav>
    <br><br><br><br>
   <!--////////////////////////////-->
    <nav class="navbar navbar-expand-lg navbar-light  " style="background-color:lightblue; box-shadow:0px 0px 5px black;">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
     <li class="nav-item" style="margin-top:25px;">
         <h3>
                    <font face="Comic Sans MS">Search Accordingly:-</font>
                </h3>
     </li>
      <li class="nav-item active">
        <a class="nav-link" href="#" ><font face="Comic Sans MS" color="black">Functions:</font>
                <center>

                    <select name="functions" id="functions" class="form-control">
                        <option value="select">select</option>
                    </select><br>

                </center> </a>
      </li>
      
      <li class="nav-item" >
        <a class="nav-link" href="#"> <font face="Comic Sans MS" color="black">Services:</font>
                <center>

                    <select name="services" id="services" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center><br></a>
      </li>
      
    
        <li class="nav-item">
        <a class="nav-link" href="#"><font face="Comic Sans MS" color="black">State:</font>
                <center>

                    <select name="state" id="state" class="form-control">
                        <option value="select">select</option>
                    </select>
            </center></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><font face="Comic Sans MS" color="black">City:</font>
                <center>

                    <select name="city" id="city" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center><br></a>
      </li>
      <li class="nav-item" style="margin-left:300px;">
          <center>
                    <br>
                    <div class="form-group">
                        <input type="button" class="btn btn-dark btn-block" value="submit" id="button" name="button" ng-click="doFetchAll();" onclick="abcd()">
                    </div>


                </center>
      </li>
    </ul>
  </div>
</nav>
</body>
</html>