<?php
$AgentQuery='SELECT AgentID FROM Agents';
//queries for agent list
$Agents=mysqli_query($connection,$AgentQuery);
//prints form
echo'<form action="addCustomer.php" method="post">
	First Name: <input type="text" name="firstname"><br>
	Last Name: <input type="text" name="lastname"><br>
	City: <input type="text" name="city"><br>
	Phone Number: <input type="tel" name="pNumber"><br>
	Agent:<br> <select name="Agent">';
	//populates dropdown with agent numbers
                while($row=mysqli_fetch_assoc($Agents)){
                        echo '<option value="'.$row["AgentID"].'">'.$row["AgentID"].'</option>';
                }
	
echo '<input type="submit" value="Add Customer">
</form>';
?>
