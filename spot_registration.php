<!DOCTYPE html>
<html>
<head>
	<title>Spot Registration Form</title>
</head>
<body>
	<h1>Spot Registration Form</h1>
	<form method="post" action="spot_registration_action.php">
		<label for="name">Name:</label>
		<input type="text" name="name" id="name" required><br><br>
		
		<label for="dob">Date of Birth:</label>
		<input type="date" name="dob" id="dob" required><br><br>
		
		<label for="mobile">Mobile Number:</label>
		<input type="tel" name="mobile" id="mobile" pattern="[0-9]{10}" required><br><br>
		
		<label for="qualification">Qualification:</label>
		<select name="qualification" id="qualification">
			<option value="">--Select--</option>
			<option value="ITI">ITI</option>
			<option value="PLUS TWO">PLUS TWO</option>
			<option value="VHSC">VHSC</option>
			<option value="DIPLOMA">DIPLOMA</option>
		</select><br><br>
		
		<input type="submit" name="submit" value="Register">
	</form>
	
</body>
</html>
