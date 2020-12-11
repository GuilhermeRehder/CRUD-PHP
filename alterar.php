<?php 
	include_once 'php_action/conexao_bd.php';
	//cabeçalho
	include_once 'includes/header.php';

	if (isset($_GET['id'])) {

		$id = mysqli_escape_string($connection, $_GET['id']);

		$sql = "SELECT * FROM tblivros WHERE codLivro = '$id'";

		$resultado = mysqli_query($connection, $sql);

		$dados = mysqli_fetch_array($resultado);

	}

?>
	<div class="row">
		<div class="col s12 m6 push-m3">
			
			<h3 class="light">Alterar livro</h3>
			
			<form action="php_action/alterar_livro.php" method="POST">

				<input type="hidden" name="codLivro" value="<?php echo $dados['codLivro']; ?>">
				
				<div class="input-field col s12">
					<input type="text" name="titulo" id="titulo" value="<?php echo $dados['tituloLivro']; ?>">
					<label for="titulo">Título</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="autor" id="autor" value="<?php echo $dados['autorLivro']; ?>">
					<label for="autor">Autor</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="editora" id="editora" value="<?php echo $dados['editoraLivro']; ?>">
					<label for="editora">Editora</label>
				</div>
				
				<div class="input-field col s12">
					<input type="number" name="lancamento" id="lancamento" value="<?php echo $dados['lancamentoLivro']; ?>">
					<label for="lancamento">Lançamento</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="genero" id="genero" value="<?php echo $dados['generoLivro']; ?>">
					<label for="genero">Gênero</label>
				</div>

				<div class="input-field col s12">
					<input type="number" name="quantidade" id="quantidade" value="<?php echo $dados['quantidadeLivro']; ?>">
					<label for="quantidade">Quantidade</label>
				</div>

				<button type="submit" name="btn-alterar" class="btn cyan">Alterar</button>
				
				<a href="index.php" class="btn green lighten-1">Listar livros</a>

			</form>

		</div>		
	</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


?>