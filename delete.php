<?php
include("config.php");
if(isset($_GET["id"])){
	$id=$_GET["id"];
	$sql="DELETE FROM add_track WHERE track_id=$id";
	$query=mysqli_query($conn,$sql);
	if($query){
		header("Location:view.php");
	}else{
		echo "Not successfully deleted".mysqli_error($conn);
	}
}


?>