<?php

//db connection
include('dbconnection.php');

$purchase_ID = $_POST['purchase_ID'];
$amount = $_POST['amount'];
$purchase_date = $_POST['purchase_date'];
$customer_ID = $_POST['customer_ID'];
$cart_ID = $_POST['cart_ID'];

if($_POST['update']) {
  $sql = "UPDATE PURCHASES SET amount='$amount', purchase_date='$purchase_date', customer_ID='$customer_ID', cart_ID='$cart_ID' WHERE purchase_ID='$purchase_ID'";

  if($connect->query($sql) == true) {
    echo 'Purchase Records Updated';
  } else {
    echo mysqli_errno($connect);
  }
} else if($_POST['insert']) {
  $sql = "INSERT INTO PURCHASES(purchase_ID, amount, purchase_date, customer_ID, cart_ID) VALUES('$purchase_ID', '$amount', '$purchase_date', '$customer_ID', '$cart_ID')";

  if($connect->query($sql) == true) {
    echo 'Purchase Record Inserted';
  } else if(mysqli_errno($connect) == 1062) {
    echo 'Record Already Exists';
  } else {
    echo mysqli_errno($connect);
  }
} else if($_POST['delete']) {
  $sql = "DELETE FROM PURCHASES WHERE purchase_ID='$purchase_ID'";

  if($connect->query($sql) == true) {
    echo 'Purchase Record Deleted';
  } else {
    echo mysqli_errno($connect);
  }
} else {
  echo 'Invalid';
}


?>

<a href="index.php"><button type="submit" name="Return"/>Return</button> </a>