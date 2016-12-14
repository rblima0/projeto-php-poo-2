<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostra-alerta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Minha Loja</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/estilos.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
</head>
<body>

	<header>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-rb">
						<span class="sr-only">Visualizar / Ocultar Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href= "index.php" class="navbar-brand">PROJETO</a>
				</div>

				<div class="collapse navbar-collapse" id="navegacion-rb">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="produto-formulario.php">Adicionar Produtos</a></li>
					    <li><a href="produto-lista.php">Listar Produtos</a></li>
					    <li><a href="contato.php">Contato</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<div class="container">
		<div class="principal">
			<?php mostraAlerta("success"); ?>
			<?php mostraAlerta("danger"); ?>