<?php
	include 'ConexaoBD.class.php';
	class Produto{
			public $descricao;
			public $preco;
			
			function inserir(){
				$bd = new ConexaoBD;
				$sql = "INSERT INTO produto(descricao,preco) VALUES ('$this->descricao','$this->preco')";
				
				$bd->Conectar();
				$bd->query($sql);
				$bd->fechar();
			}
			
			function excluir($id){
				$bd = new ConexaoBD;
				$sql = "DELETE FROM produto WHERE id='$id'";
				
				$bd->Conectar();
				$bd->query($sql);
				$bd->fechar();
			}
			
			function mostrar(){
				$bd = new ConexaoBD;
				$bd->Conectar();
				
				return $bd->query("SELECT id, descricao, preco FROM produto");
		
				$bd->fechar();
			}
			
			function mostrarProdutoAlterar($id){
				$bd = new ConexaoBD;
				$bd->Conectar();
				
				return $bd->query("SELECT id, descricao, preco FROM produto where id='$id'");
		
				$bd->fechar();
			}
			
			function atualizarProduto($id,$descricao,$preco){
				$bd = new ConexaoBD;
				$sql = "UPDATE produto SET descricao='$descricao',preco='$preco' WHERE id='$id'";
				
				$bd->Conectar();
				$bd->query($sql);
				$bd->fechar();
			}
		
	}
?>