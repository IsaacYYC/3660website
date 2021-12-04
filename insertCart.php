<html>
<head><title>Create a New Cart</title></head>
<body>
<h2>Add a New Department</h2>
<form action="insert_cart.php" method=post>
Cart ID: <input type=text name=$cart_ID size=20><br><br>
Item Quantity: <input type=number name=$item_QTY size=6><br><br>
Cost: <input type=number name=$cost size=9><br><br>
Purchase ID: <input type=text name=$purchase_ID size=20><br><br>
Product ID: <input type=text name=$pro_ID size=20><br><br>
<input type=submit name="submit" value="Insert"></form>
</body>
</html>
