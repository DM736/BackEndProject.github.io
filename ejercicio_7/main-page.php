<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>impresion de datos</title>
    
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="" >
        <nav class="navegacion-area">
            <div class="navegacion">
                <input class="input-nav" type="text" autocomplete="off" placeholder=Buscar name="total">
                <p class="object">│</p>
                <div>
                <button name="search1" class="bottons">
                        <p><img src="images/lupa.svg" class="lupa" alt="buscar"></p>
                    </button>
                </div>
            </div>
        </nav>
        <div class="form_area">
            <div class="form-area">
                <div class="tarjeta">
                    <div class="form-option">
                        <p class="text">Nombre:</p>
                        <input name="nameu" class="form-f" type="text" autocomplete="off">
                    </div>
                    <div class="form-option">
                        <p class="text">Apellido:</p>
                        <input name="lname" class="form-f" type="text" autocomplete="off">
                    </div>
                    <div class="form-option">
                        <p class="text">Cedula:</p>
                        <input name="cedula" class="form-f" type="number" autocomplete="off">   
                    </div>
                </div>
                <div class="form_area2">    
                    <button name="search" class="botton-3">
                        <p>Consultar</p>
                    </button>
                    </div>
                </div>
            </div>
            <div class="tarjeta2">
                <div class="botton">
                    <button name="submit" class="botton-1">
                        <p>Enviar</p>
                    </button>
                    <button name="generar" class="botton-2">
                        <p>Generar Registros</p>
                    </button>
                </div>
            </div>
        </div>
    </form>
    <table class="header-area">
            <tbody>
            <tr>
              <td class="indice-t"><b>Id</b></td>
              <td class="header-t"><b>Nombre</b></td>
              <td class="header-t"><b>Apellido</b></td>
              <td class="header-t"><b>Cedula</b></td>
            </tr>
            </tbody>
            </table>
</body>
</html>
<?php
include("registro.php");
?>

