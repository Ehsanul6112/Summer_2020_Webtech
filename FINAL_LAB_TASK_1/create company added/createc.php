<?php

	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Enter company details</title>
</head>
<body>

	<form action="companycheck.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Company name</td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="industry"></td>
				</tr>
				<tr>
					<td>Company Website</td>
					<td><input type="text" name="website"></td>
				</tr>
				<tr>
					<td>Company Logo</td>
					<td><input type="text" name="logo"></td>
				</tr>
				<tr>
					<td>User account id</td>
					<td><input type="number" name="userid" max="10000000000"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Submit"></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>