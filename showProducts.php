<?php
//get order to sort by from dropdown
 $sort = $_POST['order']; 
//connect to db
include 'connectdb.php';
//query
$query="SELECT * FROM Products ORDER BY ".$sort.";";
$result= mysqli_query($connection,$query);
if(!$result){
	die("databases query failed.");
}
//print in a table
echo "<table cellpadding='10'><tr><th>ID</th><th>Description</th><th>Cost</th><th>Quantity</th></tr>";
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row["ProductID"]."</td><td>".$row["Description"]."</td><td>".$row["Cost"]."</td><td>".$row["Quantity"]."</td></tr>";
	}
echo "</table>";

?>
