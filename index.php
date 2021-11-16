<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Alumnos</h1>
    	<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="apellidos" placeholder="Apellidos">
    	<input type="email" name="email" placeholder="E-Mail">
		<input type="num" name="numero" placeholder="Num_Control">
		<input type="num" name="semestre" placeholder="Semestre">
    	<input type="submit" name="alumno">
    </form>
        <?php 
        include("alumno.php");
        ?>
</body>
</html>