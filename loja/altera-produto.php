<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("class/Produto.php");
require_once("class/Categoria.php");

$categoria = new Categoria();
$categoria->setId($_POST['categoria_id']);

$produto = new Produto();
$produto->setId($_POST['id']);
$produto->setNome($_POST['nome']);
$produto->setPreco($_POST['preco']);
$produto->setDescricao($_POST['descricao']);
$produto->setCategoria($categoria);

if(array_key_exists('usado', $_POST)) {
	$produto->setUsado("true");
} else {
	$produto->setUsado("false");
}

if(alteraProduto($conexao, $produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPreco() ?> foi alterado.</p>
	<p><a href="produto-lista.php">Ir para listagem</a></p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi alterado: <?= $msg?></p>
	<p><a href="produto-lista.php">Ir para listagem</a></p>
<?php
}
?>

<?php include("rodape.php"); ?>