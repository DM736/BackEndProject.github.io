<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
    <link type="text/css" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST" action="index.php">
        <div class="form_area">
            <div class="tarjeta">
                <div>
                    <p class="text-principal">Ingresa los numeros y escoge la operacion</p>
                </div>
                <div class="number">
                    <p class="num-text">Numero 1:</p>
                    <input class="num" type="tel" name="number_1">
                </div>
                <div class="number">
                    <p class="num-text">Numero 2:</p>
                    <input class="num" type="tel" name="number_2">
                </div>
                <div class="opcion">
                    <label for="operador"><p>¿Que operacion?</p></label>
                    <select name="operadores" class="botton-operador">
                        <option name="ninguno" value="ninguno"></option>
                        <option name="suma" value="Suma">Suma</option>
                        <option name="resta" value="Resta">Resta</option>
                        <option name="division" value="Division">Division</option>
                        <option name="multiplicacion" value="Multiplicacion">Multiplicacion</option>
                    </select>
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
   $number1 = $_POST['number_1'];
   $number2 =$_POST['number_2']; 
}
if(isset($_POST['operadores'])){
    $option=$_POST["operadores"];
    switch($option){
        case "Suma":
            $resul= $number1 + $number2;
            echo"
            <div class=resul-area>
                <div class=resul>
                    <p> $number1 + $number2 = $resul</p>
                </div>
            </div>
            ";
            break;
        case "Resta":
            $resul= $number1 - $number2;
            echo"
            <div class=resul-area>
                <div class=resul>
                    <p> $number1 - $number2 = $resul</p>
                </div>
            </div>
            ";
            break;
        case "Multiplicacion":
            $resul= $number1 * $number2;
            echo"
            <div class=resul-area>
                <div class=resul>
                    <p> $number1 * $number2 = $resul</p>
                </div>
            </div>
            ";
            break;
        case "Division":
            if($number2==0){
                $resultado="Division por 0 es imposible";
                echo"
            <div class=resul-area>
                <div class=resul>
                    <p>$resultado</p>
                </div>
            </div>
            ";
            }else{
            $resul= $number1 / $number2;
            echo"
            <div class=resul-area>
                <div class=resul>
                    <p> $number1 ÷ $number2 = $resul</p>
                </div>
            </div>
            ";
            }
            break;
        default:
            echo"
            <div class=resul-area>
                <div class=resul>
                    <p> No hay operacion seleccionada</p>
                </div>
            </div>
            ";
        }
    }

?>