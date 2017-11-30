<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {


	
	// public function before()
	// {
	// 	// CASO DESEJE TRABALHO COM TEMPLATE, PODE SER UTILIZADO DESTA FORMA PARA ECONOMIZAR LINHAS
	// 	// MAS, CASO NESTE CONTROLLER AJA ALGUMA AÇÃO QUE NAO PRECISE DO TEMPLATE, COLOQUE ESTE CODIGO NA ACTION
	// 	//  $view = View::Factory('index');
	// 	//  $view->titulo = 'Titulo';
	// 	//

	// // 	// Instancia a view padrão (template)
	// // 	$this->view = View::Factory('index');
	// // 	// Cria um título para a página
	// // 	$this->view->titulo = 'Home';
	//  }

	public function action_index()
	{
		// coloco todos os usuarios em $users
		$users = ORM::factory('Crud')->find_all();
		
		// chamo a view index colocando em $view
		$view = View::factory('index');
		// O titulo do da view
		$view->titulo = 'CRUD';
		//chamando a view que ficara no conteudo
		$view->conteudo = View::factory('_listar');
		
		// na view do conteudo tem uma variavel(user) que recebe todos os usuarios que estão em users
		$view->conteudo->user = $users;
		$this->response->body($view);
	}

	public function action_cadastrar()
	{

		$view = View::factory('index');

		$view->titulo = 'Crud - Cadastrar';

		$view->conteudo = View::factory('_cadastrar');

		// Da um requesta em um parametro com o nome id
		$id = $this->request->param('id');

		// o $users recebe os usuarios com o parametro id
		$users = ORM::factory('Crud', $id);

		// se algum algum cadastro tiver aquele id ele ira para a view de editar e não cadastrar
		if ($users->loaded()) {
			$view->titulo = 'Crud - Editar';
			$view->conteudo = View::factory('_editar');
			$view->conteudo->user = $users;
		}

		$this->response->body($view);
	}

	public function action_salvar()
	{
		// busca no banco os usuarios para salvar, se o usuario já existir no if a baixo ele denuncia e volta para a view de listagem
		$users = ORM::factory('Crud')->where('nome', '=', $_POST['nome'])->find();



		if ($users->loaded()) {
			
			$this->session->set('msg.title','Novo Usuário');
			$this->session->set('msg.text','Usuário já existe.' );
			$this->redirect('');
		}

		//pega os valores
		$users->values($_POST);

		//salva os valores no banco
		$users->save();

		$this->session->set('msg.title','Novo Usuário');
		$this->session->set('msg.text','Usuario cadastrado com Sucesso.' );

		$this->redirect('');

	}


	public function action_update()
	{	
		//pega o id no banco
		$id = $_POST['id'];

		// Puxa no banco os usuarios com o id dado
		$users = ORM::factory('Crud', $id);

		//pega os valores colocar
		$users->values($_POST);

		//salva os novos dados
		$users->save();

		$this->session->set('msg.title','Editar');
		$this->session->set('msg.text','Usuário editado com Sucesso.' );

        $this->redirect('');

	}
	public function action_deletar()
	{
		//faz o requerimento de um parametro com o nome id
		$id = $this->request->param('id');

		//puxa os usuarios com o id do parametro
		$user = ORM::factory('Crud', $id);
		
		//deleta o usuario com o id dado
		$user->delete();

		$this->session->set('msg.title','Deletar');
		$this->session->set('msg.text','Usuário deletado com Sucesso.' );

		$this->redirect('');
	}
}