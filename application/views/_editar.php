<?php defined('SYSPATH') or die('No direct script access.'); ?>
<div class="container">
    <div class="form-card">
        
    
    <?= Form::open('Welcome/update') ?>
    <?= Form::hidden('id', $user->id) ?>
    <h1>Editar</h1>
	<div class="form-group">
    	<label for="nome">Nome</label>
    	<?= Form::input('nome',$user->nome,array('id'=>'nome', 'placeholder'=>'Nome Completo','required', 'class'=>'form-control'))?>
    </div>

    <div class="form-group">
    	<label for="idade">Idade</label>
    	<?= Form::input('idade',$user->idade,array('id'=>'idade','type'=> 'number', 'placeholder'=>'Idade', 'class'=>'form-control'))?>
    </div>

	<div class="form-group">
        <label for="descricao">Descrição</label>
    	<?= Form::input('descricao',$user->descricao,array('id'=>'idade', 'placeholder'=>'Descrição', 'class'=>'form-control'))?>
    </div>

    <button type="submit" class="btn btn-primary">Alterar</button>

    <?=Form::close()?>
    </div>

</div>