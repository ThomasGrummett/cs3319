<?php
include 'connectdb.php';

$Product=intval($_POST["Product"]);

//query for cost and total purchased
$query='SELECT SUM(Quantity) AS total FROM Buys WHERE ProductID="'.$Product.'" ';
$query2='SELECT Cost FROM Products WHERE ProductID="'.$Product.'"';
$query3='SELECT Description FROM Products WHERE ProductID="'.$Product.'"';

//query
$result=mysqli_query($connection,$query);
$result2=mysqli_query($connection,$query2);
$result3=mysqli_query($connection,$query3);

//pull data
$row=mysqli_fetch_assoc($result);
$Tot=intval($row["total"]);

$row=mysqli_fetch_assoc($result2);

$Cost=floatval($row["Cost"]);

$row=mysqli_fetch_assoc($result3);
$Desc=$row["Description"];
//final total
$FinTot=$Tot*$Cost;
//print
echo '<p>Total:'.$Tot.'</p><br>';
echo '<p>Description:'.$Desc.'</p><br>';
echo '<p>Total Revenue:'.$FinTot.'</p><br>';
?>
