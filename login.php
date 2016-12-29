<?php

	error_reporting(0);

	include 'conexion.php';	
	

	$usuario=$_REQUEST["uname"];
	$password=$_REQUEST["psw"];
	
	$cuser="SELECT * FROM user_login WHERE USER = '".$usuario."' AND PASSWORD = '".$password."'";
	//echo $cuser;
	$result=mysql_query($cuser);
	$numero=mysql_num_rows($result);
	echo $numero;

	if ($numero > 0) {
		$u="UPDATE user_login set OBS='1' WHERE user='".$usuario."'";
		//echo $result;
		mysql_query($u);
		session_start();
		$_SESSION['sesuser']=$usuario;
		echo "texto cualquiera";
		header('Location: /main.php?user='.$usuario);
		}else{ 
			echo "\n\n LOGIN ERROR";


			}


?>
