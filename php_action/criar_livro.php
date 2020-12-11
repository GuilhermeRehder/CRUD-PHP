<?php 

	session_start();

	require_once 'conexao_bd.php';

	if (isset($_POST['btn-cadastrar'])) {
		
		$titulo = mysqli_escape_string($connection,$_POST['titulo']);
		$autor = mysqli_escape_string($connection,$_POST['autor']);
		$editora = mysqli_escape_string($connection,$_POST['editora']);
		$lancamento = mysqli_escape_string($connection,$_POST['lancamento']);
		$genero = mysqli_escape_string($connection,$_POST['genero']);
		$quantidade = mysqli_escape_string($connection,$_POST['quantidade']);

		$sql = "INSERT INTO tblivros (tituloLivro, autorLivro, editoraLivro, lancamentoLivro, generoLivro, quantidadeLivro) VALUES ('$titulo', '$autor', '$editora', '$lancamento', '$genero', '$quantidade')";

		if (mysqli_query($connection, $sql)) {

			$_SESSION['mensagem'] = "Cadastrado com sucesso.";

			header('Location: ../index.php');
		} else {

			$_SESSION['mensagem'] = "Erro ao cadastrar.";

			header('Location: ../index.php');	
		}
	}
	
?>