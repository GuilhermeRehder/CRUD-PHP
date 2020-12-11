<?php 

	include_once 'php_action/conexao_bd.php';

	//cabeçalho
	include_once 'includes/header.php';

	include_once 'includes/mensagem.php';

?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Livro</h3>
		<table class="striped">
		<thead>
			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Editora</th>
				<th>Lançamento</th>
				<th>Gênero</th>
				<th>Quantidade</th>
			</tr>				
		</thead>
		
		<tbody>
			<?php 

				$sql = "SELECT * FROM tblivros";

				$resultado = mysqli_query($connection, $sql);

					
				while($dados = mysqli_fetch_array($resultado)) {

			?>				
		
			<tr>
				<td><?php echo $dados['tituloLivro']; ?></td>
				<td><?php echo $dados['autorLivro']; ?></td>
				<td><?php echo $dados['editoraLivro']; ?></td>
				<td><?php echo $dados['lancamentoLivro']; ?></td>
				<td><?php echo $dados['generoLivro']; ?></td>
				<td><?php echo $dados['quantidadeLivro']; ?></td>

				<td><a href="alterar.php?id=<?php echo $dados['codLivro']; ?>" class="btn-floating orange accent-2"><i class="material-icons">edit</i></a></td>

				<td><a href="#modal<?php echo $dados['codLivro']; ?>" class="btn-floating red accent-2 modal-trigger"><i class="material-icons">delete</i></a></td>

				<!-- Modal Structure in Materializecss -->
				<div id="modal<?php echo $dados['codLivro']; ?>" class="modal">
				<div class="modal-content">
					<h4>Atenção!</h4>
					<p>Deseja excluir o livro?</p>
				</div>
				<div class="modal-footer">
					
					<form action="php_action/excluir_livro.php" method="POST">
					<input type="hidden" name="codLivro" value="<?php echo $dados['codLivro']; ?>">

					<button type="submit" name="btn-excluir" class="btn red accent-2">Excluir</button>

					<a href="#!" class="modal-close waves-effect cyan btn">Cancelar</a>

					</form>
				</div>
				</div>

				</tr>
					
				<?php

					}

				?>	
		</tbody>
		</table>
		<br>
		<a href="cadastrar.php" class="btn cyan">Adicionar Livro</a>
	</div>
</div>


<?php 
	
	//rodapé

	include_once 'includes/footer.php';


?>