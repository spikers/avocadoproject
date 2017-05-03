<?php 
  include "../utils/connectToDatabase.php";
  $mysqli = connectToDatabase();
  $query = "SELECT ingredient, product FROM `ingredients_products`";
  $result = $mysqli->query($query);
  $rows = array();
  while($r = $result->fetch_assoc()) {
    $rows[] = $r;
  }
  print json_encode($rows);
?>