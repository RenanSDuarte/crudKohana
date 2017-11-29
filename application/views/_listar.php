<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">
        
    <div class="form-card">
    <h1>Visualizador de Dados.</h1>

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
            "lengthMenu": "Mostrar _MENU_ registros por páginas.",
            "zeroRecords": "Nenhum registro encontrado.",
            "info": "Mostrar _PAGE_ de _PAGES_ páginas.",
            "infoEmpty": "Nenhum registro disponível.",
            "infoFiltered": "(filtrado de _MAX_ registros.)",
            "paginate": {"previous":"Anterior", "next": "Próximo"}
        }
      }  );
});
</script>
</div>