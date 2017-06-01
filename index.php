<?php
function getCurrentUri() {
  $basepath = implode('/', array_slice(explode('/', $_SERVER['SCRIPT_NAME']), 0, -1)) . '/';
  $uri = substr($_SERVER['REQUEST_URI'], strlen($basepath));
  if (strstr($uri, '?')) $uri = substr($uri, 0, strpos($uri, '?'));
  $uri = '/' . trim($uri, '/');
  return $uri;
}

$currentUri = getCurrentUri();
$routes = array();
$routes = preg_split('@/@', $currentUri, NULL, PREG_SPLIT_NO_EMPTY);

function getProductPage($productsArray) {
  // print 'getProductPage called'.$productsArray[0];

  $product = $productsArray[0];
  $product = ucwords($product);

  include './connectToDatabase.php';
  $mysqli = connectToDatabase();

  $query = "SELECT * FROM `ingredients_products` WHERE '$product' IN (`product`)";
  $result = $mysqli->query($query);

  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  print $rows[0]['ingredient']." => ".$product;
}



if (empty($routes)) {
  require('./home.php');
} else {
  getProductPage($routes);
}
?>