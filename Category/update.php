
<?php

//db connection
include('dbconnection.php');


$sql = "UPDATE  set CATEGORY ='$_POST[catname]', where _ID='$_POST[catname]'";

if($connection->query($sql))
{
echo "Updated Successfuly";

}

?>
