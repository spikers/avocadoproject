<?php
function connectToDatabase() {
  include "./config.php";
  return $mysqli;
}
?>