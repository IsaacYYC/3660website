<?php
//db connection

include('dbconnection.php');

$sql = "DELETE from CATEGORY where catID='$_POST[catID]'";

if($connection->query($sql))
{
echo "DELETED Succesfuly";
}


?>
