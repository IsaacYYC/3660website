<html>
<head><title>Cart</title></head>

<body>


<form action="update_cart.php" method="post">
<center><table>
<tr>
  <td colspan="5" align="center"><h3>Create a New Cart</h3></td>
</tr>
<tr>
  <td align="right">Cart ID:</td><td><input type="text" id="cart_ID" name="cart_ID" placeholder="ID" size=20></td>
</tr>
<tr>
  <td align="right">Item Quantity:</td><td><input type="number" id="item_QTY" name="item_QTY" placeholder="Quantity" size=20></td>
</tr>
<tr>
  <td align="right">Cost:</td><td><input type="number" id="cost" placeholder="cost" name="cost" size=20></td>
</tr>
<tr>
  <td align="right">Purchase ID:</td><td><input type="text" id="purchase_ID" placeholder="ID" name="purchase_ID" size=20></td>
</tr>
<tr>
  <td align="right">Product ID:</td><td><input type="text" id="pro_ID" placeholder="ID" name="pro_ID" size=20></td>
</tr>
<tr>
  <td colspan="5" align="center"><button type="submit" name="insert" value="Submit">Insert</button><button type="submit" name="update" value="Submit">Update</button><button type="submit" name="delete" value="Submit">Delete</button></td>
</tr>
</table></center>
</form>

<a href="index.php">Return</a><br>

<?php
//db connection
include('dbconnection.php');




//connect to the sql server
$cart_ID = $_POST['cart_ID'];
$item_QTY = $_POST['item_QTY'];
$cost = $_POST['cost'];
$purchase_ID = $_POST['purchase_ID'];
$pro_ID = $_POST['pro_ID'];

//Query to display the database records
$sql = "SELECT * FROM CART";
$result = $connect->query($sql);
echo "<table boarder = 4px; width=100%;>

<th>Cart ID</th>
<th>Quantity</th>
<th>Cost</th>
<th>Purchase ID</th>
<th>Product ID</th>
<th>Update</th>
<th>Delete</th>

";

if ($result->num_rows > 0) {
//output the data for each row
while($row = $result->fetch_assoc()) {
echo "<tr><td align=center>" . $row['cart_ID']. "</td><td align=center>" . $row['item_QTY'] . "</td><td align=center>" . $row['cost']. "</td><td align=center>" . $row['purchase_ID']. "</td><td align=center>" . $row['pro_ID']. "</td><td></td></tr>";
}
echo "</table>";
}else{
 echo "0 results";
}
?>

</body>
</html>
