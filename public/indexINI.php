



  <?php
  echo "hello";
  $config = parse_ini_file('../config.ini');
  $connection = mysqli_connect('localhost',$config['username'],$config['password'],
  	$config['dbname']);
	if($connection === false) {
		echo "no connection";
	}
   echo "connected";
 ?>
