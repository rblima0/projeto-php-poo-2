<?php
class Produto {
    
    private $id;
    private $nome;
    private $preco;
    private $descricao;
    private $usado;
    private $categoria;

    function __construct($nome, $preco, $descricao, $usado, Categoria $categoria){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->descricao = $descricao;
        $this->usado = $usado;
        $this->categoria = $categoria;
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

    public function getDescricao(){
    	return $this->descricao;
    }

    public function getpreco(){
    	return $this->preco;
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

    public function getTipoProduto(){
        return $this->tipoProduto;
    }
    public function setTipoProduto($tipoProduto){
        $this->tipoProduto = $tipoProduto;
    }

    public function precoComDesconto($valor = 0.1) {
        if($valor <= 0.5 && $valor > 0) {
            return $this->preco - ($this->preco * $valor);
        } 
        return $this->preco;        
    }

    function calculaImposto() {
        return $this->preco * 0.195;
    }

    function temIsbn(){
        return $this instanceof Livro;
    }
    function temWaterMark(){
        return $this instanceof Ebook;
    }
    function temTaxaImpressao(){
        return $this instanceof LivroFisico;
    }

    public function atualizaBaseadoEm($params){
        if($this->temIsbn()){
            $this->setIsbn($params['isbn']);
        }
        if($this->temWaterMark()){
            $this->setWaterMark($params['waterMark']);
        }
        if($this->temTaxaImpressao()){
            $this->setTaxaImpressao($params['taxaImpressao']);
        }
    }
    
    function __toString(){
        return "Produto: ".$this->nome." - Valor: ".$this->preco;
    }

}