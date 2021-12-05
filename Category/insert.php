 
<?php
// dbconnection for access
include('dbconnection.php');

//create the variables

$catname = $_POST['catname'];
$catID = $_POST['catID'];

// The insert statement

$sql = "INSERT INTO CUSTOMER(catname, catID) VALUES('$catname', '$catID')";

$connect->query($sql);

header('location: index.php');

?>
