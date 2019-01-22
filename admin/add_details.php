 <?php
    include("config.php");
    $sql_result="SELECT * FROM add_track ORDER BY track_id DESC";
    $query_result=mysqli_query($conn,$sql_result);
    if(mysqli_num_rows($query_result)>0){
    ?>
<table class="table table-hover">
    <thead>
     <?php  
    while($result=mysqli_fetch_assoc($query_result)){
    ?>
       <tr class="trcolor">
        <th scope="col">Latest Status</th>
        <th scope="col">Location</th>
        <th scope="col">Departure Time/Date</th>
        <th scope="col">Transportation</th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <!-- <th scope="row">3</th> -->
        <td><?php echo $result["lstatus"]; ?></td>
        <td><?php echo $result["location"]; ?></td>
        <td><?php echo $result["departure_date"]; ?> <?php echo $result["departure"]; ?></td>
        <td><?php echo $result["transportation"]; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } ?>


<?php
include("config.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];  
$option=$_GET['option_id'];  
$sql="SELECT * FROM add_track WHERE track_id=$id AND option_id=$option";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
}else
{
 header('Location:view.php');  
}

?>
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
    <input type="hidden" value="<?php echo $row['track_num']; ?>">
    <input type="hidden" value="<?php echo $row['option_id']; ?>">
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