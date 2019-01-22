<?php
include('config.php');
	$id=$_POST['id'];
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
	
	$sql="UPDATE add_track SET track_num='$num',lstatus='$status',location='$location',type='$type',departure='$departure',departure_date='$departure_date',arrival='$arrival',arrival_date='$arrival_date',transportation='$transportation',seal_no='$seal' WHERE track_id='$id'";
	$query=mysqli_query($conn,$sql);
	if($query){
		header("Location:view.php");
	}else{
		echo "Not successfully updated".mysqli_error($conn);
	}

?>