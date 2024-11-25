<?php
$username = 'root';
$pass = '';
$host = 'localhost';
$db = 'foro';
$mysqli = new mysqli($host,$username,$pass,$db);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>
