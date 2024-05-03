<?php
include 'db.php';
$usuario=$_POST['usuario'];
$contrasena=$_POST['contra'];
$contrasena1=$_POST['contrac'];

$consulta="INSERT INTO usuarios(usuario, contra, contrac) VALUES ('$usuario','$contrasena','$contrasena1')";
$resultado=mysqli_query($conexion,$consulta);

if($filas){
	header("location:principal.php");
}
else 
{
	?>
	<?php
	include("index.php");
	?>
	<h1 class="bad">Error en la autenticacion</h1>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);

 ?>
