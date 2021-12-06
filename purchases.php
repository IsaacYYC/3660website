<html>
<head><title>Purchase Records</title></head>

<body>


<form action="update_purchases.php" method="post">
<center><table>
<tr>
  <td colspan="5" align="center"><h3>New Purchase Record</h3></td>
</tr>
<tr>
  <td align="right">Purchase ID:</td><td><input type="text" id="purchase_ID" name="purchase_ID" placeholder="ID" size=20></td>
</tr>
<tr>
  <td align="right">Amount:</td><td><input type="number" id="amount" name="amount" placeholder="Amount" size=20></td>
</tr>
<tr>
  <td align="right">Purchase Date:</td><td><input type="date" id="purchase_date" placeholder="Date" name="purchase_date" size=20></td>
</tr>
<tr>
  <td align="right">Customer ID:</td><td><input type="text" id="customer_ID" placeholder="Enter Customer ID" name="customer_ID" size=20></td>
</tr>
<tr>
  <td align="right">Cart ID:</td><td><input type="text" id="cart_ID" placeholder="Enter Cart ID" name="cart_ID" size=20></td>
</tr>
<tr>
  <td colspan="5" align="center"><button type="submit" name="insert" value="Submit">Insert</button><button type="submit" name="update" value="Submit">Update</button><button type="submit" name="delete" value="Submit">Delete</button></td>
</tr>

<head><title> Purchase Records </title></head>

</table></center>
</form>

<a href="index.php"><button type="submit" name="Return"/>Return</button> </a>

<?php

//db connection
include('dbconnection.php');


//connect to the sql server
$purchase_ID = $_POST['purchase_ID'];
$amount = $_POST['amount'];
$purchase_date = $_POST['purchase_date'];
$customer_ID = $_POST['customer_ID'];
$cart_ID = $_POST['cart_ID'];

//Query to display the database records for a list of All Purchase Records available
$sql = "SELECT * FROM PURCHASES";
$result = $connect->query($sql);
echo "<table boarder = 4px; width=100%;>
<th>Purchase ID</th>
<th>Amount</th>
<th>Purchase Date</th>
<th>Customer ID</th>
<th>Cart ID</th>
<th>Update</th>
<th>Delete</th>
";

if ($result->num_rows > 0) {
//output the data for each row
while($row = $result->fetch_assoc()) {
echo "<tr><td align=center>" . $row['purchase_ID']. "</td><td align=center>" . $row['amount'] . "</td><td align=center>" . $row['purchase_date']. "</td><td align=center>" . $row['customer_ID']. "</td><td align=center>" . $row['cart_ID']. "</td><td></td></tr>";
}
echo "</table>";
}else{
 echo "0 results";
}
?>

</body>
</html>