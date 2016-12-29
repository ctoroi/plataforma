<?php
	
	session_start();
	error_reporting(0);

	include 'conexion.php';	
	

	$usuario=$_REQUEST["userlogout"];

	$update="UPDATE user_login set OBS='0' WHERE user='".$usuario."'";
	//echo $update;
	mysql_query($update) or die (mysql_error());
	session_destroy();
	header('Location: /index.html');
		

?>
