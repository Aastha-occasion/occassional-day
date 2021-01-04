<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>plan - function</title>
    <script src="js/angular.min.js"></script>
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <link rel="stylesheet" href="mystyle/bootstrap.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
                var selFunction = $("#state").val();

                $.getJSON("json-fetch-city.php?state=" + selFunction, function(jsonAry) {
                    //alert(JSON.stringify(jsonAry));
                    //alert(jsonAry[0].services);
                    var ary = jsonAry[0].city;
                    //alert(ary.length);
                    document.getElementById("city").length = 1;
                    

                        var item = document.createElement("option");
                        //alert(ary[i]);
                        item.text = ary;
                        item.value = ary;
                        document.getElementById("city").append(item);
                    


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

        });

    </script>
    <!--///////////jquery////////////-->
    <script>
    $(document).ready(function()
        {
           $("#button").click(function(){ $("#abcd").removeClass("hide").addClass("show");
                                         });
        });
    </script>
       <style>
        .hide{display: none;}
        .show{display: block;}
    </style>

</head>

<body ng-app="mymodule" ng-controller="mycontroller">
    <nav class="navbar navbar-light bg-dark fixed-top">
        <a class="navbar-brand" href="images/ed%20(1).png">
            <img src="images/ed%20(1).png" width="50" height="50" class="d-inline-block align-top" alt="" style="border:1px gold solid; margin-top:10px; justify-content:start;">
            <font face="Comic Sans MS" style="color:gold;font-size:50px;">
                Event Day</font>
        </a>
        <li class="nav-item">
            <div style="text-align:top;"> <a class="nav-link text-white" href="event-manager.php">
                    <font face="Comic Sans MS" style="margin-top:-10px; color:gold;">Home</font>
                </a></div>
        </li>


</nav>
    
 
    <!--//////////////////////////////////////-->
    <div style="width:100%;height:1200px;">
        <div style="width:27%; height:100%;float:left; background-color:gold;position:fixed;">
            <br><br><br><br><br><br>
            <center>
                <h3>
                    <font face="Comic Sans MS">Search Accordingly</font>
                </h3>
            </center><br>
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
                </center><br>
                <center>
                    <br>
                    <div class="form-group">
                        <input type="button" class="btn btn-dark btn-block" value="submit" id="button" name="button" ng-click="doFetchAll();" onclick="abcd()">
                    </div>


                </center>

            </div>
        </div>
        <div style="width:70%;float:left;">
            <br><br><br><br><br><br>

            <div class="container" style="margin-left:400px;">
                <center><div class="hide" id="abcd"> <font face="Comic Sans MS" color="black">Search:</font><input type="text" ng-model="google" style="box-shadow:0px 0px 5px 1px black; width:200px" class="form-control "></div></center><br><br>
                <div class="row mt-3">
                    <div class="col-md-3 " ng-repeat="oneObj in jsonAry | filter:google">
                        <div class="card border border-primary">
                            <img src="uploads/{{oneObj.picname}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{oneObj.name}}</h5>
                                <p class="card-text"><span class="text-danger"> City:</span>{{oneObj.city}}</p>
                                <div ng-click="doShowOne(oneObj.name);" class="btn btn-primary" style="float:right">Details</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>




</body>

</html>