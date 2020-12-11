<?php 
	//cabeçalho
	include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		
		<h3 class="light">Novo livro</h3>
		
		<form action="php_action/criar_livro.php" method="POST">
			
			<div class="input-field col s12">
				<input type="text" name="titulo" id="titulo">
				<label for="titulo">Título</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="autor" id="autor">
				<label for="autor">Autor</label>
			</div>
			
			<div class="input-field col s12">
				<input type="text" name="editora" id="editora">
				<label for="editora">Editora</label>
			</div>
			
			<div class="input-field col s12">
				<input type="number" name="lancamento" id="lancamento">
				<label for="lancamento">Lançamento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="genero" id="genero">
				<label for="genero">Gênero</label>
			</div>

			<div class="input-field col s12">
				<input type="number" name="quantidade" id="quantidade">
				<label for="quantidade">Quantidade</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn cyan">Cadastrar</button>
			
			<a href="index.php" class="btn green lighten-1">Listar livros</a>

		</form>

	</div>		
</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


?>