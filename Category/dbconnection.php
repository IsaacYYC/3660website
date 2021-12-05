<?php
// connection for the database
$host = "vconroy.cs.uleth.ca";
$user = "lacj3660";
$password = "Eodahghie0";
$dbname = "lacj3660";

$connect = mysqli_connect($host, $user, $password, $dbname);
   if($connect->connect_error)
   {
      echo "Error connecting!";
      exit;
   }
?>

