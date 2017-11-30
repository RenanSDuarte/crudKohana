<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">

    <div class="form-card">
    <h1>Visualizador de Dados.</h1>
    </br>
    <div >
                <?= HTML::Anchor('Welcome/cadastrar/', '<button type="button" class="btn btn-primary" style="margin-bottom: 15px;" >Novo</button>'); ?>
            </div>

    <table class="table table-bordered table-hover" id="tabelaDados">
    	<thead>
    		<tr>
    			<th style="text-align:center;">Nome</th>
    			<th style="text-align:center;">Idade</th>
    			<th style="text-align:center;">Descrição</th>
    			<th style="text-align:center;">Editar</th>
    			<th style="text-align:center;">Deletar</th>
    		</tr>
    	</thead>
    	<tbody>
            <!-- /Listo no foreach todos os usuarios coloando no $value e mostrando em uma tabela -->
    		<?php foreach ($user as $key =>  $value) { ?>
    			<tr>
    				<td class = "col-sm-4" align="center"><?= $value->nome?></td>
    				<td class = "col-sm-2" align="center"><?= $value->idade?></td>
    				<td class = "col-sm-4" align="center"><?= $value->descricao?></td>
					<td class = "col-sm-1" align="center"><?=HTML::Anchor('Welcome/cadastrar/'.$value->id,'<span class="glyphicon glyphicon-pencil" style="color: #2e3033;"></span>')?></td>
    				<td class = "col-sm-1" align="center"><?=HTML::Anchor('Welcome/deletar/'.$value->id,'<span class="glyphicon glyphicon-trash " style="color: #2e3033;"></span>')?></td>
    			</tr>
    		<?php } ?>
    	</tbody> 		
	</table>
    </div>

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>


<script>
 $(document).ready(function(){
    $('#tabelaDados').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese.json"
        }
      }  );
});
</script>
</div>