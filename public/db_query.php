  <?php
  
  function db_query() {
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