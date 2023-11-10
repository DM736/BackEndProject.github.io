<?php
include("dbase.php");

if (isset($_POST['submit'])) {
    if (strlen($_POST['nameu']) >= 1 && strlen($_POST['lname']) >= 1 && strlen($_POST['cedula']) >= 1) {
	    $name = trim($_POST['nameu']);
	    $lasname = trim($_POST['lname']);
	    $cedula = trim($_POST['cedula']);
	    $consulta = "INSERT INTO usuarios(Nombre, Apellido, Cedula) VALUES ('$name','$lasname','$cedula')";
	    $resultado = mysqli_query($validar,$consulta);
	    if ($resultado) {
	    	?>
            <div class="ok-area">
	    	    <h3 class="ok">¡Se ha enviado coreectamente!</h3>
            </div>
           <?php
	    } else {
	    	?>
            <div class="bad-area">
	    	    <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            </div>
           <?php
	    }
    }   else {
	    	?>
            <div class="bad-area-incom">
                <h3 class="bad">¡Por favor complete los campos!</h3>
            </div>
           <?php
    }
}

?>