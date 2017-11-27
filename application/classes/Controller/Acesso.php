<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Acesso extends Controller {

    public function action_index() {
        $view = Login::factory('Login - Gestão de CRUD', 'Gestão de CRUD');
        $view->titulo = '';
        $view->conteudo = '';
        $this->response->body($view);
    }

    public function action_login()
    {
        if (HTTP_Request::POST == $this->request->method()) {
            
            // Parametros recebidos do form
            $usuario = $this->request->post('usuario');
            $senha   = $this->request->post('senha');
            $lembrar = $this->request->post('lembrar');

            $user = Auth::instance()->login($usuario, $senha, $lembrar);

            // Se não existir erro é sinal que autenticou corretamente
            if ($user) {

                $this->redirect('');

                // $permissao = Permissao::factory('Nome_do_Sistema',$usuario);

                // if ($permissao->loaded()) {

                //     $this->redirect('admin');
                // }
                // else {

                //     $this->session->set('msg.text', 'Usuário sem acesso.');
                //     $this->redirect('');
                // }
            }
            else {

                $this->redirect('Acesso');
                $this->session->set('msg.text', 'Usuário ou senha incorretos');
            }
        }
        else {
            // Se não passar via post retorna pra tela de login
            //$this->redirect('acesso');
        }
    }

    public function action_logout()
    {

        // Desloga de todos os sistemas!!!
        Auth::instance()->logout();
        $this->redirect('Acesso');
    }
}