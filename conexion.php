<meta charset="utf-8">
<?php

	// Conectando, seleccionando la base de datos
	$link = mysql_connect('localhost', 'root', 'asdqwe123')
    or die('No se pudo conectar: ' . mysql_error());
	//echo 'Connected successfully'."\n";
	mysql_select_db('mantencion') or die('No se pudo seleccionar la base de datos');

	?>