
<!DOCTYPE html>
<html>
  <head>
    <title>Helmet Head Rocks</title>
    <link rel="stylesheet" type="text/css" href="hh_styles/hhstyle.css">
    <script type="text/javascript" src="hh_js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="hh_js/scripts.js"></script>
    <script>var __adobewebfontsappname__="dreamweaver"</script>
	<script src=	"http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js"
	type="text/javascript"></script>
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
  	<div id = "pageWrap">
 	 <?php
	  session_start();
	   if(isset($_SESSION["userId"])) {
		   $user_id = $_SESSION["userId"];
		   $name_id = $_SESSION["nameId"];
		   //echo($user_id);
		   //echo($name_id);
		   include '../includes/headerLI.php';
		   }else{
		   include '../includes/headerLO.php';
		  //header('Location: login.php'); 
	   }
	?>
	<div id="allContentWrap">
    	<div id="helmetImgWrap">
        	<div id="hemlmetPreview"></div>
        </div>
        <aside>
        	<div id="userName">
            <?php if (isset($_SESSION["nameId"])){
				$name_id = $_SESSION["nameId"];
				echo($name_id);
				}else{
				echo ("Guest");
				}
			?>
            </div>
            <div id="baseBuild" class="buildBox">
            	<label>Base:</label>
            	<div id="BBName" class="BName"></div>
                <div id="BBPrice" class="BPrice"></div>
            </div>
            <div id="wrapBuild" class="buildBox">
            	<label>Wrap:</label>
            	<div id="WBName" class="BName"></div>
                <div id="WBPrice" class="BPrice"></div>
            </div>
            <div id="visorBuild" class="buildBox">
            	<label>Visor:</label>
            	<div id="VBName" class="BName"></div>
                <div id="VBPrice" class="BPrice"></div>
            </div>
            <div id="flareBuild" class="buildBox">
            	<label>Flair:</label>
            	<div id="FBName" class="BName"></div>
                <div id="FBPrice" class="BPrice"></div>
            </div>
            <div id="techBuild" class="buildBox">
            	<label>Tech:</label>
            	<div id="TBName" class="BName"></div>
                <div id="TBPrice" class="BPrice"></div>
            </div>
            <div id="totalBuild" class="buildBox BPrice"></div>
        </aside>
      <div id="bottomWrap">
        <div id="selectorWrap" class="selectorWrap">
           <button id="baseBtn" type="button" class="hvr-underline-from-center">Base Style</button>
           <button id="wrapBtn" type="button" class="hvr-underline-from-center">Wrap Style</button>
           <button id="visorBtn" type="button" class="hvr-underline-from-center">Visor Style</button>
           <button id="flareBtn" type="button" class="hvr-underline-from-center">Flair Style</button>
           <button id="techBtn" type="button" class="hvr-underline-from-center">Tech Options</button>
         </div><!--end selector wrap-->
     <?php 
	 
////helmet base query/////// 
	$query  = "SELECT * ";
	$query .= "FROM h_base ";
	$query .= "WHERE base_vis = 1 ";
	$query .= "ORDER BY base_order ASC ";
	$result = mysqli_query($connection, $query);
	if (!$result) {die("Database query failed.");}
	?>
    <form action="orderSummary.php" method="post" >
    <div class="optBoxWrap" id="baseWrap">
    
	  <?php
        //use returned database
        while($row = mysqli_fetch_assoc($result)) {
      ?>
		  <div class="eachOptionWrap">
              <div class="title">
                <h3> <?php echo $row["base_name"]; ?></h3>
            </div>
           <div class="selectBtn">
              <input type="radio" name="base_id" value=<?php echo $row["base_id"]; ?> 
              data-name=<?php echo $row["base_name"]; ?>
              data-price=<?php echo $row["base_price"]; ?>
              data-image=<?php echo $row["base_id"]; ?>
              >
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
              <input type="radio" name="wrap_id" value=<?php echo $row["wrap_id"]; ?>
              data-name=<?php echo $row["wrap_name"]; ?>
              data-price=<?php echo $row["wrap_price"]; ?>
              data-image=<?php echo $row["wrap_id"]; ?>
              >
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
          <input type="radio" name="visor_id" value=<?php echo $row["visor_id"]; ?>
          data-name=<?php echo $row["visor_name"]; ?>
          data-price=<?php echo $row["visor_price"]; ?>
          data-image=<?php echo $row["visor_id"]; ?>
          >
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
          <input type="radio" name="flare_id" value=<?php echo $row["flare_id"]; ?>
          data-name=<?php echo $row["flare_name"]; ?>
          data-price=<?php echo $row["flare_price"]; ?>
          data-image=<?php echo $row["flare_id"]; ?>
          >
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
                <input type="radio" name="tech_id" value=<?php echo $row["tech_id"]; ?>
                data-name=<?php echo $row["tech_name"]; ?>
                data-price=<?php echo $row["tech_price"]; ?>
                data-image=<?php echo $row["tech_id"]; ?>
                >
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
      
      </div><!--close bottomWrap-->
      <footer>
      	<input type="hidden" name="user_id" value=<?php echo "$user_id"; ?> >
      	<input type="submit" value="Submit Order" id="submitOrder">
      	</form>
        </footer>
        </div><!--End All Content Wrap-->
    </div><!--End page Wrap--> 
  </body>
</html>

<?php   //Close database connection
  mysqli_close($connection);
 ?>
