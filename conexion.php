<?php

/**
 * 
 */
class Conexion 
{
	private $servidor = "localhost";
	private $userserv = "root";
	private $password = "koichy";
	private $db = "koichy";
	public $conn;


	function Conectar()
	{
		$conn = new mysqli($servidor, $userserv, $password, $db);

		if (!$conn) 
		{
			die ("Problemas al conectarse al servidor" . mysqli_connect_error());
		}
		
	}

	//function SeleccionarBd()
	//{
	//	$dbsel=mysqli_select_db($this->conn, $this->db);

	//	if (!$this->dbsel) 
	//	{
	//		echo "Problemas al seleccionar la bd" . mysqli_error();
	//	}

	//}

}


?>