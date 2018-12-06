<?php
//query to populate dropdown
$CustomerQuery='SELECT CustomerID FROM Customers';

$Customers=mysqli_query($connection,$CustomerQuery);

//form
echo '<br><br><h3>Delete Customer</h3>';
echo '<form action="deleteCustomer.php" method="post">';
echo    '<br>Customer:<br> <select name="Customer">';
                //populate dropdown list
		while($row=mysqli_fetch_assoc($Customers)){
                        echo '<option value="'.$row["CustomerID"].'">'.$row["CustomerID"].'</option>';
                }
echo	'</select><input type="submit" value="Delete">
</form>';
?>
