<?php
			if(isset($_GET['error'])){
				
				echo $_GET['error'];
			}
			session_start();
			
?>
<html>
	<form method="post" action="logCheck.php"style='background-color: lightyellow'>
		<fieldset>
			<legend>LogIn</legend>
			<table border="0">
			<tr>
				<td> User Name :</td>
				<td><input type="text" name="uName" value="<?$_SESSION[reguserName]?>" /><br/></td>
			</tr>
			
			
			
			<tr>
				<td>Password :</td>
				<td><input type="password" name="pass" value=""/><br/></td>
				<?echo $_SESSION[reguserName]?>
			</tr>
			
			<tr>
				<td></td>
				<td>&nbsp &nbsp &nbsp &nbsp   <input type="submit" name="submit" value="Log In"/><input type="reset" name="reset" value="Reset"/><br/></td>
			</tr>
			</table>
		</fieldset>
	</form><a href='Publichome.html'>get back</a>
</html>