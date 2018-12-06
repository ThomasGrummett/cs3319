<?php
//query for populating dropdown
$CustomerQuery='SELECT CustomerID FROM Customers';
$Customers=mysqli_query($connection,$CustomerQuery);
//print form	
echo '<br><br><h3>Update Customer Phone #</h3>';
echo '<form action="updatePhone.php" method="post">';
echo    '<br>Customer:<br> <select name="Customer">';
               //populate dropdown
		 while($row=mysqli_fetch_assoc($Customers)){
                        echo '<option value="'.$row["CustomerID"].'">'.$row["CustomerID"].'</option>';
                }
echo '</select><br> Phone Number: <input type="tel" name="pNumber"><br>
<input type="submit" value="Update">';
?>
