<?php
include("config.php");
$tno=$_POST["track_num"];
$option=$_POST["option_id"];
$status=$_REQUEST["lstatus"];
$location=$_REQUEST["location"];
$departure=$_REQUEST["departure"];
$departure_date=$_REQUEST["departure_date"];
$transportation=$_REQUEST["transportation"];

$sql_details="INSERT INTO add_track (lstatus,location,departure,departure_date,transportation) VALUES ('$status','$location','$departure','$departure_date','$transportation')";
$query_details=mysqli_query($conn,$sql_details);
if($query_details){
header("Location:index.php");
}else{
	echo "Not Inserted".mysqli_error($conn);
}
?>