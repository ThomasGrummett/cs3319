<!DOCTYPE html>
<html>
<head>
  <title>TGrummet A3</title>
  <meta name="author" content="Thomas Grummett">
  <meta charset="utf-8">
  <style> <?php include 'a3.css'; ?></style>
  <script src="a3.js"></script>
</head>
<body>
<?php
include 'connectdb.php';
?> 
<h1>Thomas Grummett Assignment 3<h1>
<?php
include 'showCustomers.php';
?>
<h3>Order Product List By:<h3>
<form class="dropdown" name="sort" action="showProducts.php" method="post">
<select name="order">
   <option value="Description ASC">Description Ascending </option>
   <option value="Description DESC">Description Descending</option>
   <option value="Price ASC">Price Ascending</option>
   <option value=Price DESC">Price Descending</option>   
</select>
<input type="submit" value=" Display " />
</form>
<br>
<h3>Insert Purchase:<h3>
<?php
include 'addProductForm.php'
?>
<h3>Add Customer:<h3>
<?php
include 'addCustomerForm.php';
include 'updatePhoneForm.php';
include 'deleteCustomerForm.php';
include 'showProductsQForm.php';
include 'showRevForm.php';
include 'showUnpurchased.php';
?>


</body>
</html>
