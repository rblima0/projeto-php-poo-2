<?php 
require_once("cabecalho.php");
require_once("logica-usuario.php");

verificaUsuario();

$categoria = new Categoria();
$categoria->setId($_POST['categoria_id']);

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$isbn = $_POST['isbn'];
$tipoProduto = $_POST["tipoProduto"];

if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

if($tipoProduto == "Livro"){
	$produto = new Livro($nome, $preco, $descricao, $usado, $categoria);
	$produto->setIsbn($isbn);
} else {
	$produto = new Produto($nome, $preco, $descricao, $usado, $categoria);
}

$produtoDao = new ProdutoDao($conexao);

if($produtoDao->insereProduto($produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPreco() ?> foi adicionado.</p>
	<p><a href="produto-lista.php">Ir para listagem</a></p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi adicionado: <?= $msg?></p>
	<p><a href="produto-lista.php">Ir para listagem</a></p>
<?php
}
?>

<?php include("rodape.php"); ?>