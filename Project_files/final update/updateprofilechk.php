<?php
session_start();
if(isset($_POST['submit']))
	{
				
		$userName = $_POST['userName'];
		$fullName = $_POST['fullName'];
		$email =    $_POST['email'];
		$uniqueid=$_SESSION[uniqueid];
		
		$conn =mysqli_connect('localhost', 'root', '', 'userinfo');
			
		$sql = "UPDATE userinfo SET userName = '".$userName."', fullName = '".$fullName."', email = '".$email."' WHERE Id= '".$uniqueid."'";

		$result = mysqli_query($conn, $sql);
		
			
			
			header("location: profile.php");

	}	
?>