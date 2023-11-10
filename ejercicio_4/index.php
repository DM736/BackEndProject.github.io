<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style4.css">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="index.php">
        <div class="form_area">
            <div class="tarjeta">
                <div>
                    <p class="text-principal">Ingresar fecha de nacimiento para validar:</p>
                </div>
                <div class="date">
                    <input class="date-1" type="date" name="fecha">
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
date_default_timezone_set("America/Bogota");
$hoy = date("Y-m-d");
if(isset($_POST['submit'])){
    $fecha_born=$_POST['fecha'];
}
function calcular_edad($fecha_born){
    list($a,$m,$d) = explode("-",$fecha_born);
    $anio_d = date("Y") - $a;
    $mes_d = date("m") - $m;
    $dia_d = date("d") - $d;
    if ($dia_d < 0 || $mes_d < 0)
        $anio_d--;
        return $anio_d;
  }
$edad = calcular_edad($fecha_born);
if($edad<18){
    echo "
    <div class=resul-area>
        <div class=resul>
            <p> Usted tiene $edad años y por lo tanto: No es mayor de edad </p>
        </div>
    </div>";
}else{
    echo "
    <div class=resul-area>
        <div class=resul>
            <p> Usted tiene $edad años y por lo tanto: Es mayor de edad </p>
        </div>
    </div>";
}
?>