<?php
	session_start();
	$gender="";
	if(isset($_GET['error'])){
		echo $_GET['error'];echo '</br>';
		
	}
	
	echo 'enter all the fields';
?>
<html>
	<form method="post" action="updateanyuserchk.php">
		<fieldset>
			<legend>Reenter user info</legend>
			<table border="0">
			<tr>
				<td> User name :</td>
				<td><input type="text" name="userName" /><br/></td>
			</tr>
			<tr>
				<td> Full name  :</td>
				<td><input type="text" name="fullName" /><br/></td>
			</tr>
			
			<tr>
				<td> Gender :</td>
				<td>
					<input type="radio" name="gender" value="Male"   <?php if("Male" == $gender){ echo "checked";} ?> />Male<br/>
					<input type="radio" name="gender" value="Female" <?php if("Male" == $gender){ echo "checked";} ?> />Female<br/>
					<input type="radio" name="gender" value="Others" <?php if("Male" == $gender){ echo "checked";} ?> />Others<br/>
				</td>
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