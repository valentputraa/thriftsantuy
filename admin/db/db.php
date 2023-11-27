<?php
$servername = "localhost";
$username = "root";
$password = "root";
$port = 8889;

// Create connection
$conn = mysqli_connect($servername,$username,$password,"thriftsantuy_db",$port);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


?>