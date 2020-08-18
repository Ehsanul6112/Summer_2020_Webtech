<?php
	require_once('session_header.php');
	require_once('userService.php');

	if (isset($_GET['ID'])) {
		$user = getByID($_GET['ID']);	
	}else{
		header('location: all_users.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit User</title>
</head>
<body>

	<form action="userController.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$user['name']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$user['pass']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="ID" value="<?=$user['ID']?>">
						<input type="submit" name="edit" value="Update"> 
						<a href="all_users.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>