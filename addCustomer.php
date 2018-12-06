<?php
//pull data from post
$fName=$_POST["firstname"];
$lName=$_POST["lastname"];
$city=$_POST["city"];
$pNumber=$_POST["pNumber"];
$Agent=$_POST["Agent"];
//connect to db
include 'connectdb.php';
//set customer id to max+1
$query='SELECT MAX(CustomerID) FROM tgrummetassign2db';
$result=mysqli_query($connection,$query);
$row=mysqli_fetch_assoc($result);
$newkey = intval($row["maxid"]) + 1;
$CID = (string)$newkey;

//query
$query2='INSERT INTO tgrummetassign2db(CustomerID, First_Name, Last_Name, City, Phone_Number, AgentID) VALUES("'.$CID.'", "'.$fName.'", "'.$lName.'", "'.$city.'", "'.$pNumber.'", "'.$Agent.'")';
$submit=mysqli_query($connection,$query2);
?>
