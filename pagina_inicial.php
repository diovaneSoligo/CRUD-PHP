<html>
	<head>
		<meta charset="UTF-8"/>
		<title>.::PRODUTO::.</title>
	</head>
	<body>
		<div>
		<hr>
			<form method="post" action="controla.php">
				<input type="hidden" name="operacao" value="incluir"/>
				Descrição: <input type="text" name="descricao"/>
				Preço: <input type="number" step=0.01 name="preco"/>
				<input type="submit" value="Incluir Produto"/>
			</form>
			<hr>
			<form method="post" action="controla.php">
				<input type="hidden" name="operacao" value="excluir"/>
				Código: <input type="number" name="codigo"/>
				<input type="submit" value="Excluir Produto"/>
			</form>
			<hr>
			<form method="post" action="controla.php">
				<input type="hidden" name="operacao" value="mostrar"/>
				<input type="submit" value="Mostrar Produtos"/>
			</form>
			<hr>
			<form method="post" action="controla.php">
				<input type="hidden" name="operacao" value="mostrarAlterar"/>
				<input type="submit" value="Alterar Produtos"/>
			</form>
			<hr>
			
			
		</div>

	</body>
</html>
