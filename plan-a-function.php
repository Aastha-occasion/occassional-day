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
    <title>plan a function</title>
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">
 <link rel="shortcut icon" href="images/eventday.png" type="image/png" sizes="any">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="shortcut icon" href="images/eventday.png" type="image/png" sizes="any">
    <!--///////////////////-->
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
            /*///////////////////*/
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

            loadFunctions();

            function loadFunctions() {

                $.getJSON("json-fetch-state.php", function(jsonAry) {

                    //alert(JSON.stringify(jsonAry));

                    var i;
                    for (i = 0; i < jsonAry.length; i++) {

                        var item = document.createElement("option");
                        item.text = jsonAry[i].state;
                        item.value = jsonAry[i].state;
                        document.getElementById("state").append(item);
                    }
                });
            }
            /*///////////////////*/
            $("#state").change(function() {
                var state = $("#state").val();
document.getElementById("city").length = 1;
                $.getJSON("json-fetch-city.php?state=" + state, function(jsonAry) {
                    //alert(JSON.stringify(jsonAry));
                   // alert(jsonAry[0].city);
                    
                    
                     //var i;
                    for (i = 0; i < jsonAry.length; i++)
                        {
                   // var ary = jsonAry[i].city;
                    //alert(ary.length);
                    
                    

                        var item = document.createElement("option");
                        //alert(ary[i]);
                        item.text = jsonAry[i].city;
                        item.value = jsonAry[i].city;
                        document.getElementById("city").append(item);
                    

                        }
                });

            });

        });

    </script>
    <!--//////////////////-->
    <script>
        var module = angular.module("mymodule", []);
        module.controller("mycontroller", function($scope, $http) {
            $scope.doFetchAll = function() {
                $scope.jsonAry;
                $http.get("angular-fetchall-process.php").then(fine, notfine);

                function fine(response) {
                    //alert(JSON.stringify(response));
                    //alert(JSON.stringify(response.data)); //== jsonAry
                    $scope.jsonAry = response.data;
                    //console.log(JSON.stringify(response)); 

                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }

            /*///////////////////////////////*/
            $scope.oneRecord;
            $scope.doShowOne = function(name) {
                $http.get("json-fetch-record.php?name=" + name).then(fine, notfine);

                function fine(response) {
                    //alert(JSON.stringify(response.data));
                    $scope.oneRecord = response.data;
                    //alert($scope.oneRecord[0].name);
                    $("#modal-details").modal("show");

                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
            }
            /*search*/
            $scope.search = function(){
                $scope.jsonAry;
                var functions=$("#functions").val();
                var selservice=$("#services").val();
                var state=$("#state").val();
                var city=$("#city").val();
                //alert(city);
                 $http.get("angular-search-plan-function.php?functions=" + functions + "&selservice="+selservice+"&state="+state+"&city="+city).then(fine, notfine);

                  function fine(response) {
                   // alert(JSON.stringify(response.data));
                    $scope.jsonAry = response.data;
                    
                }

                function notfine(response) {
                    alert(JSON.stringify(response));
                }
                
            }
            /*//////////////////modal*/
            $scope.oneRecord;
			$scope.doShowOne=function(name)
			{
				$http.get("json-fetch-record.php?name=" + name).then(fine, notfine);

					function fine(response) {
						//alert(JSON.stringify(response.data));
						$scope.oneRecord=response.data;
						//alert($scope.oneRecord[0].uid);
						$("#modal-details").modal("show");
						
					}

					function notfine(response) {
						alert(JSON.stringify(response));
					}
			}

        });

    </script>
    <!--///////////jquery////////////-->
    <script>
    $(document).ready(function()
        {
           $("#button").click(function(){ $("#abcd").removeClass("hide").addClass("show");
                $("#close2").click();
                                        });
        });
    </script>
       <style>
        .hide{display: none;}
        .show{display: block;}
          
    </style>
    <script>
    function akadbakad()
        {
            location.href = "email.php";
        }
    </script>

</head>

<body ng-app="mymodule" ng-controller="mycontroller">
<!--    -->
        <div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content haed">
                <div class="modal-header " style="background-color:gold">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:red;">Filter Search of Contributors</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="close2">
                        <span class="clsbtn" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body sds" id="sds" style="background-color:gold">
                    
            <br>
            <center>
                <h3>
                    <font face="Comic Sans MS">Search Accordingly</font>
                </h3>
            </center>
            <div class="container">
                <font face="Comic Sans MS" color="black"> Functions:</font>
                <center>

                    <select name="functions" id="functions" class="form-control">
                        <option value="select">select</option>
                    </select><br>

                </center>
                <font face="Comic Sans MS" color="black">Services:</font>
                <center>

                    <select name="services" id="services" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center><br>
                <font face="Comic Sans MS" color="black">State:</font>
                <center>

                    <select name="state" id="state" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center><br>
                <font face="Comic Sans MS" color="black">City:</font>
                <center>

                    <select name="city" id="city" class="form-control">
                        <option value="select">select</option>
                    </select>
                </center>
                <center>
                    <br>
                    <div class="form-group">
                        <input type="button" class="btn btn-dark btn-block" value="submit" id="button" name="button" ng-click="search();" onclick="abcd()">
                    </div>


                </center>

            </div>
        </div>
                </div>

            </div>
       
    </div>
<!--    -->
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
            <div style="text-align:top;"><b> 
                    <font style="margin-top:-10px; color:gold;cursor:pointer" data-toggle="modal" data-target="#search">Search</font></b>
                </div>
        </li>
            </ul>
    </nav>
      <br><br><br><br>
      <br>

    <div class="col-md-12">
        <h6 class="text-primary" id="session" style="padding-top:5px;font-size:15px;text-align: end;"><font color="red">welcome:</font> <?php echo $_SESSION["name"];?> </h6>
        
    </div>
   <!--////////////////////////////-->
   
    <!--//////////////////////////////////////-->
    <div class = "container" >
       <div class="form-row" >
        
        <div class="form-group col-md-12" ng-init="doFetchAll();">
            <br>

           
            
                <div class="row mt-3">
                    <div class="col-md-3 " ng-repeat="oneObj in jsonAry | filter:google">
                        <div class="card border border-primary">
                            <img src="uploads/{{oneObj.picname}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{oneObj.name}}</h5>
                                <p class="card-text"><span class="text-danger"> City:</span>{{oneObj.city}}</p>
                                <p class="card-text"><span class="text-danger"> state:</span>{{oneObj.state}}</p>
                                   <p class="card-text"><span class="text-danger"> name:</span>{{oneObj.email}}</p>
                                <p class="card-text"><span class="text-danger"> press detail button for more info</span></p>
                                <div ng-click="doShowOne(oneObj.name);" class="btn btn-primary btn-block" style="float:right">Details</div>
                            </div>
                        </div>
                    </div>
                

            </div>
        </div>
    </div>
    </div>
<!--modals-->
 <form action="email.php">
<div class="modal" id="modal-details" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contributor Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <a href="uploads/{{oneRecord[0] .picname}}">
       <img src="uploads/{{oneRecord[0] .picname}}" width="200" height="200" class="card-img-top" alt="..."></a>
        name:{{oneRecord[0].email}} <br>
        state:{{oneRecord[0].state}} <br>
        city:{{oneRecord[0].city}} <br>
        <!--functions:{{oneRecord[0].functions}} <br>
        services:{{oneRecord[0].services}} <br>-->
        mobile:{{oneRecord[0].mobile}} <br>
           email:<input name="email2" id="email2" for="email2" value="{{oneRecord[0].name}}" readonly style="border:0px solid">
           <br>
        
        Send message from this number or you should send a mail to contributor.
        
      </div>
      <div class="modal-footer">
        
        <input type="submit" class="btn btn-primary btn-block" name="btn" id="btn" value="mail" style="width:80px;">
      </div>
    </div>
  </div>
</div>
    </form>




</body>

</html>
