 
<?php
// dbconnection for access
include('dbconnection.php');

//create the variables

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$order_num = $_POST['order_num'];
$phone = $_POST['phone'];

// The insert statement

$sql = "INSERT INTO CUSTOMER(fname, email, phone, password, order_num) VALUES('$name', '$email', '$phone', '$password', '$order_num')";

$connect->query($sql);

header('location: index.php');

?>
