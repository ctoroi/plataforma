<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
		table {
		    border-collapse: collapse;		    
		    width: 100%;
		}

		th, td {
		    text-align: left;
		    padding: 2px;
		    border: 1px solid #ddd;
		}

		tr:nth-child(even){background-color: #f2f2f2}

		th {
		    background-color: #4CAF50;
		    color: white;
		}
</style>
</head>
<body>

<?php

	$servername = "localhost";
	$username = "root";
	$password = "asdqwe123";
	$dbname = "mantencion";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	     die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT ID, CODIGO, TIPO_MAQ, MODELO, MARCA , UBICACION,  TIPO_PILA, CANTIDAD, FRECUENCIA, ULTIMO, SIGUIENTE, TIPO_PILA2, CANTIDAD2, NOTAS FROM pilas ORDER BY CODIGO";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	     echo "<table>
	     	<tr>
	     	<th>ID</th>
	     	<th>Codigo</th>
	     	<th>Tipo Maquina</th>
	     	<th>Modelo</th>
	     	<th>Marca</th>
	     	<th>Ubicacion</th>
	     	<th>Tipo de Pila</th>
	     	<th>Cantidad</th>
	     	<th>Tipo de Pila 2</th>
	     	<th>Cantidad 2</th>
	     	<th>Frecuecia (meses)</th>
	     	<th>Ultimo Cambio</th>
	     	<th>Siguiente Cambio</th>
	     	<th>Notas</th>
	     	</tr>";
	     // output data of each row
	     while($row = $result->fetch_assoc()) {
	         echo "<tr>
	         <td>" . $row["ID"]. "</td>
	         <td>" . $row["CODIGO"]. "</td>
	         <td>" . $row["TIPO_MAQ"]. "</td>
	         <td>" . $row["MODELO"]. "</td>
	         <td>" . $row["MARCA"]. "</td>
	         <td>" . $row["UBICACION"]. "</td>
	         <td>" . $row["TIPO_PILA"]. "</td>
	         <td>" . $row["CANTIDAD"]. "</td>
	         <td>" . $row["TIPO_PILA2"]. "</td>
	         <td>" . $row["CANTIDAD2"]. "</td>
	         <td>" . $row["FRECUENCIA"]. "</td>
	         <td>" . $row["ULTIMO"]. "</td>
	         <td>" . $row["SIGUIENTE"]. "</td>
	         <td>" . $row["NOTAS"]. "</td>
	         </tr>";
	     }
	     echo "</table>";
	} else {
	     echo "0 results";
	}


	$conn->close();

?> 
<center>
<br/>
	<br/>
	<form action="pilas.php" method="POST">

		<input type="submit" name="back" value="Atrás">

	</form>
	</center>

</body>
</html>