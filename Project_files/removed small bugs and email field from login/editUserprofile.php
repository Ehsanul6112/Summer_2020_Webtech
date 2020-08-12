<?php
		session_start();
		if(isset($_GET['error'])){
					echo $_GET['error'];
		
				}
				
			print_r("Type the user name you want to edit:");
			
?>
<html>
	<form method="post" action="editUserchk.php">
		<fieldset>
			<legend>Edit User:</legend>
			<table border="0">
			<tr>
				<td> User Name :</td>
				<td><input type="text" name="uName" /><br/></td>
			</tr>
			
			<tr>
				<td>Master Password :</td>
				<td><input type="password" name="pass" value=""/><br/></td>
			</tr>
			
			<tr>
				<td></td>
				<td>&nbsp &nbsp &nbsp &nbsp   <input type="submit" name="submit" value="Submit"/>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='home.php'>Go home</a><br/></td>
			</tr>
			</table>
		</fieldset>
	</form>
</html>