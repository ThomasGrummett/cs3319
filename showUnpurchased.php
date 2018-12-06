<?php
include 'connectdb.php';
//print header
echo '<h3>Unpurchased Products:</h3>';
//query
$query="SELECT Products.Description FROM Products INNER JOIN Buys ON Product.ProductID=Buys.ProductID WHERE Quantity=0 ";
$result= mysqli_query($connection,$query);
if(!$result){
        die("No Unpurchased Products");
}
while($row=mysqli_fetch_assoc($result)){
	echo $row;
}

?>
