<?php 	

$localhost = "127.0.0.1";
$username = "dbfelix";
$password = "people";
$dbname = "stock";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>