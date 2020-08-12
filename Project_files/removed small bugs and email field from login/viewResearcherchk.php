<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'userinfo');
	$result = mysqli_query($conn, 'select * from userinfo');

	if($conn){
		echo "done!";
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Resercher list</title>
</head>
<body>
	

	<table border=1>
		<tr>
			<td>User NAME</td>
			<td>Full NAME</td>
			<td>Gender</td>
			<td>E-mail</td>
			<td>Password</td>
		</tr>

		<?php  while($data = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?php echo $data['userName'] ?></td>
			<td><?php echo $data['fullName'] ?></td>
			<td><?php echo $data['gender'] ?></td>
			<td><?php echo $data['email'] ?></td>
			<td><?php echo $data['pass'] ?></td>
		</tr>

		<?php } ?>

	</table>
	<a href='home.php'>Go home</a>
	
</body>
</html>