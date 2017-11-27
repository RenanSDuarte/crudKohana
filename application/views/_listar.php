<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">
    <div class="form-card">

                <input id="filtro-nome" placeholder="Pesquisar" type="text" class="form-control"/>
    </div>
    <div class="form-card">
    <h1>Visualizador de Dados.</h1>

    <table class="table table-bordered">
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


<script>
    $(function(){
    $("#tabela input").keyup(function(){        
        var index = $(this).parent().index();
        var nth = "#tabela td:nth-child("+(index+1).toString()+")";
        var valor = $(this).val().toUpperCase();
        $("#tabela tbody tr").show();
        $(nth).each(function(){
            if($(this).text().toUpperCase().indexOf(valor) < 0){
                $(this).parent().hide();
            }
        });
    });
 
    $("#tabela input").blur(function(){
        $(this).val("");
    }); 
});


Read more: http://www.linhadecodigo.com.br/artigo/3511/criando-um-filtro-automatico-nas-colunas-de-uma-tabela-html.aspx#ixzz4zeqOh9Rd
</script>
</div>