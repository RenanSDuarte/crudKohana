<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">
    <h1>Visualizador de Dados.</h1>

    <table class="table table-bordered">
    	<thead>
    		<tr>
    			<th>Nome</th>
    			<th>Idade</th>
    			<th>Descrição</th>
    			<th>Editar</th>
    			<th>Deletar</th>
    		</tr>
    	</thead>
    	<tbody>
    		<?php foreach ($user as $key =>  $value) { ?>
    			<tr>
    				<td><?= $value->nome?></td>
    				<td><?= $value->idade?></td>
    				<td><?= $value->descricao?></td>
					<td><?=HTML::Anchor('Welcome/cadastrar/'.$value->id,'<span class="glyphicon glyphicon-pencil" style="color: #2e3033;"></span>')?></td>
    				<td><?=HTML::Anchor('Welcome/deletar/'.$value->id,'<span class="glyphicon glyphicon-remove-sign" style="color: #2e3033;"></span>')?></td>
    			</tr>
    		<?php } ?>
    	</tbody>
    	
  		
  		
	</table>
</div>