<?php
	require_once('session_header.php');
	require_once('userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="logout.php">Logout</a> 
	
	<h3>User list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Username</td>
			<td>Password</td>
			<td>Email</td>
			<td>Type</td>
			<td>Action</td>
		</tr>

		<?php  
			$users = getAllUser();
			for ($i=0; $i != count($users); $i++) {  ?>
		<tr>
			<td><?=$users[$i]['ID']?></td>
			<td><?=$users[$i]['name']?></td>
			<td><?=$users[$i]['pass']?></td>
			<td><?=$users[$i]['email']?></td>
			<td><?=$users[$i]['type']?></td>
			<td>
				<a href="edit.php?ID=<?=$users[$i]['ID']?>">Edit</a> |
				<a href="delete.php?ID=<?=$users[$i]['ID']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>