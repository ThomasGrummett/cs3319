<?php
$query="SELECT * FROM Products ORDER BY Description";
$result= mysqli_query($connection,$query);
if(!$result){
	die("databases query failed."};
}

echo "<table><tr><th>ID</th><th>Description</th><th>Cost</th><th>Quantity</th></tr>";
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row["ProductID"]."</td><td>".$row["Description"]."</td><td>".$row["Cost"]."</td><td>".$row["Quantity"]."</td></tr>";
	}
echo "</table>";

?>