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
  print 'getProductPage called'.$productsArray[0];
}

if (empty($routes)) {
  require('./home.php');
} else {
  getProductPage($routes);
}
?>