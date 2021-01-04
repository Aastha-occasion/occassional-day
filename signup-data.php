<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>signup data</title>
	<script src="js/angular.min.js"></script>
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="mystyle/bootstrap.css">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script>
		var module = angular.module("mymodule", []);
		module.controller("mycontroller", function($scope, $http) {

	$scope.doFetchAll = function() {
				$scope.jsonAry;
				$http.get("signup-data-process-show-grid.php").then(fine, notfine);

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
			//=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
			$scope.doDelete = function(name) {
				if (confirm("R u Sure?") == true) {
					$http.get("signup-delete-process.php?name=" + name).then(fine, notfine);

					function fine(response) {
						alert(JSON.stringify(response.data));
						$scope.doFetchAll();
					}

					function notfine(response) {
						alert(JSON.stringify(response));
					}
				}
			}
			//=-=-=-=-=-=-=-=-=-===-=0=0=-=-=-=0==0==0
			
		});

	</script>
</head>

<body ng-app="mymodule" ng-controller="mycontroller" ng-init="doFetchAll();">
	<center>
		<div><h3>SIGNUP DETAILS</h3></div>
	</center>
	<hr>


	<div class="container">
		
			
			<table class="table table-striped">
				<tr>
					<th>name</th>
					<th>password</th>
					<th>mobile</th>
					<th>category</th>
					<th>Remove</th>
				</tr>
				<tr ng-repeat="oneObj in jsonAry">
					<td>{{oneObj.name}}</td>
					<td>{{oneObj.password}}</td>
					<td>{{oneObj.mobile}}</td>
					<td>{{oneObj.category}}</td>
					
					<td>
						<div class="btn btn-danger" ng-click="doDelete(oneObj.name);">Delete</div>
					</td>
				</tr>



			</table>
                
				
		
	<hr>
	<hr>
		<!-- ********************************************************** -->
	
		

	</div>

	<div class="form-group col-sm-12 position-sticky-bottom fixed-bottom ab" style="display:flex;justify-content:center;">
			<button class=" form-group  btn btn-primary position-sticky-bottom ab2" id="btn1" onclick="back()">BACK</button>
			</div>
			<script>
function back()
                {
                    location.href = "admin-control.php";
                }
    
    </script>
		<style>
            .ab>.ab2
            {
                opacity:50%;
            }
        .ab>.ab2:hover
            {
                background-color: red;
                opacity: 100%;
            }
        </style>
          
 

</body>

</html>
