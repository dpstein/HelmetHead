<!DOCTYPE html>
<html>
  <head>
    <title>Helmet Head Rocks</title>
    <link rel="stylesheet" type="text/css" href="hh_styles/formStyles.css">
    <script type="text/javascript" src="hh_js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="hh_js/scripts.js"></script>
  </head>
  <?php
  function db_connect() {
  if(!isset($connection)) {
  $config = parse_ini_file('../config.ini');
  $connection = mysqli_connect('localhost',$config['username'],$config['password'],
  	$config['dbname']);
  }
	if($connection === false) {
		echo "no connection";
	}
	return $connection;
  }
  $connection = db_connect();
  ?>
  <?php
  	session_start();
	unset($_SESSION["user_id"]);
	session_destroy();
	?>
<body>
  <div id="pageWrap">
  	<?php include '../includes/headerLO.php';?>
    	<div id="allContentWrap">
      <form action="" method="post" name="logOutForm" id="logOutForm">
      	<h3>You Have Been Logged Out</h3>
      </form>
      
      </div>
  </body>
</html>
 
