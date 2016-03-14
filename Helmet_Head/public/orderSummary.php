 <!DOCTYPE html>
<html>
  <head>
    <title>Helmet Head Order Summary</title>
    <link rel="stylesheet" type="text/css" href="hh_styles/hhSummary.css">
    <script type="text/javascript" src="hh_js/jquery-1.4.2.js"></script>
	<script type="text/javascript" src="hh_js/scripts.js"></script>
    <script>var __adobewebfontsappname__="dreamweaver"</script>
	<script src="http://use.edgefonts.net/montserrat:n4:default;source-sans-pro:n2:default.js"
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

//$value1 = $_POST['base_id'];
//$value2 = $_POST['wrap_id'];
//$value3 = $_POST['visor_id'];
//$value4 = $_POST['flare_id'];
//$value5 = $_POST['tech_id'];
//$value6 = $_POST['user_id'];


if(empty($_POST['base_id'])){
	$value1 = "None Selected";
	}else{$value1 = $_POST['base_id'];
}
if(empty($_POST['wrap_id'])){
	$value2 = "None Selected";
	}else{$value2 = $_POST['wrap_id'];
}	
if(empty($_POST['visor_id'])){
	$value3 = "None Selected";
	}else{$value3 = $_POST['visor_id'];
}
if(empty($_POST['flare_id'])){
	$value4 = "None Selected";
	}else{$value4 = $_POST['flare_id'];
}
if(empty($_POST['tech_id'])){
	$value5 = "None Selected";
	}else{$value5 = $_POST['tech_id'];
}
if(empty($_POST['user_id'])){
	 header('Location: login.php');
	 }else{$value6 = $_POST['user_id'];
}			

$queryI = "INSERT INTO helmet_builds (";
$queryI .= "h_base, h_wrap, h_visor, h_flare, h_tech, user_id";
$queryI .=") VALUES (";
$queryI .="'$value1','$value2', '$value3', '$value4', '$value5', '$value6'";
$queryI .=")";
$test = "id";

if (mysqli_query($connection,$queryI))
{echo "New record created successfully";	
}else{
  	echo 'error inserting data: ' . $queryI . mysqli_error($Connection);
}

	$query1  = "SELECT * ";
	$query1 .= "FROM helmet_builds ";
	$query1 .= "ORDER BY build_id DESC ";
	$query1 .= "LIMIT 1";
	$orderSum = mysqli_query($connection, $query1);
	if (!$orderSum) {die("Database query failed.");}
	
	$orderIDs = mysqli_fetch_assoc($orderSum);
	$userID = $orderIDs["user_id"];
	$baseID = $orderIDs["h_base"];
	$wrapID = $orderIDs["h_wrap"];
	$visorID = $orderIDs["h_visor"];
	$flareID = $orderIDs["h_flare"];
	$techID = $orderIDs["h_tech"];
	
/////User Info Query/////         
    $queryU  = "SELECT lname, fname ";
	$queryU .= "FROM user_info ";
	$queryU .= "WHERE user_id = $userID";
	$userInfo = mysqli_query($connection, $queryU); 
	if (!$userInfo) {die("Database query failed.");}
	$userInfoR = mysqli_fetch_assoc($userInfo);
	
/////Base Info Query/////         
    $queryB  = "SELECT base_name, base_desc, base_price ";
	$queryB .= "FROM h_base ";
	$queryB .= "WHERE base_id = $baseID";
	$baseInfo = mysqli_query($connection, $queryB); 
	if (!$baseInfo) {die("Database query failed,");}
	$BaseInfoR = mysqli_fetch_assoc($baseInfo);

/////Wrap Info Query/////         
    $queryW  = "SELECT wrap_name, wrap_desc, wrap_price ";
	$queryW .= "FROM h_wrap ";
	$queryW .= "WHERE wrap_id = $wrapID";
	$wrapInfo = mysqli_query($connection, $queryW); 
	if (!$wrapInfo) {die("Database query failed.");}
	$wrapInfoR = mysqli_fetch_assoc($wrapInfo);	
 
 /////Visor Info Query/////         
    $queryV  = "SELECT visor_name, visor_desc, visor_price ";
	$queryV .= "FROM h_visor ";
	$queryV .= "WHERE visor_id = $visorID";
	$visorInfo = mysqli_query($connection, $queryV); 
	if (!$visorInfo) {die("Database query failed.");}
	$visorInfoR = mysqli_fetch_assoc($visorInfo);	     
 
 /////Flare Info Query/////         
    $queryF  = "SELECT flare_name, flare_desc, flare_price ";
	$queryF .= "FROM h_flare ";
	$queryF .= "WHERE flare_id = $flareID";
	$flareInfo = mysqli_query($connection, $queryF); 
	if (!$flareInfo) {die("Database query failed.");}
	$flareInfoR = mysqli_fetch_assoc($flareInfo);
	
/////Tech Info Query/////         
    $queryT  = "SELECT tech_name, tech_desc, tech_price ";
	$queryT .= "FROM h_tech ";
	$queryT .= "WHERE tech_id = $techID";
	$techInfo = mysqli_query($connection, $queryT); 
	if (!$techInfo) {die("Database query failed.");}
	$techInfoR = mysqli_fetch_assoc($techInfo);
	
	$totalPrice = ($BaseInfoR["base_price"]) + ($wrapInfoR["wrap_price"]) + ($visorInfoR["visor_price"])
											+ ($flareInfoR["flare_price"]) + ($techInfoR["tech_price"]);
	
	
  ?>
  <body>
  	<div id = "pageWrap">
	<div id="allContentWrap" class="orderWrap">
    	<div id="helmetImgWrap">
        	<h1>Motor Head</h1>
            <h3>Helmet Customizer</h3>
        	<h5>Build Summary for:</h5>
        	<div id="userName">
            <?php
			echo $userInfoR["fname"] . ' ' . $userInfoR["lname"];
			?>
            </div>
        	<div id="hemlmetPreview"><img src="images/<?php echo $baseID . $wrapID . $visorID . $flareID?>.png"></div>
        </div>
        <aside>
        	
            <div id="baseBuild" class="buildBox">
            	<label>Base:</label>
            	<div id="BBName" class="BName"><?php echo $BaseInfoR["base_name"];?></div>
                <div id="BBPrice" class="BPrice">$<?php echo $BaseInfoR["base_price"];?></div>
                <div id="BBDesc" class="BDesc"><?php echo $BaseInfoR["base_desc"];?></div>
                
            </div>
            <div id="wrapBuild" class="buildBox">
            	<label>Wrap:</label>
            	<div id="WBName" class="BName"><?php echo $wrapInfoR["wrap_name"];?></div>
                <div id="WBPrice" class="BPrice">$<?php echo $wrapInfoR["wrap_price"];?></div>
                <div id="WBDesc" class="BDesc"><?php echo $wrapInfoR["wrap_desc"];?></div>
                
            </div>
            <div id="visorBuild" class="buildBox">
            	<label>Visor:</label>
            	<div id="VBName" class="BName"><?php echo $visorInfoR["visor_name"];?></div>
                <div id="VBPrice" class="BPrice">$<?php echo $visorInfoR["visor_price"];?></div>
                <div id="VBDesc" class="BDesc"><?php echo $visorInfoR["visor_desc"];?></div>
            </div>
            <div id="flareBuild" class="buildBox">
            	<label>Flair:</label>
            	<div id="FBName" class="BName"><?php echo $flareInfoR["flare_name"];?></div>
                 <div id="FBPrice" class="BPrice">$<?php echo $flareInfoR["flare_price"];?></div>
                <div id="FBDesc" class="BDesc"><?php echo $flareInfoR["flare_desc"];?></div>
            </div>
            <div id="techBuild" class="buildBox">
            	<label>Tech:</label>
            	<div id="TBName" class="BName"><?php echo $techInfoR["tech_name"];?></div>
                 <div id="TBPrice" class="BPrice">$<?php echo $techInfoR["tech_price"];?></div>
                <div id="TBDesc" class="BDesc"><?php echo $techInfoR["tech_desc"];?></div>
            </div>
            <div id="totalBuild" class="BPrice">$<?php echo $totalPrice;?></div>
        </aside>
      
        <footer>
          <button id="returnBtn"><a href="index.php">Return to Customizer</a></button>
          </form>
        </footer>
        </div><!--End All Content Wrap-->
    </div><!--End page Wrap--> 
  </body>
</html>

<?php   //Close database connection
  mysqli_close($connection);
 ?>

