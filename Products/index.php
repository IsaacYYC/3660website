<html lang="en">
<head>

<h1> Welcome to Our Online Store </h1>

</head>

<?php
include('dbconnection.php');
?>

<body>

<form name="form" action="insert.php" method="POST">
<input name="Product name" title="fill in Product Name" type="text" id="pro_name" placeholder="name"><hr>
<input name="Product ID" title="fill in Product ID" type="text" id="proID" placeholder="proID"<hr><br<br>
<input name="Product Description" title="fill in Product Description" type="text" id="pro_desc" placeholder="pro_desc"<hr><br<br>
<input name="Product Price" title="fill in Product Price" type="text" id="pro_price" placeholder="pro_price"<hr><br<br>
<input name="submit" type="submit" id="submit" value="Submit"><hr>

</form>

<a href="select.php">Select Query</a>
</body>
</html>
