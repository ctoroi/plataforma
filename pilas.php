<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="utf-8">
</head>
<body>
        <center>
        <h1>Control Cambio de Pilas</h1>
        <form action="rellenar.php" method="POST">

            <button type="submit" style="height:60px; width:200px;font-size:20px">Ingresar Datos</button>

        </form>
        <br/>
        <br/>

        <form action="lectura.php" method="POST">

            <button type="submit" style="height:60px; width:200px;font-size:20px"; > Mostrar Todo</button>
            <br/>
            <br/>
        </form>

        <form method="POST" action="main.php">
            <br>
            <input type="submit" name="back" value="Atrás">
        </form>
        
        <!-- <img src="logo.png" alt="Avatar" height="300" width="300"> -->
        </center>       
     </body>
    
    </html>
