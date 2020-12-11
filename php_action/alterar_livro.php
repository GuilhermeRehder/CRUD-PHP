<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-alterar'])) {
		
		$titulo = mysqli_escape_string($connection,$_POST['titulo']);
		$autor = mysqli_escape_string($connection,$_POST['autor']);
		$editora = mysqli_escape_string($connection,$_POST['editora']);
		$lancamento = mysqli_escape_string($connection,$_POST['lancamento']);
		$genero = mysqli_escape_string($connection,$_POST['genero']);
		$quantidade = mysqli_escape_string($connection,$_POST['quantidade']);
		$codLivro = mysqli_escape_string($connection,$_POST['codLivro']);

		$sql = "UPDATE tblivros SET tituloLivro = '$titulo', autorLivro = '$autor', editoraLivro = '$editora', lancamentoLivro = '$lancamento', generoLivro = '$genero', quantidadeLivro = '$quantidade' WHERE codLivro = '$codLivro'";

		if (mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Alterado com sucesso.";

			header('Location: ../index.php');
		} else {

			$_SESSION['mensagem'] = "Erro ao alterar.";

			header('Location: ../index.php');	
		}
	}

?>
