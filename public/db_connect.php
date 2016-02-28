  <?php
  function db_connect() {
  global $connection;
  
  if(!isset($connection)) {
  $config = parse_ini_file('../config.ini');
  $connection = mysqli_connect('localhost',$config['username'],$config['password'],
  	$config['dbname']);
  }
	if($connection === false) {
		echo "no connection";
	}
  // return $connection;
//  }
  
//  function db_query() {
  static $result;
  
  $query  = "SELECT * ";
  $query .= "FROM h_base ";
  $query .= "WHERE base_vis = 1 ";
  $query .= "ORDER BY base_order ASC ";

  $result = mysqli_query($connection, $query);
  if (!$result) {
    die("Database query failed.");
  }
 
   return $result;
  }
 ?>
