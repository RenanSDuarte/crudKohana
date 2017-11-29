<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Crud - São Camilo ES</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/midias/vendor/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="/midias/vendor/bootstrap-sca/css/bootstrap-sca.css">
	<?php Jalert::css(); ?>

    <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.6.3/font-awesome.min.css" integrity="sha384-Wrgq82RsEean5tP3NK3zWAemiNEXofJsTwTyHmNb/iL3dP/sZJ4+7sOld1uqYJtE" crossorigin="anonymous">

	<script src="/midias/javascript/geral/jquery-3.1.0.min.js"></script>
</head>
<body>
	<?php Jalert::init(); ?>
	<!-- @ Menu lateral direita -->
	<div class="sca-menuwrapper">
		<button class="sca-menuwrapper-close"></button>

		<!-- Inicio menu -->
		<ul class="sca-menu">
			<li><?=HTML::Anchor('Welcome/cadastrar','Cadastrar')?></li>
			<li><?=HTML::Anchor('','Visualizar')?></li>
		</ul>
	</div>

	<!-- @ Menu -->
	<div id="header">
		<header>
            <div class="container">
                <button type="button" class="btn-sca-wrapper">
                    <span class="fa fa-bars"></span>
                </button>
                <h1 id="title-system">CRUD</h1>
            </div>
            <div style="clear:both;"></div>
        </header>

		<section class="subtitle">
			<div class="container">
                <ol class="breadcrumb breadcrumb-sca">
                    <li>
					<?=HTML::anchor('', '<span class="glyphicon glyphicon-home"></span>')?>
                   </li>
                    <li class='active'><?=$titulo?></li>
                </ol>

				<!-- Menu actions -->
				<aside class="actions">
					<a href="#" id="btn-action"><span class="fa fa-ellipsis-v fa-2x"></span></a>

					<nav class="menu-action">
						<ul>
							<li><a href="#"><span class="hidden-xs fa fa-file-excel-o"></span> Exportar excel</a></li>
							<li><a href="#"><span class="hidden-xs fa fa-print"></span> Imprimir</a></li>
							<li><?= HTML::anchor('acesso/logout', '<span class="hidden-xs fa fa-sign-out"></span> Sair') ?></li>
						</ul>
					</nav>
				</aside>

			</div>
		</section>
	</div>

	<!-- @ Container principal -->
	<div id="main-container">

		<!-- container-fluid para relatórios muito grandes -->
		<?=$conteudo?>
	</div>

	<!-- @ Botão subir para topo -->
	<button type="button" id="btn-top" title="Clique para subir ao topo">
        <span class="fa fa-chevron-up"></span>
    </button>


    <script src="/midias/vendor/bootstrap-sca/js/menu.js"></script>
    <script src="/midias/vendor/bootstrap-sca/js/layout.js"></script>
    <script src="/midias/javascript/geral/jquery.mask/jquery.mask-1.14.0.min.js"></script>
    <?php Jalert::js(); ?>
</body>
</html>