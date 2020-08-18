<?php
	require_once('session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="create.php">Create New User</a> |
	<a href="all_users.php">User List</a> |
	<a href="logout.php">Logout</a> </br></br></br>
	
	<a href="createc.php">Create New Company</a> |
	<a href="allc.php">Company List</a> |
	<a href="editc.php">Edit Company</a> |
	<a href="delc">Delete Company</a> |
	
</body>
</html>