<?php
session_start();
if(!isset($_SESSION["name"]))
{
    header("location:event-manager.php");
}
include_once("connect.php");

$name=$_POST["txtname"];
$dob=$_POST["txtdob"];



$address=$_POST["txtadress"];
$address2=$_POST["txtadress2"];
$city=$_POST["txtcity"];
$state=$_POST["inputState"];
$zip=$_POST["zip"];
$email=$_POST["email"];
$officeno=$_POST["office"];
$estd=$_POST["estd"];
$mobile=$_POST["mobile"];


$picname=$_FILES["ppic"]["name"];
	//$size=$_FILES["ppic"]["size"];
	$temp_name=$_FILES["ppic"]["tmp_name"];
	
	move_uploaded_file($temp_name,'uploads/'.$picname);
	//echo "<h2>File Uploaded..</h2>";


    $btn=$_POST["btn"];
    

$occupation=$_POST['occupation'];

if($btn=="submit")
{
    
    $query="insert into contributorprofiledata values('$name','$dob','$address','$occupation','$mobile','$address2','$email','$officeno','$estd','$city','$state','$zip','$picname')";
    
  
   	mysqli_query($dbRef,$query);
	$msg1=mysqli_error($dbRef);
	if($msg1=="")
			echo "";
	else
			echo $msg1;  
    
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>contributor-services</title>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script>
        $(document).ready(function() {

            loadFunctions();

            function loadFunctions() {

                $.getJSON("json-fetch-functions.php", function(jsonAry) {

                    //alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].function;
                        item.value = jsonAry[i].function;
                        document.getElementById("functions").append(item);
                    }
                });
            }

            $("#functions").change(function() {
                var selFunction = $("#functions").val();

                $.getJSON("json-fetch-services.php?function=" + selFunction, function(jsonAry) {
                    //alert(JSON.stringify(jsonAry));
                    //alert(jsonAry[0].services);
                    var ary = jsonAry[0].services.split(";");
                    //alert(ary.length);
                    document.getElementById("services").length = 1;
                    for (i = 0; i < ary.length; i++) {

                        var item = document.createElement("option");
                        //alert(ary[i]);
                        item.text = ary[i];
                        item.value = ary[i];
                        document.getElementById("services").append(item);
                    }


                });

            });


        });

    </script>
    <script>
         $(document).ready(function() {
         
         $("#services").change(function(){
             var txt;
             
             if($("#sservice").val().includes($(this).val())){
                 alert("already exist");
                 return;
             }
             if($("#sservice").val() =="")
                 txt =$(this).val();
             else
                 txt=$("#sservice").val()+ "," +$(this).val();
             
             $("#sservice").val(txt);
             
         });
         
         $("#button").click(function(){
             var funct = $("#functions").val();
             var email=$("#email").val();
             var selservice=$("#sservice").val();
             $.get("contributor-services-process.php?email=" + email + "&funct=" + funct + "&selservice=" + selservice , function(response)
                  {
                 alert(response);
                 location.href="contributor-dash.php";
             });
             
         });
         
         
         
         });
    </script>
</head>

<body style="background-image: linear-gradient(to right, black , darkgray);">
   <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image:linear-gradient(#595959,#333333)">
        <a class="navbar-brand" href="images/eventday.png" style="margin-top:10px;">
            <img src="images/eventday.png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; ">
            <font face="Berlin Sans FB" style="color:gold;font-size:30px;opacity:20;margin-left:15px;">
                Occassional Day</font>
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
    </nav><br><br>
    <!--/////////////-->
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top:70px;">
                <center>
                    <h3>
                        <font color="gold">
                            Please Add Your Services</font>
                    </h3>
                </center><br>
                <div class="form-group" style="color:gold">
                   <font face="Comic Sans MS" color="gold">your email:-</font>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="E-mail" name="email" id="email" value="<?php echo $_SESSION["name"];?>"readOnly>
                    </div>
                </div><br>

                <font face="Comic Sans MS" color="gold"> Functions:</font>
                <center>

                    <select name="functions" id="functions" class="form-control">
                        <option value="select">select</option>
                    </select><br><br>
                </center>
                <font face="Comic Sans MS" color="gold">Services:</font>
                <center>

                    <select name="services" id="services" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center><br>
                <div class="form-group" style="color:gold">
                   <font face="Comic Sans MS" color="gold">Selected Services</font>
                    <div class="form-group">
                        <input type="text" class="form-control"  name="sservice" id="sservice" style="height:80px;" placeholder="your selected services">
                    </div>
                </div><br>
            </div>
        </div>
        
        <center>
        
            <div class="form-group">
                <input type="button" class="btn btn-warning" value="submit" id="button" name="button">
            </div>
        
    
    </center></div>
    
    <nav class="navbar position-sticky-bottom" style="bottom:0px;color:#686868;margin-top:150px;text-align:center;display:flex;justify-content:center;background-color:#343a40">
            <div class="footer-bottom">
                &copy;Occassional day.com | Designed by Aastha
            </div>
        </nav>
</body>

</html>
