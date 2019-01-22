<!DOCTYPE html>
<html>
<head>
	<title>Add Track</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

	<style type="text/css">
	.add{color:white;}
	</style>
</head>
<body>
	<div class="container">
	<form method="POST" action="addpasser.php">
	<!-- <input type="hidden" value="<?php echo $row['track_num']&$row['type']; ?>"> -->
	<div class="form-group">
      <label for="arrival">ETA</label>
      <input type="text" class="form-control" id="arrival" name="arrival">
    </div>
    <div class="form-group">
      <label for="arrival_date">EDA</label>
      <input type="date" class="form-control" id="arrival_date" name="arrival_date">
    </div>
    <div class="form-group">
      <label for="seal">Seal Number</label>
      <input type="text" class="form-control" id="seal" name="seal_no">
    </div>
    <div class="form-group">
      <label for="type">Size/Type</label>
      <input type="text" class="form-control" id="type" name="type">
    </div>
     <div class="form-group">
      <label for="track">Track Number</label>
      <input type="text" class="form-control" id="track" name="track_num">
    </div> 
    <div class="form-group">
      <label for="type">Container</label>
     <select name="option_good" class="form-control">
       <option name="container">Container</option>
       <option name="bill">Bill of lading</option>
       <option name="booking">Booking of container</option>
     </select>
    </div>
	<div class="form-group">
	<!-- <td> <a href="delete.php?id=<?php echo $result["track_id"];?>">Delete</a></td> -->
    <button type="submit" class="btn btn-primary add" name="add">ADD</button>
    </div>
	</form>
	</div>
	
</body>
</html>