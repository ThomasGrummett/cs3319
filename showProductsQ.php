<?php
//pull data, connect to db
$Q=intval($_POST["Quantity"]);
include 'connectdb.php';
//query
$query='SELECT Customers.First_Name,Customers.Last_Name,Products.Description,Buys.Quantity FROM Customers INNER JOIN Buys ON Customers.CustomerID=Buys.CustomerID INNER JOIN Products ON Products.ProductID=Buys.ProductID WHERE Quantity>'.$Q.'';
$result=mysqli_query($connection,$query);
//print db as table
echo '<table>';
while($row=mysqli_fetch_assoc($result)){
	$FN=$row['First_Name'];
	$LN=$row['Last_Name'];
	$D=$row['Description'];
	$Q=$row['Quantity'];

	echo '<tr><td>'.$FN.'</td><td>'.$LN.'</td><td>'.$D.'</td><td>'.$Q.'</td></tr>';
}
echo '</table>';
?>
