<?php
	if (isset($_REQUEST['track'])) {
		include("admin/config.php");
		$number=$_REQUEST['track_num'];
		$option=$_REQUEST['option_good'];
		
	$sql="SELECT * FROM add_table WHERE track_num ='$number' AND container='$option'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	   {
			$text_result=mysqli_fetch_assoc($result);
		}else{
				header("Location:admin/index.php?error=Invalid Tracking Code").mysqli_error($conn);
			}
		}else{
			header("Location:admin/index.php?error=Insert Tracking Code");
		}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Track</title>
	 <link rel="stylesheet" href="css/style.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container_fluid">

<!-- Header Begins -->
	<header>
		<div class="container">
		<div class="navbar">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <div class="navbar-header">
			      <!-- <a class="navbar-brand" href="#">WebSiteName</a> -->
			    </div>
			    <ul class="nav navbar-nav">
			      <li class=""><a href="#">|Home</a></li>
			      <li><a href="#">Services|</a></li>
			      <li  class="left"></i><a href="#">LOGIN / REGISTER</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>
<!-- Header Ends -->


	<div class="main_content container">
		<h1>Cargo Tracking</h1>
		<div class="container">
  			<div class="row">
    			<div class="col-sm-12 col-lg-4">
      				<div class="dropdown show">
  					<!-- <input type="text" value="" class="col-lg-12" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
  					<?php $id=$text_result["container"]; 
  					 $good="SELECT * FROM add_table WHERE container='$id'";
  					 $query=mysqli_query($conn,$good);
  					 $good_result=mysqli_fetch_assoc($query);
  					 ?>
  					 <input type="text" 
  					 value="<?php echo $good_result['container'];?>" class="col-lg-7 col-sm-12" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"a|>
					</div>
    			</div>
	    		<div class="col-sm-7">
	      			<input type="text" value="<?php echo $text_result["track_num"]; ?>" class="col-lg-12">
	    		</div>
  			</div>
  			<br><br><p>(Enter up to six container numbers separated by commas) <input type="button" class="print" onClick="window.print()" value="Print"></p>
		</div>

		
	<table class="table table-hover">
	  <thead>
	    <tr>
		   <th><b><?php echo $text_result["track_num"]; ?></b>
		       <p class="text-muted"><b>SIZE/TYPE <?php echo $text_result["size_type"]; ?> Seal No <?php echo $text_result["seal_no"]; ?></b></p></th>
		    <th>  ETA<br><b><?php echo $text_result["arrival_date"]; ?>
		      <?php echo $text_result["arrival"]; ?></b></th>
		    <th></th>
		    <th></th>
		   <!-- <th> <button class="subscription">Subscription</button></th> -->
	    </tr>
	  </thead>
 <tbody>
 <?php
 include("admin/config.php");
		$sql_result="SELECT * FROM add_track ORDER BY track_id DESC LIMIT 3";
		$query_result=mysqli_query($conn,$sql_result);
		$color=mysqli_fetch_assoc($query_result);
		?>
	    <tr class="trcolor">
		   <th><?php echo $color["departure_date"]?><br><?php echo $color["departure"]?></th>
		    <th>[Latest Status]<br>  <?php echo $color["lstatus"]?></th>
		    <th>[Location]<br><?php echo $color["location"]?></th>
		    <th>[Transportation]<br><?php echo $color["transportation"]?></th>
		   <!-- <th> <button class="subscription">Subscription</button></th> -->
	    </tr>
	   <?php
		include("admin/config.php");
		$sql_result="SELECT * FROM add_track ORDER BY track_id DESC LIMIT 3";
		$query_result=mysqli_query($conn,$sql_result);
		if(mysqli_num_rows($query_result)>0){
		  
	  while($result=mysqli_fetch_assoc($query_result)){
	  ?>
	    <tr>
	      <!-- <th scope="row">3</th> -->
	      <td><?php echo $result["departure_date"]; ?><br><?php echo $result["departure"]; ?></td>
	      <td>[Latest Status]<br><?php echo $result["lstatus"]; ?></td>
	      <td>[Location]<br><?php echo $result["location"]; ?></td>
	      <td>[Transportation]<br><?php echo $result["transportation"]; ?></td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>
	<?php } ?>

</div>
</div>


<!-- Footer begins -->
	<footer>
		Terms of use | About us<br>
		COPYRIGHT &copy 2019 ALL RIGHTS RESERVED
	</footer>
<!-- Footer ends -->
</div>


<script>
</script>

</body>
</html>