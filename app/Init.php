<?php

namespace app;
use SON\Init\Bootstrap;


/**
 *  Classe de inicialização
 *  Guarda informações das rotas dos usuários.
 */
class Init extends Bootstrap {
    protected function initRoutes() {
        // quando o usuário entrar no home, o controller index e a action index serão chamados //
        $ar['home'] = array('route' => '/', 'controller' => 'index', 'action' => 'index');
        $ar['empresa'] = array('route' => '/empresa', 'controller' => 'index', 'action' => 'empresa');

        $this->setRoutes($ar);
    }
}
