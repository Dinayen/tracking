<?php
$host="localhost";
$user="root";
$pass="";
$db="track";
$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
	echo "Connection not successfull";
}
?>