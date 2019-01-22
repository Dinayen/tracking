
<?php
include("config.php");
if(isset($_GET['track_num']))
{
$track=$_GET['track_num'];  
$container=$_GET['container'];  
$sql="SELECT * FROM add_table WHERE track_num='$track' AND container='$container'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);



// The code to loop through the database
    $sql_result="SELECT * FROM add_track WHERE track_num='$track' AND container='$container'";
    $query_result=mysqli_query($conn,$sql_result);
    if(mysqli_num_rows($query_result)==0){

    }else{
      ?>
      <table class="table table-hover">
    <thead>
   
       <tr class="trcolor">
        <th scope="col">Latest Status</th>
        <th scope="col">Location</th>
        <th scope="col">Departure Time</th>
        <th scope="col">Departure Date</th>
        <th scope="col">Transport</th>
        <th scope="col">Edit </th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
      <?php  
    while($result=mysqli_fetch_assoc($query_result)){
    ?>
    <tbody>
      <tr>
        <!-- <th scope="row">3</th> -->
        <td><?php echo $result["lstatus"]; ?></td>
        <td><?php echo $result["location"]; ?></td>
        <td><?php echo $result["departure_date"]; ?> 
        <td><?php echo $result["departure"]; ?></td>
        <td><?php echo $result["transportation"]; ?></td>
        <td> <a href="edit.php?id=<?php echo $result["add_id"];?>">Edit</a></td>
      <td> <a href="delete.php?id=<?php echo $result["add_id"];?>">Delete</a></td>
        
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php }}?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Details</title>
		<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
	<form method="POST" action="detailspasser.php">
    <input type="hidden" name="track_num" value="<?php echo $track; ?>">
    <input type="hidden" name="container" value="<?php echo $container; ?>">
     <div class="form-group">
      <label for="lstatus">Latest Status</label>
      <input type="text" class="form-control" id="lstatus" name="lstatus">
    </div> 
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" name="location">
    </div>
    <div class="form-group">
      <label for="departure">Departure</label>
      <input type="text" class="form-control" id="departure" name="departure">
    </div>
    <div class="form-group">
      <label for="departure_date">Departure Date</label>
      <input type="date" class="form-control" id="departure_date" name="departure_date">
    </div>
    <div class="form-group">
      <label for="transportation">Transportation</label>
      <input type="text" class="form-control" id="transportation" name="transportation">
    </div>
	<div class="form-group">
    <button type="submit" class="btn btn-primary" name="add">ADD</button>
    </div>
	</form>
	</div>
</body>
</html>