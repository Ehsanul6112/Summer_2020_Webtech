<?php

			print_r("Type the user name you want to block:");
?>
<html>
	<form method="post" action="accblChk.php">
		<fieldset>
			<legend>Block User:</legend>
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
				<td>&nbsp &nbsp &nbsp &nbsp   <input type="submit" name="submit" value="Block"/>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='home.php'>Go home</a><br/></td>
			</tr>
			</table>
		</fieldset>
	</form>
</html>