<div class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse navbar-menubuilder">
				<ul class="nav navbar-nav">
					<li class="<?php if ($caminho == ""){echo 'active';}else{echo '';}?>">
						<a href="<?php echo $dominio;?>">Home</a>
					</li>
					<li class="<?php if ($caminho == "apresentacao/"){echo 'active';}else{echo '';}?>">
						<a href="<?php echo $dominio;?>apresentacao">Apresenta&ccedil;&atilde;o</a>
					</li>
					<li class="<?php if ($caminho == "programacao/"){echo 'active';}else{echo '';}?>">
						<a href="<?php echo $dominio;?>programacao">Programa&ccedil;&atilde;o</a>
					</li>
					<li class="<?php if ($caminho == "inscricao"){echo 'active';}else{echo '';}?>">
						<a href="#">Inscrição</a>
					</li>
					<li class="<?php if ($caminho == "submissao-de-trabalhos"){echo 'active';}else{echo '';}?>">
						<a href="#">Submissão de Trabalhos</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div>

			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-9 pull-right">
				
				<!--- Conteúdo da página -->
					<div class="conteudo-pagina text-justify">