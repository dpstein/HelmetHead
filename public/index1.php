


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang='en'>

  <head>
    <title>Helmet Head Rocks It Hard</title>
  </head>
  <?php
  //Create database connection_status
  $dbhost = "localhost";
  $dbuser = "dave";
  $dbpass = "rupert";
  $dbname = "helmet_test";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  //Test connection
  if(mysqli_connect_errno()) {
    die("Database connection failed: ") .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
    );
  }
  ?>

  <body>
    <h1> Helmet Head Rocks It Hard</h1>
  </body>
</html>
<?php   //Close database connection
  mysqli_close($connection);
 ?>
