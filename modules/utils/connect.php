<?php
function connectToDatabase() {
  include __DIR__."/../../config.php";
  return $mysqli;
}
?>