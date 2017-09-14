<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
		$dominio = "https://estudos.club/";
		$url = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		
		if ($url != $dominio){
			$caminho = str_replace ($dominio,'',$url);
			include "$caminho/title.php";
		}
		else{
			include "title.php";
		}		
	
	?>
	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/font-awesome.min.css">

</head>
<body>

	<div class="container page-wrap">

		<!--- Menu principal -->
		<div class="cabecalho">
			<div class="row">
				<div class="col-xs-12 col-sm-3 text-center">
					<a href="<?php echo $dominio; ?>"><img src="/img/logo-vertical.jpg" class="logo" /></a>
				</div>

				<div class="col-xs-12 col-sm-9">
					<h1>V Semana Nacional de Ciência e Tecnologia</h1>
					<h2>A Matemática está em tudo!</h2>
					<h3>Feira Gastronômica – VI Feira de Empreendedorismo – II Mostra Tecnológica</h3>

					<div class="cabecalho-info">
						<div><i class="fa fa-calendar"></i> 25 a 28 de outubro de 2017</div>
						<div><i class="fa fa-map-marker"></i> Local: Escola Estadual Dona Bilu Figueiredo (E. E. D. B. F.)</div>
					</div>
				</div>
			</div>
		</div>