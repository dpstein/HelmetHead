<!DOCTYPE html>
<html>
  <head>
    <title>Helmet Head test</title>
    <link rel="stylesheet" type="text/css" href="hhstyle.css">
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
  
  <body>
    <h1> Helmet Head</h1>
    <p>Select Hemet Base Style</p>
     <?php 
////helmet base query/////// 
	$query  = "SELECT * ";
	$query .= "FROM h_base ";
	$query .= "WHERE base_vis = 1 ";
	$query .= "ORDER BY base_order ASC ";
	$result = mysqli_query($connection, $query);
	if (!$result) {die("Database query failed.");}
	?>
    <div class="optBoxWrap">
     <form action="post_test.php" method="post" >
	  <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
      ?>
		  <div class="eachOptionWrap">
          <div class="title">
          <h3> <?php echo $row["base_name"]; ?></h3>
          </div>
          <div class="selectBtn">
          <input type="radio" name="base_id" value=<?php echo $row["base_id"]; ?> >
          </div>
          <div class="desc">
          <p><?php echo $row["base_desc"];?></p>
          </div>
          <div class="price">
          <h4> $<?php echo $row["base_price"]; ?></h4>
          </div>
          </div><!--end eachOptionWrap-->
          
	  <?php } ?>
      </div><!--close optBoxWrap-->
<br>
	<p>Select Hemet Visor Style</p>
	<?php
////visor database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_visor ";
	$query .= "WHERE visor_vis = 1 ";
	$query .= "ORDER BY visor_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		  <?php echo $row["visor_name"]; ?><br>
		  <?php echo $row["visor_desc"];?><br> 
          <input type="radio" name="visor_id" value=<?php echo $row["visor_id"];?> >
		  <br> 
	  <?php } ?>
<br>
	<p>Select Hemet Flare Style</p>
	<?php
////flare database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_flare ";
	$query .= "WHERE flare_vis = 1 ";
	$query .= "ORDER BY flare_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		  <?php echo $row["flare_name"]; ?><br>
		  <?php echo $row["flare_desc"];?><br> 
          <input type="radio" name="flare_id" value=<?php echo $row["flare_id"];?> >
		  <br> 
	  <?php } ?>
	<p>Select Hemet Tech</p>
	<?php
////tech database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_tech ";
	$query .= "WHERE tech_vis = 1 ";
	$query .= "ORDER BY tech_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		  <?php echo $row["tech_name"]; ?><br>
		  <?php echo $row["tech_desc"];?><br> 
          <?php echo $row["tech_id"];?><br> 
          <input type="radio" name="tech_id" value=<?php echo $row["tech_id"];?> >
		  <br> 
	  <?php } ?>
      	 <input type="submit" value="Submit Form">
      	</form>
  </body>
</html>

<?php   //Close database connection
  mysqli_close($connection);
 ?>
