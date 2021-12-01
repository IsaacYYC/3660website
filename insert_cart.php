
<?php
// dbconnection for access
include('dbconnection.php');

//create the variables

$cart_ID = $_POST['cart_ID'];
$item_QTY = $_POST['item_QTY'];
$cost = $_POST['cost'];
$purchase_ID = $_POST['purchase_ID'];
$pro_ID = $_POST['pro_ID'];

// The insert statement

$sql = "INSERT INTO CART(cart_ID, item_QTY, cost, purchase_ID, pro_ID) VALUES('$cart_ID', '$item_QTY', '$cost', '$purchase_ID', '$pro_ID')";

$connect->query($sql);

header('location: index.php');

?>
