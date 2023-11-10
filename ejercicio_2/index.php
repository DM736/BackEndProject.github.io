<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style2.css">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="index.php">
        <div class="form_area">
            <div class="tarjeta">
                <div>
                    <p class="text-principal">Ingresa se edad para verificar si es mayor de edad</p>
                </div>
                <div class="edad-area">
                    <p class="edad-text">Edad:</p>
                    <input class="edad" type="number" name="edad">
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
if(isset($_POST['submit'])){
   $edad = $_POST['edad']; 
}
if($edad<1){
    echo"
    <div class=resul-area>
        <div class=resul>
            <p> No es valido numeros menores a 0 </p>
        </div>
    </div>
    ";
}elseif($edad>1 && $edad<18){
    echo"
    <div class=resul-area>
        <div class=resul>
            <p> Con $edad años, eres aun menor de edad </p>
        </div>
    </div>
    ";
}else{
    echo"
    <div class=resul-area>
        <div class=resul>
            <p> Con $edad años, eres mayor de edad </p>
        </div>
    </div>
    ";

}
?>