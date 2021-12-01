<?php

//db connection
include('dbconnection.php');


$sql = "UPDATE CART set cart_ID='$_POST[item_QTY]', cost='$_POST[cost]', purchase_ID='$_POST[purchase_ID]', pro_ID='$_POST[pro_ID]' where cart_ID='$_POST[newID]'";

if($connection->query($sql))
{
echo "Updated Successfuly";

}



?>
