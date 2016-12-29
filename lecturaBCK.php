<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  
<center>
<?php
	error_reporting(0);
	include 'conexion.php';	

	$cuser="SELECT * FROM pilas";
	$result=mysql_query($cuser);

	echo "<table>\n";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    	echo "\t<tr>\n";
    	foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    	}
   		echo "\t</tr>\n";
	}
	echo "</table>\n";
?>
	<br/>
	<br/>
	<form action="pilas.php" method="POST">

		<input type="submit" name="back" value="Atras">

	</form>
	</center>
</body>
</html>