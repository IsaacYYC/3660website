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
$catname = $_POST['catname'];
$catID = $_POST['catID'];

//Query to display the database records
$sql = "SELECT * FROM CATEGORY";
$result = $connect->query($sql);
echo "<table boarder = 4px; width=100%;>

<th>Category Name</th>
<th>CategoryID</th>

";

if ($result->num_rows > 0) {
//output the data for each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['Catname']. "</td><td>" . $row['CatID'] . "</td></tr>";
}
echo "</table>";
}else{
 echo "0 results";
}
?>

</body>
</html>

