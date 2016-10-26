<html>
	<head>
		<meta charset="UTF-8"/>
		<title>.::PRODUTO::.</title>
	</head>
	<body>
		<div>
			<form method="post" action="controla.php">
				<input type="hidden" name="operacao" value="alterar"/>
				<?php
					include "Produto.class.php";
					
					$codigo = $_GET["codigo"];
					$produto = new Produto;
					$resultado = $produto->mostrarProdutoAlterar($codigo);
					
					if($resultado){
						while($linha=mysqli_fetch_assoc($resultado)){
							$descricao = $linha['descricao'];
							$preco = $linha['preco'];
						}
						
					}
				?>
				<input type="hidden" name="codigo" value="<?php echo $codigo; ?>"/>
				Descrição: <input type="text" name="descricao" value="<?php echo $descricao; ?>"/>
				Preço: <input type="number" step=0.01 name="preco" value="<?php echo $preco; ?>"/>
				<input type="submit"  value="Alterar Produto"/>
			</form>
		</div>

	</body>
</html>
