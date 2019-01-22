<?php
include("config.php");
if(isset($_GET['track_num']))
{
$id=$_GET['track_num'];  
$sql="SELECT * FROM add_table WHERE track_num=$id";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);

  $add_sql="SELECT * FROM add_track WHERE track_num=$id";
  $add_query=mysqli_query($conn,$add_sql);
  $result_add=mysqli_fetch_assoc($add_query);
}else
{
 header('Location:index.php');  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Tracking</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>

	<div class="container">
  <form method="POST" action="editpasser.php">
  <input type="hidden" name="id" value="<?php echo $row['track_id']; ?>">
    <div class="form-group">
      <label for="num">Tracking Number:</label>
      <input type="text" class="form-control" id="num" name="track_num" value="<?php echo $row['track_num']; ?>">
    </div>
    <div class="form-group">
      <label for="status">Latest Status:</label>
      <input type="text" class="form-control" id="status" name="lstatus" value="<?php echo $result_add['lstatus']; ?>">
    </div>
    <div class="form-group">
      <label for="Location">Location:</label>
      <input type="text" class="form-control" id="Location" name="location" value="<?php echo $result_add['location']; ?>">
    </div>
    <div class="form-group">
      <label for="type">Tracking type:</label>
      <input type="text" class="form-control" id="type" name="type" value="<?php echo $row['size_type']; ?>">
    </div>
    <div class="form-group">
      <label for="departure">Departure:</label>
      <input type="text" class="form-control" id="departure" name="departure" value="<?php echo $result_add['departure']; ?>">
    </div>
    <div class="form-group">
      <label for="departure_date">Departure Date:</label>
      <input type="date" class="form-control" id="departure_date" name="departure_date" value="<?php echo $result_add['departure_date']; ?>">
    </div>
    <div class="form-group">
      <label for="arrival">Arrival:</label>
      <input type="text" class="form-control" id="arrival" name="arrival" value="<?php echo $row['arrival']; ?>">
    </div>
    <div class="form-group">
      <label for="arrival_date">Arrival Date:</label>
      <input type="date" class="form-control" id="arrival_date" name="arrival_date" value="<?php echo $row['arrival_date']; ?>">
    </div>
    <div class="form-group">
      <label for="transportation">Transportation:</label>
      <input type="text" class="form-control" id="transportation" name="transportation" value="<?php echo $result_add['transportation']; ?>">
    </div>
    <div class="form-group">
      <label for="seal">Seal Number:</label>
      <input type="text" class="form-control" id="seal" name="seal_no" value="<?php echo $row['seal_no']; ?>">
    </div>
<div class="form-group">
      <label for="type">Container</label>
     <select name="container" class="form-control">
       <option >Container</option>
       <option >Bill of lading</option>
       <option >Booking of container</option>
     </select>
    </div>

    <div class="form-group">
    <button type="submit" class="btn btn-success">UPDATE</button>
    </div>
  </form>
</div>
</body>
</html>