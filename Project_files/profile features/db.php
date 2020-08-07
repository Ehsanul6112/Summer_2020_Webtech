<?php
	$dbhostname = 'localhost';
	$dbusername = 'root';
	$dbpassword = '';
	$dbtablename = 'userinfo';

	$con = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbtablename);
	if (mysqli_connect_error()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
	


?>
