<?php
include("config.php");

	$num=$_POST['track_num'];
	$status=$_POST['lstatus'];
	$location=$_POST['location'];
	$type=$_POST['type'];
	$departure=$_POST['departure'];
	$departure_date=$_POST['departure_date'];
	$arrival=$_POST['arrival'];
	$arrival_date=$_POST['arrival_date'];
	$transportation=$_POST['transportation'];
	$name=$_POST['name'];

	$sql="INSERT INTO add_track (track_num,lstatus,location,type,departure,departure_date,arrival,arrival_date,transportation,name) VALUES('$num','$status','$location','$type','$departure','$departure_date','$arrival','$arrival_date','$transportation','$name')";
	$query=mysqli_query($conn,$sql);
	if($query){
		 header('Location:addtrack.php');  
	}else{
		echo "Not successfully inserted".mysqli_error($conn);
	}

?>