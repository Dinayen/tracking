<?php
  include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <div class="container">
        <ul class="nav nav-tabs">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="admin/addtrack.php">Add Tracking</a></li>   
        </ul>
    </div>

    <div class="container">
      <?php
        $sql="SELECT * FROM add_track";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
      ?>
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Tracking Number</th>
            <th>Size/Type</th>
            <th><a href="admin/edit.php"> Edit </a> </th>
            <th> <a href="admin/delete.php"> Delete </a></th>
          </tr>
        </thead>
        <tbody>
        <?php
        while ($row=mysqli_fetch_assoc($result) )
          {

          ?>

          <tr>

           <td> <?php echo $row["track_num"] ;?> </td>
           <td> <?php echo $row["type"] ;?> </td>
          <td> <a href="admin/edit.php?id=<?php echo $row['track_id'] ?>"> Edit </a></td>
          <td> <a href="admin/delete.php?id=<?php echo $row['track_id'] ?>"> Delete </a></td>

        </tr>
           <?php };  ?>
        </tbody>
      </table>
      <?php

        };
      ?>

    </div>

  </body>

</html>
