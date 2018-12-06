<?php

//connect to db then pull data from form
include 'connectdb.php';
$Product=$_POST["Product"];
$Customer=$_POST["Customer"];
$Quantity=$_POST["Quantity"];

//query, if product has been purchased, add, if new purchase make new purchase
$query='SELECT * FROM Buys WHERE CustomerID="'.$Customer.'" AND ProductID= "'.$Product.'"';
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==0){
	$query2='INSERT INTO tgrummetassign2db(ProductID, CustomerID, Quantity) VALUES ("'.$Product.'","'.$Customer.'","'.$Quantity.'");';
}else{
	
	$query2='UPDATE tgrummetassign2db SET Quantity=Quantity+'.$Quantity.' WHERE CustomerID="'.$Customer.'" AND ProductID="'.$Product.'";';
} 
?>

