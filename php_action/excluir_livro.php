<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-excluir'])) {
				
		$codLivro = mysqli_escape_string($connection,$_POST['codLivro']);

		$sql = "DELETE FROM tblivros WHERE codLivro = '$codLivro'";

		if(mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Excluído com sucesso.";

			header('Location: ../index.php');
		} else {

			$_SESSION['mensagem'] = "Erro ao excluir.";

			header('Location: ../index.php');	
		}
	}

?>