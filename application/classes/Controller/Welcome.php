<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {


	
	public function before()
	{
		// CASO DESEJE TRABALHO COM TEMPLATE, PODE SER UTILIZADO DESTA FORMA PARA ECONOMIZAR LINHAS
		// MAS, CASO NESTE CONTROLLER AJA ALGUMA AÇÃO QUE NAO PRECISE DO TEMPLATE, COLOQUE ESTE CODIGO NA ACTION
		//  $view = View::Factory('index');
		//  $view->titulo = 'Titulo';
		//

	// 	// Instancia a view padrão (template)
	// 	$this->view = View::Factory('index');
	// 	// Cria um título para a página
	// 	$this->view->titulo = 'Home';
	 }

	public function action_index()
	{
		$users = ORM::factory('Crud')->find_all();
		

		$view = View::factory('index');
		$view->titulo = 'CRUD';
		$view->conteudo = View::factory('_listar');
		
		$view->conteudo->user = $users;
		$this->response->body($view);
	}

	public function action_cadastrar()
	{

		$view = View::factory('index');

		$view->titulo = 'Crud - Cadastrar';

		$view->conteudo = View::factory('_cadastrar');
		$id = $this->request->param('id');
		$users = ORM::factory('Crud', $id);
		if ($users->loaded()) {
			$view->conteudo = View::factory('_editar');
			$view->conteudo->user = $users;
		}	

		$this->response->body($view);
	}

	public function action_salvar()
	{
		$users = ORM::factory('Crud');

		$users->values($_POST);

		$users->save();

		$this->redirect('');

	}


	public function action_update()
	{	
		$id = $_POST['id'];

		$users = ORM::factory('Crud', $id);

		$users->values($_POST);

		$users->save();

        $this->redirect('');

	}
	public function action_deletar()
	{
		$id = $this->request->param('id');
		$user = ORM::factory('Crud', $id);
		
		$user->delete();

		$this->redirect('');
	}
}