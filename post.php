<?php
if ($_POST['ingredient'] !== null && $_POST['product'] != null) {
  handlePost();
} else {
  print "{error: 504, type: 'Bad input'}";
}

function handlePost() {
  sanityCheck();
  $mysqli = connectToDatabase();
}

function sanityCheck() {
  print $_POST['ingredient']." ".$_POST['product'];
}

function connectToDatabase() {
  include "./config.php";
  return $mysqli;
}

?>