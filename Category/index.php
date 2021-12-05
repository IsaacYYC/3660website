<html lang="en">
<head>

<h1> Welcome to Our Online Store </h1>

</head>

<?php
include('dbconnection.php');

?>

<body>

<form name="form" action="insert.php" method="POST">
<input name="Catgory name" title="fill in Catgory Name" type="text" id="name" placeholder="name"><hr>
<input name="Catgory ID" title="fill in Catgory ID" type="text" id="CatID" placeholder="CatID"<hr><br<br>
<input name="submit" type="submit" id="submit" value="Submit"><hr>

</form>

<a href="select.php">Select Query</a>
</body>
</html>
