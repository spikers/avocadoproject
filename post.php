<?php
$GLOBALS['production'] = true;

if ($_POST['ingredient'] !== null && $_POST['product'] != null) {
  handlePost();
} else {
  print "{error: 504, type: 'Bad input'}";
}

function handlePost() {
  sanityCheck("handlePost");
  $mysqli = connectToDatabase();
  $ingredient = $_POST['ingredient'];
  $product = $_POST['product'];
  handleInsert($mysqli, $ingredient, $product);
}

function sanityCheck($function_name) {
  if (!$GLOBALS['production']) {
    print $_POST['ingredient'].", $function_name ".$_POST['product']." || ";
  } else {
    //Do nothing
  }
}

function connectToDatabase() {
  include "./config.php";
  return $mysqli;
}

function handleInsert($mysqli, $ingredient, $product) {
  sanityCheck("handleInsert");
  $query = "INSERT INTO `ingredients_products` (`ingredient`,`product`) VALUES ('$ingredient', '$product');";
  $success = $mysqli->query($query);
}

?>