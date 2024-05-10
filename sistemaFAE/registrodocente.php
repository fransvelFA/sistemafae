<?php
include 'db.php';
$docente=$_POST['nombre'];
$materia=$_POST['asignatura'];
$dia=$_POST['dia'];
$hora=$_POST['hora'];
$carrera=$_POST['carrera'];

$consulta="INSERT INTO docentes(nombre, asignatura, dia, hora, carrera) VALUES ('$docente','$materia','$dia','$hora','$carrera')";
$resultado=mysqli_query($conexion,$consulta);

if($resultado){
	header("location:prueba.php");
}
else 
{
	?>
	<?php
	include("prueba.php");
	?>
	<h1 class="bad">Error en la autenticacion</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>