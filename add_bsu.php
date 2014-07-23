<!DOCTYPE html>
<html>
<?php require 'header.php';?>
<body>
<?php require 'menu.php';?>	

<!--<form method="post" action="added.php">-->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table border="1px solid black">
			<tr>
				<td>Machine: <input type="text" name="machine"> </td>
			</tr>
			<tr>
				<td>Location: <input type="text" name="location"> </td>
			</tr>
			<tr>
				<td>Responsible: <input type="text" name="responsible"> </td>
			</tr>
			<tr>
				<td>Customer contact: <input type="text" name="location"> </td>
			</tr>
			<tr>
				<td>Weatherlink station: 
				<input type="radio" name="weatherlink" value="yes">Yes
				<input type="radio" name="weatherlink" value="no">No
				</td>
			</tr>
			<tr>
				<td>3G Modem: 
				<input type="radio" name="modem" value="yes">Yes 
				<input type="radio" name="modem" value="no">No
				</td>
			</tr>
			<tr>
				<td>Password: <input type="password" name="password"> </td>
			</tr>
			<tr><td><input type="submit" value="Save"></td></tr>
		</table>


<?php include 'footer.php';?>
</body>
</html>
	