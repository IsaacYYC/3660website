<?php

//db connection
include('dbconnection.php');

$cart_ID = $_POST['cart_ID'];
$item_QTY = $_POST['item_QTY'];
$cost = $_POST['cost'];
$purchase_ID = $_POST['purchase_ID'];
$pro_ID = $_POST['pro_ID'];

if($_POST['update']) {
  $sql = "UPDATE CART SET item_QTY='$item_QTY', cost='$cost', purchase_ID='$purchase_ID', pro_ID='$pro_ID' WHERE cart_ID='$cart_ID'";

  if($connect->query($sql) == true) {
    echo 'Cart Succesfuly Updated';
  } else {
    echo mysqli_errno($connect);
  }
} else if($_POST['insert']) {
  $sql = "INSERT INTO CART(cart_ID, item_QTY, cost, purchase_ID, pro_ID) VALUES('$cart_ID', '$item_QTY', '$cost', '$purchase_ID', '$pro_ID')";

  if($connect->query($sql) == true) {
    echo 'Cart Succesfuly Inserted';
  } else if(mysqli_errno($connect) == 1062) {
    echo 'Cart Already Exists';
  } else {
    echo mysqli_errno($connect);
  }
} else if($_POST['delete']) {
  $sql = "DELETE FROM CART WHERE cart_ID='$cart_ID'";

  if($connect->query($sql) == true) {
    echo 'Cart Succesfuly Deleted';
  } else {
    echo mysqli_errno($connect);
  }
} else {
  echo 'Invalid Button';
}



?>
<br><a href="cart.php">Return</a><br>
