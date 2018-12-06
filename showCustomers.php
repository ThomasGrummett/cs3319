<?php
//print header
echo '<h2>Customers<h2>';
//query
$query="SELECT * FROM Customers ORDER BY Last_Name";
$result= mysqli_query($connection,$query);
if(!$result){
	die("databases query failed.");
}
//print as table
echo "<table cellpadding='10'><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>City</th><th>Phone Number</th><th>Agent ID</th></tr>";
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row["CustomerID"]."</td><td>".$row["First_Name"]."</td><td>".$row["Last_Name"]."</td><td>".$row["City"]."</td><td>".$row["Phone_Number"]."</td><td>".$row["AgentID"]."</td></tr>";
	}
echo "</table>";
echo "<hr>";
?>
