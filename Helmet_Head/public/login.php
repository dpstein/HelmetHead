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
  	if(isset($_POST['LogIn'])){
		$EM = $_POST['email'];
		$PW = $_POST['pwd'];
		$result = $connection->query("select * from user_info where email='$EM'");
		$row = $result->fetch_array(MYSQLI_BOTH);
		
		if(password_verify($PW, $row['pwd'])){
			session_start();
			$_SESSION["userId"]=$row['user_id'];
			$_SESSION["nameId"]=$row['fname'];
			$user_id = $row['pwd'];
			header('Location: index.php');
			}else{
			session_start();
			$_SESSION["LogInFail"] = "Yes";
			echo "Login Failed";	
		}
	}
  ?>
  <body>
  <div id="pageWrap">
  	<?php include '../includes/headerLO.php';?>
    	<div id="allContentWrap">
      <form action="" method="post" name="loginForm" id="loginForm">
      	<h2>Log In</h2>
       	<div class="formElement">
        	<input name="email" type="text" id="email" placeholder="Email"
            class="TField" > 
        </div>
       	<div class="formElement">
        	<input name="pwd" type="password" id="pwd" placeholder="Password"
            class="TField" > 
        </div>
        <div class="formElement">
        	<input name="LogIn" type="submit" id="LogIn" value="Submit">
        </div>
      </form>
      </div>
      </div>
  </body>
</html>

 
