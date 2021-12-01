<?php
//db connection

include('dbconnection.php');

$sql = "DELETE from CART where customer_ID='$_POST[cart_ID]'";

if($connection->query($sql))
{
echo "DELETED Succesfuly";
}





?>
