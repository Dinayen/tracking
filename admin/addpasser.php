<?php
	include("config.php");
	$num=$_POST['track_num'];	
	$type=$_POST['type'];
	$arrival=$_POST['arrival'];
	$arrival_date=$_POST['arrival_date'];
	$seal=$_POST['seal_no'];
	$container=$_POST['option_good'];

	$sql="INSERT INTO add_table (track_num,size_type,container,arrival,arrival_date,seal_no) VALUES('$num','$type','$container','$arrival','$arrival_date','$seal')";
	$query=mysqli_query($conn,$sql);
	if($query){
		 header('Location:view.php');  
	}else{
		echo "Not successfully inserted ".mysqli_error($conn);
	}

?>