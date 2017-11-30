<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller extends Kohana_Controller {

	public function before()
	{
   		//parent::__construct($request,$response);
		
        $this->session = Session::instance();
        

        // Define o controller e action
        define('CONTROLLER',$this->request->controller());
        define('ACTION',$this->request->action());

        // Pega o usuario logado
        $this->user = Auth::instance()->get_user();


        if ($this->user == null) {

            //Verifica se é requerido autenticação para acessar
            $permissao = Permissao::Factory('Sistema')
                                    ->controller(CONTROLLER)
                                    ->action(ACTION)
                                    ->verify();

            // Opá, precisa de login para acessar
            if ($permissao->required()) {

                $this->session->set('msg.text', 'É necessário efetuar login para visualizar esta página');
                $this->redirect('Acesso');
            }
        }
        else {


            $this->session->set('nome',$this->user->nome);
            $this->session->set('usuario',$this->user->usuario);

            // $permissao = Permissao::Factory('Sistema',$this->user->usuario)
            //                         ->controller(CONTROLLER)
            //                         ->action(ACTION)
            //                         ->check();
            // $this->redirect('');

            if (false) {

                $this->session->set('msg.title', 'Acesso negado');
                $this->session->set('msg.text', 'Você não tem permissão para acessar esta página.');
                $this->redirect(Request::initial()->referrer());
            }
        }
    }


}