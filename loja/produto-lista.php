<?php
require_once("cabecalho.php");
?>

<table class="table table-striped table-bordered">
	<?php
	$produtoDao = new ProdutoDao($conexao);
	$produtos = $produtoDao->listaProdutos();
	foreach($produtos as $produto) :
	?>
		<tr>
			<td><?= $produto->getNome() ?></td>
			<td><?= $produto->getPreco() ?></td>
			<!--<td><?= $produto->calculaImposto() ?></td>-->
			<td><?= substr($produto->getDescricao(), 0, 40) ?></td>
			<td><?= $produto->getCategoria()->getNome() ?></td>
			<td><?php if($produto->temIsbn()){
				echo "ISBN: " . $produto->getIsbn();
				}?>
			</td>
			<td><?php if($produto->temWaterMark()){
				echo "Marca: " . $produto->getWaterMark();
				}?>
			</td>
			<td><?php if($produto->temTaxaImpressao()){
				echo "Taxa: " . $produto->getTaxaImpressao();
				}?>
			</td>
			<td><a class="btn btn-sm btn-primary" href="produto-altera-formulario.php?id=<?=$produto->getId()?>">ALTERAR</a></td>
			<td>
				<form action="remove-produto.php" method="post">
					<input type="hidden" name="id" value="<?= $produto->getId() ?>">
					<button class="btn btn-sm btn-danger">REMOVER</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>