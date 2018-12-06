<?php
include 'connectdb.php';
//queries to populate dropdowns
$ProductQuery='SELECT ProductID FROM Products';
 
$Products=mysqli_query($connection,$ProductQuery);

//print form
echo '<h3>Show Total Revenue for Product:</h3>';
echo'<form action="showRev.php" method="post">
        <br>
        Product:<br> <select name="Product">';
                //populate product dropdown
                while($row=mysqli_fetch_assoc($Products)){
                        echo '<option value="'.$row["ProductID"].'">'.$row["ProductID"].'</option>';
                }
echo    '</select>';
echo 	'<input type="submit" value="Query"></form>';

?>
