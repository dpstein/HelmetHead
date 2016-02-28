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
  	if(isset($_POST['LogIn'])){
		$EM = $_POST['email'];
		$PW = $_POST['pwd'];
		$result = $connection->query("select * from user_info where email='$EM'");
		
		$row = $result->fetch_array(MYSQLI_BOTH);
		
		if(password_verify($PW, $row['pwd'])){
			session_start();
			$_SESSION["userId"]=$row['user_id'];
			$user_id = $row['pwd'];
			header('Location: index2.php');
			}else{
				session_start();
				$_SESSION["LogInFail"] = "Yes";
				echo "Login Failed";	
			}
	}
	?>
  <body>
    <h1> Helmet Head</h1>
    <div id="Menu">
       <nav>
          <ul class="cssmenu">
              <li><a href="#">LogIn</a></li>	
              <li><a href="register.php">Register</a></li>	
          </ul>
     	</nav>
     </div>
      <form action="" method="post" name="loginForm" id="loginForm">
       	<div class="formElement">
        	<input name="email" type="text" id="email" placeholder="Email"
            class="TField" > 
        </div>
       	<div class="formElement">
        	<input name="pwd" type="text" id="pwd" placeholder=""
            class="TField" > 
        </div>
        <div class="formElement">
        	<input name="LogIn" type="submit" id="LogIn" value="LogIn">
        </div>
       </form>
  </body>
</html>

 
