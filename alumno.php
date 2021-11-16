<?php 

include("con_db.php");

if (isset($_POST['alumno'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) {
	    $name = trim($_POST['name']);
	    $apellidos = trim($_POST['apellidos']);
	    $email = trim($_POST['email']);
		$numero = trim($_POST['numero']);
		$semestre = trim($_POST['semestre']);
	    $consulta = "INSERT INTO `alumno`(`Nombre`, `Apellidos`, `E-Mail`, `Num_Control`, `Semestre`) VALUES ('$name','$apellidos','$email','$numero','$semestre')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>