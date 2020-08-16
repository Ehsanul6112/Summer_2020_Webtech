<?php
	
	if(isset($_GET['error'])){
		echo $_GET['error'];
		
	}
?>
<html>
	<form method="post" action="RegCheck.php">
		<fieldset>
			<legend>REGISTRATION FORM</legend>
			<table border="0">
			<tr>
				<td> User name :</td>
				<td><input type="text" name="userName" /><br/></td>
			</tr>
			
			
			<tr>
				<td> Email ID :</td>
				<td><input type="text" name="email" value=""/><br/></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="pass" value=""/><br/></td>
			</tr>
			
			<tr>
				<td></td>
				<td>&nbsp &nbsp &nbsp &nbsp   <input type="submit" name="submit" value="Submit"/><input type="reset" name="reset" value="Reset"/>
				<a href='Publichome.html'>back to public page</a>
				<br/></td>
			</tr>
			</table>
		</fieldset>
	</form>
</html>