<!DOCTYPE html>
<html>
  <head>
    <title>Helmet Head Rocks</title>
    <link rel="stylesheet" type="text/css" href="hhstyle.css">
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
    <h1> Helmet Head</h1>
    <div id="Menu">
       <nav>
          <ul class="cssmenu">
              <li><a href="login.php">LogIn</a></li>	
              <li><a href="register.php">Register</a></li>	
          </ul>
     	</nav>
     </div>
      <p>You have been logged out</p>
  </body>
</html>

 
