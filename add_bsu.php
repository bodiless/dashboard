<!DOCTYPE html>
<html>
<?php require 'header.php';?>
<body>
<?php require 'menu.php';?>	

<!--<form method="post" action="added.php">-->
<?php

$machine = $location = $responsible = $customer_contact = $weatherlink = $modem = $customer = "";
$err_machine = $err_location = $err_responsible = $err_customer_contact = $err_weatherlink = $err_modem = $err_customer = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (empty($_POST["machine"])) {
		$err_machine = "Machine Name is required.";
	}else{
		$machine = test_input($_POST["machine"]);
	}

	$location = test_input($_POST["location"]);
	
	if (empty($_POST["responsible"])){
		$err_responsible = "Someone has to be responsible.";
	}else{
		$responsible = test_input($_POST["responsible"]);
	}
	
	$customer_contact = test_input($_POST["customer_contact"]);
	$weatherlink = test_input($_POST["weatherlink"]);
	$modem = test_input($_POST["modem"]);
}

function test_input($data) {

	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		<table border="1px solid black">
			<tr>
				<td>Machine: <input type="text" name="machine" value="<?php echo $machine ;?>"> </td>
				<span class="error">* <?php echo $err_machine;?></span>
			</tr>
			<tr>
				<td>Customer: <input type="text" name="customer" value="<?php echo $customer ;?>"> </td>
			</tr>
			<tr>
				<td>Customer contact: <input type="text" name="customer_contact" value="<?php echo $customer_contact;?>"> </td>
			</tr>
			<tr>
				<td>Location: <input type="text" name="location" value="<?php echo $location ;?>"> </td>
			</tr>
			<tr>
				<td>Responsible: <input type="text" name="responsible" value="<?php echo $responsible;?>"> </td>
				<span class="error">* <?php echo $err_responsible;?></span>
			</tr>
			<tr>
				<td> <input type="checkbox" name="vehicle" value="Bike">I have a bike<br></td>
			</tr>
			<tr>
				<td><input type="checkbox" name="vehicle" value="Car">I have a car </td>
			</tr>

			<tr>
				<td>Weatherlink station: 
				<input type="radio" name="weatherlink"
				<?php if(isset($weatherlink) && $weatherlink == "yes") echo "checked";?>
				 value="yes">Yes

				<input type="radio" name="weatherlink"
				<?php if(isset($weatherlink) && $weatherlink == "no") echo "checked";?>
				 value="no">No
				</td>
			</tr>
			<tr>
				<td>3G Modem: 
				<input type="radio" name="modem"  
				<?php if (isset($modem) && $modem =="yes") echo "checked";?>
				value="yes">Yes
				<input type="radio" name="modem"
				<?php  if (isset($modem) && $modem == "no") echo "checked";?>
				 value="no">No
				</td>
			</tr>
			<tr>
				<td><label for="building">Type of building:</label> <select name="building" id="building"> 
					<option value="office" selected>Office</option>
					<option value="block">Block</option>
					<option value="cinema">Cinema</option>
					<option value="others">Others</option>
					</select></td>
			</tr>
			<tr>
				<td>Type of computer: <input type="text" name="computer_type"></td>
			</tr>
			<tr>
				<td>Comments: <textarea name="comments" rows="5" cols="40"></textarea></td>
			</tr>
			<tr>
				<td>Added: <input type="date" name="added" value="<?php echo date("Y-m-d h:i"); echo " by $_SESSION[username]"; ?>" readonly="readonly" > </td>
			</tr>
			<tr><td><input type="submit" value="Save"></td></tr>
		</table>


<?php include 'footer.php';?>
</body>
</html>
	