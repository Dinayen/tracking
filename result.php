<?php
	if (isset($_REQUEST['track'])) {
		include("config.php");
		$number=$_REQUEST['track_num'];
	$sql="SELECT * FROM add_track WHERE track_num ='$number'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	   {
			$text_result=mysqli_fetch_assoc($result);
		}else{
				header("Location:index.php?error=Invalid Tracking Code");
			}
		}else{
			header("Location:index.php?error=Insert Tracking Code");
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
			<div class="row">
				<div class="col-sm-8">
					<img src="images/logo.png" width="250px">
				</div>
			<div class="col-sm-4">
				<div class="col-sm-12">
					<div class="col-sm-8">
						Back to old version
					</div>
					<div class="col-sm-4">
					</div>
				</div>
			</div>
			</div>
		</div>

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
		<h1><?php echo $text_result["type"]; ?>Tracking</h1>
		<div class="container">
  			<div class="row">
    			<div class="col-sm-2">
      				<div class="dropdown show">
  					<!-- <input type="text" value="" class="col-lg-12" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> -->
  					 <input type="text" value="Container" class="col-lg-12" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"a|>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
					    <a class="dropdown-item" href="#">Bill of lading</a><br>
					    <a class="dropdown-item" href="#">Booking of container</a>
					  </div>
					</div>
    			</div>
	    		<div class="col-sm-8">
	      			<input type="text" value="<?php echo $text_result["track_num"]; ?>" class="col-lg-12">
	    		</div>
			    <div class="col-sm-2">
			      <button class="btn btn-danger btn btn-md">Search</button>
			    </div>
  			</div>
  			<p>(Enter up to six container numbers separated by commas) </p>
		</div>

		<input type="button" class="print" onClick="window.print()" value="Print">

	    <?php
		include("config.php");
		$sql_result="SELECT * FROM add_track ORDER BY track_id DESC LIMIT 3";
		$query_result=mysqli_query($conn,$sql_result);
		if(mysqli_num_rows($query_result)>0){
		?>


	<table class="table table-hover">
	  <thead>
	    <tr>
		   <th><b><?php echo $text_result["track_num"]; ?></b>
		       <p class="text-muted"><b>SIZE/TYPE 20GP  Seal No CF206984</b></p></th>
		    <th>  ETA<br><b><?php echo $text_result["arrival_date"]; ?>
		      <?php echo $text_result["arrival"]; ?></b></th>
		    <th></th>
		   <th> <button class="subscription">Subscription</button></th>
	    </tr>
	  </thead>
	  <tbody>
	  <tr class="trcolor">
		  <th scope="col"><?php  echo Date("M-D-Y");?><br><?php echo $text_result["departure"]; ?></th>
	      <th scope="col">[Latest Status]<br><?php echo $text_result["lstatus"]; ?></th>
	      <th scope="col">[Location]<br><?php echo $text_result["location"]; ?></th>
	      <th scope="col">[Transportation]<br><?php echo $text_result["type"]; ?></th>
	  </tr>
	  <?php  
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


	<!-- The accordion -->
	<button class="accordion"><i class="fa fa-square"> </i>Close current shipment cycle status</button>
	<div class="panel">
	   <?php
		include("config.php");
		$sql_result="SELECT * FROM add_track ORDER BY track_id DESC";
		$query_result=mysqli_query($conn,$sql_result);
		if(mysqli_num_rows($query_result)>0){
		?>
	<table class="table table-hover">
	  <thead>
	    <tr>
		   <th><b><?php echo $text_result["track_num"]; ?></b>
		       <p class="text-muted"><b>SIZE/TYPE 20GP  Seal No CF206984</b></p></th>
		    <th>  ETA<br><b><?php echo $text_result["arrival_date"]; ?>
		      <?php echo $text_result["arrival"]; ?></b></th>
		    <th></th>
		   <th> <button class="subscription">Subscription</button></th>
	    </tr>
	  </thead>
	  <tbody>
	  <tr class="trcolor">
		  <th scope="col"><?php  echo Date("M-D-Y");?><br><?php echo $text_result["departure"]; ?></th>
	      <th scope="col">[Latest Status]<br><?php echo $text_result["lstatus"]; ?></th>
	      <th scope="col">[Location]<br><?php echo $text_result["location"]; ?></th>
	      <th scope="col">[Transportation]<br><?php echo $text_result["type"]; ?></th>
	  </tr>
	  <?php  
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
		Contact us stacy@.com<br>
		COPYRIGHT &copy 1998-2007 ALL RIGHTS RESERVED
	</footer>
<!-- Footer ends -->
</div>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>