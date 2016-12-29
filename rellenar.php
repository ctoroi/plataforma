<!DOCTYPE HTML>  <!-- ingresar -->
<html>
<head>
 <link rel="stylesheet" type="text/css" href="css/jquerycss.css">
<style>

	body {
    background-image: url("logo 4.png");
    background-size: 900px 800px;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;

	}
</style>	
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#u_cambio" ).datepicker( {changeMonth: true, changeYear: true , dateFormat: "yy-mm-dd" } );
       
        });
 
    </script>
</head>
<body>



	<?php
		error_reporting(0);
		include 'conexion.php';	

	?>
	
<center>
	<form method="POST" action="submit.php">
		<h2>Registrar Maquina</h2>
		<br>
		  <b>Código:</b> <input type="text" name="CODIGO" required>
  		<br><br>
  		<b>Tipo de Máquina:</b> <input type="text" name="TIPO_MAQ" required>  		
  		<br><br>
  		<b>Modelo:</b> <input type="text" name="MODELO" required>  		
  		<br><br>
  		<b>Marca:</b> 	<input type="text" name="MARCA" required>  		
  		<br><br>
  		<b>Ubicacion:</b> <input type="text" name="UBICACION" required>  		
  		<br><br>
  		<b>Tipo de Pila:</b> <input type="text" name="TIPO_PILA" required>  		
  		<b>Cantidad:</b> <input type="number" min="0" name="CANTIDAD" required>  		
  		<br><br>
  		<b>Tipo de Pila#2:</b> <input type="text" name="TIPO_PILA2" required>  		
  		<b>Cantidad#2:</b> <input type="number" min="0" name="CANTIDAD2" required>  		
  		<br><br>
  		<b>Fecuencia(meses):</b> <input type="number" min="1" name="FRECUENCIA" required>  		
  		<br><br>
  		<b>Último Cambio:</b> <input type="text" id="u_cambio" name="ULTIMO" required> AÑO-MES-DIA  		
  		<br><br>

  		<input type="submit" name="submit" value="Ingresar">  

	</form>

	<form method="POST" action="pilas.php">
		<br>
		<input type="submit" name="back" value="Atrás">
	</form>
	
</center>
</body>

</html>