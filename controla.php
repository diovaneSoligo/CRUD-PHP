<html>
	<head>
		<meta charset="UTF-8"/>
		<title>.::PRODUTO::.</title>
	</head>
	<body>
		<div>
			<?php
				include 'Produto.class.php';
				$operacao = $_POST["operacao"];
				
				if($operacao == "incluir"){
					$descricao = $_POST["descricao"];
					$preco = $_POST["preco"];
					
					$produto = new Produto;
					$produto->descricao = $descricao;
					$produto->preco = $preco;
					
					$produto->inserir();
					
					echo "PRODUTO INCLUIDO";
				}else if($operacao == "excluir"){
					$codigo = $_POST["codigo"];
					
					$produto = new Produto;
					$produto->excluir($codigo);
					
					echo "PRODUTO REMOVIDO";
				}else if($operacao == "mostrar"){
					$produto = new Produto;
					
					$resultado = $produto->mostrar();
					
					if($resultado){
						while($linha=mysqli_fetch_assoc($resultado)){
							echo '<hr><br>Código: ', $linha['id'],
								 '<br>Descrição: ', $linha['descricao'],
								 '<br>Preco: ', $linha['preco'];
						}
					}
				}else if($operacao == "mostrarAlterar"){
					$produto = new Produto;
					$resultado = $produto->mostrar();
					
					if($resultado){
						while($linha=mysqli_fetch_assoc($resultado)){
							echo "Descrição: ";
							echo $linha['descricao'];
							echo "Preço: ";
							echo $linha['preco'];
							echo "<a href=altera.php?codigo=".$linha['id']."> Alterar</a>";
							echo "<br>";
						}
					}
				}else if($operacao == "alterar"){
					$codigo = $_POST["codigo"];
					$descricao = $_POST["descricao"];
					$preco = $_POST["preco"];
					
					$produto = new Produto;
					$produto->atualizarProduto($codigo,$descricao,$preco);
					echo "PRODUTO ALTERADO";
				}
				
			?>
			<br>
			<br>
			<hr>
			<a href="pagina_inicial.php"> VOLTAR </a>
		</div>

	</body>
</html>
