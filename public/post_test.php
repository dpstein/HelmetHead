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

$value1 = $_POST['base_id'];
$value2 = $_POST['wrap_id'];
$value3 = $_POST['visor_id'];
$value4 = $_POST['flare_id'];
$value5 = $_POST['tech_id'];
$value6 = $_POST['user_id'];

$queryI = "INSERT INTO helmet_builds (";
$queryI .= "h_base, h_wrap, h_visor, h_flare, h_tech, user_id";
$queryI .=") VALUES (";
$queryI .="'$value1','$value2', '$value3', '$value4', '$value5', '$value6'";
$queryI .=")";

if (mysqli_query($connection,$queryI))
{echo "New record created successfully";	
}else{
  	echo 'error inserting data: ' . $queryI . mysqli_error($Connection);
}
	$query1  = "SELECT * ";
	$query1 .= "FROM category ";
	$categories = mysqli_query($connection, $query1);
	if (!$categories) {die("Database query failed.");}
	?><br/>;<?php
	
	while($cat = mysqli_fetch_assoc($categories)) {
		var_dump ($cat);
		echo "<hr />";
	}
////helmet base query/////// 
	$query  = "SELECT * ";
	$query .= "FROM h_base ";
	$query .= "WHERE base_id = {$value1}";
	$base = mysqli_query($connection, $query);
	if (!$base) {die("Database query failed.");}
	?><br/>;<?php
	while($row = mysqli_fetch_assoc($base)) {
         ?> <h3><?php echo $row["base_name"]; ?></h3>
         	<h6><?php echo $row["base_price"]; ?></h6>
            <h6><?php echo $row["base_desc"]; ?></h6>
         <?php };?>
         
         
//	<?php
//		$stmt = $connection->stmt_init();
//		$sql = 'SELECT base_name FROM h_base WHERE base_id = ?';
//		$stmt = $connection->prepare($sql);
//		$stmt->bind_param('s', $_POST['base_id']);
//		$stmt->execute();
//		
//		$row =$stmt->fetch();
//		echo $row['base_name'];
//		
//		
//	
//	


mysqli_close($connection);
?>
