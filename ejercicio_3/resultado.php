<?php
$nombre=$_GET['name'];
$l_name=$_GET['l-name'];
$cedula=$_GET['cedula'];
echo"
<html lang=en>
<head>
    <meta charset=UTF-8>
    <meta name=viewport content=width=device-width, initial-scale=1.0>
    <title>Document</title>
    <link type=text/css rel=stylesheet href=css/resultado.css>
    <link type=text/css rel=stylesheet href=css/reset.css>
    <link type=text/css href=https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap rel=stylesheet>
    <link type=text/css href=https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap rel=stylesheet>
</head>
<body>
    <section class=tarjeta-area>
        <div class=resul-area1>
            <p class=text-input>Nombre(s): $nombre</p>
            <p class=text-input>Apellido(s): $l_name</p>
            <p class=text-input>Cedula: $cedula</p>
        </div>
    </section>
</body>
</html>";

?>