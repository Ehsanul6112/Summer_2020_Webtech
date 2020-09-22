<?php
	session_start();
	$uname=$_SESSION['user'];
	$conn = mysqli_connect('localhost', 'root', '', 'userinfo');
	$sql = "select * from userinfo where userName = '$uname'";
	$result = mysqli_query($conn, $sql);
	$user 	= mysqli_fetch_assoc($result);	
	$_SESSION['uniqueid']= $user['Id'];	
	
?>
<html>
<fieldset style='background-color: lightblue'>
    <legend><b>PROFILE</b></legend>
	<form>
		<br/>
		<table cellpadding="0" cellspacing="0">
			<tr>
				<td style='color: green'>Name</td>
				<td>:</td>
				<td style='color: yellow'><?php echo $user['userName'] ?></td>
				<td rowspan="7" align="center">
					<img width="128" src="a.jpg"/>
                    <br/>
                    <a href="picupload.html">Upload profile picture</a>
				</td>
				<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td style='color: green'>Full Name</td>
				<td>:</td>
				<td style='color: yellow'><?php echo $user['fullName'] ?></td>
			</tr>
			</tr>
			
			<tr><td colspan="3"><hr/></td></tr>
			<tr>
				<td style='color: green'>Email</td>
				<td>:</td>
				<td style='color: yellow'><?php echo $user['email'] ?></td>
			</tr>		
			<tr><td colspan="3"><hr/></td></tr>			
			<tr>
				<td style='color: green'>Gender</td>
				<td>:</td>
				<td style='color: yellow'><?php echo $user['gender'] ?></td>
			</tr>
			
		</table>	
        <hr/>
        <a href="home.php" style='color: green'>Go home</a>	
	</form>
</fieldset>