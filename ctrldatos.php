<?php
echo "5";
require_once('conexion.php');
echo "4";
require_once('modeloregistrar.php');
$conexion = new Conexion();
$usuario = new Usuario();
$conexion->Conectar();


echo "1";
if(isset($_POST["registrar"]))
{
	$nombre= $_POST['nombre'];
	echo "2";
	$usuario->Registrar();

	if($usuario)

	{
		echo "<META HTTP-EQUIV='refresh' content='0; url=index.php'>";
		echo "<SCRIPT languaje= 'javascript'> alert('Registro Exitoso!');</SCRIPT>";
	}
	else
	{
		echo "<META HTTP-EQUIV='refresh' content='0; url=index.php'>";
		echo "<SCRIPT languaje= 'javascript'> alert('Fallo al registrar!');</SCRIPT>";
	}
}

?>