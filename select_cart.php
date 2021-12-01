<html>
<head>
<style>

th {
text-align: left;
padding: 8px;
background-color: #04AA6D;
color: white;
}
</head>
</style>

<body>
<?php
//db connection
include('dbconnection.php');



//connect to the sql server
$fname = $_POST['cart_ID'];
$email = $_POST['item_QTY'];
$phone = $_POST['cost'];
$password = $_POST['purchase_ID'];
$order_Num = $_POST['pro_ID'];

//Query to display the database records
$sql = "SELECT * FROM CUSTOMER";
$result = $connect->query($sql);
echo "<table boarder = 4px; width=100%;>

<th>Cart ID</th>
<th>Quantity</th>
<th>Cost</th>
<th>Purchase ID</th>
<th>Product ID</th>

";

if ($result->num_rows > 0) {
//output the data for each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['cart_ID']. "</td><td>" . $row['item_QTY'] . "</td><td>" . $row['cost']. "</td><td>" . $row['purchase_ID']. "</td><td>" . $row['pro_ID']. "</td></tr>";
}
echo "</table>";
}else{
 echo "0 results";
}
?>

</body>
</html>
