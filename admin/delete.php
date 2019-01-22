<?php
include("config.php");
if(isset($_GET["track_num"])){
	$id=$_GET["track_num"];
	$sql="DELETE FROM add_track WHERE track_num=$id";
	$query=mysqli_query($conn,$sql);
	if($query){
		$sql="DELETE FROM add_table WHERE track_num=$id";
	$query_delete=mysqli_query($conn,$sql);
	if($query_delete){
		header("Location:view.php");
	}
	}else{
		echo "Not successfully deleted".mysqli_error($conn);
	}
}


?>