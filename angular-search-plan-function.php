<?php
include_once("connect.php");
    $functions=$_GET["functions"];
    $selservice=$_GET["selservice"];
    $state=$_GET["state"];
    $city=$_GET["city"];

$query="select * from contributorprofiledata where state='$state' and city='$city' and name in (SELECT name from selectedservice where functions='$functions' and selservice LIKE '%$selservice%')";

$table=mysqli_query($dbRef,$query);
				
		//   0/1   possibility

		$ary=array();

		while($row=mysqli_fetch_array($table))
		{
			$ary[]=$row;
		}
		echo json_encode($ary);			
?>