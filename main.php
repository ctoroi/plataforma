<?php
        session_start();
        if($_SESSION["sesuser"]!= ''){

        ?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
        <?php

        error_reporting(0);
        include 'conexion.php'; 
        $qwe=$_REQUEST["user"];

        ?>
        <center><h1>Plataforma Mantención Osorio Hermanos<br><br></h1>

        <form action="https://docs.google.com/a/osoriohermanos.cl/spreadsheets/d/12ne4QYTdOC8JXvfBkA64b8H_wlkQgHelkr5F9mFvBDw/pubhtml">

            <button type="submit" style="height:60px; width:200px;font-size:20px">Plan </button>

        </form>
        <br/>
        <br/>

        <form action="pilas.php" method="POST">

            <button type="submit" style="height:60px; width:200px;font-size:20px"; >Control Pilas</button>
            <br/>
            <br/>
        </form>

        <form action="logout.php" method="POST">

            <input type="submit" name="back" value="Logout">
            <br/>
            <br/>
            <input type="hidden" name="userlogout" value="<?=$qwe?>" />    <!-- <?= $qwe ?> es para mandar variable rapida PHP en HTML -->

        </form> 
        
        <br><br><p>sesion = <?php echo $_SESSION['sesuser'] ;?> </p>

     </body>    
    </html>

<?php }else { header('Location: /no.php');}