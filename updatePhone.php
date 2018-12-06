<?php
//get data, connect to db
$Customer=$_POST["Customer"];
$Phone=$_POST["pNumber"];
include 'connectdb.php';
//query
$query='UPDATE Customers SET Phone_Number="'.$pNumber.'" WHERE CustomerID="'.$Customer.'";';
$submit=mysqli_($connection,$query);
?>
