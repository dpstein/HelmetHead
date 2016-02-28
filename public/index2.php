<?php
	session_start();
	 if(isset($_SESSION["userId"])) {
		 $user_id = $_SESSION["userId"];
		 echo "$user_id";
	 }else{
		header('Location: login.php'); 
	 }
?>

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
  
  <body>
    <h1> Helmet Head</h1>
    <div id="Menu">
       <nav>
          <ul class="cssmenu">
          	  <li><a href="account.php">Account</a></li>
              <li><a href="logout.php">LogOut</a></li>	
          </ul>
     	</nav>
     </div>
    <div id="selectorWrap">
     <?php 
////helmet base query/////// 
	$query  = "SELECT * ";
	$query .= "FROM h_base ";
	$query .= "WHERE base_vis = 1 ";
	$query .= "ORDER BY base_order ASC ";
	$result = mysqli_query($connection, $query);
	if (!$result) {die("Database query failed.");}
	?>
    <button id="baseBtn">Helmet Base Style</button>
    <div class="optBoxWrap" id="baseWrap">
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

    <?php
////wrap database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_wrap ";
	$query .= "WHERE wrap_vis = 1 ";
	$query .= "ORDER BY wrap_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <button id="wrapBtn" type="button">Wrap Style</button>
    <div class="optBoxWrap" id="wrapWrap">
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		 <div class="eachOptionWrap">
          <div class="title">
          <h3> <?php echo $row["wrap_name"]; ?></h3>
          </div>
          <div class="selectBtn">
          <input type="radio" name="wrap_id" value=<?php echo $row["wrap_id"]; ?> >
          </div>
          <div class="desc">
          <p><?php echo $row["wrap_desc"];?></p>
          </div>
          <div class="price">
          <h4> $<?php echo $row["wrap_price"]; ?></h4>
          </div>
          </div><!--end eachOptionWrap-->
	  <?php } ?>
      </div><!--close optBoxWrap-->
	
	<?php
////visor database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_visor ";
	$query .= "WHERE visor_vis = 1 ";
	$query .= "ORDER BY visor_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <button id="visorBtn" type="button">Visor Style</button>
    <div class="optBoxWrap" id="visorWrap">
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		 <div class="eachOptionWrap">
          <div class="title">
          <h3> <?php echo $row["visor_name"]; ?></h3>
          </div>
          <div class="selectBtn">
          <input type="radio" name="visor_id" value=<?php echo $row["visor_id"]; ?> >
          </div>
          <div class="desc">
          <p><?php echo $row["visor_desc"];?></p>
          </div>
          <div class="price">
          <h4> $<?php echo $row["visor_price"]; ?></h4>
          </div>
          </div><!--end eachOptionWrap-->
	  <?php } ?>
      </div><!--close optBoxWrap-->
	
	<?php
////flare database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_flare ";
	$query .= "WHERE flare_vis = 1 ";
	$query .= "ORDER BY flare_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
    <button id="flareBtn" type="button">Flare Style</button>
    <div class="optBoxWrap" id="flareWrap">
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		 <div class="eachOptionWrap">
          <div class="title">
          <h3> <?php echo $row["flare_name"]; ?></h3>
          </div>
          <div class="selectBtn">
          <input type="radio" name="flare_id" value=<?php echo $row["flare_id"]; ?> >
          </div>
          <div class="desc">
          <p><?php echo $row["flare_desc"];?></p>
          </div>
          <div class="price">
          <h4> $<?php echo $row["flare_price"]; ?></h4>
          </div>
          </div><!--end eachOptionWrap-->
	  <?php } ?>
      </div><!--close optBoxWrap-->
	<?php
////tech database query//////
	$query  = "SELECT * ";
	$query .= "FROM h_tech ";
	$query .= "WHERE tech_vis = 1 ";
	$query .= "ORDER BY tech_order ASC ";
    $result = mysqli_query($connection, $query);
  	if (!$result) {die("Database query failed.");}
 	?>
   <button id="techBtn" type="button">Tech Options</button>
    <div class="optBoxWrap" id="techWrap">
    <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
     ?>
		 <div class="eachOptionWrap">
          <div class="title">
          <h3> <?php echo $row["tech_name"]; ?></h3>
          </div>
          <div class="selectBtn">
          <input type="radio" name="tech_id" value=<?php echo $row["tech_id"]; ?> >
          </div>
          <div class="desc">
          <p><?php echo $row["tech_desc"];?></p>
          </div>
          <div class="price">
          <h4> $<?php echo $row["tech_price"]; ?></h4>
          </div>
          </div><!--end eachOptionWrap-->
	  <?php } ?>
      </div><!--close optBoxWrap-->
      
      </div><!--close selectorWrap-->
       <?php echo "$user_id"; ?>
      	<input type="hidden" name="user_id" value=<?php echo "$user_id"; ?> >
      	 <input type="submit" value="Submit Form">
      	</form>
     
  </body>
</html>

<?php   //Close database connection
  mysqli_close($connection);
 ?>
