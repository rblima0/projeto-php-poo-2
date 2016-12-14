<?php
class Produto {
    
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $usado;
    private $categoria;
    
    public function precoComDesconto($valor = 0.1) {
    	if($valor <= 0.5 && $valor > 0) {
    		return $this->preco - ($this->preco * $valor);
    	} 
    	return $this->preco;        
    }

    public function getId(){
    	return $this->id;
    }
    public function setId($id){
    	$this->id = $id;
    }
    
    public function getNome(){
    	return $this->nome;
    }
    public function setNome($nome){
    	$this->nome = $nome;
    }

    public function getDescricao(){
    	return $this->descricao;
    }
    public function setDescricao($descricao){
    	$this->descricao = $descricao;
    }

    public function getpreco(){
    	return $this->preco;
    }
    public function setPreco($preco){
    	$this->preco = $preco;
    }

    public function getUsado(){
    	return $this->usado;
    }
    public function setUsado($usado){
    	$this->usado = $usado;
    }

    public function getCategoria(){
    	return $this->categoria;
    }
    public function setCategoria($categoria){
    	$this->categoria = $categoria;
    }

}