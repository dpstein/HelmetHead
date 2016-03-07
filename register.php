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
  	if(isset($_POST['Register'])){
		session_start();
		  $FName = $_POST['First_Name'];
		  $LName = $_POST['Last_Name'];
		  $Email = $_POST['Email'];
		  $PW	   = $_POST['Password'];
		  $StorePassword = password_hash($PW, PASSWORD_BCRYPT, array('cast'=>10));
		  $sql=$connection->query("INSERT INTO user_info (fname, lname, email, pwd)
						    Values('{$FName}', '{$LName}', '{$Email}', '{$StorePassword}')");
		  header('Location: login.php');
	}
	?>
  <body>
    <?php include 'headerLO.php';?>
       <form action="" method="post" name="registerForm" id="registerForm">
        <h2>Register</h2>
       	<div class="formElement">
        	<input name="First_Name" type="text" id="First_Name" placeholder="First Name"
            class="TField" > 
        </div>
       	<div class="formElement">
        	<input name="Last_Name" type="text" id="Last_Name" placeholder="Last Name"
            class="TField" > 
        </div>
        <div class="formElement">
        	<input name="Email" type="text" id="Email" placeholder="Email"
            class="TField" > 
        </div>
        <div class="formElement">
        	<input name="Password" type="password" id="Password" placeholder="Password"
            class="TField" > 
        </div>
        <div class="formElement">
        	<input name="Register" type="submit" id="Register" value="Register">
        </div>
       </form>

     
  </body>
</html>

