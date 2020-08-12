<?php
	
	$conn =mysqli_connect('localhost', 'root', '', 'userinfo');
	$sql = "select * from userinfo where userName = 'olie' and Pass = '2020'";
	$result = mysqli_query($conn, $sql);
	$user 	= mysqli_fetch_assoc($result);	
		
	
?>
<html>
<fieldset>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td>Name</td>
				<td>:</td>
				<td><?php echo $user['userName'] ?></td>
				<td rowspan="7" align="center">
					<img width="128" src="a.jpg"/>
                    <br/>
                    <a href="picupload.html">Upload profile picture</a>
				</td>
				<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Full Name</td>
				<td>:</td>
				<td><?php echo $user['fullName'] ?></td>
			</tr>
			</tr>
			
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><?php echo $user['email'] ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td>Gender</td>
				<td>:</td>
				<td><?php echo $user['gender'] ?></td>
			</tr>
			
		</table>	
        <hr/>
        <a href="home.php">Go home</a>	
	</form>
</fieldset>