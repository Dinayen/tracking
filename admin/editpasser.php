<?php
include('config.php');
	$id=$_POST['track_num'];
	$num=$_POST['track_num'];
	$status=$_POST['lstatus'];
	$location=$_POST['location'];
	$type=$_POST['type'];
	$departure=$_POST['departure'];
	$departure_date=$_POST['departure_date'];
	$arrival=$_POST['arrival'];
	$arrival_date=$_POST['arrival_date'];
	$transportation=$_POST['transportation'];
	$seal=$_POST['seal_no'];
	$container=$_POST['container'];

	$sql="UPDATE add_track SET lstatus='status',location='$location',departure='$departure',departure_date='$departure_date',transportation='$transportation' , track_num='$num',container='$container' WHERE track_num='$id'";
	$query=mysqli_query($conn,$sql);
	if($query){

	$sql="UPDATE add_table SET track_num='$num',size_type='$type',container='$container',arrival='$arrival',arrival_date='$arrival_date',seal_no='$seal' WHERE track_num='$id'";
	$query_update=mysqli_query($conn,$sql);
	if($query_update){

		header("Location:view.php");
	}
	}else{
		echo "Not successfully updated ".mysqli_error($conn);
	}

?>