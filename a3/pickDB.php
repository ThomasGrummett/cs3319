<?php
	$whichDB = $_POST["pickDB"];
	
	if($whichDB="Customers"){
		include 'showCustomers.php';
	}elseif($whichDB="Products"){
		include 'showProducts.php';
	}
?>