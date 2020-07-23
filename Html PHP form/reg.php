<?php
	$gender="";
	if(isset($_GET['error'])){
		echo $_GET['error'];
		
	}
?>
<html>
	<body>
		<form method="post" action="regChk.php">
		<fieldset>
				<table align="center" height="60%"width="30%"border="1">
				<tr height="60px"width="60px">
					<td colspan="3" align="center"><legend><h1 font-size="20%">PERSON PROFILE</h1></legend></td>
					
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Name</td>
					<td width="200px"height="40px"><input type="text" name="username" value=""></td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Email</td>
					<td width="200px"height="40px"><input type="text" name="usermail"></td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Gender</td>
					<td width="200px"height="40px">
						<input type="radio" name="gender" value="" >  Male 
						<input type="radio" name="gender" value="" > Female
						<input type="radio" name="gender" value="" > Other 
					
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Date of birth</td>
					<td width="200px"><input type="text" name="DoB"size="2">/<input type="text" name="Date of birth"size="2">/<input type="text" name="Date of birth"size="4"><i>(dd/mm/yyyy)</i></td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Blood Group</td>
					<td width="200px">
						<select name="Bgroup">
						<option value="">A pos</option>
						<option value="">A neg</option>
						<option value="">B pos</option>
						<option value="">B neg</option>
						<option value="">O pos</option>
						<option value="">O neg</option>
						</select>
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Degree</td>
					<td width="200px">
					
					<input type="checkbox" name="">SSC<input type="checkbox" name="">HSC<input type="checkbox" name="">BSc.<input type="checkbox" name="">MSc.
					</td>
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td width="80px"height="40px"align="center">Photo</td>
					<td width="200px">
					<input type="file" name="">
					</td>
					
					<td width="30px"></td>
				</tr>
				
				<tr>
					<td colspan="3"width="80px"height="30px" align="center"></td>
					
				</tr>
				
				<tr>
					<td td colspan="3">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" name="submit" value="Submit"align="center"> 
					<input type="reset" name="" value="Clear"align="center"> 
					
					</td>
					
				</tr>
				</table>
		</fieldset>
		</form>
	</body>
</html>