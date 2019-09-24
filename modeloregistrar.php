<?php

class Usuario
{
	private $id;
	private $nombre;
		
	function Registrar()
	{
		$sql= "INSERT INTO DatosUsuarios ('nombre') VALUES ('$nombre')";
		if(mysqli_query($sql, $conn));
			
			return $sql;

	}
}

?>