<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impresion de datos</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style6.css">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="">
        <div class="form_area">
            <div class="tarjeta">
                <div>
                    <p class="text-principal">Completa los siguientes campos a continuacion: </p>
                </div>
                <div class="form-option">
                    <p class="text">Nombre:</p>
                    <input name="nameu" class="form-f" type="text">
                </div>
                <div class="form-option">
                    <p class="text">Apellido:</p>
                    <input name="lname" class="form-f" type="text">
                </div>
                <div class="form-option">
                    <p class="num">Cedula:</p>
                    <input name="cedula" class="form-f" type="number">
                </div>
                <div class="botton">
                    <button name="submit" class="botton-1">
                        <p>Enviar</p>
                    </button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>
<?php
include("registro.php");
?>

