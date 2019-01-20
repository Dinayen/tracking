
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
	<form method="POST" action="addpasser.php">
	<div class="form-group">
      <label for="num">Tracking Number</label>
      <input type="number" class="form-control" id="num" name="track_num">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
     <div class="form-group">
      <label for="lstatus">Latest Status</label>
      <input type="text" class="form-control" id="lstatus" name="lstatus">
    </div> 
    <div class="form-group">
      <label for="location">Location</label>
      <input type="text" class="form-control" id="location" name="location">
    </div>
    <div class="form-group">
      <label for="type">Tracking type</label>
      <input type="text" class="form-control" id="type" name="type">
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
      <label for="arrival">Arrival</label>
      <input type="text" class="form-control" id="arrival" name="arrival">
    </div>
    <div class="form-group">
      <label for="arrival_date">Arrival Date</label>
      <input type="date" class="form-control" id="arrival_date" name="arrival_date">
    </div>
    <div class="form-group">
      <label for="transportation">Transportation</label>
      <input type="text" class="form-control" id="transportation" name="transportation">
    </div>
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
		
	<div class="form-group">
    <button type="submit" class="btn btn-primary" name="add">ADD</button>
    </div>
	</form>
	</div>
</body>
</html>