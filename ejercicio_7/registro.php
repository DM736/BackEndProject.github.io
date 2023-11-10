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
$count=0;
if (isset($_POST['generar'])) {
    include("dbase.php");
        $nameu = $_POST['nameu'];
        $consulta2= mysqli_query($validar,"SELECT * FROM usuarios");
        while($consultar = mysqli_fetch_array($consulta2)){
            $count=$count+1;
            echo "<table  class=header-area width=\'100%\' border=\'1\'>
            <tr>
              <td class=indice><b><center>".$count."</center></b></td>
              <td class=dtable>".$consultar['Nombre']."</td>
              <td class=dtable>".$consultar['Apellido']."</td>
              <td class=dtable>".$consultar['Cedula']."</td>
            </tr>
          </table>";

    }
}elseif(isset($_POST['search']) || isset($_POST['search1'])){
    include("dbase.php");
    $name = trim($_POST['nameu']);
    $lasname = trim($_POST['lname']);
    $cedula = trim($_POST['cedula']);
    $void="";
    if($name !=$void){
        $object=$name;
        $dtableitem="Nombre";
        $consulta= mysqli_query($validar,"SELECT * FROM usuarios WHERE $dtableitem LIKE '%$object%'");
    }elseif($lasname !=$void){
        $object=$lasname;
        $dtableitem="Apellido";
        $consulta= mysqli_query($validar,"SELECT * FROM usuarios WHERE $dtableitem LIKE '%$object%'");
    }else{
        $object=$cedula;
        $dtableitem="Cedula";
        $consulta= mysqli_query($validar,"SELECT * FROM usuarios WHERE $dtableitem LIKE '%$object%'");
    }
    
    while($consultar = mysqli_fetch_array($consulta)){
        $count=$count+1;
        echo "
        <table  class=header-area width=\'100%\' border=\'1\'>
        <tr>
          <td class=indice><b><center>".$count."</center></b></td>
          <td class=dtable>".$consultar['Nombre']."</td>
          <td class=dtable>".$consultar['Apellido']."</td>
          <td class=dtable>".$consultar['Cedula']."</td>
        </tr>
      </table>";
    }
}
?>