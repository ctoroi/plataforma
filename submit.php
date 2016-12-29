<?php

	error_reporting(0);
	include 'conexion.php';	

	$a=strtoupper($_REQUEST["CODIGO"]);
	$b=strtoupper($_REQUEST["TIPO_MAQ"]);
	$c=strtoupper($_REQUEST["MODELO"]);
	$d=strtoupper($_REQUEST["MARCA"]);
	$e=strtoupper($_REQUEST["UBICACION"]);
	$f=strtoupper($_REQUEST["TIPO_PILA"]);
	$g=strtoupper($_REQUEST["CANTIDAD"]);
	$h=strtoupper($_REQUEST["FRECUENCIA"]);
	$i=strtoupper($_REQUEST["ULTIMO"]);

	$j=strtoupper($_REQUEST["TIPO_PILA2"]);
	$k=strtoupper($_REQUEST["CANTIDAD2"]);

	

	$cuser=" INSERT INTO `pilas` (`ID`, `CODIGO`, `TIPO_MAQ`, `MODELO`, `MARCA`, `UBICACION`, `TIPO_PILA`, `CANTIDAD`, `FRECUENCIA`, `ULTIMO`, `SIGUIENTE`, `NOTAS`,`TIPO_PILA2`,`CANTIDAD2`) VALUES (NULL, '".$a."', '".$b."', '".$c."', '".$d."', '".$e."', '".$f."', '".$g."', '".$h."', '".$i."', '', '','".$j."','".$k."');";

	$z=mysql_query($cuser);
	header('Location: /rellenar.php');

?>
