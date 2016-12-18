<?php 
class ProdutoFactory {
	
	private $classes = array("Ebook", "LivroFisico");

	function criaPor($tipoProduto, $params){
		
		$nome = $params['nome'];
		$preco = $params['preco'];
		$descricao = $params['descricao'];
		$usado = $params['usado'];
		$categoria = new Categoria();


		if(in_array($tipoProduto, $this->classes)){
			return new $tipoProduto($nome, $preco, $descricao, $usado, $categoria);
		} else {
			return new LivroFisico($nome, $preco, $descricao, $usado, $categoria);
		}
	}

}


