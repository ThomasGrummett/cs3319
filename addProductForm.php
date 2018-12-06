<?php
//queries to populate dropdowns
$ProductQuery='SELECT ProductID FROM Products';
$CustomerQuery='SELECT CustomerID FROM Customers';

$Products=mysqli_query($connection,$ProductQuery);
$Customers=mysqli_query($connection,$CustomerQuery); 
//print form
echo'<form action="addProduct.php" method="post">
        <br>
	Product:<br> <select name="Product">';
		//populate product dropdown
		while($row=mysqli_fetch_assoc($Products)){
			echo '<option value="'.$row["ProductID"].'">'.$row["ProductID"].'</option>';
		}
echo	'</select>';
echo	'<br>Customer:<br>';
echo	' <select name="Customer">';
		//populate customer dropdown
                while($row=mysqli_fetch_assoc($Customers)){
			echo '<option value="'.$row["CustomerID"].'">'.$row["CustomerID"].'</option>';

                }
echo	'</select>';
echo	'<br>Quantity:<br>';
echo	'<input type="number" name="Quantity"/>

<input type="submit" value="Add Purchase">
</form>';
?>
