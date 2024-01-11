
<?php
$mysqli = new mysqli("localhost","root","","new_form");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  echo "successfully";
  exit();
}
?>
