
<?php
//get data, connect to db
$Customer=$_POST["Customer"];
include 'connectdb.php';

//query
$query='DELETE FROM Customers WHERE CustomerID="'$Customer'"';
$submit=mysqli_($connection,$query);
?>

