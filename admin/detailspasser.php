<?php
include("config.php");
$tno=$_REQUEST["track_num"];
$container=$_REQUEST["container"];
$status=$_REQUEST["lstatus"];
$location=$_REQUEST["location"];
$departure=$_REQUEST["departure"];
$departure_date=$_REQUEST["departure_date"];
$transportation=$_REQUEST["transportation"];

$sql_details="INSERT INTO add_track (lstatus,location,departure,departure_date,transportation,track_num,container) VALUES ('$status','$location','$departure','$departure_date','$transportation','$tno','$container')";


$query_details=mysqli_query($conn,$sql_details);
if($query_details){

header("Location:index.php");
}else{
	echo "Not Inserted".mysqli_error($conn);
}
?>
