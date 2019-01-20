<?php
  if (isset($_REQUEST['error'])) {
    $error =$_REQUEST['error'];
  }else{
    $error = "";
  }
?>
 
<!DOCTYPE html>

<html>

  <head>

    <title></title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <!------ Include the above in your HEAD tag ---------->

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <style>

      .form-control-borderless {
          border: none;
      }

      .form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
          border: none;
          outline: none;
          box-shadow: none;
      }

      </style>

  </head>

  <body>

<div class="container">
<br/>
  <div class="row justify-content-center">
    <div class="container">
      <div class="col-12 col-md-10 col-lg-12">
              </div>
          <form class="card card-sm" action="result.php" method="POST">
              <div class="card-body row no-gutters align-items-center">
                <div class="col-auto">
                    <i class="fas fa-search h4 text-body"></i>
                </div>
                <!--end of col-->
                <div class="col">
                  <input class="form-control form-control-lg form-control-borderless" name="track_num" type="search" placeholder="Enter track number">
                </div>
                <!--end of col-->
                <div class="col-auto">
                  <button class="btn btn-lg btn-primary" type="submit" name="track">Track</button>
                </div>
                </div>
          </form>
          <font color="red"><?php echo $error; ?></font>
        </div>
      <!--end of col-->
  </div>
</div>
  </body>
</html>