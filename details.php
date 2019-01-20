<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
	<?php
	include("config.php");
		if(isset($_GET["id"]))
		{
			$id=$_GET["id"];
			$sql="SELECT * FROM add_track WHERE track_id=$id";
			$query=mysqli_query($conn,$sql);
			$details=mysqli_fetch_assoc($query);
		}
	?>
	<h1><?php  echo $details["name"];?></h1>
	<h2><?php  echo $details["track_num"];?></h2>
	<h3><?php  echo $details["transportation"];?></h3>
	<h4><?php  echo $details["location"];?></h4>
	<h5><?php  echo $details["lstatus"];?></h5>
	<h6><?php  echo $details["departure"];?></h6>
	<h6><?php  echo $details["departure"];?></h6>
	<h6><?php  echo $details["departure_date"];?></h6>
	<h6><?php  echo $details["arrival"];?></h6>
	<h6><?php  echo $details["arrival_date"];?></h6>
	<h6><?php  echo $details["type"];?></h6>
	<a href="view.php"><input type="submit" value"Back"></a>
</body>
</html>