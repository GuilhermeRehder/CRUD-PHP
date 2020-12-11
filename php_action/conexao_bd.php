<?php
	$localhost = 'localhost';
	$user_name = 'root';
	$senha = '';
	$db = 'dblivros';

	$connection = mysqli_connect($localhost, $user_name, $senha, $db);

	mysqli_set_charset($connection, "utf-8");
	
	if (mysqli_connect_error()) {
	
		echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
	} else {

		//echo "Banco de dados conectado. ";

	}

?>