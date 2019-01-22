<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/main.css" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>


<?php
		include("config.php");
		$sql="SELECT * FROM add_table";
		$query=mysqli_query($conn,$sql);
		if(mysqli_num_rows($query)>0){
	?>
	
		<table class="table table-hover table-striped">
  <thead class="thead-dark">
    <tr>
     <th>Tracking Number</th>
	<th>Size/Type</th>
	<th>Details</th>
	<th><a href="#">Edit</a></th>
	<th><a href="#">Delete</a></th>
    </tr>
  </thead>
  <tbody>
  <?php  
			while($result=mysqli_fetch_assoc($query)){
		?>
    <tr>
      <!-- <th scope="row">3</th> -->
     <td><?php echo $result["track_num"];?></td>
			<td><?php echo $result["size_type"];?></td>
			<td><a href="add_details.php?track_num=<?php echo $result['track_num'];?>&container=<?php echo $result['container'];?>" class="btn btn-primary">Add Details</a></td>
			<td> <a href="edit.php?track_num=<?php echo $result['track_num'] ?>"> Edit </a></td>
          <td> <a href="delete.php?track_num=<?php echo $result['track_num'] ?>"> Delete </a></td>

    </tr>
 
  </tbody>
<?php } ?>
	</table>
	<?php }?>
	</div>



</body>
</html>