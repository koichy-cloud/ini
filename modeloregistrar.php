<?php

class Usuario
{
	private $id;
	private $nombre;
		
	function Registrar()
	{
		//$sql= "INSERT INTO DatosUsuarios ('nombre') VALUES ('$nombre')";
		//if(mysqli_query($sql, $conn));


		if (!mysqli_query($con,"INSERT INTO Persons (FirstName) VALUES ('Glenn')"))
  		{
  		echo("Error description: " . mysqli_error($con));
 			}

mysqli_close($conn);
		
		

	}
}

?>