<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">
	<div class="form-card">
		
	
	<?= Form::open('Welcome/salvar') ?>
	

    <h1>Cadastrar</h1>

	<div class="form-group">
    	<label for="nome">Nome</label>
        <!-- Se nao tiver nada no imput ele ira coloca "" -->
    	<?= Form::input('nome',(isset($user->nome)) ? $user->nome : "",array('id'=>'nome', 'placeholder'=>'Nome Completo','tabindex'=> '1','required', 'class'=>'form-control'))?>
    </div>

    <div class="form-group">
    	<label for="idade">Idade</label>
        <!-- Se nao tiver nada no imput ele ira coloca "" -->
    	<?= Form::input('idade',(isset($user->idade)) ? $user->idade : "",array('id'=>'idade','type'=> 'number','tabindex'=> '2', 'placeholder'=>'Idade', 'class'=>'form-control'))?>
    </div>

	<div class="form-group">
    	<label for="descricao">Descrição</label>
        <!-- Se nao tiver nada no imput ele ira coloca "" -->
    	<?= Form::input('descricao',(isset($user->descricao)) ? $user->descricao : "",array('id'=>'descricao','tabindex'=> '3', 'placeholder'=>'Descrição', 'class'=>'form-control'))?>
    </div>

    <div>
        <input id="cadastrar" type="submit" class="btn btn-primary" value="Cadastrar" tabindex="4" />
        <input type="reset" class="btn btn-primary" value="Limpar" tabindex="5" />
    </div>



	<?= Form::close() ?>
	</div>
</div>