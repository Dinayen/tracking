<?php
	include("config.php");
	$num=$_POST['track_num'];	
	$type=$_POST['type'];
	$arrival=$_POST['arrival'];
	$arrival_date=$_POST['arrival_date'];
	$seal=$_POST['seal_no'];
	$good=$_POST['option_good'];

	$sql="INSERT INTO add_track (track_num,type,arrival,arrival_date,seal_no,option_id) VALUES('$num','$type','$arrival','$arrival_date','$seal','$good')";
	$query=mysqli_query($conn,$sql);
	if($query){
		 header('Location:view.php');  
	}else{
		echo "Not successfully inserted".mysqli_error($conn);
	}

?>